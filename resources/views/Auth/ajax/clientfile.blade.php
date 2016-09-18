<div class="row col-lg-12 table-responsive">
	<table class="table table-bordered table-hover table-striped ">
		<th>File Name</th>
		<th>File Type</th>
		<th>&nbsp;</th>

		@foreach($files as $file)
			<tr>
				<td>{{$file->original_name}}</td>
				<td>{{$file->file_type}}</td>
				<td><a href="{{url('/my-files/'. $file->file_id .'/'.$file->id)}}"><i class="fa fa-eye"></i> View</a></td>
			</tr>
		@endforeach

	</table>	
</div>
