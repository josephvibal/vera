@if(!$files_count)

No File(s) found! 

@else


        <table class="table table-bordered table-hover table-striped table-responsive">
            <th>File Name</th>
            <th>File Type</th>
            <th>&nbsp;</th>

            @foreach($files as $file)
                <tr>
                    <td>{{$file->original_name}}</td>
                    <td>{{$file->file_type}}</td>
                    <td><a href="{{url('/file/'. $file->file_id .'/'.$file->id)}}" target="_blank"><i class="fa fa-eye"></i> View</a></td>
                </tr>
            @endforeach

        </table>    
{{$files->links()}}


@endif