<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('LTE/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('LTE/dist/css/adminlte.min.css')}}">
  @yield('css')

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">




  @include('backend.par.header')
  @include('backend.par.sidebar')
  @yield('content')
  @include('backend.par.footer')

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


<!-- jQuery -->
<script src="{{asset('LTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('LTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('LTE/dist/js/adminlte.min.js')}}"></script>
@yield('js')
</body>
</html>
