
var table;
$(document).ready(function() {

    table = $('#datatables').DataTable({
    	select: 'single', 
        order: [[ 0, 'desc' ]],
        columnDefs: [
        	{ name: 'id', targets: 0, width: "5%"},
        	{ name: 'activity_name', targets: 1, width: "5%"},
		    { name: 'activity_date', targets: 2 , width: "5%"},
		    { name: 'activity_time', targets: 3 , width: "5%"},
		    { name: 'activity_venue', targets: 4 , width: "5%"},
		    { name: 'activity_image', targets: 5,
		      render: function(data, type, row, meta) {
		        return '<img src="'+data+'">'
		      }
		    },
        	{ name: 'carousel_text', targets: 6, width: "60%"},
        	{ name: 'action', targets: 7, width: "10%", "data": null,
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
    $("input#activity_image").prop('required',true);
}

function edit_form(id,index){
	emptyFormdata('#formdata');
	populateFormdata('#formdata',table.rows(index).data().toArray()[0]);
    $("#formdata input[name='id']").val(id);
    $("#formdata input[name='oper']").val('edit');
    $("input#activity_image").prop('required',false);
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
	$('#activity_name').val(rowdata[1]);
	$('#activity_date').val(rowdata[2]);
	$('#activity_time').val(rowdata[3]);
	$('#activity_venue').val(rowdata[4]);
	$('#activity_image').next('.custom-file-label').html(rowdata[5]);
	$('#activity_desc').val(rowdata[6]);
}