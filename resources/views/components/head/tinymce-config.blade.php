<script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea',  // change this value according to your HTML
        language: 'uk',
        plugins: 'image',
        //paste_block_drop: true,
        toolbar: 'undo redo | bold italic underline superscript subscript strikethrough | forecolor backcolor fontsize | lineheight  | aligncenter alignjustify alignleft alignnone alignright | indent outdent | image | pastetext paste ',
        //spellchecker_select_language:'en,uk',
        //images_upload_url: '/upload',
        //automatic_uploads: false,
        //images_upload_base_path: "../",
        //images_upload_handler: example_image_upload_handler,
    });
    // tinymce.init({
    //     selector: 'textarea#contentUkr',  // change this value according to your HTML
    //     language:'uk',
    //     //plugins: 'image',
    //     toolbar:'undo redo | bold italic underline superscript subscript strikethrough | forecolor backcolor fontsize | lineheight  | aligncenter alignjustify alignleft alignnone alignright | indent outdent | image | pastetext paste ',
    //     //spellchecker_select_language:'en,uk',
    //     //images_upload_url: '/upload',
    //     //automatic_uploads:true,
    //     //images_upload_base_path:"../",
    //     //images_upload_handler: example_image_upload_handler,
    // });
    // tinymce.init({
    //     selector: 'textarea#contentEng',  // change this value according to your HTML
    //     language:'uk',
    //     //plugins: 'image',
    //     toolbar:'undo redo | bold italic underline superscript subscript strikethrough | forecolor backcolor fontsize | lineheight  | aligncenter alignjustify alignleft alignnone alignright | indent outdent | image | pastetext paste ',
    //     //spellchecker_select_language:'en,uk',
    //     //images_upload_url: '/upload',
    //     //automatic_uploads:true,
    //     //images_upload_base_path:"../",
    //     //images_upload_handler: example_image_upload_handler,
    // });
</script>
