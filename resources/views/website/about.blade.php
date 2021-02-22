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
                            <h2 class="text-capitalize text-white">about us</h2>
                            <ul class="list-inline ">
                                <li class="list-inline-item">
                                    <a href="/" class="text-white">
                                        home
                                    </a>
                                </li>
                                
                                <li class="list-inline-item">
                                    <a href="/about" class="text-white">
                                        about us
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
		<section class="home__about bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title__leading">
                        <h6 class="text-uppercase text-primary mb-3">"Knowing us"</h6>
                        <h2 class="text-capitalize">Move With Expertise.!</h2>
                        <p>
                            Swift & Affable, we offer professional transportation services throughout the United Arab Emirates. Our squad is up for the job, from Large to Tiny. Assuring our customers that we stand with our work, putting your satisfaction as our #1 priority. What really makes us stand out is our dedication, great prices, and attention to detail.
Contact us to learn more from one of our expert staff on how our professional team can help you!
                        </p>
                  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__image">
                        <div class="about__image-top">
                            <div class="about__image-top-hover">
                                <img src="/web/images/img-03.jpg" alt="" class="img-fluid">
                            </div>

                        </div>
                        <div class="about__image-bottom">
                            <div class="about__image-bottom-hover">
                                <img src="/web/images/img-02.jpg" alt="" class="img-fluid">
                            </div>
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
		</script>
        @endsection