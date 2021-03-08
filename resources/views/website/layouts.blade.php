<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="title">
    <meta name="keywords" content="" />
    <meta name="author" content="">
    <title> Treight Portal</title>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">

<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <link rel="manifest" href="site.webmanifest">
    <!-- favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="icon.png">
    <meta name="theme-color" content="#3454d1">
    <link href="/web/css/styles.css?fd365619e86ad9137a29" rel="stylesheet">
	<style>
		.fixed-top .navbar-nav .nav-item .nav-link, .navbar-custom .navbar-nav .nav-item .nav-link {
    color: #fff !important;
}
.fixed-top, .navbar-custom {
    box-shadow: 0 2px 3px rgb(100 100 100 / 10%);
    background-color: #233564;
    -webkit-animation: smoothScroll 1s forwards;
    animation: smoothScroll 1s forwards;
}
.bg-theme-footer {
    background-image: url(/web/images/bg18.jpg);
    width: 100%;
    background-position: center center;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -moz-background-size: cover;
}
.wrapper__footer .logo-footer {
    width: 100px;
    position: relative;
}
.navbar-transparent .navbar-nav .nav-item .nav-link:hover {
    color: #fff;
}
.hide_field{
	display:none;
}
.login_button{
    color:#fff;
}
@media (max-width:768px)  { 
.login_button{
    color:#3454d1;
}
.navbar-transparent .navbar-nav .nav-item .nav-link:hover {
    color: #000;
}
}
	</style>
	@yield('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/toastr/toastr.css')}}">
    
</head>

<body>
    <!-- HEADER -->
    <header class="header__style-one">
        <!-- NAVBAR -->
        <nav class="navbar navbar-hover navbar-expand-lg navbar-soft navbar-transparent">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="/upload_files/{{$settings->logo}}" alt="" style="width:100%">
                    <img src="/upload_files/{{$settings->logo}}" alt="" style="width:100%;margin-top: -5px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav99">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav99">
                    <ul class="navbar-nav mx-auto ">
                        <li class="nav-item"><a class="nav-link" href="/"> Home </a></li>
                        <li class="nav-item"><a class="nav-link" href="/about"> About </a></li>
                        <li class="nav-item"><a class="nav-link" href="/service"> Service </a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact"> Contact </a></li>
                        @if(Auth::check())
                        <li class="nav-item"><a class="nav-link" href="/user/dashboard"> Account </a></li>
                          @endif
                        {{-- <li class="nav-item"><a class="nav-link" href="/contact.html"> Login / Register </a></li> --}}
                    </ul>
                    <!-- Search bar.// -->
                    <ul class="navbar-nav ">
                        <li>
                            <a href="javascript:void(null)" class="btn btn-primary text-capitalize" data-toggle="modal" data-target="#quoteModal">
                                <i class="fa fa-plus-circle mr-1"></i> request a quote</a>
                        </li>
                        <li>
                            <a href="javascript:void(null)" class="btn btn-outline-primary text-capitalize" style="
    display: none;" data-toggle="modal" id="registerformCall" data-target="#registerModal"></a>
    @if(Auth::check())
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit()" class="btn btn-outline-primary text-capitalize" style="cursor: pointer">
                                <i class="fa fa-sign-out mr-1" style="color:#fff"></i><span style="color:#fff">Logout</span> </a>
    @else
      <a href="javascript:void(null)" class="btn btn-outline-primary text-capitalize" style="cursor: pointer" 
    data-toggle="modal" 
    data-target="#loginModal">
                                <i class="fa fa-sign-in mr-1 login_button"></i><span class="login_button">Login / Register</span> </a>
    @endif
                        </li>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                    </ul>
                    <!-- Search content bar.// -->
                    <div class="top-search navigation-shadow">
                        <div class="container">
                            <div class="input-group ">
                                <form action="#">

                                    <div class="row no-gutters mt-3">
                                        <div class="col">
                                            <input class="form-control border-secondary border-right-0 rounded-0"
                                                type="search" value="" placeholder="Search " id="example-search-input4">
                                        </div>
                                        <div class="col-auto">
                                            <a class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right"
                                                href="/search-result.html">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Search content bar.// -->
                </div> <!-- navbar-collapse.// -->
            </div>
        </nav>
        <!-- END NAVBAR -->
    </header>
    <!-- END HEADER -->
    <!-- CAROUSEL -->
