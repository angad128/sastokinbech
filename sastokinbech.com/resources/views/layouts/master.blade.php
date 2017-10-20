<?php    if (session_status() == PHP_SESSION_NONE) {
                session_start();
}?>
<html>

    <head>
        
        <title>E-Commerce Website</title>
                
        <link rel="stylesheet" href="{{asset('temp/css/style.css')}}"/>
        <link rel="stylesheet" href="{{ URL::to('temp/css/bootstrap.css') }} "/>
        
        <link rel="stylesheet" href="{{ URL::to('temp/font-awesome/font-awesome/css/font-awesome.min.css') }}">
        
        <script src="{{ URL::to('temp/js/jquery.min.js') }}"></script>
        <script src="{{ URL::to('temp/js/bootstrap.js') }}"></script>
        <script src="{{ URL::to('temp/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::to('plugins/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ URL::to('temp/js/slick.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/7.2.0/lazyload.transpiled.min.js"></script>    
        <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
        <script src="temp/js/jssor.slider-23.1.3.min.js" type="text/javascript"></script>
                            <script type="text/javascript">
                                jssor_1_slider_init = function() {

                                    var jssor_1_SlideoTransitions = [
                                      [{b:900,d:2000,x:-379,e:{x:7}}],
                                      [{b:900,d:2000,x:-379,e:{x:7}}],
                                      [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
                                    ];

                                    var jssor_1_options = {
                                      $AutoPlay: 1,
                                      $SlideDuration: 800,
                                      $SlideEasing: $Jease$.$OutQuint,
                                      $CaptionSliderOptions: {
                                        $Class: $JssorCaptionSlideo$,
                                        $Transitions: jssor_1_SlideoTransitions
                                      },
                                      $ArrowNavigatorOptions: {
                                        $Class: $JssorArrowNavigator$
                                      },
                                      $BulletNavigatorOptions: {
                                        $Class: $JssorBulletNavigator$
                                      }
                                    };

                                    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                                    /*responsive code begin*/
                                    /*remove responsive code if you don't want the slider scales while window resizing*/
                                    function ScaleSlider() {
                                        var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                                        if (refSize) {
                                            refSize = Math.min(refSize, 1920);
                                            jssor_1_slider.$ScaleWidth(refSize);
                                        }
                                        else {
                                            window.setTimeout(ScaleSlider, 30);
                                        }
                                    }
                                    ScaleSlider();
                                    $Jssor$.$AddEvent(window, "load", ScaleSlider);
                                    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                                    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                                    /*responsive code end*/
                                };
                            </script>
                            <style>
                                
                                .jssorb05 {
                                    position: absolute;
                                }
                                .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                                    position: absolute;
                                    /* size of bullet elment */
                                    width: 16px;
                                    height: 16px;
                                    background: url('temp/img/b05.png') no-repeat;
                                    overflow: hidden;
                                    cursor: pointer;
                                }
                                .jssorb05 div { background-position: -7px -7px; }
                                .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
                                .jssorb05 .av { background-position: -67px -7px; }
                                .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

                                /* jssor slider arrow navigator skin 22 css */
                                /*
                                .jssora22l                  (normal)
                                .jssora22r                  (normal)
                                .jssora22l:hover            (normal mouseover)
                                .jssora22r:hover            (normal mouseover)
                                .jssora22l.jssora22ldn      (mousedown)
                                .jssora22r.jssora22rdn      (mousedown)
                                .jssora22l.jssora22lds      (disabled)
                                .jssora22r.jssora22rds      (disabled)
                                */
                                .jssora22l, .jssora22r {
                                    display: block;
                                    position: absolute;
                                    /* size of arrow element */
                                    width: 40px;
                                    height: 58px;
                                    cursor: pointer;
                                    background: url('temp/img/a22.png') center center no-repeat;
                                    overflow: hidden;
                                }
                                .jssora22l { background-position: -10px -31px; }
                                .jssora22r { background-position: -70px -31px; }
                                .jssora22l:hover { background-position: -130px -31px; }
                                .jssora22r:hover { background-position: -190px -31px; }
                                .jssora22l.jssora22ldn { background-position: -250px -31px; }
                                .jssora22r.jssora22rdn { background-position: -310px -31px; }
                                .jssora22l.jssora22lds { background-position: -10px -31px; opacity: .3; pointer-events: none; }
                                .jssora22r.jssora22rds { background-position: -70px -31px; opacity: .3; pointer-events: none; }
                            </style>


    </head>

    <body>
          <div class="top-header">
            <div class="container">
                <div class="row">
                <div class="col-sm-12 nopadding">
                    <div class="col-sm-6 nopadding social-share">
                        <div class="">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-6 nopadding top-menu">
                        <ul class="pull-right">
                            <li>
                                <a href="{{ route('dashbaord')}}">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    Home
                                </a>
                            </li>                            
                            <li>
                                <a href="#">
                                    <i class="fa fa-phone-square" aria-hidden="true"></i>
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard/faq">
                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                    FAQ
                                </a>
                            </li>
                            <?php if(empty($_SESSION['user_data'])){?>
                                 <li>
                                        <a href="/user/getlogin">
                                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                                            Login
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/user/getsignup">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                            Register
                                        </a>
                                    </li>      

                            <?php }else{?>
                                  <li><a href="{{ route('adds.view_adds')}}">Manage Adds</a></li>
                                  <li><a href="{{ route('user.user')}}"><i class="fa fa-users" aria-hidden="true"></i> Profile</a></li>
                                  <li><a href="{{ route('user.signout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
                                  
                            <?php }?>
                        </ul>
                    </div>
                    <div style="clear:both"></div>
                </div>
            </div>
            </div>
        </div>


        <div style="background-color:#fff;">
            <div class="container">
                <div class="row row-space">
                <div class="col-sm-12 nopadding second-row">
                    
                </div>
            </div>
            </div>
        </div>
        <div>
                <div class="col-sm-3 nopadding">
                    <div class="container">
                        <div class="menu-header">
                        <h3>
                            <i class="fa fa-bars" aria-hidden="true"></i> 
                            <span style="padding-left:10px;">Categories</span>
                        </h3>
                    </div>
                   
                    <div class="menu">
                        <ul>
                            <li>
                                    <div class="dropdown">
                                      <div class="dropbtn"><a href="/dashboard/Apparels & Accessories/getaddbycategory">Apparels & Accessories</a></div>
                                      <div class="dropdown-content">
                                        <a href="/dashboard/Apparels & Accessories/Baby & Children Accessories/getaddbysubcategory">Baby & Children Accessories</a>
                                        <a href="/dashboard/Apparels & Accessories/Baby & Children Clothing/getaddbysubcategory">Baby & Children Clothing</a>
                                        <a href="/dashboard/Apparels & Accessories/Baby & Children Luggage/getaddbysubcategory">Baby & Children Luggage</a>
                                        <a href="/dashboard/Apparels & Accessories/Jewellery/getaddbysubcategory">Jewellery</a>
                                        <a href="/dashboard/Apparels & Accessories/Men's Accessories/getaddbysubcategory">Men's Accessories</a>
                                        <a href="/dashboard/Apparels & Accessories/Men's Clothing/getaddbysubcategory">Men's Clothing</a>
                                        <a href="/dashboard/Apparels & Accessories/Men's Shoes/getaddbysubcategory">Men's Shoes</a>
                                        <a href="/dashboard/Apparels & Accessories/Sunglasses/getaddbysubcategory">Sunglasses</a>
                                        <a href="/dashboard/Apparels & Accessories/Watches/getaddbysubcategory">Watches</a>
                                        <a href="/dashboard/Apparels & Accessories/Women's Accessories/getaddbysubcategory">Women's Accessories</a>
                                        <a href="/dashboard/Apparels & Accessories/Women's Clothing/getaddbysubcategory">Women's Clothing</a>
                                        <a href="/dashboard/Apparels & Accessories/Women's Shoes/getaddbysubcategory">Women's Shoes</a>
                                        <a href="/dashboard/Apparels & Accessories/Others/getaddbysubcategory">Others</a>
                                      </div>
                                    </div>
                                
                            </li>

                            <li>
                                    <div class="dropdown">
                                      <div class="dropbtn"><a href="/dashboard/Automobiles/getaddbycategory">Automobiles</a></div>
                                      <div class="dropdown-content">
                                        <a href="/dashboard/Automobiles/Bycycle/getaddbysubcategory">Bycycle</a>
                                        <a href="/dashboard/Automobiles/Cars/getaddbysubcategory">Cars</a>
                                        <a href="/dashboard/Automobiles/MotorCycle/getaddbysubcategory">MotorCycle</a>
                                        <a href="/dashboard/Automobiles/Parts & Accessories/getaddbysubcategory">Parts & Accessories</a>
                                        <a href="/dashboard/Automobiles/Showroom Motorcycle/getaddbysubcategory">Showroom Motorcycle</a>
                                        <a href="/dashboard/Automobiles/Showroom Cars/getaddbysubcategory">Showroom Cars</a>
                                        <a href="/dashboard/Automobiles/Others/getaddbysubcategory">Others</a>
                                      </div>
                                    </div>
                                
                            </li>

                            <li>
                                    <div class="dropdown">
                                      <div class="dropbtn"><a href="/dashboard/Beauty & Health/getaddbycategory">Beauty & Health</a></div>
                                      <div class="dropdown-content">
                                        <a href="/dashboard/Beauty & Health/Bath Toiletries/getaddbysubcategory">Bath Toiletries</a>
                                        <a href="/dashboard/Beauty & Health/Body Care/getaddbysubcategory">Body Care</a>
                                        <a href="/dashboard/Beauty & Health/Cosmetics & Skin Care/getaddbysubcategory">Cosmetics & Skin Care</a>
                                        <a href="/dashboard/Beauty & Health/Eye Care/getaddbysubcategory">Eye Care</a>
                                        <a href="/dashboard/Beauty & Health/Face Care/getaddbysubcategory">Face Care</a>
                                        <a href="/dashboard/Beauty & Health/Medical & Health Device/getaddbysubcategory">Medical & Health Device</a>
                                        <a href="/dashboard/Beauty & Health/Men's Groming Tools/getaddbysubcategory">Men's Groming Tools</a>
                                        <a href="/dashboard/Beauty & Health/Perfumes & Fragrances/getaddbysubcategory">Perfumes & Fragrances</a>
                                        <a href="/dashboard/Beauty & Health/Women's Groming Tools/getaddbysubcategory">Women's Groming Tools</a>
                                        <a href="/dashboard/Beauty & Health/Others/getaddbysubcategory">Others</a>

                                      </div>
                                    </div>
                                
                            </li>

                            <li>
                                    <div class="dropdown">
                                      <div class="dropbtn"><a href="/dashboard/Books & Learning/getaddbycategory">Books & Learning</a></div>
                                      <div class="dropdown-content">
                                        <a href="/dashboard/Books & Learning/Book-Children/getaddbysubcategory">Book-Children</a>
                                        <a href="/dashboard/Books & Learning/Book-Educational Textbook/getaddbysubcategory">Book-Educational Textbook</a>
                                        <a href="/dashboard/Books & Learning/Book-Fiction/getaddbysubcategory">Book-Fiction</a>
                                        <a href="/dashboard/Books & Learning/Book-Nonfiction & Biography/getaddbysubcategory">Book-Nonfiction & Biography</a>
                                        <a href="/dashboard/Books & Learning/Book-Other/getaddbysubcategory">Book-Other</a>
                                        <a href="/dashboard/Books & Learning/Book-Technology/getaddbysubcategory">Book-Technology</a>
                                        <a href="/dashboard/Books & Learning/Interactive & Video Learning/getaddbysubcategory">Interactive & Video Learning</a>
                                        <a href="/dashboard/Books & Learning/Magazine & Comics/getaddbysubcategory">Magazine & Comics</a>
                                        <a href="/dashboard/Books & Learning/Stationary Items/getaddbysubcategory">Stationary Items</a>
                                        <a href="/dashboard/Books & Learning/Others/getaddbysubcategory">Others</a>
                                      </div>
                                    </div>
                                
                            </li>

                            <li>
                                    <div class="dropdown">
                                      <div class="dropbtn"><a href="/dashboard/Bussiness & Industries/getaddbycategory">Bussiness & Industries</a></div>
                                      <div class="dropdown-content">
                                        <a href="/dashboard/Bussiness & Industries/Bussiness For Sale/getaddbysubcategory">Bussiness For Sale</a>
                                        <a href="/dashboard/Bussiness & Industries/Bussiness Offers/getaddbysubcategory">Bussiness Offers</a>
                                        <a href="/dashboard/Bussiness & Industries/Bussiness Services/getaddbysubcategory">Bussiness Services</a>
                                        <a href="/dashboard/Bussiness & Industries/Dealership-franchise/getaddbysubcategory">Dealership-franchise</a>
                                        <a href="/dashboard/Bussiness & Industries/Equipments for Bussiness/getaddbysubcategory">Equipments for Bussiness</a>
                                        <a href="/dashboard/Bussiness & Industries/Invertor/Generator & Power Equipments/getaddbysubcategory">Invertor/Generator & Power Equipments</a>
                                        <a href="/dashboard/Bussiness & Industries/Machinery/getaddbysubcategory">Machinery</a>
                                        <a href="/dashboard/Bussiness & Industries/Office Electronics/getaddbysubcategory">Office Electronics</a>
                                        <a href="/dashboard/Bussiness & Industries/Office Furnitures & Fixtures/getaddbysubcategory">Office Furnitures & Fixtures</a>
                                        <a href="/dashboard/Bussiness & Industries/Office Supplies/getaddbysubcategory">Office Supplies</a>
                                        <a href="/dashboard/Bussiness & Industries/Raw Materials/getaddbysubcategory">Raw Materials</a>
                                        <a href="/dashboard/Bussiness & Industries/Security & CCTV/getaddbysubcategory">Security & CCTV</a>
                                        <a href="/dashboard/Bussiness & Industries/Tools & Samll Machines/getaddbysubcategory">Tools & Samll Machines</a>
                                        <a href="/dashboard/Bussiness & Industries/Wholesale/getaddbysubcategory">Wholesale</a>
                                        <a href="">Others</a>
                                      </div>
                                    </div>
                                
                            </li>

                            <li>
                                    <div class="dropdown">
                                      <div class="dropbtn"><a href="/dashboard/Computer & Peripherals/getaddbycategory">Computer & Peripherals</a></div>
                                      <div class="dropdown-content">
                                        <a href="/dashboard/Computer & Peripherals/Desktop Accessories & Components/getaddbysubcategory">Desktop Accessories & Components</a>
                                        <a href="/dashboard/Computer & Peripherals/Desktop PC/getaddbysubcategory">Desktop PC</a>
                                        <a href="/dashboard/Computer & Peripherals/Games/getaddbysubcategory">Games</a>
                                        <a href="/dashboard/Computer & Peripherals/>Graphic & Video Cards/getaddbysubcategory">Graphic & Video Cards</a>
                                        <a href="/dashboard/Computer & Peripherals/Laptop & Accessories/getaddbysubcategory">Laptop & Accessories</a>
                                        <a href="/dashboard/Computer & Peripherals/Monitors/getaddbysubcategory">Monitors</a>
                                        <a href="/dashboard/Computer & Peripherals/Network Equipments/getaddbysubcategory">Network Equipments</a>
                                        <a href="/dashboard/Computer & Peripherals/Printer & Scanner/getaddbysubcategory">Printer & Scanner</a>
                                        <a href="/dashboard/Computer & Peripherals/Software/getaddbysubcategory">Software</a>
                                        <a href="/dashboard/Computer & Peripherals/Storage & Optical Drives/getaddbysubcategory">Storage & Optical Drives</a>
                                        <a href="/dashboard/Computer & Peripherals/Tablet Accessories/getaddbysubcategory">Tablet Accessories</a>
                                        <a href="/dashboard/Computer & Peripherals/Tablet & iPad/getaddbysubcategory">Tablet & iPad</a>
                                        <a href="/dashboard/Computer & Peripherals/TV card/getaddbysubcategory">TV card</a>
                                        <a href="/dashboard/Computer & Peripherals/Others/getaddbysubcategory">Others</a>
                                      </div>
                                    </div>
                                
                            </li>

                            <li>
                                    <div class="dropdown">
                                      <div class="dropbtn"><a href="/dashboard/Consumer Electronics/getaddbycategory">Consumer Electronics</a></div>
                                      <div class="dropdown-content">
                                        <a href="/dashboard/Consumer Electronics/Audio & Video Dics/getaddbysubcategory">Audio & Video Dics</a>
                                        <a href="/dashboard/Consumer Electronics/Camera lens & Accessories/getaddbysubcategory">Camera lens & Accessories</a>
                                        <a href="/dashboard/Consumer Electronics/Digital Camcorder/getaddbysubcategory">Digital Camcorder</a>
                                        <a href="/dashboard/Consumer Electronics/Film Camera & Tape Camcorder/getaddbysubcategory">Film Camera & Tape Camcorder</a>
                                        <a href="/dashboard/Consumer Electronics/Headphones & Speakers/getaddbysubcategory">Headphones & Speakers</a>
                                        <a href="/dashboard/Consumer Electronics/Home Audio-video System/getaddbysubcategory">Home Audio-video System</a>
                                        <a href="/dashboard/Consumer Electronics/Others/getaddbysubcategory">Others</a>
                                      </div>
                                    </div>
                                
                            </li>

                            <li>
                                    <div class="dropdown">
                                      <div class="dropbtn"><a href="/dashboard/Events Happening/getaddbycategory">Events Happening</a></div>
                                      <div class="dropdown-content">
                                        <a href="/dashboard/Events Happening/Dance-Music Concerts/getaddbysubcategory">Dance-Music Concerts</a>
                                        <a href="/dashboard/Events Happening/Exhibition-Trade Fairs/getaddbysubcategory">Exhibition-Trade Fairs</a>
                                        <a href="/dashboard/Events Happening/Festivals/getaddbysubcategory">Festivals</a>
                                        <a href="/dashboard/Events Happening/Theater-Plays-Movies/getaddbysubcategory">Theater-Plays-Movies</a>
                                        <a href="/dashboard/Events Happening/Workshop-Seminars/getaddbysubcategory">Workshop-Seminars</a>
                                        <a href="/dashboard/Events Happening/Others/getaddbysubcategory">Others</a>
                                      </div>
                                    </div>
                                
                            </li>
                            <li>
                                    <div class="dropdown">
                                      <div class="dropbtn"><a href="/dashboard/Home,Furnishing & Appliances/getaddbycategory">Home,Furnishing & Appliances</a></div>
                                      <div class="dropdown-content">
                                        <a href="/dashboard/Home,Furnishing & Appliances/Antique & Collectables/getaddbysubcategory">Antique & Collectables</a>
                                        <a href="/dashboard/Home,Furnishing & Appliances/Art & Handicrafts/getaddbysubcategory">Art & Handicrafts</a>
                                        <a href="/dashboard/Home,Furnishing & Appliances/Bath & Plumbing/getaddbysubcategory">Bath & Plumbing</a>
                                        <a href="/dashboard/Home,Furnishing & Appliances/Construction Materials/getaddbysubcategory">Construction Materials</a>
                                        <a href="/dashboard/Home,Furnishing & Appliances/Food's & Drinks/getaddbysubcategory">Food's & Drinks</a>
                                        <a href="/dashboard/Home,Furnishing & Appliances/Garden & Outdoor/getaddbysubcategory">Garden & Outdoor</a>
                                        <a href="/dashboard/Home,Furnishing & Appliances/Home Appliances/getaddbysubcategory">Home Appliances</a>
                                        <a href="/dashboard/Home,Furnishing & Appliances/Home Decor & Interior/getaddbysubcategory">Home Decor & Interior</a>
                                        <a href="/dashboard/Home,Furnishing & Appliances/Home Furniture/getaddbysubcategory">Home Furniture</a>
                                        <a href="/dashboard/Home,Furnishing & Appliances/Kitchen Appliances/getaddbysubcategory">Kitchen Appliances</a>
                                        <a href="/dashboard/Home,Furnishing & Appliances/Kitchenware & Utilities/getaddbysubcategory">Kitchenware & Utilities</a>
                                        <a href="/dashboard/Home,Furnishing & Appliances/Lighting,Color & Electricals/getaddbysubcategory">Lighting,Color & Electricals</a>
                                        <a href="/dashboard/Home,Furnishing & Appliances/Lines Mattress/getaddbysubcategory">Lines Mattress</a>
                                        <a href="/dashboard/Home,Furnishing & Appliances/Tools For Home Improvement/getaddbysubcategory">Tools For Home Improvement</a>
                                        <a href="/dashboard/Home,Furnishing & Appliances/Others/getaddbysubcategory">Others</a>

                                      </div>
                                    </div>
                                
                            </li>

                            <li>
                                    <div class="dropdown">
                                      <div class="dropbtn"><a href="/dashboard/Mobile & Accessories/getaddbycategory">Mobile & Accessories</a></div>
                                      <div class="dropdown-content">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-3 ">
                                                <h3 style="color: green;">Accessories</h3>
                                                <a href="/dashboard/Mobile & Accessories/Battery/getaddbysubcategory">Battery</a>
                                                <a href="/dashboard/Mobile & Accessories/Charger/getaddbysubcategory">Charger</a>
                                                <a href="/dashboard/Mobile & Accessories/Cover & Cases/getaddbysubcategory">Cover & Cases</a>
                                                <a href="/dashboard/Mobile & Accessories/Data Cables/getaddbysubcategory">Data Cables</a>
                                                <a href="/dashboard/Mobile & Accessories/Headsets & Earphones/getaddbysubcategory">Headsets & Earphones</a>
                                                <a href="/dashboard/Mobile & Accessories/Memory Cards/getaddbysubcategory">Memory Cards</a>
                                                <a href="/dashboard/Mobile & Accessories/Mobile Apps & Games/getaddbysubcategory">Mobile Apps & Games</a>
                                                <a href="/dashboard/Mobile & Accessories/Mobile Unlock & Upgrade/getaddbysubcategory">Mobile Unlock & Upgrade</a>
                                                <a href="/dashboard/Mobile & Accessories/Powerbank/getaddbysubcategory">Powerbank</a>
                                                <a href="/dashboard/Mobile & Accessories/Screen protector/getaddbysubcategory">Screen protector</a>
                                                <a href="/dashboard/Mobile & Accessories/Selfie Stick/getaddbysubcategory">Selfie Stick</a>
                                                <a href="/dashboard/Mobile & Accessories/Smart Watches & Bands/getaddbysubcategory">Smart Watches & Bands</a>
                                                <a href="/dashboard/Mobile & Accessories/VR Glass/getaddbysubcategory">VR Glass</a>
                                            </div>
                                            <div class="col-md-6 col-sm-3 ">
                                                <h3 style="color: green;">Handsets</h3>
                                                <a href="/dashboard/Mobile & Accessories/Apple iPhone/getaddbysubcategory">Apple iPhone</a>
                                                <a href="/dashboard/Mobile & Accessories/Blackberry/getaddbysubcategory">Blackberry</a>
                                                <a href="/dashboard/Mobile & Accessories/Colors/getaddbysubcategory">Colors</a>
                                                <a href="/dashboard/Mobile & Accessories/Gionee/getaddbysubcategory">Gionee</a>
                                                <a href="/dashboard/Mobile & Accessories/HTC/getaddbysubcategory">HTC</a>
                                                <a href="/dashboard/Mobile & Accessories/Huawei/getaddbysubcategory">Huawei</a>
                                                <a href="/dashboard/Mobile & Accessories/Lava/getaddbysubcategory">Lava</a>
                                                <a href="/dashboard/Mobile & Accessories/Lenovo/getaddbysubcategory">Lenovo</a>
                                                <a href="/dashboard/Mobile & Accessories/LG/getaddbysubcategory">LG</a>
                                                <a href="/dashboard/Mobile & Accessories/Micromax/getaddbysubcategory">Micromax</a>
                                                <a href="/dashboard/Mobile & Accessories/Motorola/getaddbysubcategory">Motorola</a>
                                                <a href="/dashboard/Mobile & Accessories/Nokia/getaddbysubcategory">Nokia</a>
                                                <a href="/dashboard/Mobile & Accessories/Oppo/getaddbysubcategory">Oppo</a>
                                                <a href="/dashboard/Mobile & Accessories/Samsung/getaddbysubcategory">Samsung</a>
                                                <a href="/dashboard/Mobile & Accessories/Sony/getaddbysubcategory">Sony</a>
                                                <a href="/dashboard/Mobile & Accessories/Other- Indian Brand/getaddbysubcategory">Other- Indian Brand</a>
                                                <a href="/dashboard/Mobile & Accessories/Other- Chinese Brand/getaddbysubcategory">Other- Chinese Brand</a>
                                                <a href="/dashboard/Mobile & Accessories/Other Brand/getaddbysubcategory">Other Brand</a>
                                            </div>
                                            </div>
                                      </div>
                                    </div>
                                
                            </li>

                            <li>
                                    <div class="dropdown">
                                      <div class="dropbtn"><a href="/dashboard/Music Instrument/getaddbycategory">Music Instrument</a></div>
                                      <div class="dropdown-content">
                                        <a href="/dashboard/Music Instrument/Amp & Speakers/getaddbysubcategory">Amp & Speakers</a>
                                        <a href="/dashboard/Music Instrument/DJ Gear & Lighting/getaddbysubcategory">DJ Gear & Lighting</a>
                                        <a href="/dashboard/Music Instrument/Instrument-Drum/getaddbysubcategory">Instrument-Drum</a>
                                        <a href="/dashboard/Music Instrument/Instrument-Guitars/getaddbysubcategory">Instrument-Guitars</a>
                                        <a href="/dashboard/Music Instrument/Instrument-Keyboard & Piano/getaddbysubcategory">Instrument-Keyboard & Piano</a>
                                        <a href="/dashboard/Music Instrument/Instrument-Nepali Traditional/getaddbysubcategory">Instrument-Nepali Traditional</a>
                                        <a href="/dashboard/Music Instrument/Instrument-Others/getaddbysubcategory">Instrument-Others</a>
                                        <a href="/dashboard/Music Instrument/Microphones/getaddbysubcategory">Microphones</a>
                                        <a href="/dashboard/Music Instrument/Other Brand/getaddbysubcategory">Mixture & Stdio Equipments</a>
                                        <a href="/dashboard/Music Instrument/Other Brand/getaddbysubcategory">Pedal & Processors For Guitar</a>
                                      </div>
                                    </div>
                                
                            </li>

                            <li>
                                    <div class="dropdown">
                                      <div class="dropbtn"><a href="/dashboard/Pets & Pet Care/getaddbycategory">Pets & Pet Care</a></div>
                                      <div class="dropdown-content">
                                        <a href="">Acquarim & Fish Accessories</a>
                                        <a href="">Kennel & Dog Accessories</a>
                                        <a href="">Pet-Cats</a>
                                        <a href="">Pet-Dogs</a>
                                        <a href="">Pet-Fish</a>
                                        <a href="">Pet-Other pets</a>
                                        <a href="">Pet Services</a>
                                        <a href="">Other Pet Accessories</a>
                                      </div>
                                    </div>
                                
                            </li>

                            <li>
                                    <div class="dropdown">
                                      <div class="dropbtn"><a href="/dashboard/Real State/getaddbycategory">Real State</a></div>
                                      <div class="dropdown-content">
                                        <a href="">Flatmates & Paying Guests</a>
                                        <a href="">For Rent -Flat & Appartment</a>
                                        <a href="">For Rent -House</a>
                                        <a href="">For Rent -Land</a>
                                        <a href="">For Rent -Office Space</a>
                                        <a href="">For Rent -Shutter & Shopping Space</a>
                                        <a href="">For Sale -Commercial Property</a>
                                        <a href="">For Sale- Flat & Appartment</a>
                                        <a href="">For Sale -House</a>
                                        <a href="">For Sale -Land</a>
                                      </div>
                                    </div>
                                
                            </li>

                             <li>
                                    <div class="dropdown">
                                      <div class="dropbtn"><a href="/dashboard/Services/getaddbycategory">Services</a></div>
                                      <div class="dropdown-content">
                                            <a href="">Advertiding-Printing-Publication</a>
                                            <a href="">Classes-Learning-Hobby-Music</a>
                                            <a href="">Coaching & Tutors</a>
                                            <a href="">Computer -Sales & Repair</a>
                                            <a href="">Computer -Web & Design</a>
                                            <a href="">Courses -Educational & Training</a>
                                            <a href="">Electronics Repair</a>
                                            <a href="">Event Planner & Caterers</a>
                                            <a href="">Financial & Legal</a>
                                            <a href="">Foreign Education</a>
                                            <a href="">Health, Fitness & Beauty</a>
                                            <a href="">Home Construct & Design</a>
                                            <a href="">Home Repair & Hepler</a>
                                            <a href="">Movers Courier & Transport</a>
                                            <a href="">Music-Video-Photography</a>
                                            <a href="">Visa & Migration</a>
                                            <a href="">Writing-Designing-Translating</a>
                                            <a href="">Others</a>
                                      </div>
                                    </div>
                                
                            </li>

                             <li>
                                    <div class="dropdown">
                                      <div class="dropbtn"><a href="/dashboard/Sports & Fitness/getaddbycategory">Sports & Fitness</a></div>
                                      <div class="dropdown-content">
                                        <a href="">Fitness & Gym Equipments</a>
                                        <a href="">Fitness Supplements</a>
                                        <a href="">Fotball/Cricket/Other Sporting Goods</a>
                                        <a href="">Hiking & Outdoor</a>
                                        <a href="">Others</a>
                                      </div>
                                    </div>
                                
                            </li>

                             <li>
                                    <div class="dropdown">
                                      <div class="dropbtn"><a href="/dashboard/Toys & Video Games/getaddbycategory">Toys & Video Games</a></div>
                                      <div class="dropdown-content">
                                        <a href="">Gaming Accessories</a>
                                        <a href="">Gaming Console</a>
                                        <a href="">Gaming Dics & Cartidges</a>
                                        <a href="">Toys -Educational</a>
                                        <a href="">Toys -General</a>
                                        <a href="">Toys -Outdoor</a>
                                        <a href="">Toys -Remote Controlled</a>
                                        <a href="">Toys -Stuffed, Dolls & Figures</a>
                                        <a href="">Others</a> 
                                      </div>
                                    </div>
                                
                            </li>

                             <li>
                                    <div class="dropdown">
                                      <div class="dropbtn"><a href="/dashboard/Travel, Tour & Packages/getaddbycategory">Travel, Tour & Packages</a></div>
                                      <div class="dropdown-content">
                                        <a href="">Air Tickets</a>
                                        <a href="">Bus Tickets</a>
                                        <a href="">Car Rentals</a>
                                        <a href="">Day Trip & Excursion</a>
                                        <a href="">Motorcycle Rentals</a>
                                        <a href="">Hotel & Homestay</a>
                                        <a href="">Tour Packages -Domestic</a>
                                        <a href="">Tour Packages -International</a>
                                        <a href="">Trekking Package</a>
                                        <a href="">Others</a>
                                      </div>
                                    </div>
                                
                            </li>
                            
                        </ul>
                    </div>
                    </div>                   

                </div>
         </div>       

            @yield('content')   
        
            <div class="footer-background">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 footer">
                            <div class="col-lg-12 nopadding top-menu">
                                <div class="footer-title">
                                    Categories
                                </div>
                                <ul class="pull-right">
                                      <li><a href="/dashboard/Apparels & Accessories/getaddbycategory">Apparels & Accessories</a></li>
                                        <li><a href="/dashboard/Automobiles/getaddbycategory">Automobiles</a></li>
                                        <li><a href="/dashboard/Beauty & Health/getaddbycategory">Beauty & Health</a></li>
                                        <li><a href="/dashboard/Books & Learning/getaddbycategory">Books & Learning</a></li>
                                        <li><a href="/dashboard/Bussiness & Industries/getaddbycategory">Bussiness & Industries</a></li>
                                        <li><a href="/dashboard/Computer & Peripherals/getaddbycategory">Computer & Peripherals</a></li>
                                        <li><a href="/dashboard/Consumer Electronics/getaddbycategory">Consumer Electronics</a></li>
                                        <li><a href="/dashboard/Events Happening/getaddbycategory">Events Happening</a></li>
                                        <li><a href="/dashboard/Mobile & Accessories/getaddbycategory">Mobile & Accessories</a></li>
                                        <li><a href="/dashboard/Music Instrument/getaddbycategory">Music Instrument</a></li>
                                        <li><a href="/dashboard/Pets & Pet Care/getaddbycategory">Pets & Pet Care</a></li>
                                        <li><a href="/dashboard/Real State/getaddbycategory">Real State</a></li>
                                        <li><a href="/dashboard/Services/getaddbycategory">Services</a></li>
                                        <li><a href="/dashboard/Sports & Fitness/getaddbycategory">Sports & Fitness</a></li>
                                        <li><a href="/dashboard/Toys & Video Games/getaddbycategory">Toys & Video Games</a></li>
                                        <li><a href="/dashboard/Travel, Tour & Packages/getaddbycategory">Travel, Tour & Packages</a></li>
                                </ul>
                            </div>
                            <div style="clear:both"></div>
                    </div>
                    </div>
                </div>
            </div>

            <div style="background-color:#1A2025;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 nopadding" style="padding:10px !important;">
                            <div class="col-sm-2 nopadding">
                                <img class="img-responsive" src="temp/img/company-logo.png" />
                            </div> 
                            <div class="col-sm-4 nopadding developer"> &copy; Designed & Developed by ABGroup</div>
                        </div>
                    </div>
                </div>
            </div>


    @yielid('scripts')
    <script type="text/javascript">

                      $(document).ready(function(){
                        


                    $('.featured-news').slick({
                            infinite: true,                         
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            autoplay:true,
                            SlideDuration:600,
                            responsive: [
                                {
                                  breakpoint: 1024,
                                  settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 3,
                                    infinite: true,
                                    dots: true
                                  }
                                },
                                {
                                  breakpoint: 800,
                                  settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 2,
                                    infinite: true
                                  }
                                },
                                {
                                  breakpoint: 600,
                                  settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                    infinite: true
                                  }
                                }
                                // You can unslick at a given breakpoint now by adding:
                                // settings: "unslick"
                                // instead of a settings object
                              ]
                          });


                      });
                    </script>
<!-- <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=<?php // echo getFacebookAppId(); ?>";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    -->
   
</body>    
</html>