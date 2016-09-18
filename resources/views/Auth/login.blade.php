<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
     
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>
    <link href="{{ captcha_layout_stylesheet_url() }}" type="text/css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />


    <!-- Custom Fonts -->
    <link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/login.css') }}">
<link href="{{ asset('fonts/fonts.css') }}" rel="stylesheet" type="text/css">
<body class=" login">
       
        <div class="user-login">
            <div class="row bs-reset">
                <div class="col-md-6 bs-reset mt-login-5-bsfix">
                    <div class="login-bg" style="background-image:url({{URL::asset('img/bg1.jpg')}})">
                        <img class="login-logo" src="{{URL::asset('images/vera_logo2.png')}}" height="20%" style="margin-top: -25px;margin-left: -20px;" / > </div>
                </div>
                <div class="col-md-6 login-container bs-reset mt-login-5-bsfix">
                                        <div class="login-content">
                        <h1>Vera & Associates Login</h1>

                        <form action="{{URL::route('post-login')}}" class="login-form" method="post" id="login-form"
                        style="margin-top:80px;display: {{(session('forgotmessage')) ? 'none' : 'block'}};"
                        >
                                {{csrf_field()}}
                                @if(session('global'))
                                   
                                <div class="alert alert-danger display-hide">
                                   
                                    <span>{{session('global')}}</span>
                                </div>                                   
                                @endif

                            <div class="row">
                                <div class="col-xs-6">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Username" name="username" value="{{ old('username') }}"/>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif

                                </div>
                                <div class="col-xs-6">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Password" name="password"/>
                                 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif                                   
                                 </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="rem-password">
                                        <label class="rememberme mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" name="remember"/> Remember me
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-8 text-right">
                                    <div class="forgot-password">
                                        <a href="javascript:;" id="forgot" class="forget-password">Forgot Password?</a>
                                    </div>
                                    <button class="btn btn-default" type="submit">Sign In</button>
                                </div>
                            </div>
                        </form>
                     
                        <form class="forget-form login-form" action="{{ url('/forgot-password') }}" method="post" 
                        
                        style="display: {{(session('forgotmessage')) ? 'block' : 'none'}};" id="forget-form">
                            <h3 class="font-green">Forgot Password ?</h3>
                               @if(session('forgotmessage'))
                                <br/><br/> <br/>     
                                <div class="alert alert-danger display-hide">
                                   
                                    <span>{{session('forgotmessage')}}</span>
                                </div>                                   
                                @endif  
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>                            
                        </div>

                        <div class="row">
                            <div class="form-group">
                        <label for="CaptchaCode" class="col-md-4 control-label">Enter Captcha</label>

                            <div class="col-md-6">

                          <input type="text" id="CaptchaCode" name="CaptchaCode" class="form-control"> 
                        <?php echo str_replace('BotDetect CAPTCHA Library for Laravel', '', captcha_image_html('ResetPasswordCaptcha'));?>
                                                   
                            </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group" id="response">
                            </div>
                        </div>
                        <div class="row">
                       
                           <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-default pull-right">
                                         Submit
                                    </button>
                                    <a  class="btn btn-default pull-left" id="back">
                                         Back
                                    </a>                                    
                                </div>
                            </div>
                        </div>


                        </div>

                        </form>
                  
                    </div>

                </div>
            </div> 
        </div>


    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>



<script>
    (function(){
        
        var forgot =  document.getElementById('forgot');
        var back = document.getElementById('back');
        
        forgot.onclick = function(){
            $('#login-form').hide();
            $('#forget-form').show();
        }

        back.onclick = function(){
            $('#login-form').show();
            $('#forget-form').hide();
        }
    })();


</script>

</body>

</html>
