<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> {{ config('app.name') }}</title>
  @include('backend.layouts.backend_dashboard.stylesheet')
</head> 
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  @include('backend.layouts.backend_dashboard.navbar')
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    @include('backend.layouts.backend_dashboard.sidebar')
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            @yield('title')
          </div>
          <!-- breadcrumbs -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item">@yield('breadcrumbs')</li>
            </ol>
          </div>
          <!-- /.breadcrumbs -->
        </div>
      </div>
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('backend.layouts.backend_dashboard.footer')
  <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
</div>
<!-- ./wrapper -->
@include('backend.layouts.backend_dashboard.javascript')
@include('sweetalert::alert')
</body>
</html>