@yield('body-section')

    <!-- CALL TO ACTION -->
    <section class="cta-v1 py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <h2 class="text-uppercase text-white">Looking For Transport Services?</h2>
                    <p class="text-capitalize text-white">We will assist with the Best & Comprehensive services for you</p>

                </div>
                <div class="col-lg-3">
                    <a href="javascript:void(null)" class="btn btn-light text-uppercase" data-toggle="modal" data-target="#quoteModal">request a quote
                        <i class="fa fa-angle-right ml-3 arrow-btn "></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- END CALL TO ACTION -->

    <!-- Footer  -->
    <footer>
        <div class="wrapper__footer bg-theme-footer">
            <div class="container">
                <div class="row">
                    <!-- ADDRESS -->
                    <div class="col-md-4">
                        <div class="widget__footer">
                            <figure>
                                <img src="/upload_files/{{$settings->logo}}" alt="" class="logo-footer">
                            </figure>
                            <p>
                            {{$settings->footer_description}} 

                            </p>

                            <ul class="list-unstyled mb-0 mt-3">
                                <li> <b> <i class="fa fa-map-marker"></i></b><span>{{$settings->address}}</span> </li>
                                <li> <b><i class="fa fa-phone"></i></b><span>{{$settings->landline}}</span> </li>
                                <li> <b><i class="fa fa-mobile"></i></b><span>{{$settings->mobile}}</span> </li>
                                <li> <b><i class="fa fa-envelope"></i></b><span>{{$settings->email}}</span> </li>
                                {{-- <li> <b><i class="fa fa-clock-o"></i></b><span>Mon - Sun / 9:00AM - 8:00PM</span> </li> --}}
                            </ul>
                        </div>

                    </div>
                    <!-- END ADDRESS -->

                    <!-- QUICK LINKS -->
                    <div class="col-md-4">
                        <div class="widget__footer">
                            <h4 class="footer-title">Quick Links</h4>
                            <div class="link__category-two-column">
                                <ul class="list-unstyled ">
                                    <li class="list-inline-item">
                                        <a href="/">Home</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="/about">About</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="/service">Service</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="/contact">Contact</a>
                                    </li>

                                    <li class="list-inline-item">
                                        <a href="javascript:void(null)">Login</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(null)">Register</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END QUICK LINKS -->


                    <!-- NEWSLETTERS -->
                    <div class="col-md-4">
                        <div class="widget__footer">
                            <h4 class="footer-title">follow us </h4>
                            <p class="mb-2">
                                Follow us and stay in touch to get the latest news
                            </p>
                            <p>
                                <a target="_blank" href="{{$settings->facebook}}"><button class="btn btn-social btn-social-o facebook mr-1">
                                    <i class="fa fa-facebook-f"></i>
                                </button></a>

                                <a target="_blank" href="{{$settings->twitter}}"><button class="btn btn-social btn-social-o twitter mr-1">
                                    <i class="fa fa-twitter"></i>
                                </button></a>

                                <a target="_blank" href="{{$settings->linkedin}}"><button class="btn btn-social btn-social-o linkedin mr-1">
                                    <i class="fa fa-linkedin"></i>
                                </button></a>

                                <a target="_blank" href="{{$settings->instagram}}"><button class="btn btn-social btn-social-o instagram mr-1">
                                    <i class="fa fa-instagram"></i>
                                </button></a>

                                <a target="_blank" href="{{$settings->youtube}}"><button class="btn btn-social btn-social-o youtube mr-1">
                                    <i class="fa fa-youtube"></i>
                                </button></a>
                            </p>
                            <br>
                            <h4 class="footer-title">newsletter</h4>
                            <!-- Form Newsletter -->
                            <div class="widget__form-newsletter ">
                                <p>

                                    Don’t miss to subscribe to our news feeds, kindly fill the form below
                                </p>
                                <div class="mt-3">
                                <form id="news_form" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}     
                                    <input name="email" type="text" class="form-control mb-2" placeholder="Your email address">

                                    <button onclick="newssendMail()" class="btn btn-primary btn-block text-capitalize" type="button">subscribe

                                    </button>
                                </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- END NEWSLETTER -->
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="bg__footer-bottom-v1">
            <div class="container">
                <div class="row flex-column-reverse flex-md-row">
                    <div class="col-md-6">
                        <span>
                            © 2021 
                             Copy Right
                            <a href="#">Treight Portal</a>
                        </span>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-inline ">
                            <li class="list-inline-item">
                                <a href="/">
                                    Home
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="/about">
                                    About
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="/service">
                                    Service
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="/contact">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer  -->
    </footer>

    <!-- SCROLL TO TOP -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TO TOP -->
