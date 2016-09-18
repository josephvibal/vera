<ul>


	    @foreach($company as $companies)
        <li class="search-item clearfix">
            <a href="{{url('/company/'.$companies->id)}}">
                <img src="{{url('/get-company-logo/'.$companies->company_id)}}" style="width:100px;height:100px">

            </a>
            <div class="search-content">
                <h2 class="search-title">
                    <a href="{{url('/company/'.$companies->id)}}">{{$companies->company_name}}</a>
                </h2>
                Type of Organization : {{$companies->type_of_org}}
                <br/>             
                
            </div>                        
        </li>
    @endforeach
</ul>

{{ $company->links() }}