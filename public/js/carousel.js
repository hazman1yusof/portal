$(document).ready(function() {

    var table = $('#datatables').DataTable({
    	select: 'single', 
        order: [[ 0, 'desc' ]]

    });

    $("#datatables_length").append(`
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_add">Add</button>
        <button type="button" class="btn btn-secondary btn-sm" id="dtb_edit">Edit</button>
        <button type="button" class="btn btn-danger btn-sm" id="dtb_del">Delete</button>
    `);

} );