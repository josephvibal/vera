<div class="row col-lg-12 table-responsive">

@if(!$files->count())
	No Record Found!
@else
	<table class="table table-bordered table-hover table-striped ">
		<th>Date Uploaded</th>
		<th>File Name</th>
		<th>File Type</th>
		<th>Action</th>
	@foreach($files as $file)
		<tr>
			<td>{{$file->created_at}}</td>
			<td>{{$file->original_name}}</td>
			<td>{{$file->file_type}}</td>
			<td>
				
				<div class="task-config">
	                <div class="task-config-btn btn-group">
	                    <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
	                        <i class="fa fa-cog"></i>
	                        <i class="fa fa-angle-down"></i>
	                    </a>
	                    <ul class="dropdown-menu pull-right">
					      <li>
					      	<a href="{{url('/file/'. $file->file_id .'/'.$file->id)}}"><i class="fa fa-eye"></i> View</a>
					      </li>
					      <li>
					      	<a href="#" data-toggle="modal" data-target="#fileShareModal" onclick="view_file({!! $file->id !!})">
					      		<i class="fa fa-chain"></i> Share</a>
					      </li>
					      <li>
					      	<a href="#">
					      		<i class="fa fa-trash"></i> Delete
					      	</a>
					      	</li>
	                    </ul>
	                </div>
	            </div>

			</td>
		</tr>
		<?php $id = $file->file_id;?>
	@endforeach		
	</table>

<?php echo str_replace('dropzone/uploadFiles', 'file/'.$id, $files->links());?>
@endif	

</div>	