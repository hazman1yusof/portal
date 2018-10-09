@extends('setup.layout')

@section('title', 'Social Media Setup')

@section('body')
	

	<table id="datatables" class="ui celled table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($socmeds as $socmed)
            <tr>
                <td>{{$socmed->id}}</td>
                <td>{{$socmed->socmed_name}}</td>
                <td>{{$socmed->socmed_desc}}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
	</table>

	<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalCenterTitle">Social Media Setup</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>

	      <div class="modal-body">
	        <form method="POST" action="/setup/socmed" enctype="multipart/form-data" id="formdata">
	          <input type="hidden" name="oper" value="add">
	          <input type="hidden" name="id">
	          @csrf

			  <div class="form-group">
			    <label for="socmed_name">Name</label>
			    <input type="text" class="form-control" id="socmed_name" name="socmed_name" placeholder="Name" required>
			  </div>

			  <div class="form-group">
			    <label for="socmed_desc">Content</label>
			    <textarea class="form-control" id="socmed_desc" name="socmed_desc" placeholder="Content" rows="5"></textarea>
			  </div>

			  <div class="float-right">
	            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	            <button type="submit" class="btn btn-primary" id="add_save">Save changes</button>
	  	  	  </div>
	  	  	  
			</form>
	      </div>
	    </div>
	  </div>
	</div>

@endsection


@section('css')
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endsection

@section('js')
	<script src="{{ asset('js/utility.js') }}"></script>
	<script src="{{ asset('js/socmed_setup.js') }}"></script>
	<script src="{{ asset('asset/DataTables/datatables.min.js') }}"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

@endsection