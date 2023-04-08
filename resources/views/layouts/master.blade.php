<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name') }} I @yield('title')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
     <!-- Bootstrap 3.3.7 -->
     <link rel="stylesheet" href="{{ asset('/AdminLTE-2/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="{{ asset('/AdminLTE-2/bower_components/font-awesome/css/font-awesome.min.css') }}">
     <!-- Theme style -->
     <link rel="stylesheet" href="{{ asset('/AdminLTE-2/dist/css/AdminLTE.min.css') }}">
     <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
     <link rel="stylesheet" href="{{ asset('/AdminLTE-2/dist/css/skins/_all-skins.min.css') }}">
     <!-- DataTables -->
     <link rel="stylesheet" href="{{ asset('/AdminLTE-2/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
 
     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
 
     <!-- Google Font -->
     <link rel="stylesheet"
         href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 @includeif('layouts.header')

 @includeif('layouts.sidebar')
  <!-- Left side column. contains the logo and sidebar -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       @yield('title')
      </h1>
      <ol class="breadcrumb">
        @section('breadcrumb')
        <li><a href="{{ '/' }}"><i class="fa fa-dashboard"></i> Home</a></li>
        @show

    
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
   @yield('content')

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">



        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  


</div>

<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('AdminLTE-2/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('AdminLTE-2/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Moment -->
    <script src="{{ asset('AdminLTE-2/bower_components/moment/min/moment.min.js') }}"></script>

    <!-- DataTables -->
    <script src="{{ asset('AdminLTE-2/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-2/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('AdminLTE-2/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-2/bower_components/chart.js/Chart.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('AdminLTE-2/dist/js/pages/dashboard2.js') }}"></script>
     
    <!-- Validator -->
    <script src="{{ asset('js/validator.min.js') }}"></script>

    @stack('scripts')
</body>
</html>
