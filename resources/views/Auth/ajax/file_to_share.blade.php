<div id="err"></div>

    <div class="form-group">
      <label for="image" class="col-md-6 control-label">File Name:</label>
      {{$file->original_name}}
      <input type="hidden" name="file_id" value="{!! $file->id !!}">
      <input type="hidden" name="folder_id" value="{!! $file->file_id !!}">
      <input type="hidden" name="_token" value="{!! csrf_token() !!}">
    </div>
    <div class="form-group">
        <label for="shift" class="col-md-6 control-label">Share this file to: </label>
       
        <select class="form-control" name="company" id="cid">
            @foreach($companies as $company)
            <option value="{{$company->id}}">{{$company->company_name}}</option>
            @endforeach
        </select>

    </div>
    <button class="btn btn-primary" onclick="shareFile({{$file->id}},{{$file->file_id}})">submit</button>    	


