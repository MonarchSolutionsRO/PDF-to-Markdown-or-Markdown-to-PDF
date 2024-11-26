<x-layouts.app>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free PDF to Markdown Converter | Extract Text from PDF to MD Online</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Convert PDF files to Markdown format online for free. Easy-to-use PDF to MD converter with instant preview. Extract text from PDF to markdown with perfect formatting.">
    <meta name="keywords" content="pdf to markdown, pdf to md, convert pdf to markdown, pdf converter, markdown converter, pdf text extractor, pdf to text, markdown editor">
    
    <!-- Open Graph Tags -->
    <meta property="og:title" content="Free PDF to Markdown Converter | Professional PDF to MD Tool">
    <meta property="og:description" content="Transform your PDF documents into clean, formatted Markdown text with our free online converter. No registration required.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Free PDF to Markdown Converter">
    <meta name="twitter:description" content="Professional-grade PDF to Markdown conversion with perfect formatting.">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "PDF to Markdown Converter",
        "description": "Free online tool to convert PDF documents to Markdown format",
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
                    PDF to Markdown Converter
                </span>
            </h1>
            <p class="mt-4 text-xl text-gray-600 max-w-3xl mx-auto">
                Transform your PDF documents into clean, formatted Markdown text instantly
            </p>
            
            <!-- Feature Pills -->
            <div class="flex flex-wrap justify-center gap-3 mt-6">
                <span class="px-4 py-2 rounded-full bg-indigo-50 text-indigo-700 text-sm font-medium">✨ Free Forever</span>
                <span class="px-4 py-2 rounded-full bg-purple-50 text-purple-700 text-sm font-medium">⚡ Instant Conversion</span>
                <span class="px-4 py-2 rounded-full bg-blue-50 text-blue-700 text-sm font-medium">� Mobile Friendly</span>
                <span class="px-4 py-2 rounded-full bg-green-50 text-green-700 text-sm font-medium">🔒 100% Private</span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Upload Panel -->
            <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
                <form id="uploadForm" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-lg font-semibold text-gray-900 mb-4">Upload Your PDF</label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-dashed border-gray-300 rounded-xl hover:border-indigo-500 transition-colors">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                    <label for="pdf_file" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                        <span>Upload a file</span>
                                        <input id="pdf_file" name="pdf_file" type="file" accept=".pdf" class="sr-only">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">PDF up to 10MB</p>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="w-full py-3 px-4 border border-transparent text-base font-medium rounded-xl shadow-sm text-white bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-200">
                        Convert to Markdown
                    </button>
                </form>
            </div>

            <!-- Markdown Output -->
            <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-900">Markdown Output</h3>
                    <button onclick="copyToClipboard()" class="inline-flex items-center px-4 py-2 text-sm font-medium text-indigo-600 bg-indigo-50 rounded-lg hover:bg-indigo-100 transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                        </svg>
                        Copy to Clipboard
                    </button>
                </div>
                <textarea
                    id="markdown_output"
                    class="w-full h-[400px] rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 font-mono text-sm"
                    readonly
                ></textarea>
            </div>
        </div>

        <!-- How It Works Section -->
        <div class="mt-16">
            <h2 class="text-2xl font-bold text-center mb-8">How It Works</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="text-indigo-600 mb-4">1</div>
                    <h3 class="font-semibold mb-2">Upload PDF</h3>
                    <p class="text-gray-600">Select your PDF file or drag and drop it into the upload area</p>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="text-indigo-600 mb-4">2</div>
                    <h3 class="font-semibold mb-2">Convert</h3>
                    <p class="text-gray-600">Our system processes your PDF and extracts the content</p>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="text-indigo-600 mb-4">3</div>
                    <h3 class="font-semibold mb-2">Download</h3>
                    <p class="text-gray-600">Get your formatted Markdown text ready to use</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Keep the existing JavaScript code
        const form = document.getElementById('uploadForm');
        const output = document.getElementById('markdown_output');

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(form);
            
            try {
                const response = await fetch('/pdf-to-markdown/convert', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    }
                });

                const data = await response.json();
                
                if (data.success) {
                    output.value = data.markdown;
                } else {
                    alert(data.error || 'Failed to convert PDF');
                }
            } catch (error) {
                alert('Error converting PDF: ' + error.message);
            }
        });

        function copyToClipboard() {
            output.select();
            document.execCommand('copy');
            
            // Show feedback
            const button = document.querySelector('button[onclick="copyToClipboard()"]');
            const originalText = button.innerHTML;
            button.innerHTML = 'Copied!';
            setTimeout(() => {
                button.innerHTML = originalText;
            }, 2000);
        }
    </script>
</body>
</x-layouts.app>