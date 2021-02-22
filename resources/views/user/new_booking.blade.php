@extends('user.layouts')
@section('extra-css')
<link rel="stylesheet" type="text/css" href="/assets/app-assets/css/pe7-icon.css">
<link rel="stylesheet" type="text/css" href="/assets/app-assets/css/date-picker.css">
<link rel="stylesheet" type="text/css" href="/assets/app-assets/css/sweetalert2.css">
<link rel="stylesheet" type="text/css" href="/assets/app-assets/css/timepicker.css">
<link rel="stylesheet" type="text/css" href="/assets/app-assets/css/select2.css">
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
            @foreach($service as $row)
            <div class="col-xl-4 col-sm-6 box-col-4a">
                <div class="card">
                    <div class="product-box">
                    <div class="product-img"><img class="img-fluid" src="/upload_files/{{$row->image}}" alt="">
                        <div class="product-hover">
                        <ul>
                            <!-- <li><i class="icon-shopping-cart"></i></li> -->
                            <li>
                            <a href="/user/booking-details/{{$row->id}}"><i class="icon-eye"></i></a>
                            </li>
                            <!-- <li><i class="icofont icofont-law-alt-2"></i></li> -->
                        </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <h4>{{$row->service_name}}</h4>
                        <p>Rate Per KM {{$row->rate_per_km}}.</p>
                        <p>Rate Per KM with Loaders {{$row->rate_per_km_loaders}}.</p>
                        <!-- <div class="product-price">
                        <del>$350.00    </del>$26.00
                        </div> -->
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
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

<script type="text/javascript">
$('.new-booking').addClass('active');


</script>
@endsection