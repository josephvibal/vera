@extends('layout.auth.main')

@section('content')
<!--  <iframe src="http://docs.google.com/gview?url=http://www.tutorialspoint.com/php/php_tutorial.pdf&embedded=true" style="width:600px; height:500px;" frameborder="0">
</iframe> -->
    <script src="{{ asset('js/json2.js') }}"></script>
    <script src="{{ asset('js/s9.js') }}"></script>

<script>
    function view_file(id){
    var url = "{{url('/view-file-for-share')}}";
    var _token = "{{csrf_token()}}";
   // alert(id + '=' + _token);
    Strat.ajax(url, {
        method: "POST",
        data:  {
            id : id,
            _token: _token
        },
        before: function() {
         document.getElementById('fileShareContent').innerHTML = '<center><img src="{{URL::asset('images/ajax-loader.gif')}}"/ style="height:100%"></center>';                      
           
        },
        complete: function(response) {
            document.getElementById('fileShareContent').innerHTML = response
           Strat.flash(document.getElementById('fileShareContent'));
            
           
        }
        });

        return false;
        }

    function shareFile(id,folder){
        var to = document.getElementById('cid').value
        var url = "{{url('/file-share-create')}}";
        var _token = "{{csrf_token()}}";
        
        Strat.ajax(url, {
        method: "POST",
        data:  {
            id : id,
            folder : folder,
            to : to,
            _token: _token
        },
        before: function() {
         
        },
        complete: function(response) {

            document.getElementById('err').innerHTML = response;
           Strat.flash(document.getElementById('err'));
        }
        });

        return false;
    }    

</script>
<link href="{{ asset('/dist/css/dropzone.min.css') }}" rel="stylesheet">

                 <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1 class="page-header">{{$filetitle}} 
                    <small style="font-size:10px;">{{$description}}</small> </h1>
                  <ol class="breadcrumb">
                    <li class="active"><a href="#"><i class="glyphicon glyphicon-file"></i> File(s)</a></li>
                    
                  </ol>
                </section>       

        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                   <h1> <a href="#" class="pull-right" data-toggle="modal" data-target="#myModal"><small>Add</small></a></h1>
                </div>                               
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <form id="searchCompany" method="post" action="{{URL::route('post-company')}}">
                    <div class="col-lg-12">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..." id="search">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                        </div>                    
                    </div>
                    <!-- /.col-lg-12 -->                
                </form>
            </div>
            <br/>
            <div class="row col-lg-12">
                <div id="rsp">
                    @include('auth.ajax.fileview')
                </div>
            </div>
    </div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header"> 
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload File</h4>
      </div>
      <div class="modal-body">
        
        <div id="dropzoneFileUpload" class="dropzone">
           
        </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="upload">upload</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- modal share begin-->

<div id="fileShareModal" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Share This File?</h4>
      </div>
      <div class="modal-body" id="fileShareContent">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>    

<!-- modal share end-->

    <script src="{{ asset('js/dropzone.min.js') }}"></script>
    <script src="{{ asset('js/json2.js') }}"></script>
    <script src="{{ asset('js/s9.js') }}"></script>   

    <script type="text/javascript">
        var div = document.getElementById('rsp');
       
        var token = "{{ csrf_token() }}";
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("div#dropzoneFileUpload", {
            url: "{{ url('/dropzone/uploadFiles') }}",
            addRemoveLinks: true,
            autoProcessQueue: false,
               parallelUploads: 100,
                maxFiles: 100,
                maxFilesize: 10,
            params: {
                _token: token,
                type : '{!! $file_id !!}'
            },
            success: function (file, response) {
                div.innerHTML = response;
                //myDropzone.removeFile(file);
            },
            error: function (file, response) {
            file.previewElement.classList.add("dz-error");
            },
            });
        Dropzone.options.myAwesomeDropzone = {

        };
        $('#upload').click(function(){           
            myDropzone.processQueue();
            
        });
    </script>


    <script>
        // (function(){
        //     var search = document.getElementById('search');
        //     var _token = "{{csrf_token()}}";
        //     var div = document.getElementById('rsp');
        //     var form = document.getElementById('my-awesome-dropzone');
        //     var url = form.getAttribute('Action');

        //     form.onsubmit = function(){

        //             var value = search.value;
        //             Strat.ajax(url, {
        //             method: "POST",
        //             data:  {
        //                 value : value,
        //                 _token:_token
        //             },
        //             before: function() {
        //                div.innerHTML = '<center><img src="{{URL::asset('images/ajax-loader.gif')}}"/ style="height:100%"></center>'; 
                                           
        //             },
        //             complete: function(response) {

        //             div.innerHTML = response;
                       
        //             }
        //         });

        //         return false;
        //     }



        // })();
    </script>         
@stop