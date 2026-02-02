@props(['name' => 'body', 'value' => ''])

<textarea name="{{ $name }}" id="{{ $name }}" {{ $attributes->merge(['class' => 'form-control']) }}>{{ old($name, $value) }}</textarea>

@once
    <script src="https://cdn.ckeditor.com/ckeditor5/47.3.0/ckeditor5.umd.js" crossorigin></script>
    <script>
        // Wait for upload adapter to be available
        function initializeCKEditor(elementId) {
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
                        'insertImage',
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
                },
                extraPlugins: [
                    createCKEditorUploadAdapterPlugin('{{ route('ckeditor.upload') }}', '{{ csrf_token() }}')
                ]
            };

            ClassicEditor.create(document.querySelector('#' + elementId), editorConfig);
        }

        // Store initialization function globally
        window.initializeCKEditor = initializeCKEditor;
    </script>
@endonce

<script>
    // Initialize this specific editor instance
    (function() {
        const elementId = '{{ $name }}';

        // Check if upload adapter is already loaded, otherwise wait for it
        if (typeof window.createCKEditorUploadAdapterPlugin !== 'undefined') {
            initializeCKEditor(elementId);
        } else {
            // Wait for the Vite module to load
            window.addEventListener('load', function() {
                initializeCKEditor(elementId);
            });
        }
    })();
</script>
