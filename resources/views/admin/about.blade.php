@extends('admin.layouts')
@section('extra-css')
<link rel="stylesheet" type="text/css" href="/assets/app-assets/css/pe7-icon.css">
@endsection
@section('section') 
<!-- Right sidebar Ends-->
<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6 main-header">
          <h2>About <span>Us</span></h2>
          <h6 class="mb-0">Admin Panel</h6>
        </div>
        <!-- <div class="col-lg-6 breadcrumb-right">     
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="pe-7s-home"></i></a></li>
            <li class="breadcrumb-item">Apps    </li>
            <li class="breadcrumb-item">Users</li>
            <li class="breadcrumb-item active"> Edit Profile</li>
          </ol>
        </div> -->
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="edit-profile">
      <div class="row">
        <div class="col-lg-12">
          <form action="/admin/update-about-us" id="form" method="POST" class="card theme-form" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="hidden" name="id" id="id" value="{{$settings->id}}">
            <!-- <div class="card-header">
              <h4 class="card-title mb-0">View Profile</h4>
              <div class="card-options"><a class="card-options-collapse" href="#" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-toggle="card-remove"><i class="fe fe-x"></i></a></div>
            </div> -->
            <div class="card-body">
              <div class="row">

                <div class="col-sm-12 col-md-12">
                <textarea id="editor1" name="editor1" cols="30" rows="50">

                <?php echo $settings->about_us; ?>

                </textarea>
                </div>

                <div class="col-sm-12 col-md-12">
                  <div class="form-group">
                    <label class="form-label">Upload About1 Image</label>
                    <input class="form-control" type="file" id="about1_image" name="about1_image">
                    <img style="width:100px;height:100px;" src="/upload_files/{{$settings->about1_image}}">
                  </div>
                </div>

                <div class="col-sm-12 col-md-12">
                  <div class="form-group">
                    <label class="form-label">Upload About2 Image</label>
                    <input class="form-control" type="file" id="about2_image" name="about2_image">
                    <img style="width:100px;height:100px;" src="/upload_files/{{$settings->about2_image}}">
                  </div>
                </div>

                

                <div class="col-md-12 text-right">
                  <br><br><br>
                  <button class="btn btn-primary btn-pill" type="submit">Update</button>
                </div>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>

@endsection
@section('extra-js')
<script src="/assets/app-assets/js/chat-menu.js"></script>

<script src="/assets/app-assets/js/editor/ckeditor/ckeditor.js"></script>
<script src="/assets/app-assets/js/editor/ckeditor/styles.js"></script>
<script src="/assets/app-assets/js/editor/ckeditor/adapters/jquery.js"></script>
<script src="/assets/app-assets/js/editor/ckeditor/ckeditor.custom.js"></script>

<script>
$('.about-us').addClass('active');
function Update(){
  var formData = new FormData($('#form')[0]);
  $.ajax({
      url : '/admin/update-about-us',
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      dataType: "JSON",
      success: function(data)
      {                
        $("#form")[0].reset();
        location.reload();
        toastr.success(data, 'Successfully Save');
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
