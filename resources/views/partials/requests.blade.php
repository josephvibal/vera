 <style type="text/css">
     .mt-comment-author{
        cursor: pointer;
     }
 </style>
 @foreach($requests as $request)

            <div class="mt-comments">
                <div class="mt-comment">

                @if(Auth::user()->admin)

                    <div class="mt-comment-img">
                   
                        <img src="{{url('/get-company-logo/'.$request->requested_by)}}" style="height:41px;width:41px;"> 

                    </div>              

                @endif

                    <div class="mt-comment-body">
                        <div class="mt-comment-info">
                            <span class="mt-comment-author" 
                            data-toggle="modal" data-target="#myModalEdit"
                            onclick="edit_request({!! $request->id !!})">{{$request->subject}}</span>
                            <span class="mt-comment-date">{{$request->created_at->format('M d,Y \a\t h:i a')}}</span>
                        </div>
                        <div class="mt-comment-text"> 
                            {!! $request->request !!}
                        </div>
                        <div class="mt-comment-details">

                            @if($request->status === 0)                                            
                           
                                <span class="mt-comment-status mt-comment-status-pending" id="s_{!!$request->id!!}">Pending</span>
                           
                            @elseif($request->status === 1)

                                <span class="mt-comment-status mt-comment-status-approved" id="s_{!!$request->id!!}">Approved</span>

                            @elseif($request->status === 2)

                                <span class="mt-comment-status mt-comment-status-rejected" id="s_{!!$request->id!!}">Rejected</span>                                           
                            @endif          
                            
                            @if(!Auth::user()->admin)
                            
                                <ul class="mt-comment-actions">
                                 @if($request->status === 0)                                              
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#myModalEdit" 
                                        onclick="edit_request({!! $request->id !!})">Quick Edit</a>
                                    </li>
                                @endif
                                    <li>
                                        <a href="#">View</a>
                                    </li>
                                    <li>
                                        <a href="#">Delete</a>
                                    </li>
                                </ul>

                            @else

                            <div class="mt-comment-actions ">
                                <div class="btn-group btn-group-circle">
                                    <button onclick="approve_request({!! $request->id !!})" type="button" class="btn btn-outline green btn-sm">
                                        Appove
                                    </button>
                                    <button onclick="reject_request({!! $request->id !!})" type="button" class="btn btn-outline red btn-sm">Reject</button>
                                </div>
                            </div>

                            @endif
                        </div>
                    </div>
                </div>
            </div>
@endforeach

<div class="search-pagination">
    {{$requests->links()}}
</div>