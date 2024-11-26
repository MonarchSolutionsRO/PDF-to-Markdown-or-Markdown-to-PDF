<x-layouts.app>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free PDF & Markdown Converter | Convert MD to PDF & PDF to MD Online</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Free online tool to convert between PDF and Markdown formats. Transform MD to PDF, PDF to MD, and extract text with perfect formatting. No registration required, secure, and instant conversion.">
    <meta name="keywords" content="md to pdf converter, pdf to md converter, markdown to pdf online, pdf to markdown online, convert markdown to pdf, convert pdf to markdown, github markdown converter, free pdf converter, markdown editor online, mdx to pdf converter, pdf text extractor, markdown formatting">
    
    <!-- Open Graph Tags -->
    <meta property="og:title" content="Free PDF & Markdown Converter | MD to PDF & PDF to MD">
    <meta property="og:description" content="Transform your documents between PDF and Markdown formats instantly. Free online converter with no sign-up required. Support for GitHub-flavored markdown.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/converter-preview.png') }}">
    
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Free PDF & Markdown Converter">
    <meta name="twitter:description" content="Professional PDF and Markdown converter. Transform documents between PDF and MD formats with perfect formatting. Free, secure, and no registration needed.">
    <meta name="twitter:image" content="{{ asset('images/converter-preview.png') }}">
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "PDF and Markdown Converter",
        "description": "Free online tool to convert between PDF and Markdown formats",
        "url": "{{ url()->current() }}",
        "applicationCategory": "DocumentConverter",
        "operatingSystem": "Any",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "USD"
        },
        "featureList": [
            "Convert MD to PDF",
            "Convert PDF to MD",
            "GitHub Flavored Markdown Support",
            "Custom Styling Options",
            "Instant Preview",
            "No Registration Required"
        ]
    }
    </script>
</head>

<!-- Keep existing body content but update the hero section text -->
<div class="relative isolate overflow-hidden">
    <x-header />
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"></div>
    </div>

    <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
        <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">
            <h1 class="mt-10 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                Convert Between PDF and Markdown
            </h1>
            <p class="mt-6 text-lg leading-8 text-gray-600">
                Free online converter for PDF and Markdown documents. Transform MD to PDF or PDF to MD instantly. No registration needed, secure, and lightning-fast.
            </p>
        </div>
    </div>
</div>


    <!-- Conversion Options -->
    <div class="mx-auto max-w-7xl px-6 lg:px-8 -mt-20">
        
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-6 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:gap-8">
            <!-- Markdown to PDF Card -->
            <a href="{{ route('markdown.index') }}" class="flex flex-col bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-200 p-8">
                <div class="flex items-center gap-x-4 text-xs">
                    <span class="text-gray-500">Convert from</span>
                    <span class="rounded-full bg-indigo-50 px-3 py-1.5 font-medium text-indigo-600">Markdown</span>
                    <span class="text-gray-500">to</span>
                    <span class="rounded-full bg-red-50 px-3 py-1.5 font-medium text-red-600">PDF</span>
                </div>
                <div class="group relative mt-6">
                    <h3 class="text-lg font-semibold leading-6 text-gray-900">
                        <span class="absolute inset-0"></span>
                        Markdown to PDF Converter
                    </h3>
                    <p class="mt-4 text-sm text-gray-600">Transform your Markdown files into beautifully formatted PDFs with customizable styling options.</p>
                </div>
            </a>

            <!-- PDF to Markdown Card -->
            <a href="{{ route('pdf.index') }}" class="flex flex-col bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-200 p-8">
                <div class="flex items-center gap-x-4 text-xs">
                    <span class="text-gray-500">Convert from</span>
                    <span class="rounded-full bg-red-50 px-3 py-1.5 font-medium text-red-600">PDF</span>
                    <span class="text-gray-500">to</span>
                    <span class="rounded-full bg-indigo-50 px-3 py-1.5 font-medium text-indigo-600">Markdown</span>
                </div>
                <div class="group relative mt-6">
                    <h3 class="text-lg font-semibold leading-6 text-gray-900">
                        <span class="absolute inset-0"></span>
                        PDF to Markdown Converter
                    </h3>
                    <p class="mt-4 text-sm text-gray-600">Extract content from PDF files and convert them into clean, formatted Markdown text.</p>
                </div>
            </a>
        </div>
    </div>

    <!-- Features Section -->
    <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-40 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base font-semibold leading-7 text-indigo-600">Convert Faster</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Everything you need for document conversion</p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                <!-- Feature items here -->
            </dl>
        </div>
    </div>
</x-layouts.app>