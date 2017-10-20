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
      @yield('script')  

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
                            <li><a href="{{ route('adds.view_adds')}}">Manage Adds</a></li> 
                            <li><a href="{{ route('user.user')}}"><i class="fa fa-users" aria-hidden="true"></i> Profile</a></li>
                                                      
                            <li><a href="{{ route('user.signout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
                        </ul>
                    </div>
                    <div style="clear:both"></div>
                </div>
            </div>
            </div>
        </div>

    <div class="container">
    @yield('contents')
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

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    @yield('scripts')

</body>
</html>