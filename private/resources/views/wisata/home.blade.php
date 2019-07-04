<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Sistem Informasi Wisata</title>

    <!-- Favicon -->
    <link rel="icon" href="akame/img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('akame/style.css')}}">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->
@include('wisata/header')
@yield('main')
@yield('wisata/footer')
   

    

   

    <!-- All JS Files -->
    <!-- jQuery -->
    <script src="{{asset('akame/js/jquery.min.js')}}"></script>
    <!-- Popper -->
    <script src="{{asset('akame/js/popper.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('akame/js/bootstrap.min.js')}}"></script>
    <!-- All Plugins -->
    <script src="{{asset('akame/js/akame.bundle.js')}}"></script>
    <!-- Active -->
    <script src="{{asset('akame/js/default-assets/active.js')}}"></script>

</body>

</html>