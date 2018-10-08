
var table;
$(document).ready(function() {

    table = $('#datatables').DataTable({
    	select: 'single', 
        order: [[ 0, 'desc' ]],
        columnDefs: [
        	{ name: 'id', targets: 0, width: "10%"},
        	{ name: 'lineno', targets: 1, width: "10%"},
		    { name: 'carousel_path', targets: 2,
		      render: function(data, type, row, meta) {
		        return '<img src="'+data+'">'
		      }
		    },
        	{ name: 'carousel_text', targets: 3, width: "40%"},
        	{ name: 'active', targets: 4, width: "10%"},
        	{ name: 'action', targets: 5, width: "10%", "data": null,
		      render: function(data, type, row, meta) {
		        return `
		        	<div class="btn-group">
	        			<button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal" onclick="edit_form('`+row[0]+`','`+meta.row+`')">Edit</button>
	        			<button type="button" class="btn btn-danger btn-sm" onclick="delete_form('`+row[0]+`')">Delete</button>
	        		</div>
		        `;
		      } 
	        		
        	},
		]

    }).on('select', function ( e, dt, type, indexes ) {
	    // if ( type === 'row' ) {
	    //     var data = table.row( indexes ).data();
	    //     $("#form_delete input[name='id']").val(data[0]);
	    // }
	});

    $("#datatables_length").append(`
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal" onclick="add_form()">Add</button>
    `);

});

function add_form(){
	emptyFormdata('#formdata');
    $("#formdata input[name='oper']").val('add');
    $("#image_file").attr('required',true);
}

function edit_form(id,index){
	emptyFormdata('#formdata');
	populateFormdata('#formdata',table.rows(index).data().toArray()[0]);
	$('#active').prop('checked',parseInt(rowdata[4]));
    $("#formdata input[name='id']").val(id);
    $("#formdata input[name='oper']").val('edit');
    $("#image_file").prop('required',false);
}

function delete_form(id){
	var r = confirm("Are you sure you want to delete this record");
    if (r == true){ 
    	$("#formdata input[name='id']").val(id);
    	$("#formdata input[name='oper']").val('del');
    	$("#formdata").submit();
    }
}

function populateFormdata(form,rowdata){
	$('#image_file').next('.custom-file-label').html(rowdata[2]);
	$('#carousel_text').val(rowdata[3]);
	$('#lineno').val(rowdata[1]);
	$('#active').prop('checked',parseInt(rowdata[4]));
}