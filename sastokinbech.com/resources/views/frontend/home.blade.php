@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">

                <div class="col-sm-9 nopadding">
                    <div class="col-sm-12 nopadding">
                        <!-- #region Jssor Slider Begin -->
                        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1255px;height:500px;overflow:hidden;visibility:hidden;">
                        <!-- Loading Screen -->
                        
                        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1255px;height:500px;overflow:hidden;">
                        @foreach($latest_add_data as $key)
                            <div>
                                <a href="/dashboard/getdeatails/<?=$key['id']?>">
                                    <img data-u="image" style="height:190px;width: 100%;" src="/upload/<?=$key['category']?>/<?=$key['subcategory']?>/<?=$key['image']?>"  />
                                <div style="position:absolute;top:30px;left:30px;width:480px;height:120px;z-index:0;font-size:50px;color:#ffffff;line-height:60px;color:black;"><?=$key['title']?></div>
                                <div style="position:absolute;top:300px;left:30px;width:480px;height:120px;z-index:0;font-size:30px;color:#ffffff;line-height:38px;color:black;"><?=$key['description']?></div>
                                </a>
                               
                            </div>
                        @endforeach
                        </div>
                        <!-- Bullet Navigator -->
                        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                            <!-- bullet navigator item prototype -->
                            <div data-u="prototype" style="width:16px;height:16px;"></div>
                        </div>
                        <!-- Arrow Navigator -->
                        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
                        <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
                        </div>
                        <script type="text/javascript">jssor_1_slider_init();</script>

                    </div>

                    <div class="col-sm-12 nopadding" style="padding-left: 8px !important;">
                        
                            <div class="col-sm-6 nopadding recent-ad">
                            <div class="recent-ad1">
                                <div class="pull-left">
                                    <div class="recent-ad-title">
                                        <a href="#"> Automobiles </a>
                                    </div>
                                    <div class="recent-ad-desc">
                                        <ul>
                                            <li><a href="#">Motorcycle</a></li>
                                            <li><a href="#">Cars</a></li>
                                            <li><a href="#">Parts & Accessories</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="recent-ad-img pull-right">
                                    <img class="img-responsive" src="temp/img/automobile.png"/>
                                </div>
                                
                            <div style="clear:both"></div>
                            
                            </div>
                        </div>
                        
                        <div class="col-sm-6 nopadding recent-ad" style="padding-right:0px !important">
                            <div class="recent-ad2">
                                <div class="pull-left">
                                    <div class="recent-ad-title">
                                        <a href="#">Computers</a>
                                    </div>
                                    <div class="recent-ad-desc">
                                        <ul>
                                            <li><a href="#">Laptops</a></li>
                                            <li><a href="#">Desktop PC</a></li>
                                            <li><a href="#">Network Equipments</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="recent-ad-img pull-right">
                                    <img class="img-responsive" src="temp/img/computers.png"/>
                                </div>
                                
                            <div style="clear:both"></div>
                            
                            </div>
                            </div>
                        </div>

                    </div>  
                                

                </div>

                <div class="row">
                    <div class="col-sm-12 nopadding slider-cate">
                                            <div class="slider-title"><span>Latest Add</span></div>
                    <div class="featured-news slick-slider">                         
                            @foreach($latest_add_data as $key)
                            <div class="col-sm-3 nopadding">
                                <a href="/dashboard/getdeatails/<?=$key['id']?>">
                                    <div class="page-body" style="height:250px; padding-left:5px; background-color:#fff;">        
                                       <img class="img-responsive" src="/upload/<?=$key['category']?>/<?=$key['subcategory']?>/<?=$key['image']?>" style="height:190px;">     
                                      <div style="text-align:center;">
                                            <div style="font-size:1.1em !important; color:#19CAAF"><?=$key['title']?></div>
                                            <div style="font-size:0.8em !important; color:#B2B2B2"><?=$key['price']?></div>
                                            <div style="font-size:0.8em !important; color:#B2B2B2"><?=$key['description']?></div>
                                        </div>
                                      </div>
                                    </a> 
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                 <div class="row">
            <div class="col-sm-12 nopadding slider-cate">
                <div class="slider-title"><span>All Adds</span></div>
                @foreach($all_data as $key)
                <div class="col-sm-3 nopadding">
                    <a href="/dashboard/getdeatails/<?=$key['id']?>">
                          <div class="page-body" style="height:250px; padding-left:5px; background-color:#fff;">                          
                          <img class="img-responsive" src="/upload/<?=$key['category']?>/<?=$key['subcategory']?>/<?=$key['image']?>" style="height:190px;">                         
                          <div style="text-align:center;">
                                <div style="font-size:1.1em !important; color:#19CAAF"><?=$key['title']?></div>
                                <div style="font-size:0.8em !important; color:#B2B2B2"><?=$key['price']?></div>
                                <div style="font-size:0.8em !important; color:#B2B2B2"><?=$key['description']?></div>
                            </div>
                          </div>
                     </a>
                </div>
                @endforeach
                <div class="pagination">
                     {{ $all_data->links() }}
                </div>
              
            </div>
        </div>           

        
              
        <div class="row">
            <div class="col-sm-12 nopadding">
                <div class="col-sm-3 nopadding most-visited" style="padding-right:5px !important">
                    <div class="title">
                        Most Visited
                    </div>
                    @foreach($most_viewed_data as $key)                            
                    <div class="col-sm-12 nopadding ad">
                        <div class="col-sm-4 nopadding">
                            <img class="img-responsive" src="/upload/<?=$key['category']?>/<?=$key['subcategory']?>/<?=$key['image']?>"/>
                        </div>
                        <div class="col-sm-8 nopadding ad-desc">
                            <div class="ad-title">
                                <?=$key['title']?>
                            </div>
                            <div class="ad-place">
                                <?=$key['price']?>
                            </div>
                            <div class="ad-price">
                                Rs 50000
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="col-sm-9 nopadding featured">
                    <div class="title">
                        Featured
                    </div>
                                          <div class="col-sm-12 nopadding" style="margin-top:10px;">
                            @foreach($feature_item as $key)
                            <div class="col-sm-4 nopadding featured-content">
                                <a href="/dashboard/getdeatails/<?=$key['id']?>">
                                  <div class="page-body" style="height:250px; padding-left:5px; background-color:#fff;">                          
                                  <img class="img-responsive" src="/upload/<?=$key['category']?>/<?=$key['subcategory']?>/<?=$key['image']?>" style="height:190px;">                         
                                  <div style="text-align:center;">
                                        <div style="font-size:1.1em !important; color:#19CAAF"><?=$key['title']?></div>
                                        <div style="font-size:0.8em !important; color:#B2B2B2"><?=$key['price']?></div>
                                        <div style="font-size:0.8em !important; color:#B2B2B2"><?=$key['description']?></div>
                                    </div>
                                  </div>
                             </a>

                            </div>
                            @endforeach
                        </div>

                        <div class="col-sm-12 nopadding advertisement">
                            Your Advertisement Here
                        </div>

                        </div>
                    </div>
                </div>

                
          <div class="row">
                    <div class="col-sm-12 nopadding slider-cate">
                        <div class="slider-title"><span>ALL COMPUTERS</span></div>
                        <div class="featured-news slick-slider">   
                            @foreach($computer_data as $key)
                            <div class="col-sm-3 nopadding">
                            <a href="/dashboard/getdeatails/<?=$key['id']?>">
                              <div class="page-body" style="height:250px; padding-left:5px; background-color:#fff;">
                              
                              <img class="img-responsive" src="/upload/<?=$key['category']?>/<?=$key['subcategory']?>/<?=$key['image']?>" style="height:190px;">
                              
                              
                              <div style="text-align:center;">
                                    <div style="font-size:1.1em !important; color:#19CAAF"><?=$key['title']?></div>
                                    <div style="font-size:0.8em !important; color:#B2B2B2"><?=$key['price']?></div>
                                    <div style="font-size:0.8em !important; color:#B2B2B2"><?=$key['description']?></div>
                                </div>
                              </div>
                            </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
        
                
                
                
</div>  
</div>            
@endSection