			<div class="profile-sidebar">
	            <!-- PORTLET MAIN -->
	            <div class="portlet light profile-sidebar-portlet ">
	                <!-- SIDEBAR USERPIC -->
	                <div class="profile-userpic">
	                    <img src="{{url('/get-user-avatar/'.$user->id)}}" class="img-responsive" alt=""> </div>
	                <!-- END SIDEBAR USERPIC -->
	                <!-- SIDEBAR USER TITLE -->
	                <div class="profile-usertitle">
	                    <div class="profile-usertitle-name"> {{$user->first_name . ' ' . $user->last_name}} </div>
	                    <div class="profile-usertitle-job"> {{$user->occupation}} </div>
	                </div>
	                <!-- END SIDEBAR USER TITLE -->
	                <!-- SIDEBAR MENU -->
	                <div class="profile-usermenu">
	                    <ul class="nav">
	                        <li class="{{ set_active(['page', 'profile']) }}">
	                            <a href="{{url('/system-users/user/'.$user->id)}}">
	                                <i class="icon-home"></i> Overview </a>
	                        </li>
	                        <li class="{{ set_active(['page', 'profile/account-setting']) }}">
	                            <a href="{{url('/system-users/account-setting/user/'.$user->id)}}">
	                                <i class="icon-settings"></i> Account Settings </a>
	                        </li>
	                    </ul>
	                </div>
	                <!-- END MENU -->
	            </div>
	            <!-- END PORTLET MAIN -->
	            <!-- PORTLET MAIN -->
	            <div class="portlet light ">
	                <!-- STAT -->
	                <div class="row list-separated profile-stat">
	                    <div class="col-md-6 col-sm-6 col-xs-8">
	                        <div class="uppercase profile-stat-title"> 37 </div>
	                        <div class="uppercase profile-stat-text"> Clients Handled </div>
	                    </div>
	                    <div class="col-md-6 col-sm-6 col-xs-8">
	                        <div class="uppercase profile-stat-title"> 51 </div>
	                        <div class="uppercase profile-stat-text"> Tasks </div>
	                    </div>
	                </div>
	                <!-- END STAT -->
	                <div>
	                    <h4 class="profile-desc-title">About {{$user->first_name . ' ' . $user->last_name}}</h4>
	                    <span class="profile-desc-text"> {{$user->about}} </span>
	                </div>
	            </div>
	            <!-- END PORTLET MAIN -->
	        </div>