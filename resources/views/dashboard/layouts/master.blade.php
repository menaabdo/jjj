<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
       @yield('title')

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->

  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

  @yield('custom-styles')
</head>

<body class="hold-transition sidebar-mini">
@include('dashboard.partial.nav')
@include('dashboard.partial.side-menu')

<div class="content-wrapper">
    @yield('content')
</div>
@include('category.list')
@include('dashboard.partial.footer')
@include('dashboard.partial.scripts')
@yield('custom-scripts')

</body>
</html>
