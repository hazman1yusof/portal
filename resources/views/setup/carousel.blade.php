@extends('setup.layout')

@section('body')
	

	<table id="datatables" class="ui celled table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Lineno</th>
                <th>Image Path</th>
                <th>Image Text</th>
                <th>Active</th>
            </tr>
        </thead>
        <tbody>
            @foreach($caras as $cara)
            <tr>
                <td>{{$cara->id}}</td>
                <td>{{$cara->lineno}}</td>
                <td>{{$cara->carousel_image}}</td>
                <td>{{$cara->carousel_text}}</td>
                <td>{{$cara->active}}</td>
            </tr>
            @endforeach
        </tbody>
	</table>

	<div class="modal fade" id="modal_add" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalCenterTitle">Add New Carousel Image</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>

	      <div class="modal-body">
	        <form method="GET" action="/setup/carousel_save">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Image Path</label>
			    <div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text">Upload</span>
				  </div>
				  <div class="custom-file">
				    <input type="file" class="custom-file-input" id="image_path" >
				    <label class="custom-file-label" for="image_path">Choose file</label>
				  </div>
				</div>
			  </div>

			  <div class="form-group">
			    <label for="carousel_text">Image Text</label>
			    <input type="text" class="form-control" id="carousel_text" placeholder="Image Text">
			  </div>

			  <div class="form-group">
			    <label for="lineno">Line Number</label>
			    <input type="number" value="1" class="form-control" id="lineno" placeholder="Lineno">
			  </div>

			  <div class="form-group form-check">
			    <input type="checkbox" class="form-check-input" id="active">
			    <label class="form-check-label" for="active">Active</label>
			  </div>


		      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		      <button type="submit" class="btn btn-primary" id="add_save">Save changes</button>

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
	<script src="{{ asset('js/carousel.js') }}"></script>
	<script src="{{ asset('js/utility.js') }}"></script>
	<script src="{{ asset('asset/DataTables/datatables.min.js') }}"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

@endsection