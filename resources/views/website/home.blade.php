@extends('website.layouts')
@section('body-section')
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcmxZ2i6FQ0--w87BgqBoTxfpOCsbq3tw&sensor=false&libraries=places,geometry"></script>
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJVx3zT9hboFoiFrHxZAPi_hX4yhPF_v8&sensor=false&libraries=places,geometry"></script> -->
<style type="text/css">
.input-controls {
  margin-top: 10px;
  border: 1px solid transparent;
  border-radius: 2px 0 0 2px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  height: 32px;
  outline: none;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}
#searchInput {
  background-color: #fff;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
  margin-left: 12px;
  padding: 0 11px 0 13px;
  text-overflow: ellipsis;
  width: 50%;
}
#searchInput:focus {
  border-color: #4d90fe;
}
.hide{
    visibility: hidden;
}
.hide{
visibility: visible;
}

    .pac-container {
        z-index: 10000 !important;
    }
</style>	
    <!-- CAROUSEL -->
    <div class="slider-container">
        <div class="container-slider-image-full  ">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators d-none">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    @foreach($slider as $key => $row)
                    @if($key+1 == 1)
                    <div class="carousel-item active banner-max-height">
                        <img class="d-block w-100" src="/upload_files/{{$row->image}}" alt="First slide">
                        <div class="carousel-caption banner__slide-overlay d-flex h-100">
                            <div class="carousel__content">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 col-md-12 col-sm-12 text-center">
                                            <div class="slider__content-title ">
                                                <h2 data-animation="fadeInDown" data-delay=".2s" data-duration="1000ms"
                                                    class="text-white animated fadeInDown">
                                                    {{$row->slider_name}}</h2>
                                                <p data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms"
                                                    class="text-white animated fadeInUp">

                                                    {{$row->description}}
                                                </p>
                                                <a href="{{$row->button_link}}" data-animation="fadeInUp" data-delay=".6s"
                                                    data-duration="1000ms"
                                                    class="btn btn-primary text-uppercase animated fadeInUp">
                                                    {{$row->button_name}}
                                                    <i class="fa fa-angle-right arrow-btn "></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else 
                    <div class="carousel-item banner-max-height">
                        <img class="d-block w-100" src="/upload_files/{{$row->image}}" alt="First slide">
                        <div class="carousel-caption banner__slide-overlay d-flex h-100">
                            <div class="carousel__content">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 col-md-12 col-sm-12 text-center">
                                            <div class="slider__content-title ">
                                                <h2 data-animation="fadeInDown" data-delay=".2s" data-duration="1000ms"
                                                    class="text-white animated fadeInDown">
                                                    {{$row->slider_name}}</h2>
                                                <p data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms"
                                                    class="text-white animated fadeInUp">

                                                    {{$row->description}}
                                                </p>
                                                <a href="{{$row->button_link}}" data-animation="fadeInUp" data-delay=".6s"
                                                    data-duration="1000ms"
                                                    class="btn btn-primary text-uppercase animated fadeInUp">
                                                    {{$row->button_name}}
                                                    <i class="fa fa-angle-right arrow-btn "></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <!-- <div class="carousel-item banner-max-height">
                        <img class="d-block w-100" src="/web/images/slider.jpg" alt="Second slide">
                        <div class="carousel-caption banner__slide-overlay d-flex h-100">
                            <div class="carousel__content">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 col-md-12 col-sm-12 text-center">
                                            <div class="slider__content-title ">
                                                <h2 data-animation="animated fadeInDown"
                                                    class="text-white animated fadeInDown">
                                                    The #1 Tow Truck Services In UAE</h2>
                                                <p data-animation="animated fadeInUp"
                                                    class="text-white animated fadeInUp ">
                                                    We always work on 24x7.
                                                </p>
                                                <a href="#" class="btn btn-primary text-uppercase animated fadeInUp">
                                                    contact us
                                                    <i class="fa fa-angle-right arrow-btn "></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                 
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span> -->
                <span class="carousel-control-nav-prev">
                    <i class="fa fa-2x fa-angle-left"></i>
                </span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span> -->
                <span class="carousel-control-nav-next">
                    <i class="fa fa-2x fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div>

    <div class="clearfix"></div>
    <!-- END CAROUSEL -->
    <!-- END CAROSUEL -->
    <div class="clearfix"></div>

    <div class="search__area search__area-1" id="search__area-1">
        <div class="container">
            <div class="search__area-inner">
            <form id="booking_form" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-3">
                        <div class="form-group">
                            <select onchange="getService()" name="service_id" id="service_id" class="wide select_option">
                                <option value="">Choose Service</option>
                                @foreach($service as $row)
                                <option value="{{$row->id}}">{{$row->service_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-3">
                        <div class="form-group">
                            <input value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d', strtotime("+0 days")); ?>" max="<?php echo date('Y-m-d', strtotime("+60 days")); ?>" class="form-control" id="booking_date" name="booking_date" type="date">
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-3">
                        <div class="form-group">
                            <input class="form-control" id="booking_time" name="booking_time" type="time">
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-3">
                        <div class="form-group">
                            <input placeholder="From Location" autocomplete="off" type="text" id="from_address" name="from_address" class="form-control">
                            <input readonly type="hidden" id="from_latitude" name="from_latitude" class="form-control">
                            <input readonly type="hidden" id="from_longitude" name="from_longitude" class="form-control">
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-3">
                        <div class="form-group">
                            <input placeholder="To Location" autocomplete="off" type="text" id="to_address" name="to_address" class="form-control">
                            <input readonly type="hidden" id="to_latitude" name="to_latitude" class="form-control">
                            <input readonly type="hidden" id="to_longitude" name="to_longitude" class="form-control">                        
                        </div>
                    </div>
                    <!-- <div class="col-6 col-lg-3 col-md-3">
                        <div class="form-group">
                            <select class="wide select_option">
                                <option data-display="Bathrooms">Bathrooms</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </div> -->
                    <div class="col-12 col-lg-3 col-md-3">
                        <div class="form-group">
                            <div class="filter__price">
                                <div id="show_rate_per_km" class="radio radio-primary">
                                    <input checked id="billing_type1" type="radio" name="billing_type" value="1">
                                    <label for="billing_type1" class="label-brand text-capitalize">
                                        Rate Per Km
                                    </label>
                                </div>
                                <div id="show_rate_per_km_loaders" class="radio radio-primary">
                                    <input id="billing_type2" type="radio" name="billing_type" value="2">
                                    <label for="billing_type2" class="label-brand text-capitalize">
                                        Rate Per Km with Loaders
                                    </label>
                                </div>
                                <input readonly class="form-control" name="total_km" id="total_km" type="hidden">
                                <input readonly name="service_name" id="service_name" type="hidden">
                                <input readonly name="rate_per_km" id="rate_per_km" type="hidden">
                                <input readonly name="rate_per_km_loaders" id="rate_per_km_loaders" type="hidden">
                                <input readonly class="form-control" name="sub_total" id="sub_total" type="hidden">
                                <input readonly class="form-control" name="vat_amount" id="vat_amount" type="hidden">
                                <input readonly class="form-control" name="total" id="total" type="hidden">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-3">
                        <div class="form-group">
                            <button type="button" id="calculate" class="btn btn-primary text-uppercase btn-block" onclick="billingType()"> Calculate 
                                <i class="fa fa-calculator ml-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
                </form>

            </div>
        </div>
    </div>




    <!-- FEATURED PROPERTIES -->
    <section class="featured__property space-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 mx-auto">
                    <div class="title__head">
                        <h2 class="text-center text-capitalize">
                            exclusive services
                        </h2>
                        <!-- <p class="text-center text-capitalize">handpicked exclusive Services.</p> -->

                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="featured__property-carousel owl-carousel owl-theme">

						@foreach($service as $row)
                        @if(Auth::check())
                        <div class="item" onclick="openService({{$row->id}})">
                        @else
                        <div class="item" data-toggle="modal" 
    data-target="#loginModal">
                        @endif
                            <!-- ONE -->
                            <div class="card__image card__box">
                                <div class="card__image-header h-250">
                                    <div class="ribbon text-uppercase">Available</div>
                                    <img src="/upload_files/{{$row->image}}" alt="" class="img-fluid w100 img-transition">
                                    <div class="info"> for Hire</div>
                                </div>
                                <div class="card__image-body">
                                   
                                    <h6 class="text-capitalize">
                                        {{$row->service_name}}
                                    </h6>

                                    <p class="text-capitalize">
                                        <i class="fa fa-map-marker"></i>
                                        {{$row->rate_per_km}} AED Per Km
                                    </p>
                               
                                </div>
                           
                            </div>
                        </div>
						@endforeach

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END FEATURED PROPERTIES -->

    <!-- TESTIMONIAL -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 mx-auto">
                    <div class="title__head">
                        <h2 class="text-center text-capitalize">
                        What People Say
                        </h2>
                        <p class="text-center text-capitalize">Expressions About Treight Portal</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="testimonial owl-carousel owl-theme">
                <!-- TESTIMONIAL -->
                @foreach($testimonials as $row)
                <div class="item testimonial__block">
                    <div class="testimonial__block-card bg-reviews">
                        <p>
                            {{$row->description}}
                        </p>
                    </div>
                    <div class="testimonial__block-users">
                        <!-- <div class="testimonial__block-users-img">
                            <img src="/upload_files/{{$row->image}}" alt="" class="img-fluid">
                        </div> -->
                        <div class="testimonial__block-users-name">
                        {{$row->name}} <br>
                            <span>{{$row->location}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- END TESTIMONIAL -->
               

            </div>
        </div>
    </section>
    <!-- END TESTIMONIAL -->



<div class="modal fade" id="from_address_modal"  tabindex="-1" role="dialog" aria-labelledby="from_address_modal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Add New</h5>
       
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
        <!-- <form id="address_form" method="POST" enctype="multipart/form-data"> -->
        <div class="row">
            <div class="form-group col-md-12">
                <label>Enter a location</label>
                <input id="searchInput" name="searchInput" class="input-controls form-control" type="text" placeholder="Enter a location">
                <div class="map" id="map" style="width: 100%; height: 300px;"></div>
            </div>
        </div>

        <!-- <div class="row">
            <div class="form-group col-md-12">
                <label class="col-form-label">Address</label>
                
            </div>
        </div>  -->

        <!-- </form> -->
        </div>
        <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
        <!-- <button onclick="SaveAddress()" class="btn btn-primary" type="button">Save</button> -->
        </div>
    </div>
    </div>
</div> 

<div class="modal fade" id="to_address_modal"  tabindex="-1" role="dialog" aria-labelledby="to_address_modal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Add New</h5>
       
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
        <!-- <form id="address_form" method="POST" enctype="multipart/form-data"> -->
        <div class="row">
            <div class="form-group col-md-12">
                <label>Enter a location</label>
                <input id="searchInput1" name="searchInput1" class="input-controls form-control" type="text" placeholder="Enter a location">
                <div class="map1" id="map1" style="width: 100%; height: 300px;"></div>
            </div>
        </div>

        <!-- <div class="row">
            <div class="form-group col-md-12">
                <label class="col-form-label">Address</label>
                <input readonly type="text" id="to_address" name="to_address" class="form-control">
                <input readonly type="hidden" id="to_latitude" name="to_latitude" class="form-control">
                <input readonly type="hidden" id="to_longitude" name="to_longitude" class="form-control">
            </div>
        </div>  -->

        <!-- </form> -->
        </div>
        <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
        <!-- <button onclick="SaveAddress()" class="btn btn-primary" type="button">Save</button> -->
        </div>
    </div>
    </div>
</div> 

        @endsection
@section('scripts')
@parent

@if($errors->has('email') || $errors->has('password'))
    <script>
    $(function() {
        $('#loginModal').modal({
            show: true
        });
    });
    </script>
@endif
@endsection

@section('extra-js')
	

<script>
    /* script */
    var from_lat='24.453884';
    var from_lng='54.3773438';
    var to_lat='24.453884';
    var to_lng='54.3773438';

    google.maps.event.addDomListener(window, 'load', initialize);
    google.maps.event.addDomListener(window, 'load', initialize1);
    function initialize() {
        var latlng = new google.maps.LatLng(from_lat, from_lng);
        var map = new google.maps.Map(document.getElementById('map'), {
            center: latlng,
            zoom: 13
        });
        var marker = new google.maps.Marker({
            map: map,
            position: latlng,
            draggable: true,
            anchorPoint: new google.maps.Point(0, -29)
        });
        var input = document.getElementById('searchInput');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        var geocoder = new google.maps.Geocoder();
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);
        var infowindow = new google.maps.InfoWindow();
        autocomplete.addListener('place_changed', function() {
            infowindow.close();
            marker.setVisible(false);
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                window.alert("Autocomplete's returned place contains no geometry");
                return;
            }

            // If the place has a geometry, then present it on a map.
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);
            }

            marker.setPosition(place.geometry.location);
            marker.setVisible(true);

            bindDataToForm(place.formatted_address, place.geometry.location.lat(), place.geometry.location.lng());
            infowindow.setContent(place.formatted_address);
            infowindow.open(map, marker);

        });
        // this function will work on marker move event into map 
        google.maps.event.addListener(marker, 'dragend', function() {
            geocoder.geocode({
                'latLng': marker.getPosition()
            }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        bindDataToForm(results[0].formatted_address, marker.getPosition().lat(), marker.getPosition().lng());
                        infowindow.setContent(results[0].formatted_address);
                        infowindow.open(map, marker);
                    }
                }
            });
        });
    }

    function initialize1() {
        var latlng = new google.maps.LatLng(to_lat, to_lng);

        var map = new google.maps.Map(document.getElementById('map1'), {
            center: latlng,
            zoom: 13
        });
        var marker = new google.maps.Marker({
            map: map,
            position: latlng,
            draggable: true,
            anchorPoint: new google.maps.Point(0, -29)
        });
        var input = document.getElementById('searchInput1');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        var geocoder = new google.maps.Geocoder();
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);
        var infowindow = new google.maps.InfoWindow();
        autocomplete.addListener('place_changed', function() {
            infowindow.close();
            marker.setVisible(false);
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                window.alert("Autocomplete's returned place contains no geometry");
                return;
            }

            // If the place has a geometry, then present it on a map.
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);
            }

            marker.setPosition(place.geometry.location);
            marker.setVisible(true);

            bindDataToForm1(place.formatted_address, place.geometry.location.lat(), place.geometry.location.lng());
            infowindow.setContent(place.formatted_address);
            infowindow.open(map, marker);

        });
        // this function will work on marker move event into map 
        google.maps.event.addListener(marker, 'dragend', function() {
            geocoder.geocode({
                'latLng': marker.getPosition()
            }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        bindDataToForm1(results[0].formatted_address, marker.getPosition().lat(), marker.getPosition().lng());
                        infowindow.setContent(results[0].formatted_address);
                        infowindow.open(map, marker);
                    }
                }
            });
        });
    }

    function bindDataToForm(address, lat, lng) {
        document.getElementById('from_address').value = address;
        document.getElementById('from_latitude').value = lat;
        document.getElementById('from_longitude').value = lng;
        distanceCalculate();
    }
    function bindDataToForm1(address, lat, lng) {
        document.getElementById('to_address').value = address;
        document.getElementById('to_latitude').value = lat;
        document.getElementById('to_longitude').value = lng;
        distanceCalculate();
    }


