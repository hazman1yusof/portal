@extends('setup.layout')

@section('title', 'Info Setup')

@section('body')
	

	<table id="datatables" class="ui celled table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th>Content</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($infos as $info)
            <tr>
                <td>{{$info->id}}</td>
                <td>{{$info->info_name}}</td>
                <td>{{$info->info_date}}</td>
                <td>{{$info->info_content}}</td>
                <td>{{env('APP_URL') .'thumbnail/'. $info->info_image}}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
	</table>

	<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalCenterTitle">Activity Setup</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>

	      <div class="modal-body">
	        <form method="POST" action="/setup/info" enctype="multipart/form-data" id="formdata">
	          <input type="hidden" name="oper" value="add">
	          <input type="hidden" name="id">
	          @csrf

			  <div class="form-group">
			    <label for="info_name">Name</label>
			    <input type="text" class="form-control" id="info_name" name="info_name" placeholder="Name" required>
			  </div>

			  <div class="form-group">
			    <label for="info_date">Date</label>
			    <input type="date" value="1" class="form-control" id="info_date" name="info_date" placeholder="Date" required>
			  </div>

			  <div class="form-group">
			    <label for="info_content">Content</label>
			    <textarea class="form-control" id="info_content" name="info_content" placeholder="Content" rows="4"></textarea>
			  </div>

			  <div class="form-group">
			    <label for="info_image">Image</label>
			    <div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text">Upload</span>
				  </div>
				  <div class="custom-file">
				    <input type="file" class="custom-file-input" id="info_image" accept="image/*" name="info_image" required>
				    <label class="custom-file-label" for="info_image">Choose file</label>
				  </div>
				</div>
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
	<script src="{{ asset('js/info.js') }}"></script>
	<script src="{{ asset('asset/DataTables/datatables.min.js') }}"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

@endsection