@extends('user.layouts')
@section('extra-css')
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/prism.css">
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/tour.css">
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/pe7-icon.css">
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/ionic-icon.css">
    
@endsection
@section('section')
      <!-- Right sidebar Ends-->
      <div class="page-body vertical-menu-mt">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-6 main-header">
             
                  <h2>User <span>Dashboard  </span></h2>

                </div>
                <div class="col-lg-6 breadcrumb-right">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="pe-7s-home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active"> </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
        <div class="col-xl-12 xl-100 box-col-12">
                <div class="card">
                  <div class="card-header no-border">
                    <h5>Recent Booking</h5>
                    <ul class="creative-dots">
                      <li class="bg-primary big-dot"></li>
                      <li class="bg-secondary semi-big-dot"></li>
                      <li class="bg-warning medium-dot"></li>
                      <li class="bg-info semi-medium-dot"></li>
                      <li class="bg-secondary semi-small-dot"></li>
                      <li class="bg-primary small-dot"></li>
                    </ul>
              
                  </div>
                  <div class="card-body pt-0">
                    <div class="activity-table table-responsive recent-table">
                      <table class="table table-bordernone">
                        <tbody>
                          @foreach($booking as $row)
                          <tr>
                               <td  width="8%"><span class="badge badge-pill recent-badge f-12">#{{$row->id}}</span></td>
                           
                            <td width="15%">
                              <h5 class="default-text mb-0 f-w-700 f-14">{{$row->service_name}}</h5>
                            </td>
                            <td width="25%">{{$row->from_address}}</td>
                            <td width="25%">{{$row->to_address}}</td>
                         
  
                            <td class="f-w-700" width="8%">{{$row->total_km}} Km</td>
                            <td>
                              <h6 class="mb-0" width="12%">{{$row->total}} AED</h6>
                            </td>
                           <td>
                              <a href="/user/print-invoice/{{$row->id}}" class="btn btn-shadow-primary">Print</a>
                            </td>
                          </tr>
                       @endforeach
                        </tbody>
                      </table>
                    </div>
               
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
@endsection
@section('extra-js')
    <script src="/assets/app-assets/js/chart/chartist/chartist.js"></script>
    <script src="/assets/app-assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="/assets/app-assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="/assets/app-assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="/assets/app-assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="/assets/app-assets/js/prism/prism.min.js"></script>
    <script src="/assets/app-assets/js/clipboard/clipboard.min.js"></script>
    <script src="/assets/app-assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="/assets/app-assets/js/counter/jquery.counterup.min.js"></script>
    <script src="/assets/app-assets/js/counter/counter-custom.js"></script>
    <script src="/assets/app-assets/js/custom-card/custom-card.js"></script>
    <script src="/assets/app-assets/js/dashboard/crypto-custom.js"></script>
    <script src="/assets/app-assets/js/tour/intro.js"></script>
    <script src="/assets/app-assets/js/tour/intro-init.js"></script>
    <script src="/assets/app-assets/js/chat-menu.js"></script>
    <script src="/assets/app-assets/js/height-equal.js"></script>
    
@endsection