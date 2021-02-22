@extends('website.layouts')
@section('extra-css')
<style>
	.navbar-transparent {
    box-shadow: 0 2px 3px rgb(100 100 100 / 10%);
    background-color: #233564;
}
.bg-theme-overlay {
    background-image: url(/web/images/slider1.jpg);
    width: 100%;
    background-position: center 50%;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -moz-background-size: cover;
    position: relative;
}
</style>
@endsection
@section('body-section')
	
		<div class="clearfix"></div>
		  <div class="clearfix"></div>
		    <div class="clearfix"></div>
			<br>
			<br>
			<br>
			<div class="bg-theme-overlay">
            <section class="section__breadcrumb ">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 text-center">
                            <h2 class="text-capitalize text-white">contact us</h2>
                            <ul class="list-inline ">
                                <li class="list-inline-item">
                                    <a href="/" class="text-white">
                                        home
                                    </a>
                                </li>
                                
                                <li class="list-inline-item">
                                    <a href="/contact" class="text-white">
                                        contact us
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
	<section class="wrap__contact-form">
        <div class="container">
        <form id="contact_form" method="POST" enctype="multipart/form-data">
         {{ csrf_field() }}
            <div class="row">
                <div class="col-md-8">
                    <h5>contact us</h5>
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
                                <label>Mobile <span class="required"></span></label>
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
                                <button onclick="sendMail()" type="button" class="btn btn-primary btn-contact">Submit</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
                </form>


                <div class="col-md-4">
                    <div class="wrap__contact-open-hours">
                        <h5 class="text-capitalize">open hours</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center justify-content-between"><span>Monday - Friday</span>
                                <span>09 AM - 19 PM</span></li>
                            <li class="d-flex align-items-center justify-content-between"><span>Saturday</span> <span>09
                                    AM - 14 PM</span></li>
                            <li class="d-flex align-items-center justify-content-between"><span>Sunday</span>
                                <span>Closed</span></li>
                        </ul>
                    </div>
                    <h5>Info location</h5>
                    <div class="wrap__contact-form-office">
                        <ul class="list-unstyled">
                            <li>
                                <span>
                                    <i class="fa fa-home"></i>
                                </span>

                                {{$settings->address}}


                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-phone"></i>
                                    <a href="tel:">{{$settings->mobile}}</a>
                                </span>

                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-envelope"></i>
                                    <a href="mailto:">{{$settings->email}}</a>
                                </span>

                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-globe"></i>
                                    <a href="#" target="_blank"> www.treightportal.com</a>
                                </span>
                            </li>
                        </ul>

                        <div class="social__media">
                            <h5>find us</h5>
                            <ul class="list-inline">

                                <li class="list-inline-item">
                                    <a target="_blank" href="{{$settings->facebook}}" class="btn btn-social rounded text-white facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a target="_blank" href="{{$settings->twitter}}" class="btn btn-social rounded text-white twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a target="_blank" href="{{$settings->whatsapp}}" class="btn btn-social rounded text-white whatsapp">
                                        <i class="fa fa-whatsapp"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a target="_blank" href="{{$settings->instagram}}" class="btn btn-social rounded text-white telegram">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a target="_blank" href="{{$settings->linkedin}}" class="btn btn-social rounded text-white linkedin">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
        @endsection
        @section('extra-js')
		<script>
			$('.about-menu-item').addClass('current-menu-item');

function sendMail(){
  var formData = new FormData($('#contact_form')[0]);
    $.ajax({
        url : '/contact-send-mail',
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(data)
        {                
            $("#contact_form")[0].reset();
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

		</script>
        @endsection