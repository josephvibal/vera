@extends('layout.Auth.main')


@section('content')


 <link rel="stylesheet" href="{{asset('/css/modified.css')}}">
<style type="text/css">
.profile-sidebar{float:left;width:300px;margin-right:20px}.profile-content{overflow:hidden}.profile-sidebar-portlet{padding:30px 0 0!important}.profile-userpic img{float:none;margin:0 auto;width:50%;height:50%;-webkit-border-radius:50%!important;-moz-border-radius:50%!important;border-radius:50%!important}.profile-usertitle{text-align:center;margin-top:20px}.profile-usertitle-name{color:#5a7391;font-size:20px;font-weight:600;margin-bottom:7px}.profile-usertitle-job{text-transform:uppercase;color:#5b9bd1;font-size:13px;font-weight:800;margin-bottom:7px}.profile-userbuttons{text-align:center;margin-top:10px}.profile-userbuttons .btn{margin-right:5px}.profile-userbuttons .btn:last-child{margin-right:0}.profile-userbuttons button{text-transform:uppercase;font-size:11px;font-weight:600;padding:6px 15px}.profile-usermenu{margin-top:30px;padding-bottom:20px}.profile-usermenu ul li{border-bottom:1px solid #f0f4f7}.profile-usermenu ul li:last-child{border-bottom:none}.profile-usermenu ul li a{color:#93a3b5;font-size:16px;font-weight:400}.profile-usermenu ul li a i{margin-right:8px;font-size:16px}.profile-usermenu ul li a:hover{background-color:#fafcfd;color:#5b9bd1}.profile-usermenu ul li.active a{color:#5b9bd1;background-color:#f6f9fb;border-left:2px solid #5b9bd1;margin-left:-2px}.profile-stat{padding-bottom:20px;border-bottom:1px solid #f0f4f7}.profile-stat-title{color:#7f90a4;font-size:25px;text-align:center}.profile-stat-text{color:#5b9bd1;font-size:11px;font-weight:800;text-align:center}.profile-desc-title{color:#7f90a4;font-size:17px;font-weight:600}.profile-desc-text{color:#7e8c9e;font-size:14px}.profile-desc-link i{width:22px;font-size:19px;color:#abb6c4;margin-right:5px}.profile-desc-link a{font-size:14px;font-weight:600;color:#5b9bd1}@media (max-width:991px){.profile-sidebar{float:none;width:100%!important;margin:0}.profile-sidebar>.portlet{margin-bottom:20px}.profile-content{overflow:visible}}
</style>


    <section class="content-header">
      <h1>
        Add <!-- galing sa route -->
        <small>User 
            @if(session('global'))
                <span class="help-block"><strong>{{session('global')}}</strong></span>
            @endif
        </small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-users"></i></a></li>
        
      </ol>
    </section>
<div class="row">
        <div class="col-md-12">
    
        <div class="profile-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light ">
                        <div class="portlet-title tabbable-line">
                            <div class="caption caption-md">
                                <i class="icon-globe theme-font hide"></i>
                                <span class="caption-subject  bold uppercase">Profile Account</span>
                            </div>
<!--                             <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab_1_1" data-toggle="tab" aria-expanded="true">Personal Info</a>
                                </li>
                                <li class="">
                                    <a href="#tab_1_2" data-toggle="tab" aria-expanded="false">User Privileges</a>
                                </li>
                            </ul> -->
                        </div>
                        <div class="portlet-body">
                        <h4>Personal Info</h4><hr/>
                          <div class="tab-pane active" id="tab_1_1">
                              <form role="form" action="{{url('/system-users/create')}}" method="POST" id="personal-info-form">
                                    @include('partials.user_enroll_form')
                              </form>
                        </div>
                    </div>
                </div>
            </div>
          </div>

        </div>
    </div>
    </div>
    <script>
        (function(){
            var global_p = document.getElementById('grant_all_privilege');
            var cb = document.getElementsByClassName('global-access');
            global_p.onchange = function (){
                if(global_p.checked){
                    for (var i = cb.length - 1; i >= 0; i--) {
                             cb[i].checked = true;
                     }                   
                }else{
                    for (var i = cb.length - 1; i >= 0; i--) {
                             cb[i].checked = false;
                     }                     
                }
            }          

        })();

        (function(){

            var user_prev = document.getElementById('user-prev');
            var up = document.getElementsByClassName('user_privilege');

            user_prev.onchange = function (){
                if(user_prev.checked == true){
                    for (var i = up.length - 1; i >= 0; i--) {
                             up[i].checked = true;
                     } 
                }else{
                    for (var i = up.length - 1; i >= 0; i--) {
                             up[i].checked = false;
                     }                     
                }
            }

        })();

        (function(){

            var comp_prev = document.getElementById('comp-prev');
            var cp = document.getElementsByClassName('company_privilege');

            comp_prev.onchange = function (){
                if(comp_prev.checked == true){
                    for (var i = cp.length - 1; i >= 0; i--) {
                             cp[i].checked = true;
                     } 
                }else{
                    for (var i = cp.length - 1; i >= 0; i--) {
                             cp[i].checked = false;
                     }                     
                }
            }

        })();

        (function(){

            var file_prev = document.getElementById('file-prev');
            var fp = document.getElementsByClassName('file_privilege');

            file_prev.onchange = function (){
                if(file_prev.checked == true){
                    for (var i = fp.length - 1; i >= 0; i--) {
                             fp[i].checked = true;
                     } 
                }else{
                    for (var i = fp.length - 1; i >= 0; i--) {
                             fp[i].checked = false;
                     }                     
                }
            }

        })();        


    </script>                                    



@stop 