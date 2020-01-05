<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{URL::to('/')}}/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{URL::to('/')}}/css/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::to('/')}}/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{URL::to('/')}}/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{URL::to('/')}}/css/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{URL::to('/')}}/css/summernote.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('backend/nav-bar');
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('backend/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
     @include('backend/footer')

  <!-- Control Sidebar -->
  @include('backend/control')
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{URL::to('/')}}/js/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{URL::to('/')}}/js/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{URL::to('/')}}/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{URL::to('/')}}/js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{URL::to('/')}}/js/sparkline.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{URL::to('/')}}/js/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{URL::to('/')}}/js/moment.min.js"></script>
<script src="{{URL::to('/')}}/js/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{URL::to('/')}}/js/tempusdominus-bootstrap-4.js"></script>
<!-- Summernote -->
<script src="{{URL::to('/')}}/js/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{URL::to('/')}}/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{URL::to('/')}}/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{URL::to('/')}}/js/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
</body>
</html>