@extends('setup.layout')

@section('title', 'Activity Setup')

@section('body')
	

	<table id="datatables" class="ui celled table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Venue</th>
                <th>Image</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($activities as $activity)
            <tr>
                <td>{{$activity->id}}</td>
                <td>{{$activity->activity_name}}</td>
                <td>{{$activity->activity_date}}</td>
                <td>{{$activity->activity_time}}</td>
                <td>{{$activity->activity_venue}}</td>
                <td>{{env('APP_URL') .'thumbnail/'. $activity->activity_image}}</td>
                <td>{{$activity->activity_desc}}</td>
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
	        <form method="POST" action="/setup/activity" enctype="multipart/form-data" id="formdata">
	          <input type="hidden" name="oper" value="add">
	          <input type="hidden" name="id">
	          @csrf

			  <div class="form-group">
			    <label for="activity_name">Name</label>
			    <input type="text" class="form-control" id="activity_name" name="activity_name" placeholder="Name" required>
			  </div>

			  <div class="form-group">
			    <label for="activity_date">Date</label>
			    <input type="date" value="1" class="form-control" id="activity_date" name="activity_date" placeholder="Date" required>
			  </div>

			  <div class="form-group">
			    <label for="activity_time">Time</label>
			    <input type="time" value="1" class="form-control" id="activity_time" name="activity_time" placeholder="Time" required>
			  </div>

			  <div class="form-group">
			    <label for="activity_venue">Venue</label>
			    <input type="text" value="1" class="form-control" id="activity_venue" name="activity_venue" placeholder="Venue" required>
			  </div>

			  <div class="form-group">
			    <label for="activity_image">Image</label>
			    <div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text">Upload</span>
				  </div>
				  <div class="custom-file">
				    <input type="file" class="custom-file-input" id="activity_image" accept="image/*" name="activity_image" required>
				    <label class="custom-file-label" for="activity_image">Choose file</label>
				  </div>
				</div>
			  </div>

			  <div class="form-group">
			    <label for="activity_desc">Description</label>
			    <textarea class="form-control" id="activity_desc" name="activity_desc" placeholder="Description" rows="4"></textarea>
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
	<script src="{{ asset('js/activity.js') }}"></script>
	<script src="{{ asset('asset/DataTables/datatables.min.js') }}"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

@endsection