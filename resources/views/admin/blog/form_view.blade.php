@extends('admin.maindesign')

@include('admin.partials.app_nav')

@section('style')
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/47.6.0/ckeditor5.css" crossorigin>
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5-premium-features/47.6.0/ckeditor5-premium-features.css"
        crossorigin>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swap');

        @media print {
            body {
                margin: 0 !important;
            }
        }

        :root {
            --ck-content-font-family: 'Lato';
        }

        .main-container {
            font-family: var(--ck-content-font-family);
            width: fit-content;
            margin-left: auto;
            margin-right: auto;
        }

        .editor-container_include-block-toolbar {
            margin-left: 42px;
        }

        .editor-container_balloon-editor .editor-container__editor {
            min-width: 795px;
            max-width: 795px;
        }

        .editor-container__sidebar_ckeditor-ai:has(.ck-tabs.ck-hidden) {
            max-width: 0;
            min-width: 0;
        }
    </style>
@endsection

@section('breadcrumb')
    <nav class="card">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Start Navbar Links-->
            <div class="d-flex">
                <div class="flex-shrink-0">
                    <a type="button" href="{{ route('admin.newBlog') }}" class="btn btn-outline-primary m-2">New</a>
                    <a type="submit" href="{{ route('admin.showBlogs') }}" class="btn m-2">Cancel</a>
                </div>
                <!-- <div class="flex-grow-1">
                                                                                                                                                                                                                                                                                                                                                                                            <ol class="breadcrumb">
                                                                                                                                                                                                                                                                                                                                                                                                <li class="breadcrumb-item active"><a href="{{ route('admin.showMachines') }}">Machines</a></li>
                                                                                                                                                                                                                                                                                                                                                                                            </ol>
                                                                                                                                                                                                                                                                                                                                                                                            <i class="bi bi-clock-fill me-1"></i>
                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                        <div class="flex-shrink-0">
                                                                                                                                                                                                                                                                                                                                                                                            <a type="button" href="{{ route('admin.newMachine') }}" class="btn btn-outline-primary mb-2">New</a>
                                                                                                                                                                                                                                                                                                                                                                                        </div> -->
            </div>

            <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
    </nav>
@endsection

