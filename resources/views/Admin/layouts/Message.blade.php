<link rel="stylesheet" href="{{url('admin/assets/libs/sweetalert2/dist/sweetalert2.min.css')}}">


<div class="col-sm-6 col-lg-3" style="display: none">
    <div class="card">
      <div class="border-bottom title-part-padding">
        <h4 class="card-title">Success Message</h4>
        <h6 class="card-subtitle">(Click on image)</h6>
      </div>
      <div class="card-body p-3">
        <img src="{{url('admin/assets/images/alert/alert3.png')}}" alt="alert" class="img-fluid model_img" data-title="" data-msg="" id="sa-success">
      </div>
    </div>
</div>

  <script src="{{url('admin/assets/js/vendor.min.js')}}"></script>

  <script src="{{url('admin/assets/libs/sweetalert2/dist/sweetalert2.min.js')}}"></script>
  <script src="{{url('admin/assets/js/forms/sweet-alert.init.js')}}"></script>
  


  <script>
    function MessageBox (title, msg, status){
      if(status == 'success'){
            Swal.fire(
            title,
            msg,
            'success'
          );

        }else{
          Swal.fire({
            type: "error",
            title: "Oops...",
            text: msg,
          });
        }
    }

  </script>