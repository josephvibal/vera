<ul>
    @foreach($users as $user)
        <li class="search-item clearfix">
            <a href="{{url('/system-users/user/'.$user->id)}}">
                <img src="{{ url('/get-user-avatar/'.$user->id) }}" style="width:100px;height:100px">

            </a>
            <div class="search-content">
                <h2 class="search-title">
                    <a href="{{url('/system-users/user/'.$user->id)}}">{{$user->first_name .' '. $user->last_name}}</a>
                </h2>
                Company : {{ (isset($user->companyProfile->company_name)) ? $user->companyProfile->company_name : 'Vera' }}
                <br/>
                Status  : {{($user->active) ? 'Active' : 'Inactive'}}                
                <p class="search-desc">{{$user->about}}</p>
            </div>                        
        </li>
    @endforeach
</ul>

<div class="search-pagination">
    {{$users->links()}}
</div>