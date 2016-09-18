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

            <!-- BEGIN PROFILE CONTENT -->
            <div class="profile-content">
                <div class="row">
                    <div class="col-md-6">
                        <!-- BEGIN PORTLET -->
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <span class="caption-subject  bold uppercase">Posts</span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                
<div>
    <ul class="list-group">
        <li class="list-group-item">
            Joined on {{$user->created_at->format('M d,Y \a\t h:i a') }}
        </li>
        <li class="list-group-item panel-body">
            <table class="table-padding">
                <style>
                    .table-padding td{
                        padding: 3px 8px;
                    }
                </style>
                <tr>
                    <td>Total Posts</td>
                    <td> {{$posts_count}}</td>
                    @if($author && $posts_count)
                    <td><a href="{{ url('/system-users/user/' . $user->id . '/blog/all')}}">Show All</a></td>
                    @endif
                </tr>
                <tr>
                    <td>Published Posts</td>
                    <td>{{$posts_active_count}}</td>
                    @if($posts_active_count)
                    <td><a href="{{ url('/system-users/user/' . $user->id . '/blog/published')}}">Show All</a></td>
                    @endif
                </tr>
                <tr>
                    <td>Posts in Draft </td>
                    <td>{{$posts_draft_count}}</td>
                    @if($author && $posts_draft_count)
                    <td><a href="{{ url('/system-users/user/' . $user->id . '/blog/drafts')}}">Show All</a></td>
                    @endif
                </tr>
            </table>
        </li>
        <li class="list-group-item">
            Total Comments {{$comments_count}}
        </li>
    </ul>
</div>

<div class="panel panel-default">
    <div class="panel-heading"><h3>Latest Posts</h3></div>
    <div class="panel-body">
        @if(!empty($latest_posts[0]))
        @foreach($latest_posts as $latest_post)
            <p>
                <strong><a href="{{ url('/'.$latest_post->slug) }}">{{ $latest_post->title }}</a></strong>
                <span class="well-sm">On {{ $latest_post->created_at->format('M d,Y \a\t h:i a') }}</span>
            </p>
        @endforeach
        @else
        <p>You have not written any post till now.</p>
        @endif
    </div>
</div>

                            </div>
                        </div>
                        <!-- END PORTLET -->
                    </div>
                    <div class="col-md-6">
                        <!-- BEGIN PORTLET -->
                        <div class="portlet light ">
                            <div class="portlet-title tabbable-line">
                                <div class="caption caption-md">
                                    <i class="icon-globe theme-font hide"></i>
                                    <span class="caption-subject  bold uppercase">
                                        {{($user->admin) ? 'User Privilege' : 'File(s)'}}
                                    </span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                
                                @if($user->admin)

                                    @include('Auth.admin.privilege')
                                @else
                                    @include('Auth.admin.clientfile')
                                    @if($files_count)
                                    <a href="{{url('/system-users/user/'. $user->id .'/files')}}" class="btn btn-default btn-block">View All File(s)</a>
                                    @endif
                                @endif

                    
                            </div>
                        </div>
                        <!-- END PORTLET -->
                    </div>
                </div>

            </div>
            <!-- END PROFILE CONTENT -->        

    	</div>
    </div>

</div>

@stop