function distanceCalculate(){
    var latitude1 = $('#from_latitude').val();
    var longitude1 = $('#from_longitude').val();
    var latitude2 = $('#to_latitude').val();
    var longitude2 = $('#to_longitude').val();
    // var distance = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(latitude1, longitude1), new google.maps.LatLng(latitude2, longitude2));     

    var source = $('#from_address').val();
    var destination = $('#to_address').val();

    var service = new google.maps.DistanceMatrixService();
    service.getDistanceMatrix({
        origins: [source],
        destinations: [destination],
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.METRIC,
        avoidHighways: false,
        avoidTolls: false
    }, function (response, status) {
        if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
            var distance1 = response.rows[0].elements[0].distance.text;
            var duration = response.rows[0].elements[0].duration.text;
            // var dvDistance = document.getElementById("dvDistance");
            // dvDistance.innerHTML = "";
            // dvDistance.innerHTML += "Distance: " + distance + "<br />";
            // dvDistance.innerHTML += "Duration:" + duration;

            var distance = distance1.replace(/\s{2,}/g, ' ').split(' ');
            $("#total_km").val(distance[0]);
           // billingType();

        } else {
            alert("Unable to find the distance via road.");
        }
    });

    var service_id = $('#service_id').val();
    var booking_date = $('#booking_date').val();
    var booking_time = $('#booking_time').val();
    var from_address = $('#from_address').val();
    var to_address = $('#to_address').val();
    var billing_type = $('#billing_type').val();
    if(service_id != '' && booking_date != '' && booking_time != '' && from_address != '' && to_address != '' && billing_type != ''){
        $("#calculate").attr("disabled", false);
    }
    else{
        $("#calculate").attr("disabled", true);
    }
    
}


