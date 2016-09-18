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
                                <span class="caption-subject  bold uppercase">Posts</span>
                            </div>
                        </div>
                        <div class="portlet-body">
							@if ( !$posts->count() )
							There is no post till now.
							@endif

							 @foreach( $posts as $post )
								<div class="list-group">
								    <div class="list-group-item">
								        <h3><a href="{{ url('/blog/'.$post->slug) }}">{{ $post->title }}</a>
								            @if($post->author_id == Auth::user()->id)
								                @if($post->active == '1')
								                <button class="btn" style="float: right"><a href="{{ url('/my-blog/edit/'.$post->slug)}}">Edit Post</a></button>
								                @else
								                <button class="btn" style="float: right"><a href="{{ url('/my-blog/edit/'.$post->slug)}}">Edit Draft</a></button>
								                @endif
								            @endif
								        </h3>
								        <p>{{ $post->created_at->format('M d,Y \a\t h:i a') }} By <a href="{{ url('/user/'.$post->author_id)}}">{{ $post->author->username }}</a></p>
								        
								    </div>
								    <div class="list-group-item">
								        <article>
								            {!! str_limit($post->body, $limit = 150, $end = '....... <a href='.url("/blog/".$post->slug).'>Read More</a>') !!}
								        </article>
								    </div>
								</div>
							@endforeach
							{!! $posts->render() !!}	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </div>

        </div>
    </div>

</div>


@stop