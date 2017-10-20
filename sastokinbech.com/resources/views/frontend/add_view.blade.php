@extends('layouts.master')

@section('content')
	<div class="container" style="margin-left:25px;">
		<div class="row">
			<div class="col-sm-3 nopadding new-ads-content" style="margin-top:80px; margin-left:80px; margin-right: 30px;">
                    	@foreach($add_data as $key)
                        <div style="background-color:#fff;">
                        	<h2><?=$key->title?></h2>
                        	<div class="col-md-8">
                        		<img class="img-responsive" src="/upload/{{$key['category']}}/{{$key['subcategory']}}/{{$key['image']}}" style="height:250px;"/>
                        	</div>
                            @if(!empty( $key['image2']))
                            <div class="col-md-6">
                            	 <img class="img-responsive" src="/upload/image2/{{$key['category']}}/{{$key['subcategory']}}/{{$key['image2']}}" style="height:250px;"/>
                            </div>
                            @endif
                            @if(!empty($key['image3'] ) )
                            <div class="col-md-6">
                            	 <img class="img-responsive" src="/upload/image3/{{$key['category']}}/{{$key['subcategory']}}/{{$key['image3']}}" style="height:250px;"/>
                            </div>
                           @endif
                            

                            <div class="">
                            	<div class="title">
	                                <a href="#"><small><h4>Price: (Rs. <?=$key->price?>)</h4></small></a>
	                            </div>
	                            <div>
	                            	<h4>Status: <?=$key->status?></h4>
	                            </div>  
	                            <div>
	                            	<p><?=$key->description?></p>
	                            </div>
                            </div>    
                        </div>
                        @endforeach
   			 </div>
   			
			<div class="container" style="margin-top:90px;margin-left:15px;">
				 <h2 style="font-style: italic;">Add Owner details</h2>
					<div>
						<h3><i class="fa fa-user" aria-hidden="true"></i> Posted by: <?=$user_data[0]->name?></h3>
					</div>
					
					<div>
						<h4><i class="fa fa-envelope" aria-hidden="true"></i>  Email: <?=$user_data[0]->email?></h4>
					</div>
					<div>
						<h4><i class="fa fa-address-book-o" aria-hidden="true"></i> Address: <?=$user_data[0]->district?>,<?=$user_data[0]->city?></h4>
					</div>
					<div>
						<h4><i class="fa fa-phone" aria-hidden="true"></i> Contact NO. : <?=$user_data[0]->contact?></h4>
					</div>
					
					<div class="row">
				  		<div class="col-md-8">
							<div class="fb-comments" data-href="http://sastokinbech.abgroup" data-numposts="10" data-width="100%"></div>
						</div>
	  				</div>
			</div>
	  	</div>
	
	
	
	</div>
</div>	
		
	
	
@stop
