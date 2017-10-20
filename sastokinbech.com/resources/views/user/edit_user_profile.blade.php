@extends('user_layouts.master')

@section('contents')

	<h2>Update Your Profile</h2>
	@if(count($errors)>0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $error)
					<p>{{  $error }}</p>
				@endforeach
			</div>
		@endif
	 <?php foreach ($user_data as $key): ?>
		
    <form action="/user/updateProfile" method="POST" enctype="multipart/form-data">
		<div class="input-group col-md-4">
		  <span class="input-group-addon" id="sizing-addon1">Name</span>
		  <input type="text" name="name" class="form-control" value="<?=$key['name']?>" placeholder="<?=$key['name']?>" aria-describedby="sizing-addon1">
		</div>
		<br>

		<div class="input-group col-md-4 col-offset-2">
		  <span class="input-group-addon" id="sizing-addon2">Email</span>
		  <input type="text" class="form-control" name="email" value="<?=$key['email']?>" placeholder="<?=$key['email']?>" aria-describedby="sizing-addon2">
		</div>
		<br>
		
		<div class="input-group col-md-4">
		  <span class="input-group-addon" id="sizing-addon1">District</span>
		  <input type="text" class="form-control" name="district" value="<?=$key['district']?>" placeholder="<?=$key['district']?>" aria-describedby="sizing-addon1">
		</div>
		<br>
		<div class="input-group col-md-4">
		  <span class="input-group-addon"  id="sizing-addon2">City</span>
		  <input type="text" class="form-control" name="city" value="<?=$key['city']?>" placeholder="<?=$key['city']?>" aria-describedby="sizing-addon2">
		</div>
		<br>
		<div class="row">
				  <div class="col-md-2">
				    <div class="input-group">
				      Address 1: <input type="text" class="form-control" name="address1" value="<?=$key['address1']?>" placeholder="<?=$key['address1']?>">
				    </div><!-- /input-group -->
				  </div><!-- /.col-lg-6 -->
				  <div class="col-md-2">
				    <div class="input-group">
				      Address 2 :<input type="text" class="form-control" name="address2"  value="<?=$key['address2']?>" placeholder="<?=$key['address2']?>">
				    </div>
				  </div>
				</div>
		<br>
		<div class="input-group col-md-4">
		  <span class="input-group-addon" id="sizing-addon2">Contact No.</span>
		  <input type="text" class="form-control" name="contact" value="{{$key['contact']}}" placeholder="<?=$key['contact']?>" aria-describedby="sizing-addon2">
		</div>
		<br>

		<input class="form-control" type="hidden" id="user_id" name="user_id"  value="{{$key['user_id']}}">
			<button type="submit" class="btn btn-primary">Update</button>
			{{ csrf_field() }}
	</form>
	
	<?php endforeach ?>  

@endsection