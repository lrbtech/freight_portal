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
                            <h2 class="text-capitalize text-white">Our Services</h2>
                            <ul class="list-inline ">
                                <li class="list-inline-item">
                                    <a href="/" class="text-white">
                                        home
                                    </a>
                                </li>
                                
                                <li class="list-inline-item">
                                    <a href="/service" class="text-white">
                                        Our Services
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
		<section>
        <div class="profile__agency">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <!-- ARCHIVE CATEGORY -->
                        <div class=" wrapper__list__category">
                            <!-- CATEGORY -->
                            <div class="widget widget__archive">
                                <div class="widget__title">
                                    <h5 class="text-dark mb-0 text-center">Service availability</h5>
                                </div>
                                <ul class="list-unstyled">
									@foreach($service as $row)
                                    <?php 
                                    $service_count = 1;
                                    foreach($assign_truck as $truck){
                                        if($row->id == $truck->service_id){
                                            $service_count++;
                                        }
                                    }
                                    ?>
                                    <li>
                                        <a href="#" class="text-capitalize">
                                            {{$row->service_name}}
                                            <span class="badge badge-primary">{{$service_count}}</span>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- END CATEGORY -->
                        </div>
                        <!-- End ARCHIVE CATEGORY -->
                   

                    </div>
                    <div class="col-lg-8">
                        <div class="row">
								@foreach($service as $row)
                                <?php 
                                    $service_count = 1;
                                    foreach($assign_truck as $truck){
                                        if($row->id == $truck->service_id){
                                            $service_count++;
                                        }
                                    }
                                    ?>
                            <div class="col-lg-6" style="padding:10px">
                             
                                     @if(Auth::check())
                        <div class="cards mt-0" onclick="openService({{$row->id}})">
                        @else
                        <div class="cards mt-0" data-toggle="modal" 
    data-target="#loginModal">
                        @endif
                                    <div class="profile__agency-header">
                                        <a href="#" class="profile__agency-logo">
                                            <img src="/upload_files/{{$row->image}}" alt="" class="img-fluid">
                                            <div class="total__property-agent">{{$service_count}} Available</div>
                                        </a>
                                    </div>
                                    <div class="profile__agency-body">
                                        <div class="profile__agency-info">
                                            <h5 class="text-capitalize">
                                                <a href="#" target="_blank">{{$row->service_name}}</a>
                                            </h5>
                                            <p class="text-capitalize mb-1">{{$row->rate_per_km}}  AED Per Km 
                                            </p>
                                        
                                        

                                        </div>
                                    </div>
                                </div>
                            </div>
							 @endforeach

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