function billingType() {
 
  var total_km = Number($('#total_km').val());
  var rate_per_km =Number($('#rate_per_km').val());
  var rate_per_km_loaders = Number($('#rate_per_km_loaders').val());
  var sub_total = 0;

  var billing_type = $("input[name='billing_type']:checked").val();

  if(billing_type == '1'){
    sub_total = Number(total_km) * rate_per_km;
  }
  else if(billing_type == '2'){
    sub_total = Number(total_km) * rate_per_km_loaders;
  }

  sub_total =  Number(sub_total.toFixed(2));

  $("#sub_total").val(sub_total);

    vat_amount = Number((5/100) * sub_total);
    vat_amount =  Number(vat_amount.toFixed(2));
    $("#vat_amount").val(vat_amount);


  total = Number(sub_total + vat_amount);
  total =  Number(total.toFixed(2));
  $("#total").val(total);
  $("#total_kmpl").val(total_km);
  $("#total_cal_val").val(total);
    $('#calculatorModal').modal({
        show: true
    });

}

$('#from_address').click(function(){
    $('#from_address_modal').modal('show');
    //$("#address_form")[0].reset();
    $('#saveButton').text('Save');
    $('#modal-title').text('Search Address');
});

$('#to_address').click(function(){
    $('#to_address_modal').modal('show');
    //$("#address_form")[0].reset();
    $('#saveButton').text('Save');
    $('#modal-title').text('Search Address');
});