<div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="quoteModalModalLabel" aria-hidden="true">
  		<div class="modal-dialog" role="document">
    	<div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="quoteModalModalLabel">Get Quote</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">      
            <form id="quote_form" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}  
    		 <div class="row">
                <div class="col-md-12">
               
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Your name <span class="required"></span></label>
                                <input type="text" class="form-control" name="name" required="">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Your email <span class="required"></span></label>
                                <input type="email" class="form-control" name="email" required="">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Mobile Number <span class="required"></span></label>
                                <input type="text" class="form-control" name="mobile" required="">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Subject <span class="required"></span></label>
                                <input type="text" class="form-control" name="subject" required="">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Your message </label>
                                <textarea class="form-control" rows="9" name="message"></textarea>
                            </div>
                            <div class="form-group float-right mb-0">
                                <button onclick="sendquotemail()" type="button" class="btn btn-primary btn-contact">Send</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
			</div>
    </div>
  </div>
</div>
</div>



 


	{{-- login model start --}}
	 <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
  		<div class="modal-dialog" role="document">
    	<div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="loginModal">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
                <div class="col-lg-12">
                    <!-- Form Login -->
                    <div class="card mx-auto" style="max-width: 380px;">
                        <div class="card-body">
                            {{-- <h4 class="card-title mb-4">Sign in</h4> --}}
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                                {{-- <a href="#" class="btn btn-facebook btn-block mb-2 text-white"> <i class="fa fa-facebook"></i> &nbsp; Sign in with Facebook</a>
                                <a href="#" class="btn btn-primary btn-block mb-4"> <i class="fa fa-google"></i> &nbsp; Sign in with Google</a> --}}
                                <div class="form-group">
                                    <input placeholder="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> <!-- form-group// -->
                                <div class="form-group">
                                    <input placeholder="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> <!-- form-group// -->

                                <div class="form-group">
                                    <a href="#" class="float-right">Forgot password?</a>
                                    <label class="float-left custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked="">
                                        <span class="custom-control-label"> Remember </span>
                                    </label>
                                </div> <!-- form-group form-check .// -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block"> Login </button>
                                </div> <!-- form-group// -->
                            </form>
                        </div> <!-- card-body.// -->
                    </div> <!-- card .// -->

                    <p class="text-center mt-4">Don't have account? <a href="javascript:void(null)" onclick="loginTOregisterForm()">Sign up</a></p>
                </div>
            </div>
     
      </div>
    
    </div>
  </div>
</div>


	 <div class="modal fade" id="calculatorModal" tabindex="-1" role="dialog" aria-labelledby="calculatorModal" aria-hidden="true">
  		<div class="modal-dialog" role="document">
    	<div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="calculatorModal">Calculation Result</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">

  <form class="col-lg-12">
  <fieldset>
    <div class="form-group">
      <label for="disabledTextInput">total Km</label>
      <input type="text" readonly class="form-control" id="total_kmpl">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">total Amount</label>
      <input type="text" readonly class="form-control" id="total_cal_val">
    </div>
        @if(Auth::check())
      <div id="cod_field" class="radio radio-primary form-group">
            <input checked id="payment_type1" type="radio" name="payment_type" value="0" checked>
              <label for="payment_type1" class="label-brand text-capitalize">
                COD(Cash on Delivery)
           </label>
        </div>
        <button id="savebooking" onclick="SaveBooking()" type="button" class="btn btn-primary">Book Now</button>
        @else
        {{-- <button class="btn btn-primary" data-toggle="modal" 
    data-target="#loginModal">Login to Book</button> --}}
        @endif
  </fieldset>
</form>
     </div>
     
      </div>
    
    </div>
    </div>
    </div>
    

