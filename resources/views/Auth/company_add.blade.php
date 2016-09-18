@extends('layout.auth.main')

@section('content')

                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1>
                    Add Company <!-- galing sa route -->
                    <small>Enroll company</small>
                  </h1>
                  <ol class="breadcrumb">
                    <li class="active"><a href="#"><i class="glyphicon glyphicon-paste"></i> Company/Add</a></li>
                    
                  </ol>
                </section>


        <div class="content">

            @if(session('global'))
                <span>{{session('global')}}</span>
            @endif
            <form role="form" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" action="{{url('/create-company')}}">
	            <div class="row">
	                <div class="col-lg-12">
	                    <h3 class="page-header">Enter Company Information </h3>
	                </div>                               
	                <!-- /.col-lg-12 -->
	            </div> 
            <div class="form-group">
              <label for="company_name">Company Name* :</label>
              <input type="text" class="form-control" id="company_name" placeholder="Enter Company Name" name="company_name" {{(old('company_name')) ? 'value='. old('company_name')  : ''}}>
               @if($errors->has('company_name'))
              <p class="help-block">{{$errors->first('company_name')}}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="legal_name">Legal Name :</label>
              <input type="text" class="form-control" id="legal_name" placeholder="Enter Legal Name" name="legal_name" {{(old('legal_name')) ? 'value='. old('legal_name')  : ''}}>
               @if($errors->has('legal_name'))
              <p class="help-block">{{$errors->first('legal_name')}}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="tax_id">Tax ID* :</label>
              <input type="text" class="form-control" id="tax_id" placeholder="000-000-000" name="tax_id" {{(old('tax_id')) ? 'value='. old('tax_id')  : ''}}>
               @if($errors->has('tax_id'))
              <p class="help-block">{{$errors->first('tax_id')}}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="street_address">Street Address :</label>
              <input type="text" class="form-control" id="street_address" placeholder="Enter Street Address" name="street_address" {{(old('street_address')) ? 'value='. old('street_address')  : ''}}>
               @if($errors->has('street_address'))
              <p class="help-block">{{$errors->first('street_address')}}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="city">City :</label>
              <input type="text" class="form-control" id="city" placeholder="Enter City" name="city" {{(old('city')) ? 'value='. old('city')  : ''}}>
               @if($errors->has('city'))
              <p class="help-block">{{$errors->first('city')}}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="phone">Phone *:</label>
              <input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phone" {{(old('phone')) ? 'value='. old('phone')  : ''}}>
               @if($errors->has('phone'))
              <p class="help-block">{{$errors->first('phone')}}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="fax">Fax :</label>
              <input type="text" class="form-control" id="fax" placeholder="Enter Fax number" name="fax" {{(old('fax')) ? 'value='. old('fax')  : ''}}>
               @if($errors->has('fax'))
              <p class="help-block">{{$errors->first('fax')}}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="email">E-mail *:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" {{(old('email')) ? 'value='. old('email')  : ''}}>
               @if($errors->has('fax'))
              <p class="help-block">{{$errors->first('fax')}}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="website">Website :</label>
              <input type="text" class="form-control" id="website" placeholder="Enter Website" name="website" {{(old('website')) ? 'value='. old('website')  : ''}}>
               @if($errors->has('website'))
              <p class="help-block">{{$errors->first('website')}}</p>
              @endif
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Select your Industry </h3>
                </div>                               
                <!-- /.col-lg-12 -->
            </div> 

            <div class="form-group">
              <label for="industry">Idustry *:</label>
              <input type="text" class="form-control" id="industry" placeholder="Enter Industry Type" name="industry" {{(old('industry')) ? 'value='. old('industry')  : ''}} list="itype">
               @if($errors->has('industry'))
              <p class="help-block">{{$errors->first('industry')}}</p>
              @endif
            </div>

            <datalist id="itype">
                @foreach($itype as $type)
                	<option>{{{$type->name}}}</option>		
                @endforeach

            </datalist>

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Type of Organization </h3>
                </div>                               
                <!-- /.col-lg-12 -->
            </div>
            <div class="form-group">
                <label for="organization">Select Type of Organization:</label><br/>
                <label class="radio-inline">
                  <input type="radio" name="organization" value="{{'Sole Proprietorship'}}" {{(old('industry') == 'Sole Proprietorship') ? 'checked ="true"' : ''}}>Sole Proprietorship
                </label>
                <label class="radio-inline">
                  <input type="radio" name="organization" value="{{'Partnership or LLP'}}" {{(old('industry') == 'Partnership or LLP') ? 'checked ="true"' : ''}}>Partnership or LLP
                </label>
                <label class="radio-inline">
                  <input type="radio" name="organization" value="{{'LLC'}}" {{(old('industry') == 'LLC') ? 'checked ="true"' : ''}}>LLC
                </label>                
                <label class="radio-inline">
                  <input type="radio" name="organization" value="{{'Corporation (Also known as Regular or C Corporation)'}}" {{(old('industry') == 'Corporation (Also known as Regular or C Corporation)') ? 'checked ="true"' : ''}}>Corporation (Also known as Regular or C Corporation)
                </label>
                <label class="radio-inline">
                  <input type="radio" name="organization" value="{{'S Corporation'}}" {{(old('industry') == 'S Corporation') ? 'checked ="true"' : ''}}>S Corporation
                </label>
                <label class="radio-inline">
                  <input type="radio" name="organization" value="{{'None-Profit'}}" {{(old('industry') == 'None-Profit') ? 'checked ="true"' : ''}}>None-Profit
                </label> 
                <label class="radio-inline">
                  <input type="radio" name="organization" value="{{'Other/None'}}" {{(old('industry') == 'Other/None') ? 'checked ="true"' : ''}}>Other/None
                </label>                                                

             @if($errors->has('organization'))
              <p class="help-block">{{$errors->first('organization')}}</p>
              @endif
            </div>

            <div class="form-group">
            <button type="submit" class="btn btn-primary">submit</button>
            </div>

            <input type="hidden" name="_token" value="{{csrf_token()}}">
            

            </form>
        </div>



@stop