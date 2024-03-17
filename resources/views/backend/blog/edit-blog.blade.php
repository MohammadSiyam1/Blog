@extends('backend.layouts.base')
@section('title','Edit Blog')
@section('body')
<div class="card w-50 m-auto animation my-5">
    <h3 class="card-header text-center">Create blog</h3>
    <div class="card-body">
        <form action="{{ route('blog.update',$post->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-input">
                <input type="text" class="form form-control" name="title" value="{{$post->Title}}">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div><br>
            <div class="form-input">
                <textarea name="body" id="body" cols="20" rows="10">{{$post->Body}}</textarea>
                @error('body')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div><br>
            <div class="form-input">
                <input type="text" name="author" class="form form-control" value="{{$post->Author}}">
                @error('body')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div><br>
            <div class="d-grid">
                <input type="submit" class="btn btn-secondary" value="Edit Blog">
            </div>
        </form>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
<script>
    tinymce.init({
        selector: '#body',
        plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        toolbar_sticky: true,
        autosave_ask_before_unload: true,
        autosave_interval: '30s',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_restore_when_empty: false,
        autosave_retention: '2m',
        image_advtab: true,
        link_list: [{
                title: 'My page 1',
                value: ''
            },
            {
                title: 'My page 2',
                value: ''
            }
        ],
        image_list: [{
                title: 'My page 1',
                value: ''
            },
            {
                title: 'My page 2',
                value: ''
            }
        ],
        image_class_list: [{
                title: 'None',
                value: ''
            },
            {
                title: 'Some class',
                value: 'class-name'
            }
        ],
        importcss_append: true,
        file_picker_callback: (callback, value, meta) => {
            /* Provide file and text for the link dialog */
            if (meta.filetype === 'file') {
                callback(filemanager.tinyMceCallback, {
                    text: 'My text'
                });
            }

            /* Provide image and alt text for the image dialog */
            if (meta.filetype === 'image') {
                callback(filemanager.tinyMceCallback, {
                    alt: 'My alt text'
                });
            }

            /* Provide alternative source and posted for the media dialog */
            if (meta.filetype === 'media') {
                callback(filemanager.tinyMceCallback, );
            }
        },
        templates: [{
                title: 'New Table',
                description: 'creates a new table',
                content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
            },
            {
                title: 'Starting my story',
                description: 'A cure for writers block',
                content: 'Once upon a time...'
            },
            {
                title: 'New list with dates',
                description: 'New List with dates',
                content: '<div class="mceTmpl"><span class="cdate">cdate</span><br><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
            }
        ],
        template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
        template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
        height: 400,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_class: 'mceNonEditable',
        toolbar_mode: 'sliding',
        contextmenu: 'link image table',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
    });
</script>
@endpush
