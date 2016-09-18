
<script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
	tinymce.init({
		selector : "textarea",
		plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
		toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
	}); 
</script>
<div id="page-wrapper">
	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">Add New Post</h1>
	    </div>                               
	    <!-- /.col-lg-12 -->
	</div>
<div class="portlet-body">
		<form action="{{url('/new-post')}}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<input required="required" value="{{ old('title') }}" placeholder="Enter title here" type="text" name = "title"		class="form-control" />
				@if($errors->has('title'))
              	<p class="help-block">{{$errors->first('title')}}</p>
              	@endif
			</div>
			<div class="form-group">
				<textarea name='body'class="form-control">{{ old('body') }}</textarea>
				@if($errors->has('body'))
              	<p class="help-block">{{$errors->first('body')}}</p>
              	@endif
			</div>

			<input type="submit" name='publish' class="btn btn-success" value = "Publish"/>
			<input type="submit" name='save' class="btn btn-default" value = "Save Draft" />
		</form>			
	</div>
</div>