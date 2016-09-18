
@extends('layout.main')


@section('content')
<br/><br/><br/>
<div class="row">
	
<form action="{{URL::route('post_create_employee')}}" method="post">
       <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 form-group {{($errors->has('first_name')) ? 'has-error has-feedback' : ''}}">
                    <label for="inputEmail" class="control-label">First Name</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="First Name" name="first_name" {{(old('first_name')) ? 'value='. old('first_name')  : ''}} >
                    @if($errors->has('first_name'))
                    <p class="help-block">{{$errors->first('first_name')}}</p>
                    <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                    @endif
                </div>

              
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 form-group {{($errors->has('last_name')) ? 'has-error has-feedback' : ''}}">
                    <label for="inputEmail" class="control-label">Last Name</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="Last Name" name="last_name" >
                    @if($errors->has('last_name'))
                     <p class="help-block">{{$errors->first('last_name')}}</p>
                     <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                    @endif
                 </div>
                 <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 form-group {{($errors->has('email')) ? 'has-error has-feedback' : ''}}">
                        <label for="inputEmail" class="control-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" >
                        @if($errors->has('email'))
                        <p class="help-block">{{$errors->first('email')}}</p>
                        <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                        @endif
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 form-group {{($errors->has('password')) ? 'has-error has-feedback' : ''}}">
                        <label for="inputPassword" class="control-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" name="first_name" {{(old('password')) ? 'value='. old('password')  : ''}} >
                        @if($errors->has('password'))
                        <p class="help-block">{{$errors->first('password')}}</p>
                        <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                        @endif
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 form-group {{($errors->has('password_again')) ? 'has-error has-feedback' : ''}}">
                        <label for="inputPassword">Password Again</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password again" name="password_again" {{(old('password_again')) ? 'value='. old('password_again')  : ''}}>
                        @if($errors->has('password_again'))
                        <p class="help-block">{{$errors->first('password_again')}}</p>
                        <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                        @endif
                    </div>

                     <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                <button type="submit" class="btn btn-primary">Sign up</button> 
                                <br/><br/>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                <button type="reset" class="btn btn-primary">Reset</button>
                                 <br/>
                              </div>
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                             <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                             <br/>
                             </div>          

    </form>	

</div>

@stop