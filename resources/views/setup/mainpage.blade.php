@extends('setup.layout')

@section('title', 'Main Page Setup')

@section('body')

    <form method="POST" action="/setup/carousel" enctype="multipart/form-data" id="formdata">
      <input type="hidden" name="oper" value="add">
      <input type="hidden" name="id">
      @csrf
      
	  <div class="form-group">
	    <label for="exampleInputEmail1">Image Path</label>
	    <div class="input-group mb-3">
		  <div class="input-group-prepend">
		    <span class="input-group-text">Upload</span>
		  </div>
		  <div class="custom-file">
		    <input type="file" class="custom-file-input" id="image_file" accept="image/*" name="image_file" required>
		    <label class="custom-file-label" for="image_file">Choose file</label>
		  </div>
		</div>
	  </div>

	  <div class="form-group">
	    <label for="carousel_text">Image Text</label>
	    <input type="text" class="form-control" id="carousel_text" name="carousel_text" placeholder="Image Text">
	  </div>

	  <div class="form-group">
	    <label for="lineno">Line Number</label>
	    <input type="number" value="1" class="form-control" id="lineno" name="lineno" placeholder="Lineno" required>
	  </div>

	  <div class="form-group form-check">
	    <input type="checkbox" class="form-check-input" id="active" name="active" checked>
	    <label class="form-check-label" for="active">Active</label>
	  </div>

	  <div class="float-right">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="add_save">Save changes</button>
  	  </div>

	</form>

@endsection


@section('css')
@endsection

@section('js')
	<script src="{{ asset('js/utility.js') }}"></script>
	<script src="{{ asset('js/mainpage.js') }}"></script>
@endsection