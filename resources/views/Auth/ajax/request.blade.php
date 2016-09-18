		


	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<input value="{{ (!old('title')) ? $req->subject : old('title') }}" placeholder="Enter title here" type="text" name = "title"		class="form-control"
		{!!(Auth::user()->admin) ? 'readonly' : '' !!}
		/>
            <span class="help-block">
                <strong class="err_msg" id="error_title" style="color:red;"></strong>
            </span>
	</div>
	<div class="form-group">
		<textarea name='body' class="form-control" {!!(Auth::user()->admin) ? 'readonly' : '' !!}>{!! (!old('body')) ? $req->request : old('body') !!}</textarea>
            <span class="help-block">
                <strong class="err_msg" id="error_body" style="color:red;"></strong>
            </span>
	</div>
	
	@if(!Auth::user()->admin)

	<input type="hidden" name="id" id="Uid" value="{!! $req->id !!}">
	<input type="submit" name='submit' class="btn btn-success" value = "Submit"/>
	<input type="reset" name='save' class="btn btn-default" value = "Reset" />

	@endif	
	