@extends('user_layouts.master')

@section('contents')
	<div class="container" style="margin-top: 60px;">
	<form action="/user/updateProfileImage" method="POST" enctype="multipart/form-data">
		@foreach($user_data as $key)
		<div class="input-group col-md-4">
		  <span class="input-group-addon" id="sizing-addon3">Profile Image</span>
		  <img src="">
		  <input type="file" class="form-control" name="image" value="<?=$key['image']?>" placeholder="image" aria-describedby="sizing-addon3">
		</div>
		<input class="form-control" type="hidden" id="user_id" name="user_id"  value="{{$key['user_id']}}" />
		<input class="form-control" type="hidden" id="email" name="email"  value="{{$key['email']}}" />
		<button type="submit" class="btn btn-primary">Update</button>
			{{ csrf_field() }}
		@endforeach
		</form>
		
	</div>
@stop