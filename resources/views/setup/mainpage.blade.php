@extends('setup.layout')

@section('title', 'Main Page Setup')

@section('body')

    <form method="POST" action="/setup/mainpage" enctype="multipart/form-data" id="formdata">
      <input type="hidden" name="oper" value="{{$oper}}">
      <input type="hidden" name="id" value="1">
      @csrf
      
	  <div class='hr'>
	    <span class='hr-title px-3'>Page Logo</span>
	  </div>

	  <div class="form-group col-8 pl-0">
	    <label for="exampleInputEmail1">Logo 1</label>
	    <div class="input-group mb-3">
		  <div class="input-group-prepend">
		    <span class="input-group-text">Upload</span>
		  </div>
		  <div class="custom-file">
		    <input type="file" class="custom-file-input" id="logo1" accept="image/*" name="logo1">
		    <label class="custom-file-label" for="logo1">{{$mainpage->logo1}}</label>
		  </div>
		</div>
	    <input type="text" class="form-control" id="logo1_link" name="logo1_link" placeholder="Logo 1 Link" value="{{$mainpage->logo1_link}}">
	  </div>

	  <div class="form-group col-8 pl-0">
	    <label for="exampleInputEmail1">Logo 2</label>
	    <div class="input-group mb-3">
		  <div class="input-group-prepend">
		    <span class="input-group-text">Upload</span>
		  </div>
		  <div class="custom-file">
		    <input type="file" class="custom-file-input" id="logo2" accept="image/*" name="logo2">
		    <label class="custom-file-label" for="logo2">{{$mainpage->logo2}}</label>
		  </div>
		</div>
	    <input type="text" class="form-control" id="logo2_link" name="logo2_link" placeholder="Logo 2 Link" value="{{$mainpage->logo2_link}}">
	  </div>

	  <div class='hr'>
	    <span class='hr-title px-3'>Title</span>
	  </div>

	  <div class="form-group col-8 pl-0">
	    <label for="main_title">Main Title</label>
	    <input type="text" class="form-control" id="main_title" name="main_title" placeholder="Main Title" value="{{$mainpage->main_title}}">
	  </div>

	  <div class="form-group">
	  	<div class="row">
		  <div class="col">
		    <label for="activity_title">Activity Title</label>
		    <input type="text" class="form-control" id="activity_title" name="activity_title" placeholder="Activity Title" value="{{$mainpage->activity_title}}">
		  </div>
		  <div class="col">
		    <label for="info_title">Info Title</label>
		    <input type="text" class="form-control" id="info_title" name="info_title" placeholder="Info Title" value="{{$mainpage->info_title}}">
		  </div>
		  <div class="col">
		    <label for="social_media">Social Media</label>
		    <input type="text" class="form-control" id="social_media" name="social_media" placeholder="Info Title" value="{{$mainpage->social_media}}">
		  </div>
		</div>
	  </div>

	  <div class="form-group">
	  	<div class="row">
	  	  <div class="col">
		    <label for="about_title">Contact Title</label>
		    <input type="text" class="form-control" id="about_title" name="about_title" placeholder="About Title" value="{{$mainpage->about_title}}">
		  </div>
	  	  <div class="col">
		    <label for="contact_title">Contact Title</label>
		    <input type="text" class="form-control" id="contact_title" name="contact_title" placeholder="About Info" value="{{$mainpage->contact_title}}">
		  </div>
		</div>
	  </div>

	  <div class='hr'>
	    <span class='hr-title px-3'>Footer</span>
	  </div>

	  <div class="form-group col-8 pl-0">
	    <label for="links_title">Links Title</label>
	    <input type="text" class="form-control" id="links_title" name="links_title" placeholder="Links Title" value="{{$mainpage->links_title}}">
	  </div>

	  <div class="form-group">
	    <label for="links_list">Links List</label>
	    <textarea class="form-control" id="links_list" name="links_list" placeholder="Links List" rows=4 >{{$mainpage->links_list}}</textarea>
	  </div>

	  <hr>

	  <div class="form-group">
	    <label for="contact_address">Contact Address</label>
	    <textarea class="form-control" id="contact_address" name="contact_address" placeholder="Contact Address" rows=4>{{$mainpage->contact_address}}</textarea>
	  </div>

	  <div class="form-group">
	  	<div class="row">
		  <div class="col">
		    <label for="contact_tel">Contact Tel</label>
		    <input type="text" class="form-control" id="contact_tel" name="contact_tel" placeholder="Contact Tel" value="{{$mainpage->contact_tel}}">
		  </div>
		  <div class="col">
		    <label for="contact_fax">Contact Fax</label>
		    <input type="text" class="form-control" id="contact_fax" name="contact_fax" placeholder="Contact Fax" value="{{$mainpage->contact_fax}}">
		  </div>
		  <div class="col">
		    <label for="contact_whatsapp">Contact Whatsapp</label>
		    <input type="text" class="form-control" id="contact_whatsapp" name="contact_whatsapp" placeholder="Contact Whatsapp" value="{{$mainpage->contact_whatsapp}}">
		  </div>
		</div>
	  </div>

	  <hr>

	  <div class="form-group">
	    <label for="footer1">Footer 1</label>
	    <input type="text" class="form-control" id="footer1" name="footer1" placeholder="Footer 1" value="{{$mainpage->footer1}}">
	  </div>

	  <div class="form-group">
	    <label for="footer2">Footer 2</label>
	    <input type="text" class="form-control" id="footer2" name="footer2" placeholder="Footer 2" value="{{$mainpage->footer2}}">
	  </div>

	  <hr>

	  <div class="float-right mb-4">
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