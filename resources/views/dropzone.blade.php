<!DOCTYPE html>
<html>
<link href="{{ asset('/dist/css/dropzone.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="dropzone" id="dropzoneFileUpload">
        </div>
    </div>
 
<script src="{{ asset('js/dropzone.min.js') }}"></script>
 
    <script type="text/javascript">
        var baseUrl = "{{ url('/') }}";
        var token = "{{ csrf_token() }}";
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("div#dropzoneFileUpload", {
            url: baseUrl + "/dropzone/uploadFiles",
            params: {
                _token: token
            }
        });
        Dropzone.options.myAwesomeDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            addRemoveLinks: true,
            accept: function(file, done) {
                
            },
        };
    </script>
</body>
</html>
