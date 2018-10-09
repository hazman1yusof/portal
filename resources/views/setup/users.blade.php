@extends('setup.layout')

@section('title', 'User Setup')

@section('body')
	

	<table id="datatables" class="ui celled table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->role}}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
	</table>

	<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalCenterTitle">Carousel Image</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>

	      <div class="modal-body">
	        <form method="POST" action="/setup/users" enctype="multipart/form-data" id="formdata">
	          <input type="hidden" name="oper" value="add">
	          <input type="hidden" name="id">
	          @csrf

			  <div class="form-group">
			    <label for="username">Username</label>
			    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
			  </div>

			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="text" class="form-control" id="password" name="password" placeholder="Password">
			  </div>

			  <div class="form-group">
			    <label for="role">Role</label>
			    <select class="form-control"  id="role" name="role">
			      <option class="Admin">Admin</option>
			      <option class="Student">Student</option>
			      <option class="Instructor">Instructor</option>
			    </select>
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
	<script src="{{ asset('js/utility.js') }}"></script>
	<script src="{{ asset('js/users.js') }}"></script>
	<script src="{{ asset('asset/DataTables/datatables.min.js') }}"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

@endsection