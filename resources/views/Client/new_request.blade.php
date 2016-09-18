@extends('layout.auth.main')

@section('content')

    <section class="content-header">
      <h1>
        Create <!-- galing sa route -->
        <small>Request {{(Session('global') ? Session('global') : '')}}</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-comment"></i> Request</a></li>
        
      </ol>
    </section>


 <div class="content">

<div id="page-wrapper">
<div class="portlet-body">
		<form action="{{url('/my-request/create')}}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<input value="{{ old('title') }}" placeholder="Enter title here" type="text" name = "title"		class="form-control" />
				@if($errors->has('title'))
              	<p class="help-block">{{$errors->first('title')}}</p>
              	@endif
			</div>
			<div class="form-group">
				<textarea name='body' class="form-control">{{ old('body') }}</textarea>
				@if($errors->has('body'))
              	<p class="help-block">{{$errors->first('body')}}</p>
              	@endif
			</div>

			<input type="submit" name='submit' class="btn btn-success" value = "Submit"/>
			<input type="reset" name='save' class="btn btn-default" value = "Reset" />
		</form>			
	</div>
</div>

 </div>   


@stop