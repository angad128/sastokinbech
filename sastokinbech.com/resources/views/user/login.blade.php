@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row pull-center">
	<div class="col-md-4 col-md-offset-2">
		<h1>Login Here</h1>
			@if(count($errors)>0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $error)
					<p>{{  $error }}</p>
				@endforeach
			</div>
		@endif
		<form action="/user/postlogin" method="POST" enctype="multiparts/form-data">
			
			<div class="form-group">
				<label for="email">E-Mail</label>
				<input class="form-control" type="text" id="email" name="email">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" id="password" name="password">
			</div>
			
			<button type="submit" class="btn btn-primary">Login</button>

			<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
			
		</form>
	</div>
</div>
</div>


@stop
