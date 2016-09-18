    
<!DOCTYPE html>
<html>
<head>
    <title>{{$title}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/bootstrap/dist/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet">
        <!-- Custom Fonts -->
    <link href="{{ asset('/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

        <!-- jvectormap -->
        <link rel="stylesheet" href="{{asset('/css/jvectormap/jquery-jvectormap-1.2.2.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('/css/AdminLTE.min.css')}}">
        
        <link rel="stylesheet" href="{{asset('/css/skin-red.min.css')}}">

                 <!-- jQuery -->
    <script src="{{ asset('dist/js/jquery-2.1.0.min.js') }}"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
    .content-header{background-color: whitesmoke !important;}
</style>
</head>
    <body class="hold-transition skin-red sidebar-mini">
       
       <div class="wrapper">
        @include('layout.Auth.header')
       
        @include('layout.Auth.sidenav')
       
                <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                @yield('content')               
              
            </div>
                
            </div>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('bootstrap/dist/bootstrap-fileinput/bootstrap-fileinput.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>

    </body>
</html>