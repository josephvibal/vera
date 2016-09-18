@extends('layout.main')

@section('content')
<link href="{{ captcha_layout_stylesheet_url() }}" type="text/css" rel="stylesheet">
<br/><br/>

<div class="container section services_section">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-danger">
                <div class="panel-heading">Reset Password</div>
                <div class="panel-body">
                    @if (Session::has('global'))
                        <div class="alert alert-success">
                            {{ Session::get('global') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/forgot-password') }}">
								<p>
						Please enter the email address for your account. A verification code will be sent to you. Once you have received the verification code, you will be able to choose a new password for your account.</p>                        
                        {{ csrf_field() }}

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

			            <div class="form-group">
		                <label for="CaptchaCode" class="col-md-4 control-label">Enter Captcha</label>

		                 	<div class="col-md-6">
		                 <?php echo str_replace('BotDetect CAPTCHA Library for Laravel', '', captcha_image_html('LoginCaptcha'));?>
						
						  <input type="text" id="CaptchaCode" name="CaptchaCode">		                 		
		                 	</div>

		                </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-envelope"></i> Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop