<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Fixed Footer Layout</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('/')}}/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link type="text/css" href="{{asset('/')}}/admin/css/sample.css" rel="stylesheet" media="screen" />
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/')}}/admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   <!-- DataTables -->
   <link rel="stylesheet" href="{{asset('/')}}/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" href="{{asset('/')}}/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
   <style type="text/css">
    .notifyjs-corner{
      z-index: 10000 !important;
    }
    </style>
   <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.min.css"></script>
   <script src="{{asset('/')}}/admin/plugins/jquery/jquery.min.js"></script>
   
   <!-- Theme style -->
</head>
<body class="hold-transition sidebar-mini layout-footer-fixed">
<!-- Site wrapper -->
<div class="wrapper">

  @include('back-end.inculde.header')
  @include('back-end.inculde.sidebar')
   @yield('body')
   
   
   @include('back-end.inculde.footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- Bootstrap 4 -->
<script src="{{asset('/')}}/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('/')}}/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('/')}}/admin/dist/js/demo.js"></script>

<script src="{{asset('/')}}/admin/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{asset('/')}}/admin/plugins/jquery-validation/additional-methods.min.js"></script>

<script src="{{asset('/')}}/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="{{asset('/')}}/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('/')}}/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('/')}}/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
@if(session()->has('success'))
   <script type="text/javascript">
       $(function(){
         $.notify("{{session()->get('success')}}",{globalPosition:'top right',className:'success'});
       });
   </script>
  @endif
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script type="text/javascript">

    $(function(){
       $(document).on('click','#delete',function(e){
         e.preventDefault();
         var link = $(this).attr("href");
         Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href =link;
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
              }
     })

       })
    })

</script>
<script>
    $(document).ready(function(){
      $('#image').change(function(e){
        var reader =new FileReader();
        reader.onload = function(e){
          $('#showImage').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
      });
    });
</script>

<script src="{{asset('/')}}/admin/js/ckeditor.js"></script>

<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>

<script>
  $("input[type='number']").inputSpinner()
</script>
</body>
</html>
