@extends('website.layouts')
@section('extra-css')
<style>
	.navbar-transparent {
    box-shadow: 0 2px 3px rgb(100 100 100 / 10%);
    background-color: #233564;
}
.bg-theme-overlay {
    background-image: url(/web/images/braedcum.jpg);
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
                            <?php echo html_entity_decode($settings->about_us); ?>
   
                        </p>
                  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__image">
                        <div class="about__image-top">
                            <div class="about__image-top-hover">
                                <img src="/upload_files/{{$settings->about2_image}}" alt="" class="img-fluid">
                            </div>

                        </div>
                        <div class="about__image-bottom">
                            <div class="about__image-bottom-hover">
                                <img src="/upload_files/{{$settings->about1_image}}" alt="" class="img-fluid">
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