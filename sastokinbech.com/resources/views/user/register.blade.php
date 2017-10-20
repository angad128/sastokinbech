@extends('layouts.master')

@section('content')
<div class="container">
	 <div class="row">
	<div class="col-md-4 col-md-offset-2">
		<h1>Signup New Users</h1>
			@if(count($errors)>0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $error)
					<p>{{  $error }}</p>
				@endforeach
			</div>
		@endif
		<form action="/user/postsignup" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name">Name</label>
				<input class="form-control" type="text" id="name" name="name" placeholder="Enter Your Name!">
			</div>
			<div class="form-group">
				<label class="control-label">Profile Picture :</label>
                <div class="controls">
                  <input type="file" name="image" class="span12 m-wrap">
                </div>
			</div>
			<div class="form-group">
				<label for="email">E-Mail</label>
				<input class="form-control" type="text" id="email" name="email" placeholder="Enter Your EMail">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" id="password" name="password" placeholder="Enter min 6 digit password!">
			</div>
			<div class="form-group">
				<p style="font-style: italic;">Enter your Adress below:</p>
				<div class="row">
				  <div class="col-md-6">
				    <div class="input-group">
				      District: <input type="text" class="form-control" name="district" placeholder="District">
				    </div><!-- /input-group -->
				  </div><!-- /.col-lg-6 -->
				  <div class="col-md-6">
				    <div class="input-group">
				      City: <input type="text" class="form-control" name="city" placeholder="City">
				    </div>
				  </div>
				</div>
				<div class="row">
				  <div class="col-md-6">
				    <div class="input-group">
				      Address 1: <input type="text" class="form-control" name="address1" placeholder="Address1">
				    </div><!-- /input-group -->
				  </div><!-- /.col-lg-6 -->
				  <div class="col-md-6">
				    <div class="input-group">
				      Address 2 :<input type="text" class="form-control" name="address2" placeholder="Address2">
				    </div>
				  </div>
				</div>
			</div>
			
			<div class="form-group">
				<label for="phone">Contact</label>
				<input class="form-control" type="text" id="phone" name="phone" placeholder="Enter contact number">
			</div>
			  
			<button type="submit" class="btn btn-primary">Sign Up</button>
			{{ csrf_field() }}
		</form>
	</div>
</div>
</div>

@stop
