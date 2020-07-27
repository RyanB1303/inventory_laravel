<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ asset('backend/img/logo/logo.png') }}" rel="icon">
  {{-- VUE JS FILE --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>RuangAdmin - Dashboard</title>
  <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('backend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('backend/css/ruang-admin.min.css') }}" rel="stylesheet">
  {{-- Original JS FILE --}}
  <script src="{{ asset('js/app.js') }}" type="text/javascript" defer></script>
</head>

<body id="page-top">
  <div id="app">
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
        <router-link :to="{ name: 'home' }" class="sidebar-brand d-flex align-items-center justify-content-center">
          <div class="sidebar-brand-icon">
            <img src="{{ asset('/backend/img/logo/logo2.png') }}">
          </div>
          <div class="sidebar-brand-text mx-3">RuangAdmin</div>
        </router-link>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
          <router-link :to="{ name: 'dashboard' }" class="nav-link">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></router-link>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
          Features
        </div>
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
            aria-controls="collapseForm">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Forms</span>
          </a>
          <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Forms</h6>
              <router-link :to="{ name: 'form-basic' }" class="collapse-item">Form Basics</router-link>
              <router-link :to="{ name: 'form-advanced' }" class="collapse-item">Form Advanceds</router-link>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable"
            aria-expanded="true" aria-controls="collapseTable">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span>
          </a>
          <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Tables</h6>
              <router-link :to="{ name: 'table' }" class="collapse-item">Simple Table</router-link>
              <router-link :to="{ name: 'data-table' }" class="collapse-item">Data Table</router-link>
            </div>
          </div>
        </li>
        <hr class="sidebar-divider">
        <li class="nav-item">
          <router-link :to="{ name: 'login' }" class="nav-link">Login</router-link>
          <router-link :to="{name: 'register' }" class="nav-link">Register</router-link>
        </li>
        <hr class="sidebar-divider">
        <li class="nav-item">
          <router-link :to="{name:'charts'}" class="nav-link">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span>
          </router-link>
        </li>
        <hr class="sidebar-divider">
        <div class="version" id="version-ruangadmin"></div>
      </ul>
      <!-- Sidebar -->
      <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
          <!-- TopBar -->
          <navbar></navbar>
          <!-- Topbar -->

          <!-- Container Fluid-->
          <div class="container-fluid" id="container-wrapper">
            <app></app>

          </div>
          <!---Container Fluid-->
        </div>
      </div>

      {{-- VUE JS FILE --}}

</body>

</html>