<x-layouts.app>
    
    <!-- Hero Section -->
    <div class="relative isolate overflow-hidden">
    <x-header />
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"></div>
        </div>

        <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
            <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">
                <h1 class="mt-10 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                    Convert Documents with Ease
                </h1>
                <p class="mt-6 text-lg leading-8 text-gray-600">
                    Free, secure, and lightning-fast document conversion between PDF and Markdown formats. No sign-up required.
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