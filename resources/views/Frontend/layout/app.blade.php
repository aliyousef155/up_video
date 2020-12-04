<html lang="en"><head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('Frontend/assets/img//apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('Frontend/assets/img//favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
        up video
    </title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{asset("Frontend/assets/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("Frontend/assets/css/paper-kit.css?v=2.2.0")}}" rel="stylesheet">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset("Frontend/assets/demo/demo.css")}}" rel="stylesheet">
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/9/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/9/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps/api/js/AuthenticationService.Authenticate?1sfile%3A%2F%2F%2FD%3A%2Fpaper-kit-2-html-v2.2.0%2Findex.html&amp;4sYOUR_KEY_HERE&amp;callback=_xdc_._195mua&amp;key=YOUR_KEY_HERE&amp;token=111583"></script></head>

<body class="index-page sidebar-collapse">
<!-- Navbar -->
@include('Frontend.layout.nav')
<!-- End Navbar -->
@if(isset($home))

<div class="page-header section-dark" style="background-image: url({{asset('Frontend/assets/img/antoine-barres.jpg')}})">
    <div class="filter"></div>
    <div class="content-center">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                        @if(Session::has('success'))
                    <div class="alert alert-success message-alert" role="alert" style="width: 60vh;" id="message-alert">
                        {{Session('success')}}
                    </div>
                            @endif
                </div>
            </div>
            <div class="title-brand">
                <h1 class="presentation-title">up video </h1>
                <div class="fog-low">
                    <img src="{{asset("Frontend/assets/img/fog-low.png")}}" alt="">
                </div>
                <div class="fog-low right">
                    <img src="{{asset("Frontend/assets/img/fog-low.png")}}" alt="">
                </div>
            </div>

        </div>
    </div>
    <div class="moving-clouds" style="background-image: url('{{asset('Frontend/assets/img/clouds.png')}}'); "></div>

</div>
@endif
<div class="main">
    @yield('content')

{{--foorter--}}
@include('Frontend.layout.footer')

{{--end of footer--}}
</div>
<script>
    $(document).ready(function () {

        setTimeout(function(){
            $('#message-alert').css('display','none');
        }, 4000);
    });
</script>
</body>
</html>
