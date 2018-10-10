
var table;
$(document).ready(function() {

    

});

// function add_form(){
// 	emptyFormdata('#formdata');
//     $("#formdata input[name='oper']").val('add');
//     $("#image_file").attr('required',true);
// }

// function edit_form(id,index){
// 	emptyFormdata('#formdata');
// 	populateFormdata('#formdata',table.rows(index).data().toArray()[0]);
// 	$('#active').prop('checked',parseInt(rowdata[4]));
//     $("#formdata input[name='id']").val(id);
//     $("#formdata input[name='oper']").val('edit');
//     $("#image_file").prop('required',false);
// }

// function delete_form(id){
// 	var r = confirm("Are you sure you want to delete this record");
//     if (r == true){ 
//     	$("#formdata input[name='id']").val(id);
//     	$("#formdata input[name='oper']").val('del');
//     	$("#formdata").submit();
//     }
// }

// function populateFormdata(form,rowdata){
// 	$('#image_file').next('.custom-file-label').html(rowdata[2]);
// 	$('#carousel_text').val(rowdata[3]);
// 	$('#lineno').val(rowdata[1]);
// 	$('#active').prop('checked',parseInt(rowdata[4]));
// }