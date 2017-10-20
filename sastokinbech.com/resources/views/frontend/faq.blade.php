<?php    if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }?>
 <!DOCTYPE html>
<html>
<head>
  <title></title>
   
        <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/style.css')  }}"> 


        <link rel="stylesheet" href="{{asset('temp/css/style.css')}}"/>
        <link rel="stylesheet" href="{{ URL::to('temp/css/bootstrap.css') }}"/>
        <link rel="stylesheet" href="{{ URL::to('temp/css/bootstrap.min.css') }}"/>       
        <link rel="stylesheet" href="{{ URL::to('temp/font-awesome/font-awesome/css/font-awesome.min.css') }}">
       
        
        <script src="{{URL::to('temp/js/jquery.min.js') }}"></script>
        <script src="{{URL::to('temp/js/bootstrap.js') }}"></script>
        <script src="{{URL::to('plugins/bootbox/bootbox.min.js') }}"></script>
        <script src="{{URL::to('plugins/ckeditor/ckeditor.js') }}"></script>
        <script src="{{URL::to('temp/js/slick.min.js') }}"></script>     

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
                                <a href="#">
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

    <div class="container">
     <h1>Frequently Asked Questions</h1>

	

<h3>1.	What is sastokinbech.group ?</h3></br>
 	Satokinbech.abgroup is FREE online classified which enables individuals as well as companies to list wide variety of new or used product online. We at Satokinbech.abgroup believe that Internet is a great promotional vehicle as well as communication channel for connecting buyers and sellers. Satokinbech.abgroup is perfect solution that helps to list your products for FREE.<br />
 	 
<h3>2.	Why choose Satokinbech.abgroup?</h3></br>
 	As per NTA Nov 2015 report, the internet users in Nepal has reached 11.68 million (including 11.19 million mobile data users) which itself indicates that the market for internet advertising is highly lucrative. satokinbech is visited by over 100,000 unique visitors monthly who use the site for buying and selling purpose. Compared to newspaper classifieds, in Satokinbech.abgroup your product will have more comprehensive detail and pictures thus enabling consumer to choose better. Satokinbech.abgroup has created such platform where both seller and buyers can interact with each other.<br />
 	 
<h3>3.	What Benefits do I get as a member?</h3></br>
 <ul>
<li>· Unlimited potential customers.</li>
<li>· 24/7 market place for your products and services.</li>
<li>· Online catalog for your product reaching to consumer effectively.</li>
<li>· Cheap way of advertising your product and services.</li>
<li>· Your own control panel. From where you have total control over ads.</li>
<li>· Add, edit & delete your ads immediately with minimum time and effort.</li>
<li>· Upload image for your ad to provide visual information for your ads.</li>
<li>· Change your contact information as and when required by you.</li>
<li>· Write comments on other user's ad and contact them through facebook.</li>
</ul>
<br />
 	 
<h3>4.	How can I register in the site?</h3></br>
 	If you want to promote your product/service then you just have to register as member at satokinbech first. Just click on Register link at top of the website to get started. Fill in your contact details mentioned in online registration form and submit.<br/>
 	 

<h3>5.	How do I post an ad for my product or services in the site?</h3></br>
 	Once you have registered an account, then you just have to login to the Member Area of the site. Once logged in, click on 'Manage Adds' and 'Create Adds' button option. You will be then asked to choose a suitable category and subcategroy for your ad. Then fill up the form with description, price of your product and click on post button. Note:- if you dont know your product category then please search the products in our site to find if there is existing product which will give you idea about the category.</br>
 	 
<h3>6.	Can I upload images for my ad?</h3></br>
 	Yes. you can upload three images of your product which will be listed with your ad. Infact ads with real images have more consumer appeal and receive more views and better inquiries. You will be asked to upload a picture after you have posted your ad as mentioned in question no. 5 above.</br>
 	 
<h3>7.	Are there any restriction with ad images?</h3></br>
 	You can only place 3 images per product, which is enough to give detail about your product.</br>
 	 
<h3>8.	Can I change the details of product later?</h3></br>
 	Yes. you can change the details of your products later whenever you require it. Just login to your account and click on 'Mangage Ads' and 'View Ads' option from the menu. You will see list of all the ads you have posted in the site. From there you can edit your ad, change/upload your product picture, renew, delete your product.</br>
 	 
<h3>9.	Can I change my personal information and password later?</h3></br>
 	Yes. after you have registered your account you can change your personal information whenever you want. You need to login to your account and click on 'Update profile' button to change your personal data.</br>
 	 
<h3>10.	What is Featured ads, Popular ads, Recently listed ads?</h3></br>
 	Featured ads are those ads which are of special importance. Most View ads are those ads which are being viewed by user most number of times. Recently listed ads are those ads which have been recently posted in the site.</br>
 	 
<h3>11.	What is satokinbech Shops?</h3></br>
 	Member who have been authorized by Satokinbech.abgroup as genuine and trustworthy are given the status of satokinbech Shops. We would encourage buyers to feel safe and secure with making transaction with these shop owners.</br>
 	 
 	 
<h3>12.	Does a Buyer need to register at Satokinbech.abgroup?</h3></br>
 	No. Buyer does not have to register to satokinbech, he/she can browse the entire website and search the posted ads without any registration. However in order to post ads other user, registration is required.</br>
 	 
<h3>13.	How can I find product that I want to buy in better way?</h3></br>
 	You can either browse by category and subcategory to find product or services that you are interested in. </br>
    </div>
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

   
</body>
</html>