$('#from_address').keydown(function(){
    $('#from_address_modal').modal('show');
    //$("#address_form")[0].reset();
    $('#saveButton').text('Save');
    $('#modal-title').text('Search Address');
});

$('#to_address').keydown(function(){
    $('#to_address_modal').modal('show');
    //$("#address_form")[0].reset();
    $('#saveButton').text('Save');
    $('#modal-title').text('Search Address');
});

$('#show_rate_per_km_loaders').hide();

$("#calculate").attr("disabled", true);

$('#booking_time').blur(function(){
    var service_id = $('#service_id').val();
    var booking_date = $('#booking_date').val();
    var booking_time = $('#booking_time').val();
    var from_address = $('#from_address').val();
    var to_address = $('#to_address').val();
    var billing_type = $('#billing_type').val();
    if(service_id != '' && booking_date != '' && booking_time != '' && from_address != '' && to_address != '' && billing_type != ''){
        $("#calculate").attr("disabled", false);
    }
    else{
        $("#calculate").attr("disabled", true);
    }
});

$('#booking_date').blur(function(){
    var service_id = $('#service_id').val();
    var booking_date = $('#booking_date').val();
    var booking_time = $('#booking_time').val();
    var from_address = $('#from_address').val();
    var to_address = $('#to_address').val();
    var billing_type = $('#billing_type').val();
    if(service_id != '' && booking_date != '' && booking_time != '' && from_address != '' && to_address != '' && billing_type != ''){
        $("#calculate").attr("disabled", false);
    }
    else{
        $("#calculate").attr("disabled", true);
    }
});