@section('form_view')
    <form action="{{ route('admin.storeBlog') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!--begin::Horizontal Form-->
        <div class="row mp-10 mb-10 w-100" style="margin-top: 10px; margin-bottom: 10px; padding:10px; ">
            <div class="col-sm-12">
                <input type="text" name="title" placeholder="Title"
                    value="{{ old('title', isset($blog) ? $blog->title : '') }}"
                    class="form-control border-0 border-bottom rounded-0 shadow-none" id="inputName" required />
            </div>
        </div>
        <div class="card card-warning card-outline mb-4">
            <!--begin::Form-->
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-sm-9 position-relative">
                        <!-- Name input at the bottom -->

                    </div>
                    {{-- <div class="col-sm-3 float-sm-end"> --}}
                    <div class="col-sm-12">
                        <div class="image-upload" style="width: 100%; height: 420px; object-fit: cover; cursor: pointer;">
                            <label for="fileInput" class="w-100 mb-0">
                                <img id="preview"
                                    src="{{ isset($blog) ? asset('storage/' . $blog->featured_image) : asset('admin/assets/img/img_place_holder.webp') }}"
                                    class="img-thumbnail w-100" alt="preview"
                                    style="height: 420px; object-fit: cover; cursor: pointer;">
                            </label>
                            <input name="img_url" type="file" accept="image/*" id="fileInput" style="display: none;">
                            <div class="edit-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black"
                                    class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path
                                        d="M12.146.854a.5.5 0 0 1 .708 0l2.292 2.292a.5.5 0 0 1 0 .708L4.207 14.793a1 1 0 0 1-.39.242l-3 1a.5.5 0 0 1-.641-.641l1-3a1 1 0 0 1 .242-.39L12.146.854zm.708.708L13 1.707 14.293 3 15 2.293 12.854 1.562z" />
                                </svg>
                            </div>
                            <div class="edit-tooltip">Edit</div>
                        </div>
                    </div>
                    {{-- </div> --}}
                </div>
            </div>
            <!--end::Body-->
            <!--begin::Footer-->
            <div class="card-footer">
                <button type="submit" class="btn float-end">Save</button>
            </div>
            <!--end::Footer-->

            <!--end::Form-->
        </div>

        <div class="row mp-10 mb-10 w-100" style="margin-top: 10px; margin-bottom: 10px; padding:10px; ">
            <div class="main-container" style="display: {{ isset($blog) ? 'block' : 'none' }};">
                <div class="editor-container editor-container_balloon-editor editor-container_include-block-toolbar">
                    <div class="editor-container__editor">
                        <div name="body" id="editor">{{ isset($blog) ? $blog->body : 'Write something here....' }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
    <!--end::Horizontal Form-->
@endsection

@section('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/47.6.0/ckeditor5.umd.js" crossorigin></script>
    <script src="https://cdn.ckeditor.com/ckeditor5-premium-features/47.6.0/ckeditor5-premium-features.umd.js" crossorigin>
    </script>
    <script src="https://cdn.ckbox.io/ckbox/2.9.2/ckbox.js" crossorigin></script>
    <script>
        const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
        const jwtToken = localStorage.getItem('token');
        const {
            BalloonEditor,
            Autosave,
            Essentials,
            Paragraph,
            Autoformat,
            TextTransformation,
            LinkImage,
            Link,
            ImageBlock,
            ImageToolbar,
            BlockQuote,
            Bold,
            CKBox,
            CloudServices,
            ImageUpload,
            ImageInsert,
            ImageInsertViaUrl,
            AutoImage,
            PictureEditing,
            CKBoxImageEdit,
            TableColumnResize,
            Table,
            TableToolbar,
            Emoji,
            Mention,
            Heading,
            ImageTextAlternative,
            ImageCaption,
            ImageResize,
            ImageStyle,
            Indent,
            IndentBlock,
            ImageInline,
            Italic,
            ListProperties,
            List,
            MediaEmbed,
            PasteFromOffice,
            TableCaption,
            TableCellProperties,
            TableProperties,
            TodoList,
            Underline,
            Strikethrough,
            Subscript,
            Superscript,
            FontBackgroundColor,
            FontColor,
            FontFamily,
            FontSize,
            TableLayout,
            BalloonToolbar,
            BlockToolbar
        } = window.CKEDITOR;
        const {
            FormatPainter
        } = window.CKEDITOR_PREMIUM_FEATURES;

        const LICENSE_KEY =
            'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3NzQzMTAzOTksImp0aSI6ImZmZjY1NmJmLTBkMjktNDI5NS1hZTZhLWY2ODM1NzY2ZTE0YiIsInVzYWdlRW5kcG9pbnQiOiJodHRwczovL3Byb3h5LWV2ZW50LmNrZWRpdG9yLmNvbSIsImRpc3RyaWJ1dGlvbkNoYW5uZWwiOlsiY2xvdWQiLCJkcnVwYWwiLCJzaCJdLCJ3aGl0ZUxhYmVsIjp0cnVlLCJsaWNlbnNlVHlwZSI6InRyaWFsIiwiZmVhdHVyZXMiOlsiKiJdLCJ2YyI6IjY0MGJiODRhIn0.ksm_8jsFEA2utyf1ICCdCvsQ9nakyWKJ5E5epypisbfT4aFiWM-qcOmGwtt2__elK_YKE4IILyYtDx93fwMbDg';

        const CLOUD_SERVICES_TOKEN_URL =
            'https://eb6x2hs32jhz.cke-cs.com/token/dev/b6b8b6a79a24c241d170aa7191e98c4de156c65406ece6b07ed77767469f?limit=10';

        const editorConfig = {
            toolbar: {
                items: [
                    'undo',
                    'redo',
                    '|',
                    'formatPainter',
                    '|',
                    'heading',
                    '|',
                    'fontSize',
                    'fontFamily',
                    'fontColor',
                    'fontBackgroundColor',
                    '|',
                    'bold',
                    'italic',
                    'underline',
                    'strikethrough',
                    'subscript',
                    'superscript',
                    '|',
                    'emoji',
                    'link',
                    'insertImage',
                    'ckbox',
                    'mediaEmbed',
                    'insertTable',
                    'insertTableLayout',
                    'blockQuote',
                    '|',
                    'bulletedList',
                    'numberedList',
                    'todoList',
                    'outdent',
                    'indent'
                ],
                shouldNotGroupWhenFull: false
            },
            plugins: [
                Autoformat,
                AutoImage,
                Autosave,
                BalloonToolbar,
                BlockQuote,
                BlockToolbar,
                Bold,
                CKBox,
                CKBoxImageEdit,
                CloudServices,
                Emoji,
                Essentials,
                FontBackgroundColor,
                FontColor,
                FontFamily,
                FontSize,
                FormatPainter,
                Heading,
                ImageBlock,
                ImageCaption,
                ImageInline,
                ImageInsert,
                ImageInsertViaUrl,
                ImageResize,
                ImageStyle,
                ImageTextAlternative,
                ImageToolbar,
                ImageUpload,
                Indent,
                IndentBlock,
                Italic,
                Link,
                LinkImage,
                List,
                ListProperties,
                MediaEmbed,
                Mention,
                Paragraph,
                PasteFromOffice,
                PictureEditing,
                Strikethrough,
                Subscript,
                Superscript,
                Table,
                TableCaption,
                TableCellProperties,
                TableColumnResize,
                TableLayout,
                TableProperties,
                TableToolbar,
                TextTransformation,
                TodoList,
                Underline
            ],
            balloonToolbar: ['bold', 'italic', '|', 'link', 'insertImage', '|', 'bulletedList', 'numberedList'],
            blockToolbar: [
                'fontSize',
                'fontColor',
                'fontBackgroundColor',
                '|',
                'bold',
                'italic',
                '|',
                'link',
                'insertImage',
                'insertTable',
                'insertTableLayout',
                '|',
                'bulletedList',
                'numberedList',
                'outdent',
                'indent'
            ],
            cloudServices: {
                tokenUrl: CLOUD_SERVICES_TOKEN_URL
            },
            fontFamily: {
                supportAllValues: true
            },
            fontSize: {
                options: [10, 12, 14, 'default', 18, 20, 22],
                supportAllValues: true
            },
            heading: {
                options: [{
                        model: 'paragraph',
                        title: 'Paragraph',
                        class: 'ck-heading_paragraph'
                    },
                    {
                        model: 'heading1',
                        view: 'h1',
                        title: 'Heading 1',
                        class: 'ck-heading_heading1'
                    },
                    {
                        model: 'heading2',
                        view: 'h2',
                        title: 'Heading 2',
                        class: 'ck-heading_heading2'
                    },
                    {
                        model: 'heading3',
                        view: 'h3',
                        title: 'Heading 3',
                        class: 'ck-heading_heading3'
                    },
                    {
                        model: 'heading4',
                        view: 'h4',
                        title: 'Heading 4',
                        class: 'ck-heading_heading4'
                    },
                    {
                        model: 'heading5',
                        view: 'h5',
                        title: 'Heading 5',
                        class: 'ck-heading_heading5'
                    },
                    {
                        model: 'heading6',
                        view: 'h6',
                        title: 'Heading 6',
                        class: 'ck-heading_heading6'
                    }
                ]
            },
            image: {
                toolbar: [
                    'toggleImageCaption',
                    'imageTextAlternative',
                    '|',
                    'imageStyle:inline',
                    'imageStyle:wrapText',
                    'imageStyle:breakText',
                    '|',
                    'resizeImage',
                    '|',
                    'ckboxImageEdit'
                ]
            },
            initialData: `Write something here...`,
            licenseKey: LICENSE_KEY,
            link: {
                addTargetToExternalLinks: true,
                defaultProtocol: 'https://',
                decorators: {
                    toggleDownloadable: {
                        mode: 'manual',
                        label: 'Downloadable',
                        attributes: {
                            download: 'file'
                        }
                    }
                }
            },
            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true
                }
            },
            mention: {
                feeds: [{
                    marker: '@',
                    feed: [
                        /* See: https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html */
                    ]
                }]
            },
            placeholder: 'Type or paste your content here!',
            table: {
                contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells', 'tableProperties', 'tableCellProperties']
            },
            simpleUpload: {
                // The URL that the images are uploaded to.
                uploadUrl: '{{ route('ckeditor.upload') }}',

                // Enable the XMLHttpRequest.withCredentials property.
                withCredentials: true,

                // Headers sent along with the XMLHttpRequest to the upload server.
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Authorization': jwtToken
                }
            },
            autosave: {
                waitingTime: 500, // in ms
                save(editor) {
                    return saveData(editor.getData());
                }
            },

        };

        configUpdateAlert(editorConfig);

        BalloonEditor.create(document.querySelector('#editor'), editorConfig);

        /**
         * This function exists to remind you to update the config needed for premium features.
         * The function can be safely removed. Make sure to also remove call to this function when doing so.
         */
        function configUpdateAlert(config) {
            if (configUpdateAlert.configUpdateAlertShown) {
                return;
            }

            const isModifiedByUser = (currentValue, forbiddenValue) => {
                if (currentValue === forbiddenValue) {
                    return false;
                }

                if (currentValue === undefined) {
                    return false;
                }

                return true;
            };

            const valuesToUpdate = [];

            configUpdateAlert.configUpdateAlertShown = true;

            if (!isModifiedByUser(config.licenseKey, '<YOUR_LICENSE_KEY>')) {
                valuesToUpdate.push('LICENSE_KEY');
            }

            if (!isModifiedByUser(config.cloudServices?.tokenUrl, '<YOUR_CLOUD_SERVICES_TOKEN_URL>')) {
                valuesToUpdate.push('CLOUD_SERVICES_TOKEN_URL');
            }

            if (valuesToUpdate.length) {
                window.alert(
                    [
                        'Please update the following values in your editor config',
                        'to receive full access to Premium Features:',
                        '',
                        ...valuesToUpdate.map(value => ` - ${value}`)
                    ].join('\n')
                );
            }
        }

        function saveData(data) {
            return new Promise(resolve => {
                setTimeout(() => {
                    console.log('Saved', data);
                    // save to database
                    $.ajax({
                        url: '{{ route('ckeditor.autosave') }}',
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: '{{ $blog->id }}',
                            body: data
                        },
                        success: function(response) {
                            console.log(response);
                        },
                        error: function(xhr, status, error) {
                            console.log(error);
                        }
                    });
                    resolve();
                }, 500);
            });
        }
    </script>
@endsection
