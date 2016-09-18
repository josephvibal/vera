@extends('layout.auth.main')

@section('content')

    <section class="content-header">
      <h1>
        Account <!-- galing sa route -->
        <small>Change Password</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-key"></i> Setting</a></li>
        
      </ol>
    </section>
<div class="content">

<div class="container">
	<center>
    <div class="row">
        <!-- hero unit -->
       
            <?=$headerMsg;?>

       
        <!--left section-->
        <section class="col-md-6">

        	<form class="form-signin" role="form" action="{{url('/force-change-password')}}" method="post" style="width:50%">
            <!-- short message -->
                <?=$shortMsg;?>

                @if(session('global'))
                    <span>{{session('global')}}</span>
                @endif               

				<div class="form-group {{($errors->has('password')) ? 'has-error has-feedback' : ''}}">
		              <label for="inputPassword" class="control-label" style="float:left; line-height:30px;">Password</label> &nbsp;
		              <input type="password" class="form-control" id="inputPassword" placeholder="Enter password" name="password" 
		              {{(old('password') ? 'value='. old('password') : '')}}
		              >
		              @if($errors->has('password'))
		              <p class="help-block">{{$errors->first('password')}}</p>
		              <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
		              @endif
		        </div>

		         <div class="form-group {{($errors->has('password_confirmation')) ? 'has-error has-feedback' : ''}}">
                    <label for="inputPassword" class="control-label" style="float:left; line-height:30px;">Password Confirmation</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password again" name="password_confirmation" 
					{{(old('password_confirmation') ? 'value='. old('password_confirmation') : '')}}
                    >
                    @if($errors->has('password_confirmation'))
                    <p class="help-block">{{$errors->first('password_confirmation')}}</p>
                    <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                    @endif
                </div>


		        <input type="submit" class="btn btn-primary" style="float:right"/>
              	<input type="hidden" name="_token" value="{{csrf_token()}}">	
		</form>

        </section>
        <!--end of left section-->
        <!-- right section -->
        <section class="col-md-6">
        	<img src="{{URL::asset('images/ways-to-anti-theft-you-should-know.png')}}" style="border:0"/>
        </section>
        <!-- end of right section -->
    </div><!--end of row-->
</center>
</div>
	
</div>

@stop