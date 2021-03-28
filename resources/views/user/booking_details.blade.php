@extends('user.layouts')
@section('extra-css')
<link rel="stylesheet" type="text/css" href="/assets/app-assets/css/pe7-icon.css">
<link rel="stylesheet" type="text/css" href="/assets/app-assets/css/date-picker.css">
<link rel="stylesheet" type="text/css" href="/assets/app-assets/css/sweetalert2.css">
<link rel="stylesheet" type="text/css" href="/assets/app-assets/css/timepicker.css">
<link rel="stylesheet" type="text/css" href="/assets/app-assets/css/select2.css">
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcmxZ2i6FQ0--w87BgqBoTxfpOCsbq3tw&sensor=false&libraries=places,geometry"></script>

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

</style> 
<style>
    .pac-container {
        z-index: 10000 !important;
    }
</style>
@endsection
@section('section')
      <!-- Right sidebar Ends-->
      <form id="form" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type="hidden" name="user_id" id="user_id">
      <div class="page-body vertical-menu-mt">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-6 main-header">
                  <h2>New <span>Booking  </span></h2>
                </div>
            </div>
          </div>
      </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">

            <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Booking Date & Time</h5>
                    <!-- <span>ss</span> -->
                  </div>
                    <div class="card-body megaoptions-border-space-sm">

                      <div class="row">
                        <div class="col-md-6">
                          <label>Booking Date</label>
                          <input min="<?php echo date('Y-m-d', strtotime("+0 days")); ?>" max="<?php echo date('Y-m-d', strtotime("+60 days")); ?>" class="form-control" id="booking_date" name="booking_date" type="date">
                        </div>

                        <div class="col-md-6">
                          <label>Booking Time</label>
                            <input class="form-control" id="booking_time" name="booking_time" type="time">
                        </div>

                      </div>

                    </div>
                </div>
            </div>

              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Location Details</h5>
                  </div>
                  <div class="card-body megaoptions-border-space-sm">

                    <ul class="nav nav-tabs nav-material nav-primary" id="info-tab" role="tablist">
                      <li class="nav-item"><a class="nav-link active show" id="from_location_tab" data-toggle="tab" href="#from_location" role="tab" aria-controls="from_location" aria-selected="true"><i class="icofont icofont-ui-home"></i>START POINT</a>
                        <div class="material-border"></div>
                      </li>
                      <li class="nav-item"><a class="nav-link" id="to_location_tab" data-toggle="tab" href="#to_location" role="tab" aria-controls="to_location" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>REACH POINT</a>
                        <div class="material-border"></div>
                      </li>
                    </ul>

                    <div class="tab-content" id="info-tabContent">
                      <div class="tab-pane fade active show" id="from_location" role="tabpanel" aria-labelledby="from_location_tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="searchInput" name="searchInput" class="input-controls form-control" type="text" placeholder="Enter a location">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="map" id="map" style="width: 100%; height: 300px;"></div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input id="from_address" name="from_address" class="form-control"></input>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Latitude</label>
                                        <input readonly type="text" id="from_latitude" name="from_latitude" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Longitude</label>
                                        <input readonly type="text" id="from_longitude" name="from_longitude" class="form-control">
                                    </div>
                                </div>
                            </div>
                      </div>
                      <div class="tab-pane fade" id="to_location" role="tabpanel" aria-labelledby="to_location_tab">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input id="searchInput1" name="searchInput1" class="input-controls form-control" type="text" placeholder="Enter a location">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="map" id="map1" style="width: 100%; height: 300px;"></div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input id="to_address" name="to_address" class="form-control"></input>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Latitude</label>
                                    <input readonly type="text" id="to_latitude" name="to_latitude" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Longitude</label>
                                    <input readonly type="text" id="to_longitude" name="to_longitude" class="form-control">
                                </div>
                            </div>
                        </div>

                      </div>
                    </div>
                      
                  </div>
            
                </div>
              </div>


              

              <div class="col-sm-12">
                <div class="card">
                <div class="card-header">
                    <h5>Billing </h5><span>Details </span>
                  </div>
                  <div class="card-body megaoptions-border-space-sm">
                  
                  <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="media p-20">
                                    <div class="radio radio-secondary mr-3">
                                        <input checked onclick="billingType()" id="billing_type1" type="radio" name="billing_type" value="1">
                                        <label for="billing_type1"></label>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0 mega-title-badge">
                                        Rate Per Km
                                        </h6>
                                        <p>{{$service->rate_per_km}} AED</p>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="media p-20">
                                    <div class="radio radio-secondary mr-3">
                                        <input onclick="billingType()" id="billing_type2" type="radio" name="billing_type" value="2">
                                        <label for="billing_type2"></label>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0 mega-title-badge">
                                        Rate Per Km with Loaders
                                        </h6>
                                        <p>{{$service->rate_per_km_loaders}} AED</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                       </div>

                       <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="media p-20">
                                    <div class="radio radio-secondary mr-3">
                                        <input checked id="cod1" type="radio" name="cod" value="1">
                                        <label for="cod1"></label>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0 mega-title-badge">
                                        Cash on Delivery
                                        </h6>
                                    </div>
                                    </div>
                                </div>
                            </div>

                       </div>

                    <div class="row">
                      <div class="col">

                          <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Total Km</label>
                            <div class="col-sm-6">
                              <input readonly class="form-control" name="total_km" id="total_km" type="text">
                              <input value="{{$service->id}}" readonly name="service_id" id="service_id" type="hidden">
                              <input value="{{$service->service_name}}" readonly name="service_name" id="service_name" type="hidden">
                              <input value="{{$service->rate_per_km}}" readonly name="rate_per_km" id="rate_per_km" type="hidden">
                              <input value="{{$service->rate_per_km_loaders}}" readonly name="rate_per_km_loaders" id="rate_per_km_loaders" type="hidden">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Sub Total</label>
                            <div class="col-sm-6">
                              <input readonly class="form-control" name="sub_total" id="sub_total" type="text">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Vat 5%</label>
                            <div class="col-sm-6">
                              <input readonly class="form-control" name="vat_amount" id="vat_amount" type="text">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Total</label>
                            <div class="col-sm-6">
                              <input readonly class="form-control" name="total" id="total" type="text">
                            </div>
                          </div>

                      </div>
                    </div>

                  </div>
                </div>
              </div>
              
                
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-footer text-right">
                    <button id="save" onclick="Save()" class="btn btn-primary m-r-15" type="button">Save</button>
                  </div>
                </div>
              </div>

              {{-- delivery type end --}}
                </div>
              </div>
          <!-- Container-fluid Ends-->
        </div>
        </form>

