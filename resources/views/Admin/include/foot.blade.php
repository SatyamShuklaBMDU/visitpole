<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="{{asset('upload/js/scripts/form_validation.js')}}" type="text/javascript"></script>
<script src="{{asset('upload/js/scripts/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('upload/ckeditor/ckeditor.js')}}"></script>
<script>
    $(function() {
        $('.sub-btn').click(function() {
            $(this).next('.sub-menu').slideToggle().addClass('active');
            $(this).find('.dropdown').toggleClass('rotate');
        });
        $('.table').DataTable();
    });
</script>
<script>
   CKEDITOR.replace('editor1', {
      height: 300,
      filebrowserUploadUrl: 'upload.php',
      filebrowserUploadMethod: 'form'
   });
   CKEDITOR.config.extraPlugins = 'colorbutton ,emoji , autocomplete,base64image,image2';
    $(document).ready(function()
    {
        $(document).bind("contextmenu",function(e){
                return false;
        });
    })
</script>