{{-- login model end --}}
	{{-- register model start --}}
	 <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalModalLabel" aria-hidden="true">
  		<div class="modal-dialog" role="document">
    	<div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="registerModalModalLabel">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   <div class="row">
                <div class="col-lg-12">
                    <!-- Form Register -->

                    <div class="card mx-auto" style="max-width:520px;">
                        <div class="card-body">
                            {{-- <h4 class="card-title mb-4">Sign in</h4> --}}
                            <form id="registerform" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                              <!-- form-row end.// -->
							        <div class="form-group">
                                        <label>Select Business Type</label>
                                        <select class="form-control" id="business_type" name="business_type">
                                            <option>Individual</option>
                                            <option>Business</option>
                                         
                                        </select>
                                    </div> <!-- form-group end.// -->
                             
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name="name" id="name" type="text" class="form-control" placeholder="">
                                    <small class="form-text text-muted">We'll never share your Name with anyone
                                        else.</small>
                                </div> 
                                <div class="form-group hide_field" id="company_name">
                                    <label>Company Name</label>
                                    <input name="company_name" id="company_name" type="text" class="form-control" placeholder="">
                                    <small class="form-text text-muted">We'll never share your Company Name with anyone
                                        else.</small>
                                </div> 
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" id="email" type="email" class="form-control" placeholder="">
                                    <small class="form-text text-muted">We'll never share your email with anyone
                                        else.</small>
                                </div> 
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input name="mobile" id="mobile" type="text" class="form-control" placeholder="">
                                    <small class="form-text text-muted">We'll never share your Mobile Number with anyone
                                        else.</small>
                                </div> 
                                
                             
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Create password</label>
                                        <input name="password" id="password" class="form-control" type="password">
                                    </div> <!-- form-group end.// -->
                                    <div class="form-group col-md-6">
                                        <label>Repeat password</label>
                                        <input name="password_confirmation" id="password_confirmation" class="form-control" type="password">
                                    </div> <!-- form-group end.// -->
                                </div>
                                <div class="form-group">
                                    <button onclick="Saveregister()" type="button" class="btn btn-primary btn-block"> Register </button>
                                </div> <!-- form-group// -->
                                <div class="form-group">
                                    <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked="">
                                        <span class="custom-control-label"> I am agree with <a href="#">terms and
                                                contitions</a> </span>
                                    </label>
                                </div> <!-- form-group end.// -->
                            </form>
                        </div><!-- card-body.// -->
                    </div>
                </div>
            </div>
    
    </div>
  </div>
</div>
{{-- register model end --}}

{{-- login model end --}}
	{{-- register model start --}}
	 
{{-- register model end --}}


    <script src="/web/js/index.bundle.js?fd365619e86ad9137a29"></script>

	@yield('extra-js')
    <script src="{{ asset('assets/toastr/toastr.min.js')}}" type="text/javascript"></script>
    @yield('scripts')
<script>
function loginTOregisterForm(){

	$('#loginModal').modal('toggle');
	showRegisterForm();

}
function showRegisterForm(){

	$('#registerformCall').click();
}
$('#business_type').change(function(){
	var data =$(this).val();
	if(data == "Business"){
		$('#company_name').removeClass('hide_field');
	}else{
		$('#company_name').addClass('hide_field');
	}
});

function newssendMail(){
  var formData = new FormData($('#news_form')[0]);
    $.ajax({
        url : '/newsletter-send-mail',
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(data)
        {                
            $("#news_form")[0].reset();
            toastr.success(data, 'Successfully Send');
        },error: function (data) {
            var errorData = data.responseJSON.errors;
            $.each(errorData, function(i, obj) {
            toastr.error(obj[0]);
      });
    }
    });
}

function sendquotemail(){
  var formData = new FormData($('#quote_form')[0]);
    $.ajax({
        url : '/contact-send-mail',
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(data)
        {                
            $("#quote_form")[0].reset();
            toastr.success(data, 'Successfully Send');
            location.reload();
        },error: function (data) {
            var errorData = data.responseJSON.errors;
            $.each(errorData, function(i, obj) {
            toastr.error(obj[0]);
      });
    }
    });
}

function Saveregister(){
  //alert($("#service_id").val());
  var formData = new FormData($('#registerform')[0]);
  $.ajax({
      url : '/save-user-register',
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      dataType: "JSON",
      success: function(data)
      {
        console.log(data);                
        toastr.success('Saved Successfully');
        location.reload();
      },
      error: function (data, errorThrown) {
        var errorData = data.responseJSON.errors;
        $.each(errorData, function(i, obj) {
          toastr.error(obj[0]);
        });
      }
  });
}

function SaveBooking(){
    var formData = new FormData($('#booking_form')[0]);
    $("#savebooking").attr("disabled", true);
    $.ajax({
        url : '/user/save-booking',
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(data)
        {                
            window.location.href = '/user/booking';
            toastr.success('Saved Successfully');
        },error: function (data) {
            var errorData = data.responseJSON.errors;
            $.each(errorData, function(i, obj) {
                toastr.error(obj[0]);
                $("#savebooking").attr("disabled", false);
            });
        }
    });
}

function openService(id){
    window.location.href = "/user/booking-details/"+id;
    
}
</script>
</body>

</html>