$('#from_address').blur(function(){
    var service_id = $('#service_id').val();
    var booking_date = $('#booking_date').val();
    var booking_time = $('#booking_time').val();
    var from_address = $('#from_address').val();
    var to_address = $('#to_address').val();
    var billing_type = $('#billing_type').val();
    if(service_id != '' && booking_date != '' && booking_time != '' && from_address != '' && to_address != '' && billing_type != ''){
        $("#calculate").attr("disabled", false);
    }
    else{
        $("#calculate").attr("disabled", true);
    }
});

$('#to_address').blur(function(){
    var service_id = $('#service_id').val();
    var booking_date = $('#booking_date').val();
    var booking_time = $('#booking_time').val();
    var from_address = $('#from_address').val();
    var to_address = $('#to_address').val();
    var billing_type = $('#billing_type').val();
    if(service_id != '' && booking_date != '' && booking_time != '' && from_address != '' && to_address != '' && billing_type != ''){
        $("#calculate").attr("disabled", false);
    }
    else{
        $("#calculate").attr("disabled", true);
    }
});

$('#service_id').blur(function(){
    var service_id = $('#service_id').val();
    var booking_date = $('#booking_date').val();
    var booking_time = $('#booking_time').val();
    var from_address = $('#from_address').val();
    var to_address = $('#to_address').val();
    var billing_type = $('#billing_type').val();
    if(service_id != '' && booking_date != '' && booking_time != '' && from_address != '' && to_address != '' && billing_type != ''){
        $("#calculate").attr("disabled", false);
    }
    else{
        $("#calculate").attr("disabled", true);
    }
});

function getService(id){
    var service_id = $('#service_id').val();
    var booking_date = $('#booking_date').val();
    var booking_time = $('#booking_time').val();
    var from_address = $('#from_address').val();
    var to_address = $('#to_address').val();
    var billing_type = $('#billing_type').val();
    if(service_id != '' && booking_date != '' && booking_time != '' && from_address != '' && to_address != '' && billing_type != ''){
        $("#calculate").attr("disabled", false);
    }
    else{
        $("#calculate").attr("disabled", true);
    }
    $.ajax({
        url : '/get-service-data/'+service_id,
        type: "GET",
        success: function(data)
        {
            $('input[name=service_name]').val(data.service_name);
            $('input[name=rate_per_km]').val(data.rate_per_km);
            if( data.rate_per_km_loaders > '0'){
                $('input[name=rate_per_km_loaders]').val(data.rate_per_km_loaders);
                $('#show_rate_per_km_loaders').show();
            }
            else{
                $('#show_rate_per_km_loaders').hide();
            }
            
        }
    });
}
</script>

@endsection