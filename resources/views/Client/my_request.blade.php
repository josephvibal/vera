@extends('layout.auth.main')

@section('content')

<link rel="stylesheet" href="{{asset('/css/modified.css')}}">
<style type="text/css">
.profile-sidebar{float:left;width:300px;margin-right:20px}.profile-content{overflow:hidden}.profile-sidebar-portlet{padding:30px 0 0!important}.profile-userpic img{float:none;margin:0 auto;width:50%;height:50%;-webkit-border-radius:50%!important;-moz-border-radius:50%!important;border-radius:50%!important}.profile-usertitle{text-align:center;margin-top:20px}.profile-usertitle-name{color:#5a7391;font-size:20px;font-weight:600;margin-bottom:7px}.profile-usertitle-job{text-transform:uppercase;color:#5b9bd1;font-size:13px;font-weight:800;margin-bottom:7px}.profile-userbuttons{text-align:center;margin-top:10px}.profile-userbuttons .btn{margin-right:5px}.profile-userbuttons .btn:last-child{margin-right:0}.profile-userbuttons button{text-transform:uppercase;font-size:11px;font-weight:600;padding:6px 15px}.profile-usermenu{margin-top:30px;padding-bottom:20px}.profile-usermenu ul li{border-bottom:1px solid #f0f4f7}.profile-usermenu ul li:last-child{border-bottom:none}.profile-usermenu ul li a{color:#93a3b5;font-size:16px;font-weight:400}.profile-usermenu ul li a i{margin-right:8px;font-size:16px}.profile-usermenu ul li a:hover{background-color:#fafcfd;color:#5b9bd1}.profile-usermenu ul li.active a{color:#5b9bd1;background-color:#f6f9fb;border-left:2px solid #5b9bd1;margin-left:-2px}.profile-stat{padding-bottom:20px;border-bottom:1px solid #f0f4f7}.profile-stat-title{color:#7f90a4;font-size:25px;text-align:center}.profile-stat-text{color:#5b9bd1;font-size:11px;font-weight:800;text-align:center}.profile-desc-title{color:#7f90a4;font-size:17px;font-weight:600}.profile-desc-text{color:#7e8c9e;font-size:14px}.profile-desc-link i{width:22px;font-size:19px;color:#abb6c4;margin-right:5px}.profile-desc-link a{font-size:14px;font-weight:600;color:#5b9bd1}@media (max-width:991px){.profile-sidebar{float:none;width:100%!important;margin:0}.profile-sidebar>.portlet{margin-bottom:20px}.profile-content{overflow:visible}}
</style>
<link rel="stylesheet" type="text/css" href="{{ asset('css/search.css') }}">

    <section class="content-header">
      <h1>
        My
        <small>
            {{$reqtype}} Request(s) {{(Session('global') ? Session('global') : '')}}
        </small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-comments"></i></a></li>
        
      </ol>
    </section>

<div class="content">

        <div class="search-page search-content">

            <div class="row">
                <div class="col-md-12">
                    <div class="search-container " id="mContent">
                        @include('partials.requests')
                    </div>
                </div>
            </div>
        </div>

</div>

<!-- modals -->
<div id="myModalEdit" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit <i class="fa fa-pencil"></i></h4>
      </div>
      <div class="modal-body" >
        <div id="updateresponse"></div>
        <form action="{{url('/my-request/update/')}}" method="post" id="reqUpdateForm">
            <div id="vresp">
                
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script src="{{ asset('js/json2.js') }}"></script>
<script src="{{ asset('js/s9.js') }}"></script>

<script>
    function edit_request(id){
        var div = document.getElementById('vresp');
        var url = "{{url('/my-request/view-edit/')}}"
        var _token = "{{csrf_token()}}";
            
            Strat.ajax(url, {
            method: "POST",
            data:  {
                id : id,
                _token:_token
            },
            before: function() {
             div.innerHTML = '<center><img src="{{URL::asset('images/ajax-loader.gif')}}"/ style="height:100%"></center>';                      
               
            },
            complete: function(response) {

                div.innerHTML = response;
                //Strat.flash(div);
               
            }
            });

            return false;
            
    }
</script>

<script>
    
(function(){
  
    var updateForm = document.getElementById('reqUpdateForm');
  
    var url = updateForm.getAttribute('Action');
    
    var _token = "{{csrf_token()}}";

    var div = document.getElementById('updateresponse');

    updateForm.onsubmit = function (){
  
        var title = document.getElementsByName('title')[0].value;
  
        var body = document.getElementsByName('body')[0].value;
       
        var id = document.getElementById('Uid').value;

        var err_msg = document.getElementsByClassName('err_msg');

            $.ajax({
              type: 'post',
              url: url,
              data: {title : title, body : body , id : id , _token : _token},
              dataType: 'json',
              beforeSend: function() {

                for (var i = err_msg.length - 1; i >= 0; i--) {
                    err_msg[i].innerHTML = '';
                }

              },
                complete: function(){
                div.innerHTML = '<span>' + data + '</span>'; 
              },
              success: function(data){
                div.innerHTML = '<span>' + data + '</span>';
                Strat.flash(div);               
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