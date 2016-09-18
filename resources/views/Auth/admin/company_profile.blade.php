@extends('layout.auth.main')

@section('content')

<link rel="stylesheet" href="{{asset('/css/modified.css')}}">
<style type="text/css">
.profile-sidebar{float:left;width:300px;margin-right:20px}.profile-content{overflow:hidden}.profile-sidebar-portlet{padding:30px 0 0!important}.profile-userpic img{float:none;margin:0 auto;width:50%;height:50%;-webkit-border-radius:50%!important;-moz-border-radius:50%!important;border-radius:50%!important}.profile-usertitle{text-align:center;margin-top:20px}.profile-usertitle-name{color:#5a7391;font-size:20px;font-weight:600;margin-bottom:7px}.profile-usertitle-job{text-transform:uppercase;color:#5b9bd1;font-size:13px;font-weight:800;margin-bottom:7px}.profile-userbuttons{text-align:center;margin-top:10px}.profile-userbuttons .btn{margin-right:5px}.profile-userbuttons .btn:last-child{margin-right:0}.profile-userbuttons button{text-transform:uppercase;font-size:11px;font-weight:600;padding:6px 15px}.profile-usermenu{margin-top:30px;padding-bottom:20px}.profile-usermenu ul li{border-bottom:1px solid #f0f4f7}.profile-usermenu ul li:last-child{border-bottom:none}.profile-usermenu ul li a{color:#93a3b5;font-size:16px;font-weight:400}.profile-usermenu ul li a i{margin-right:8px;font-size:16px}.profile-usermenu ul li a:hover{background-color:#fafcfd;color:#5b9bd1}.profile-usermenu ul li.active a{color:#5b9bd1;background-color:#f6f9fb;border-left:2px solid #5b9bd1;margin-left:-2px}.profile-stat{padding-bottom:20px;border-bottom:1px solid #f0f4f7}.profile-stat-title{color:#7f90a4;font-size:25px;text-align:center}.profile-stat-text{color:#5b9bd1;font-size:11px;font-weight:800;text-align:center}.profile-desc-title{color:#7f90a4;font-size:17px;font-weight:600}.profile-desc-text{color:#7e8c9e;font-size:14px}.profile-desc-link i{width:22px;font-size:19px;color:#abb6c4;margin-right:5px}.profile-desc-link a{font-size:14px;font-weight:600;color:#5b9bd1}@media (max-width:991px){.profile-sidebar{float:none;width:100%!important;margin:0}.profile-sidebar>.portlet{margin-bottom:20px}.profile-content{overflow:visible}}
</style>


    <section class="content-header">
      <h1>
        Company <!-- galing sa route -->
        <small>Profile </small>
      </h1>
      <ol class="breadcrumb">
        <li class="active">
            <a href="{{url('/system-users/user/'.$companyProfile->company_id)}}">
                <i class="fa fa-user"></i> View User
            </a>
        </li>
        
      </ol>
    </section>

<div class="content">

    <div class="row">
        <div class="col-md-12">
        
         
        <div class="profile-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light ">
                        <div class="portlet-title tabbable-line">
                            <div class="caption caption-md">
                                <i class="icon-globe theme-font hide"></i>
                                <span class="caption-subject  bold uppercase">Company Account</span>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab_1_1" data-toggle="tab" aria-expanded="true">Company Info</a>
                                </li>
                                <li class="">
                                    <a href="#tab_1_2" data-toggle="tab" aria-expanded="false">Company Logo</a>
                                </li>
                            </ul>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane active" id="tab_1_1">
                                    <form role="form" action="{{url('/update-company-info')}}" method="POST" id="company-info-form">
                                        <div class="form-group">
                                            <label class="control-label">Company Name</label>
                                            <input type="text" name="company_name" placeholder="company name" class="form-control"
                                                value="{{(!old('company_name')) ? $companyProfile->company_name : old('company_name')}}" 
                                                > 
                                            <span class="help-block">
                                                <strong id="error_company_name" style="color:red;"></strong>
                                            </span>                                                
                                        </div>
                                                                                     
                                        <div class="form-group">
                                            <label class="control-label">Legal Name</label>
                                            <input type="text" name="legal_name" placeholder="Enter Legal Name" class="form-control"
                                                value="{{(!old('legal_name')) ? $companyProfile->legal_name : old('legal_name')}}" 
                                                > 
                                            <span class="help-block">
                                                <strong id="error_legal_name" style="color:red;"></strong>
                                            </span>                                        
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Tax ID</label>
                                            <input type="text" name="tax_id" placeholder="00000000" class="form-control"
                                            value="{{(!old('tax_id')) ? $companyProfile->tax_id : old('tax_id')}}" 
                                            >
                                            <span class="help-block">
                                                <strong id="error_tax_id" style="color:red;"></strong>
                                            </span>                                              
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Street Address</label>
                                            <textarea name= "street_address" class="form-control" rows="3" style="margin: 0px -1px 0px 0px; width: 905px; height: 99px;">
                                                {{(!old('street_address')) ? $companyProfile->street_address : old('street_address')}} 

                                            </textarea>
                                            <span class="help-block">
                                                <strong id="error_street_address" style="color:red;"></strong>
                                            </span>                                            
                                        </div>                                        
                                        <div class="form-group">
                                            <label class="control-label">City</label>
                                            <input type="text" name="city" placeholder="Manila" class="form-control"
                                            value="{{(!old('city')) ? $companyProfile->city : old('city')}}"  
                                            >
                                            <span class="help-block">
                                                <strong id="error_city" style="color:red;"></strong>
                                            </span>                                              
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Phone</label>
                                            <input type="text" name="phone" placeholder="+632 0000" class="form-control"
                                            value="{{!old('phone') ? $companyProfile->phone : old('phone')}}" 
                                            >
                                            <span class="help-block">
                                                <strong id="error_phone" style="color:red;"></strong>
                                            </span>                                             
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Fax</label>
                                            <input type="text" name="fax" placeholder="+632 1234567" class="form-control"
                                            value="{{(!old('fax')) ? $companyProfile->fax : old('fax')}}" 
                                            >
                                            <span class="help-block">
                                                <strong id="error_fax" style="color:red;"></strong>
                                            </span>                                               
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Website</label>
                                            <input name="website" type="text" placeholder="http://www.mywebsite.com" class="form-control"
                                            value="{{(!old('website')) ? $companyProfile->website : old('website')}}"
                                            >
                                            <span class="help-block">
                                                <strong id="error_website" style="color:red;"></strong>
                                            </span>                                              
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Type of Organization</label>
                                            <input name="type_of_organization" type="text" placeholder="http://www.mywebsite.com" class="form-control"
                                            value="{{(!old('type_of_organization')) ? $companyProfile->type_of_org : old('type_of_organization')}}"
                                            >
                                            <span class="help-block">
                                                <strong id="error_type_of_organization" style="color:red;"></strong>
                                            </span>                                              
                                        </div>                                        
                                        <div class="form-group">
                                        <div id="resp"></div>
                                        </div>                                        
                                        <div class="margiv-top-10">
<!--                                             <button type="submit" class="btn green"> Save Changes </button>
                                            <button type="reset" class="btn default"> Cancel </button> -->
                                        </div>
                                    </form>
                                </div>
                                <!-- END PERSONAL INFO TAB -->
                                <!-- CHANGE AVATAR TAB -->
                                <div class="tab-pane" id="tab_1_2">
                                    <p> </p>
                                    <form role="form" method="POST" action="{{url('/update-company-avatar')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img src="{{url('/get-company-logo/'.$companyProfile->company_id)}}" alt=""> 
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                <div>
<!--                                                     <span class="btn default btn-file">
                                                        <span class="fileinput-new"> Select image </span>
                                                        <span class="fileinput-exists"> Change </span>
                                                        <input type="file" name="file"> </span>
                                                    <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a> -->
                                                </div>
                                            </div>
                                            <div class="clearfix margin-top-10">
                                                <span class="label label-danger">NOTE! </span>
                                                <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                            </div>
                                        </div>
                                        {{csrf_field()}}
<!--                                         <div class="margin-top-10">
                                            <button type="submit" class="btn green"> Submit </button>
                                            <button type="reset" class="btn default"> Cancel </button>
                                        </div> -->
                                    </form>
                                </div>
                                <!-- END CHANGE AVATAR TAB -->
                            </div>
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
      
        var form = document.getElementById('company-info-form');
        var url = form.getAttribute('Action');
        var div = document.getElementById('resp');

        form.onsubmit = function(){
            var company_name            	= document.getElementsByName('company_name')[0].value;
            var legal_name	                = document.getElementsByName('legal_name')[0].value;
            var tax_id          			= document.getElementsByName('tax_id')[0].value;
            var street_address           	= document.getElementsByName('street_address')[0].value;
            var city       					= document.getElementsByName('city')[0].value;
            var phone           			= document.getElementsByName('phone')[0].value;
            var fax         				= document.getElementsByName('fax')[0].value;
            var website         			= document.getElementsByName('website')[0].value;
            var type_of_organization        = document.getElementsByName('type_of_organization')[0].value;
            var _token = "{{csrf_token()}}";
            $.ajax({
              type: 'post',
              url: url,
              data: {
                company_name 			   : company_name,        
                legal_name	               : legal_name,	            
                tax_id          	       : tax_id,          	    
                street_address             : street_address,          
                city       			       : city,       			    
                phone           	       : phone,           	    
                fax         		       : fax,
                website 				   : website,        		    
                type_of_organization       : type_of_organization,    
                _token : _token,
              },
              dataType : 'json',
              beforeSend : function(){
                document.getElementById('error_company_name').innerHTML = '';
                document.getElementById('error_legal_name').innerHTML = '';
                document.getElementById('error_tax_id').innerHTML = '';
                document.getElementById('error_street_address').innerHTML = '';
                document.getElementById('error_city').innerHTML = '';
                document.getElementById('error_phone').innerHTML = '';
                document.getElementById('error_fax').innerHTML = '';
                document.getElementById('error_website').innerHTML = '';
                document.getElementById('error_type_of_organization').innerHTML = '';
                div.innerHTML = '<center><img src="{{URL::asset('images/ajax-loader.gif')}}"/ style="height:100%"></center>';                
              },
              success: function(data){
                 div.innerHTML = data;
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