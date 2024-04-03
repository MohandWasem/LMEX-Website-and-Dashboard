<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Purple Admin</title>
<!-- plugins:css -->
<link rel="stylesheet" href="{{asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/vendors/css/vendor.bundle.base.css')}}">

<!-- DataTable -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
<!-- endinject -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Plugin css for this page -->
<!-- End plugin css for this page -->
<!-- inject:css -->
<!-- endinject -->
<!-- Layout styles -->
<link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
<!-- End layout styles -->
<link rel="shortcut icon" href="{{asset('admin/images/favicon.ico')}}" />
</head>
<body>
<div class="container-scroller">
<!-- partial:../../partials/_navbar.html -->
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
<a class="navbar-brand brand-logo" href=""><img src="{{asset('admin/images/com.png')}}" style="height:5%;" alt="logo" /></a>
<a class="navbar-brand brand-logo-mini" href=""><img src="{{asset('admin/images/com.png')}}" alt="logo" /></a>
</div>
<div class="navbar-menu-wrapper d-flex align-items-stretch">
<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
<span class="mdi mdi-menu"></span>
</button>

<ul class="navbar-nav navbar-nav-right">
    <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
          <i class="mdi mdi-bell-outline"></i>
          
            
          <span class="badge " style="color:black;">
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
          <h6 class="p-3 mb-0">Notifications</h6>
          <div class="dropdown-divider"></div>
         
          <a href="" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-success">
                <i class="mdi mdi-calendar"></i>
              </div>
            </div>
            
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
              <h6 class="preview-subject font-weight-normal mb-1">Request</h6>
              <p class="text-gray ellipsis mb-0"> 

                
              </p>
            </div>
          </a>
          
          <div class="dropdown-divider"></div>
       
          <div class="dropdown-divider"></div>
          
          <div class="dropdown-divider"></div>
          <h6 class="p-3 mb-0 text-center">See all notifications</h6>
        </div>
      </li>
<li class="nav-item nav-profile dropdown">
<a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
<div class="nav-profile-img">
<img src="{{asset('admin/images/faces/face1.jpg')}}" alt="image">
<span class="availability-status online"></span>
</div>
@if (Auth::guard('web')->check())

<div class="nav-profile-text">
<p class="mb-1 text-black">{{Auth::guard('web')->user()->name}}</p>
</div>
@endif

</a>

<div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
<a class="dropdown-item" href="{{route('logout')}}">
<i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
</div>
</li>
<li class="nav-item d-none d-lg-block full-screen-link">
<a class="nav-link">
<i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
</a>
</li>

<li class="nav-item nav-logout d-none d-lg-block">
<a class="nav-link" href="">
<i class="mdi mdi-power"></i>
</a>
</li>
<li class="nav-item nav-settings d-none d-lg-block">
<a class="nav-link" href="#">
<i class="mdi mdi-format-line-spacing"></i>
</a>
</li>
</ul>

<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
<span class="mdi mdi-menu"></span>
</button>
</div>
</nav>
<!-- partial -->
<div class="container-fluid page-body-wrapper">