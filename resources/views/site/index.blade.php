<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Empresa do ramo da construção civil, vasta experiência em construção de moradia, expertise na construção de obras públicas. Qualidade atestada pelas principais certificações no setor.">
    <meta name="author" content="JpS :D">
    <meta name="keywords" content="construção civil, construção, obras públicas, moradia, gce, construtora">

    <title>Vedatexa</title>
    <!-- secure_asset -->
    <!-- Bootstrap core CSS -->
    <link href="{{asset('site/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('site/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('site/css/owl.carousel.min.css')}}" rel="stylesheet">


    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Custom fonts for this template -->
    <script src="https://use.fontawesome.com/9a93b47e91.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <!-- Plugin CSS -->

    <!-- Custom styles for this template -->
    <link href="{{asset('site/css/vedatexa.min.css')}}" rel="stylesheet" />

    @yield('site-css')
    <link href="{{asset('site/css/site.css')}}" rel="stylesheet" />
    <link rel="shortcut icon" type="image/png" href="{{url('site/img/favicon.ico')}}" />

</head>
<body id="page-top" class="">

<!-- header -->

@yield('header')

<!-- main -->

@yield('content')

<!-- footer -->

@yield('footer')


<script src="{{asset('site/js/jquery.min.js')}}"></script>
<script src="{{asset('site/js/bootstrap.bundle.min.js')}}"></script>

<!-- Plugin JavaScript -->
<script src="{{asset('site/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('site/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('site/js/owl.carousel.min.js')}}"></script>

<!-- Custom scripts for this template -->

<script src="{{asset('site/js/vedatexa.min.js')}}"></script>


<script src="{{asset('site/js/site.js')}}"></script>


@yield('site-js')

<script src="{{asset('site/js/menu.js')}}"></script>

<script>
    $('.close').on('click',function (e) {
        e.preventDefault();

        $('#menu').removeClass('is-menu-visible');

    });
    $('#menu').click(function( e ){
        e.stopPropagation();
    });
    $('body').click(function(){
        $('#menu').removeClass("is-menu-visible")
    });
</script>
</body>

</html>
