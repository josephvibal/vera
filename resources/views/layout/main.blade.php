<!DOCTYPE html>
<html>
<head>
    <title>{{$title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!--CSS-->
    <link href="{{ asset('dist/css/flexnav.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/animation.css') }}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('fonts/fonts.css') }}" rel="stylesheet" type="text/css">
    <style type="text/css">
/*        h1,h2{
            font-family: 'latothin' !important;
        }*/
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
    <body id="wrap" class="loading">
    @include('layout.header')
    @include('layout.navigation')
            
            @if (Session::has('message'))
            <div class="flash alert-info">
                <p class="panel-body">
                    {{ Session::get('message') }}
                </p>
            </div>
            @endif
            @if ($errors->any())
            <div class='flash alert-danger'>
                <ul class="panel-body">
                    @foreach ( $errors->all() as $error )
                    <li>
                        {{ $error }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif

    @yield('content')

    @include('layout.footer')
  
<script src="{{ asset('dist/js/jquery-2.1.0.min.js') }}"></script>
<script src="{{ asset('dist/js/jquery.circle-diagram.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('dist/js/jquery.flexnav.min.js') }}"></script>
<script src="{{ asset('dist/js/custom.js') }}"></script> 
<script src="/cropic/croppic.min.js"></script>
<script>
    var eyeCandy = $('#cropContainerEyecandy');
    var croppedOptions = {
        uploadUrl: "{{url('cropic/upload')}}",
        cropUrl: "{{url('cropic/crop')}}",
        cropData:{
            'width' : eyeCandy.width(),
            'height': eyeCandy.height()
        }
    };
    var cropperBox = new Croppic('cropContainerEyecandy', croppedOptions);
</script>
    </body>
</html>