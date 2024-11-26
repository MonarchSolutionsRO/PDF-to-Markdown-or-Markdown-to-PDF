<x-layouts.app>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Markdown to PDF Converter | Professional MD to PDF Online Tool</title>
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Convert Markdown to PDF online instantly. Free MD to PDF converter with custom styling, GitHub-flavored markdown support, and real-time preview. No registration required.">
    <meta name="keywords" content="markdown to pdf, md to pdf, markdown converter, pdf converter, markdown to pdf converter, convert markdown, markdown editor, github markdown, mdx to pdf">
    
    <!-- Open Graph Tags -->
    <meta property="og:title" content="Free Markdown to PDF Converter | Professional MD to PDF Tool">
    <meta property="og:description" content="Transform your Markdown files into beautifully formatted PDFs with our free online converter. Supports GitHub-flavored markdown.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Free Markdown to PDF Converter">
    <meta name="twitter:description" content="Professional-grade Markdown to PDF conversion with custom styling options.">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "Markdown to PDF Converter",
        "description": "Free online tool to convert Markdown documents to PDF format with custom styling options",
        "url": "{{ url()->current() }}",
        "applicationCategory": "DocumentConverter",
        "operatingSystem": "Any",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "USD"
        }
    }
    </script>
</head>

<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen">
    <x-header />
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-purple-600">
                    Markdown to PDF Converter
                </span>
            </h1>
            <p class="mt-4 text-xl text-gray-600 max-w-3xl mx-auto">
                Transform your Markdown into professionally formatted PDFs with our free converter
            </p>
            
            <!-- Feature Pills -->
            <div class="flex flex-wrap justify-center gap-3 mt-6">
                <span class="px-4 py-2 rounded-full bg-indigo-50 text-indigo-700 text-sm font-medium">✨ Free Forever</span>
                <span class="px-4 py-2 rounded-full bg-purple-50 text-purple-700 text-sm font-medium">� Instant Preview</span>
                <span class="px-4 py-2 rounded-full bg-blue-50 text-blue-700 text-sm font-medium">📱 Mobile Friendly</span>
                <span class="px-4 py-2 rounded-full bg-green-50 text-green-700 text-sm font-medium">🔒 100% Private</span>
            </div>
        </div>

        <!-- Main Content -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Left Column: Markdown Input -->
            <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
                <form action="{{ route('markdown.convert') }}" method="POST" class="space-y-6" id="pdfForm">
                    @csrf
                    <div>
                        <label for="markdown" class="block text-lg font-semibold text-gray-900 mb-4">
                            Write or Paste Your Markdown
                        </label>
                        <textarea
                            id="markdown"
                            name="markdown"
                            rows="20"
                            class="w-full rounded-xl border-gray-200 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 transition-colors"
                            placeholder="# Start writing your Markdown here...

## Supported Features:
- GitHub Flavored Markdown
- Custom styling options
- Table of Contents
- And more!"
                            required
                        >{{ old('markdown') }}</textarea>
                    </div>

                    <!-- Styling Options -->
                    <div class="bg-gray-50 rounded-xl p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Customize Your PDF</h3>
                        
                        <!-- Colors and Fonts -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                            <!-- Existing color and font inputs -->
                            <div>
                                <label for="heading_color" class="block text-sm font-medium text-gray-700">Heading Color</label>
                                <input type="color" id="heading_color" name="heading_color" value="{{ old('heading_color', '#000000') }}" 
                                    class="mt-1 block w-full rounded-lg border-gray-300">
                            </div>
                            
                            <div>
                                <label for="text_color" class="block text-sm font-medium text-gray-700">Text Color</label>
                                <input type="color" id="text_color" name="text_color" value="{{ old('text_color', '#000000') }}"
                                    class="mt-1 block w-full rounded-lg border-gray-300">
                            </div>

                            <div>
                                <label for="font_family" class="block text-sm font-medium text-gray-700">Font Family</label>
                                <select id="font_family" name="font_family" 
                                    class="mt-1 block w-full rounded-lg border-gray-300">
                                    <option value="Arial">Arial</option>
                                    <option value="Times New Roman">Times New Roman</option>
                                    <option value="Helvetica">Helvetica</option>
                                    <option value="Courier">Courier</option>
                                </select>
                            </div>

                            <div>
                                <label for="font_size" class="block text-sm font-medium text-gray-700">Font Size (px)</label>
                                <input type="number" id="font_size" name="font_size" value="{{ old('font_size', 14) }}" min="8" max="24"
                                    class="mt-1 block w-full rounded-lg border-gray-300">
                            </div>
                        </div>

                        <!-- Markdown Features -->
                        <div class="space-y-3">
                            <h4 class="text-sm font-medium text-gray-700">Advanced Features</h4>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="enable_tables" class="rounded border-gray-300 text-indigo-600"
                                        {{ old('enable_tables') ? 'checked' : '' }}>
                                    <span class="ml-2 text-sm text-gray-600">Enable Tables</span>
                                </label>
                                
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="enable_toc" class="rounded border-gray-300 text-indigo-600"
                                        {{ old('enable_toc') ? 'checked' : '' }}>
                                    <span class="ml-2 text-sm text-gray-600">Table of Contents</span>
                                </label>
                                
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="enable_attributes" class="rounded border-gray-300 text-indigo-600"
                                        {{ old('enable_attributes') ? 'checked' : '' }}>
                                    <span class="ml-2 text-sm text-gray-600">Custom Attributes</span>
                                </label>
                                
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="enable_heading_anchors" class="rounded border-gray-300 text-indigo-600"
                                        {{ old('enable_heading_anchors') ? 'checked' : '' }}>
                                    <span class="ml-2 text-sm text-gray-600">Heading Anchors</span>
                                </label>
                            </div>
                        </div>

                        <!-- Generate Button -->
                        <button type="submit"
                            class="w-full mt-6 py-3 px-6 text-white bg-gradient-to-r from-indigo-600 to-purple-600 rounded-xl font-semibold shadow-lg hover:from-indigo-700 hover:to-purple-700 transition-all duration-200 transform hover:-translate-y-0.5">
                            Generate PDF
                        </button>
                    </div>
                </form>
            </div>

            <!-- Right Column: Preview -->
            <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-900">Live Preview</h3>
                    <span class="text-sm text-gray-500">Updates in real-time</span>
                </div>
                <div id="preview" class="prose max-w-none"></div>
            </div>
        </div>

        <!-- Error Messages -->
        @if ($errors->any())
            <div class="mt-6 bg-red-50 border border-red-200 text-red-700 px-6 py-4 rounded-xl" role="alert">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <!-- Keep existing script section -->
    <script>
        const textarea = document.getElementById('markdown');
        const preview = document.getElementById('preview');
        const headingColor = document.getElementById('heading_color');
        const textColor = document.getElementById('text_color');
        const fontFamily = document.getElementById('font_family');
        const fontSize = document.getElementById('font_size');
        
        function updatePreview() {
            const markdown = textarea.value;
            const html = marked.parse(markdown);
            preview.innerHTML = html;
            
            // Apply styling to preview
            preview.style.color = textColor.value;
            preview.style.fontFamily = fontFamily.value;
            preview.style.fontSize = fontSize.value + 'px';
            
            // Apply heading colors
            preview.querySelectorAll('h1, h2, h3, h4, h5, h6').forEach(heading => {
                heading.style.color = headingColor.value;
            });
        }

        // Update preview on any input change
        [textarea, headingColor, textColor, fontFamily, fontSize].forEach(element => {
            element.addEventListener('input', updatePreview);
        });

        updatePreview(); // Initial preview
    </script>
</body>
</x-layouts.app>