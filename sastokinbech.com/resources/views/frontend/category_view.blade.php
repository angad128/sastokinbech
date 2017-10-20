@extends('layouts.master')
@section('content')
	<div class="container">
        <center>
            <h1><?=$page_title?></h1>
        </center>
        
        <?php if(count($add_data)==TRUE){ ?>
        @foreach($add_data as $key)
                
                            
                <div class="col-sm-3 nopadding new-ads-content" style="margin-top:5px; margin-left:5px;">
                    <a href="/dashboard/getdeatails/<?=$key['id']?>">
                        <div style="background-color:#fff;">
                            <img class="img-responsive" src="/upload/<?=$key['category']?>/<?=$key['subcategory']?>/<?=$key['image']?>" style="height:250px;"/>
                            <div class="title">
                                        <a href="#"><?=$key['title']?><small>( RS. <?=$key['price']?>)</small></a>
                            </div>      
                     </div>
                    </a>
                 </div>            
        @endforeach 
        <?php }else{ ?>
           
            <center>
                <h2>No Records Found </h2>
            </center>
                
            
                
        <?php } ?>
    </div>
	
@stop