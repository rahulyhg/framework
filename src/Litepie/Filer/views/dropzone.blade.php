<!-- Start dropzone for {!!$field!!} -->
<div class="dropzone  dropzone-previews" id="{!!$field!!}">
    
</div>

<script type="text/javascript">
$(function () {
    $("div#{!!$field!!}").dropzone({
        url: "{!! $url !!}",
        maxFiles: {!!$count!!},
        acceptedFiles: "{{$mime}}",
        parallelUploads : 1,
        maxfilesexceeded: function(file) {
            toastr.error('Files exceedes maximum size.', 'Error');
        },
        sending: function(file, xhr, formData) {
            formData.append("_token", $('meta[name="csrf-token"]').attr('content'));
            // Laravel expect the token post value to be named _token by default
        },
        init: function() {
            this.on("success", function(file, response) {
                toastr.success('Files uploaded successfully.', 'Success');
            });

            this.on("error", function(a,b,c) {
                app.message(a);
                app.message(b);
                app.message(c);
            });
        }

    });
});
</script>
<!-- End dropzone. -->

