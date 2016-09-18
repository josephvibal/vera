@extends('layout.auth.main')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/search.css') }}">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1>
                    Company <!-- galing sa route -->
                    <small>List of Companies</small>
                  </h1>
                  <ol class="breadcrumb">
                    <li class="active"><a href="#"><i class="glyphicon glyphicon-paste"></i> Company</a></li>
                    
                  </ol>
                </section>

        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{url('add-company')}}" class="pull-right"><small>Add</small></a>
                </div>                                 
                <!-- /.col-lg-12 -->
            </div>


    <div class="search-page search-content">
            <div class="search-bar ">
                <div class="row">
                 <form id="searchCompany" method="post" action="{{URL::route('post-company')}}">
                    <div class="col-md-12">
                        <div class="input-group">
                        {{csrf_field()}}
                            <input type="text" class="form-control" placeholder="Search for..." id="search">
                            <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-search"></i> Search
                                </button>
                            </span>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="search-container " id="rsp">
                     @include('Auth.ajax.companies')
                    </div>
                </div>
            </div>
        </div>


        </div>

    <script src="{{ asset('js/json2.js') }}"></script>
    <script src="{{ asset('js/s9.js') }}"></script>   
    <script>
        (function(){
            var search = document.getElementById('search');
            var _token = "{{csrf_token()}}";
            var div = document.getElementById('rsp');
            var form = document.getElementById('searchCompany');
            var url = form.getAttribute('Action');

            form.onsubmit = function(){

                    var value = search.value;
                    Strat.ajax(url, {
                    method: "POST",
                    data:  {
                        value : value,
                        _token:_token
                    },
                    before: function() {
                       div.innerHTML = '<center><img src="{{URL::asset('images/ajax-loader.gif')}}"/ style="height:100%"></center>'; 
                                           
                    },
                    complete: function(response) {

                    div.innerHTML = response;
                    Strat.flash(div);
                    }
                });

                return false;
            }



        })();
    </script>         
@stop