@endsection
@section('extra-js')
<script src="/assets/app-assets/js/datepicker/date-picker/datepicker.js"></script>
<script src="/assets/app-assets/js/datepicker/date-picker/datepicker.en.js"></script>
<script src="/assets/app-assets/js/sweet-alert/sweetalert.min.js"></script>
<script src="/assets/app-assets/js/sweet-alert/app.js"></script>
<script src="/assets/app-assets/js/time-picker/jquery-clockpicker.min.js"></script>
<script src="/assets/app-assets/js/time-picker/highlight.min.js"></script>
<script src="/assets/app-assets/js/time-picker/clockpicker.js"></script>

<script src="https://momentjs.com/downloads/moment-with-locales.js"></script>

<script src="/assets/app-assets/js/select2/select2.full.min.js"></script>
<script src="/assets/app-assets/js/select2/select2-custom.js"></script>

<script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.min.css') }}">

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

</script>

<script type="text/javascript">
$('.new-booking').addClass('active');

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
            billingType();

        } else {
            alert("Unable to find the distance via road.");
        }
    });
    
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

}

function Save(){
    toastr.success('Please Wait...');
    var formData = new FormData($('#form')[0]);
    $("#save").attr("disabled", true);
    $.ajax({
        url : '/user/save-booking',
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(data)
        {                
            toastr.success('Saved Successfully');
            window.location.href = '/user/booking';
        },error: function (data) {
            var errorData = data.responseJSON.errors;
            $.each(errorData, function(i, obj) {
                toastr.error(obj[0]);
                $("#save").attr("disabled", false);
            });
        }
    });
}
</script>
@endsection