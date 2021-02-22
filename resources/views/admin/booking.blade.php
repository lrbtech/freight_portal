@extends('admin.layouts')
@section('extra-css')
<link rel="stylesheet" type="text/css" href="/assets/app-assets/css/datatables.css">
<link rel="stylesheet" type="text/css" href="/assets/app-assets/css/pe7-icon.css">
@endsection
@section('section')        
        <!-- Right sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-6 main-header">
                  <h2>Booking <span>Details  </span></h2> 
                  <!-- <h6 class="mb-0">View Shipment</h6>-->
                </div>
                <!-- <div class="col-lg-6 breadcrumb-right">     
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="pe-7s-home"></i></a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item">Data Tables</li>
                    <li class="breadcrumb-item active">Basic Init</li>
                  </ol>
                </div> -->
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <!-- Zero Configuration  Starts-->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                  <div class="row">
                        <div class="col-md-3">
                          <label>Assign Driver</label>
                          <select id="agent_id" name="agent_id" class="form-control">
                            <option value="">Choose Driver</option>
                            @foreach($truck_owner as $row)
                            <option value="{{$row->id}}">{{$row->name}}</option>
                            @endforeach
                          </select>
                        </div>

                        <div class="form-group col-md-3">
                            <button id="save" class="btn btn-primary btn-block mr-10" type="button">Assign Agent</button>
                        </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="datatable">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Booking Date</th>
                            <th>From Address</th>
                            <th>To Address</th>
                            <th>Service Details</th>
                            <th>Total Km</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Zero Configuration  Ends-->


            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>



@endsection
@section('extra-js')
  <script src="/assets/app-assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
  <script src="/assets/app-assets/js/datatable/datatables/datatable.custom.js"></script>
  <script src="/assets/app-assets/js/chat-menu.js"></script>

  <script type="text/javascript">
$('.booking').addClass('active');

var orderPageTable = $('#datatable').DataTable({
    "processing": true,
    "serverSide": true,
    //"pageLength": 50,
    "ajax":{
        "url": "/admin/get-booking",
        "dataType": "json",
        "type": "POST",
        "data":{ _token: "{{csrf_token()}}"}
    },
    "columns": [
        {data: 'checkbox', name: 'checkbox'},
        { data: 'booking_date', name: 'booking_date' },
        { data: 'from_address', name: 'from_address' },
        { data: 'to_address', name: 'to_address' },
        { data: 'service_details', name: 'service_details' },
        { data: 'total_km', name: 'total_km' },
        { data: 'total', name: 'total' },
        { data: 'status', name: 'status' },
        { data: 'action', name: 'action' },
    ]
});

$(document).on('click','.order_master_checkbox', function(){
  if($(".order_master_checkbox").prop('checked') == true){
      $(".order_checkbox").prop('checked',true);
  } else{
      $(".order_checkbox").prop('checked',false);
  }
});


$(document).on('click','#save', function(){
    var order_id=[];
    var agent_id = $('#agent_id').val();

  if(agent_id != ''){
    $(".order_checkbox:checked").each(function(){
        order_id.push($(this).val());
    });
    if(order_id.length > 0){
        $.ajax({
            url:"/admin/checkbox-assign-agent",
            method:"GET",
            data:{id:order_id,agent_id:agent_id},
            success:function(data){
              toastr.success(data);
              //window.location.href="/admin/new-shipment-request";
              var new_url = '/admin/get-booking';
              orderPageTable.ajax.url(new_url).load();
            }
        })
    }else{
        toastr.error("Please select atleast one Checkbox");
    }
  }else{
    toastr.error("Please select Agent");
  }
});

</script>
@endsection