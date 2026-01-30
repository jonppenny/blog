<x-admin>
    <x-slot:title>
        {{$page->title}}
    </x-slot:title>
    <div>
        <form action="{{route('admin.page.update', ['page' => $page])}}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Page title</label>
                <input type="text" name="title" value="{{$page->title}}" id="title" class="form-control" required/>
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Page slug</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">/</span>
                    </div>
                    <input type="text" name="slug" value="{{$page->slug}}" id="slug" class="form-control" required/>
                </div>
            </div>

            <div class="mb-3 ck-dark">
                <label for="body" class="form-label">Page body</label>
                <textarea id="body" class="form-control">{{$page->body}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/47.3.0/ckeditor5.umd.js" crossorigin></script>
    <script>
        const {
            ClassicEditor,
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
            CloudServices,
            ImageUpload,
            ImageInsertViaUrl,
            AutoImage,
            Table,
            TableToolbar,
            Heading,
            ImageTextAlternative,
            ImageCaption,
            ImageStyle,
            Indent,
            IndentBlock,
            ImageInline,
            Italic,
            List,
            TableCaption,
            TodoList,
            Underline,
            FontBackgroundColor,
            FontColor,
            FontFamily,
            FontSize,
            Code,
            Strikethrough,
            Highlight,
            HorizontalLine,
            CodeBlock,
            Alignment,
            SourceEditing,
            Subscript,
            Superscript,
            MediaEmbed
        } = window.CKEDITOR;

        const LICENSE_KEY = "{{ config('services.ckeditor.key') }}";

        const editorConfig = {
            toolbar: {
                items: [
                    'undo',
                    'redo',
                    '|',
                    'sourceEditing',
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
                    'code',
                    '|',
                    'horizontalLine',
                    'link',
                    'mediaEmbed',
                    'insertTable',
                    'highlight',
                    'blockQuote',
                    'codeBlock',
                    '|',
                    'alignment',
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
                Alignment,
                Autoformat,
                AutoImage,
                Autosave,
                BlockQuote,
                Bold,
                CloudServices,
                Code,
                CodeBlock,
                Essentials,
                FontBackgroundColor,
                FontColor,
                FontFamily,
                FontSize,
                Heading,
                Highlight,
                HorizontalLine,
                ImageBlock,
                ImageCaption,
                ImageInline,
                ImageInsertViaUrl,
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
                MediaEmbed,
                Paragraph,
                SourceEditing,
                Strikethrough,
                Subscript,
                Superscript,
                Table,
                TableCaption,
                TableToolbar,
                TextTransformation,
                TodoList,
                Underline
            ],
            fontFamily: {
                supportAllValues: true
            },
            fontSize: {
                options: [10, 12, 14, 'default', 18, 20, 22],
                supportAllValues: true
            },
            heading: {
                options: [
                    {
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
                toolbar: ['toggleImageCaption', 'imageTextAlternative', '|', 'imageStyle:inline', 'imageStyle:wrapText', 'imageStyle:breakText']
            },
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
            placeholder: 'Type or paste your content here!',
            table: {
                contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells']
            }
        };

        ClassicEditor.create(document.querySelector('#body'), editorConfig);
    </script>

</x-admin>
