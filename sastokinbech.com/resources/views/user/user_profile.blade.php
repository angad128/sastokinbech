
@extends('user_layouts.master')

@section('contents')

<div class="container" style="margin-top: 20px;">
	<div class="row">
	

		@foreach($user_data as $key )
			
			<div class="col-sm-4">
				<div class="pull-left" >
					<img src="/user_image/<?=$key['email']?>/<?=$key['image']?>" style="height:180px ; width: 240px;">
					<div>
					<a style="margin-top: 5px;" class="btn btn-default" href="{{ URL::to('/user/browseImage/'. $key->user_id ) }} ">Update Profile Image <a>
					</div>
				
				</div>
			</div>
 			<div class="col-sm-8">
 				<div class="col-8 col-md-auto">
     
				<div>
				<h3>Welcome {{ $key['name'] }}</h3>
				</div>
				
				<div>
					<h4><i class="fa fa-envelope" aria-hidden="true"></i>  Email: <?=$key['email']?></h4>
				</div>
				
				<div>
					<h4><i class="fa fa-address-book-o" aria-hidden="true"></i>  Address : <?=$key['district']?>, <?=$key['city']?></h4>
					
				</div>
				
				<div>
					<h4><i class="fa fa-phone" aria-hidden="true"></i>  Contact NO. : {{ $key['contact'] }}</h4>
					
				</div>
				<div>
					<h4>Member Since : {{ $key['created_at'] }}</h4>
				</div>
				
				<div>
				<a class="btn btn-primary" href="{{ URL::to('/user/' . $key->user_id . '/editProfile') }} "> Edit Profile <a>
				</div>
		
			</div>	 	
 			</div>

   		
	  
	    @endforeach
	
</div>
</div>


@stop
