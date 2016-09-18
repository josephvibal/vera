@extends('layout.auth.main')


@section('content')

 <link rel="stylesheet" href="{{asset('/css/modified.css')}}">
<style type="text/css">
.profile-sidebar{float:left;width:300px;margin-right:20px}.profile-content{overflow:hidden}.profile-sidebar-portlet{padding:30px 0 0!important}.profile-userpic img{float:none;margin:0 auto;width:50%;height:50%;-webkit-border-radius:50%!important;-moz-border-radius:50%!important;border-radius:50%!important}.profile-usertitle{text-align:center;margin-top:20px}.profile-usertitle-name{color:#5a7391;font-size:20px;font-weight:600;margin-bottom:7px}.profile-usertitle-job{text-transform:uppercase;color:#5b9bd1;font-size:13px;font-weight:800;margin-bottom:7px}.profile-userbuttons{text-align:center;margin-top:10px}.profile-userbuttons .btn{margin-right:5px}.profile-userbuttons .btn:last-child{margin-right:0}.profile-userbuttons button{text-transform:uppercase;font-size:11px;font-weight:600;padding:6px 15px}.profile-usermenu{margin-top:30px;padding-bottom:20px}.profile-usermenu ul li{border-bottom:1px solid #f0f4f7}.profile-usermenu ul li:last-child{border-bottom:none}.profile-usermenu ul li a{color:#93a3b5;font-size:16px;font-weight:400}.profile-usermenu ul li a i{margin-right:8px;font-size:16px}.profile-usermenu ul li a:hover{background-color:#fafcfd;color:#5b9bd1}.profile-usermenu ul li.active a{color:#5b9bd1;background-color:#f6f9fb;border-left:2px solid #5b9bd1;margin-left:-2px}.profile-stat{padding-bottom:20px;border-bottom:1px solid #f0f4f7}.profile-stat-title{color:#7f90a4;font-size:25px;text-align:center}.profile-stat-text{color:#5b9bd1;font-size:11px;font-weight:800;text-align:center}.profile-desc-title{color:#7f90a4;font-size:17px;font-weight:600}.profile-desc-text{color:#7e8c9e;font-size:14px}.profile-desc-link i{width:22px;font-size:19px;color:#abb6c4;margin-right:5px}.profile-desc-link a{font-size:14px;font-weight:600;color:#5b9bd1}@media (max-width:991px){.profile-sidebar{float:none;width:100%!important;margin:0}.profile-sidebar>.portlet{margin-bottom:20px}.profile-content{overflow:visible}}
</style>


    <section class="content-header">
      <h1>
        User <!-- galing sa route -->
        <small>Profile</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-user"></i> Setting</a></li>
        
      </ol>

<div class="row" style="background-color: white;">
    <div class="col-md-6">
        <div class="form-group">
            User type : {{($user->admin) ? 'Staff' : 'Client'}} | Status : {{($user->active) ? 'Active' : 'Inactive'}}
        </div>
    </div>

</div>
      
    </section>

<div class="content">

    <div class="row">
        <div class="col-md-12">
        
        @include('Auth.admin.profile_side_bar')
         
        <div class="profile-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light ">
                        <div class="portlet-title tabbable-line">
                            <div class="caption caption-md">
                                <i class="icon-globe theme-font hide"></i>
                                <span class="caption-subject  bold uppercase">Profile Account</span>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab_1_1" data-toggle="tab" aria-expanded="true">Personal Info</a>
                                </li>
                                <li class="">
                                    <a href="#tab_1_2" data-toggle="tab" aria-expanded="false">Change Avatar</a>
                                </li>
                                <li class="">
                                    <a href="#tab_1_3" data-toggle="tab" aria-expanded="false">Change Password</a>
                                </li>
                            </ul>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane active" id="tab_1_1">
                                    <form role="form" action="{{url('/update-pesonal-info')}}" method="POST" id="personal-info-form">
                                        <div class="form-group">
                                            <label class="control-label">User Name</label>
                                            <input type="text" name="username" placeholder="username" class="form-control"
                                                value="{{(!old('username')) ? $user->username : old('username')}}" 
                                                > 
                                            <span class="help-block">
                                                <strong id="error_username" style="color:red;"></strong>
                                            </span>                                                
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Email</label>
                                            <input type="email" name="email" placeholder="email" class="form-control"
                                                value="{{(!old('email')) ? $user->email : old('email')}}" 
                                                >
                                            <span class="help-block">
                                                <strong id="error_email" style="color:red;"></strong>
                                            </span>                                                 
                                        </div>                                                                                     
                                        <div class="form-group">
                                            <label class="control-label">First Name</label>
                                            <input type="text" name="first_name" placeholder="Enter First Name" class="form-control"
                                                value="{{(!old('first_name')) ? $user->first_name : old('first_name')}}" 
                                                > 
                                            <span class="help-block">
                                                <strong id="error_first_name" style="color:red;"></strong>
                                            </span>                                        
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Last Name</label>
                                            <input type="text" name="last_name" placeholder="Enter Last Name" class="form-control"
                                            value="{{(!old('last_name')) ? $user->last_name : old('last_name')}}" 
                                            >
                                            <span class="help-block">
                                                <strong id="error_last_name" style="color:red;"></strong>
                                            </span>                                              
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Mobile Number</label>
                                            <input type="text" name="mobile_number" placeholder="+63 123 1234567" class="form-control"
                                            value="{{(!old('mobile_number')) ? $user->mobile_number : old('mobile_number')}}"  
                                            >
                                            <span class="help-block">
                                                <strong id="error_mobile_number" style="color:red;"></strong>
                                            </span>                                              
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Interests</label>
                                            <input type="text" name="interest" placeholder="Accounting, Designing, etc.." class="form-control"
                                            value="{{!old('interest') ? $user->interest : old('interest')}}" 
                                            >
                                            <span class="help-block">
                                                <strong id="error_interest" style="color:red;"></strong>
                                            </span>                                             
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Occupation</label>
                                            <input type="text" name="occupation" placeholder="Web Developer" class="form-control"
                                            value="{{(!old('occupation')) ? $user->occupation : old('occupation')}}" 
                                            >
                                            <span class="help-block">
                                                <strong id="error_occupation" style="color:red;"></strong>
                                            </span>                                               
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">About</label>
                                            <textarea name= "about" class="form-control" rows="3" style="margin: 0px -1px 0px 0px; width: 905px; height: 99px;">
                                                {{(!old('about')) ? $user->about : old('about')}} 

                                            </textarea>
                                            <span class="help-block">
                                                <strong id="error_about" style="color:red;"></strong>
                                            </span>                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Online Portfolio</label>
                                            <input name="online_portfolio" type="text" placeholder="http://www.mywebsite.com" class="form-control"
                                            value="{{(!old('online_portfolio')) ? $user->online_portfolio : old('online_portfolio')}}"
                                            >
                                            <span class="help-block">
                                                <strong id="error_online_portfolio" style="color:red;"></strong>
                                            </span>                                              
                                        </div>
                                        <div class="form-group">
                                        <div id="resp"></div>
                                        </div>                                        
                                        <div class="margiv-top-10">
                                            <button type="submit" class="btn green"> Save Changes </button>
                                            <button type="reset" class="btn default"> Cancel </button>
                                        </div>
                                    </form>
                                </div>
                                <!-- END PERSONAL INFO TAB -->
                                <!-- CHANGE AVATAR TAB -->
                                <div class="tab-pane" id="tab_1_2">
                                    <p> </p>
                                    <form role="form" method="POST" action="{{url('/update-avatar')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img src="{{url('/get-user-avatar/'.$user->id)}}" alt=""> 
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                <div>
                                                    <span class="btn default btn-file">
                                                        <span class="fileinput-new"> Select image </span>
                                                        <span class="fileinput-exists"> Change </span>
                                                        <input type="file" name="file"> </span>
                                                    <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                </div>
                                            </div>
                                            <div class="clearfix margin-top-10">
                                                <span class="label label-danger">NOTE! </span>
                                                <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                            </div>
                                        </div>
                                        {{csrf_field()}}
                                        <div class="margin-top-10">
                                            <button type="submit" class="btn green"> Submit </button>
                                            <button type="reset" class="btn default"> Cancel </button>
                                        </div>
                                    </form>
                                </div>
                                <!-- END CHANGE AVATAR TAB -->
                                <!-- CHANGE PASSWORD TAB -->
                                <div class="tab-pane" id="tab_1_3">
                                    <form action="{{url('/update_password')}}" id="change_password_form">
                                        <div class="form-group">
                                            <label class="control-label">Current Password</label>
                                            <input type="password" id="current_password" name="current_password" class="form-control"
                                             {{(old('current_password') ? 'value='. old('current_password') : '')}}>  
                                        </div>
                                                
                                                    <span class="help-block">
                                                        <strong id="error_current_password" style="color:red;"></strong>
                                                    </span>
                                              
                                        <div class="form-group">
                                            <label class="control-label">New Password</label>
                                            <input id="password" type="password" class="form-control" name="password" 
                                            {{(old('password') ? 'value='. old('password') : '')}}> 

                                              
                                                 <span class="help-block">
                                                    <strong id="error_password" style="color:red;"></strong>
                                                </span>                                             
                                                                                       

                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Re-type New Password</label>
                                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" 
                                            {{(old('password_confirmation') ? 'value='. old('password_confirmation') : '')}}>
                                                 <span class="help-block">
                                                    <strong id="error_password_confirmation" ></strong>
                                                </span>                                             
                                        </div>
                                        <div class="form-group">
                                        <div id="div"></div>
                                        </div>
                                        <div class="margin-top-10">
                                            <button type="submit" class="btn green"> Change Password </button>
                                            <button type="reset" class="btn default"> Cancel </button>
                                        </div>
                                    </form>
                                </div>
                                <!-- END CHANGE PASSWORD TAB -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </div>

        </div>
    </div>

</div>

<script src="{{ asset('js/json2.js') }}"></script>
<script src="{{ asset('js/s9.js') }}"></script>

<script>
    (function(){
        var form = document.getElementById('change_password_form');
        var url = form.getAttribute('action');
        var div = document.getElementById('div');
        form.onsubmit = function(){
            var current_password = document.getElementById('current_password').value;
            var password = document.getElementById('password').value;
            var password_confirmation = document.getElementById('password_confirmation').value;
            var _token = "{{csrf_token()}}";

            $.ajax({
              type: 'post',
              url: url,
              data: {current_password : current_password, password : password, password_confirmation : password_confirmation, _token : _token},
              dataType: 'json',
              beforeSend: function() {
                document.getElementById('error_current_password').innerHTML = '';
                document.getElementById('error_password').innerHTML = '';
                document.getElementById('error_password_confirmation').innerHTML = '';
                div.innerHTML = '<center><img src="{{URL::asset('images/ajax-loader.gif')}}"/ style="height:100%"></center>'; 
              },
                complete: function(){
                 
              },
              success: function(data){
                div.innerHTML = data;              
              },
              error: function(data){
                 div.innerHTML = "";
                var errors = data.responseJSON;
                $.each (errors, function (i) {document.getElementById('error_' + i).innerHTML = errors[i];});
                // Render the errors with js ...
              }
            });

            return false;
        }

    })();
</script>
<script>
    (function(){
      
        var form = document.getElementById('personal-info-form');
        var url = form.getAttribute('Action');
        var div = document.getElementById('resp');

        form.onsubmit = function(){
            var username            = document.getElementsByName('username')[0].value;
            var email               = document.getElementsByName('email')[0].value;
            var first_name          = document.getElementsByName('first_name')[0].value;
            var last_name           = document.getElementsByName('last_name')[0].value;
            var mobile_number       = document.getElementsByName('mobile_number')[0].value;
            var interest            = document.getElementsByName('interest')[0].value;
            var occupation          = document.getElementsByName('occupation')[0].value;
            var about               = document.getElementsByName('about')[0].value;
            var online_portfolio    = document.getElementsByName('online_portfolio')[0].value;
            var _token = "{{csrf_token()}}";
            $.ajax({
              type: 'post',
              url: url,
              data: {
                username            : username,       
                email               : email,            
                first_name          : first_name,       
                last_name           : last_name,        
                mobile_number       : mobile_number,    
                interest            : interest,         
                occupation          : occupation,       
                about               : about,            
                online_portfolio    : online_portfolio,
                _token              : _token,
              },
              dataType : 'json',
              beforeSend : function(){
                document.getElementById('error_username').innerHTML = '';
                document.getElementById('error_email').innerHTML = '';
                document.getElementById('error_first_name').innerHTML = '';
                document.getElementById('error_last_name').innerHTML = '';
                document.getElementById('error_mobile_number').innerHTML = '';
                document.getElementById('error_interest').innerHTML = '';
                document.getElementById('error_occupation').innerHTML = '';
                document.getElementById('error_about').innerHTML = '';
                document.getElementById('error_online_portfolio').innerHTML = '';
                div.innerHTML = '<center><img src="{{URL::asset('images/ajax-loader.gif')}}"/ style="height:100%"></center>';                
              },
              success: function(data){
                 div.innerHTML = data;
              },
              error: function(data){
                 div.innerHTML = "";
                var errors = data.responseJSON;
                $.each (errors, function (i) {document.getElementById('error_' + i).innerHTML = errors[i];});
                // Render the errors with js ...
              }                     
            });

            return false;
        }

    })();
</script>
@stop