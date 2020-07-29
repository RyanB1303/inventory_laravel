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
  {{-- <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('backend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"> --}}
  <link href="{{ asset('backend/css/ruang-admin.min.css') }}" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css' />
  <link rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css' />
  {{-- Original JS FILE --}}
  <script src="{{ asset('js/app.js') }}" type="text/javascript" defer></script>
</head>

<body id="page-top">
  <div id="app">
    <div id="wrapper">
      <!-- Sidebar -->
      <sidebar></sidebar>
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