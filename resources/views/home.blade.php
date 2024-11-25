<x-app-layout>
    <!-- Hero Section -->
    <div class="relative overflow-hidden bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:pb-28 xl:pb-32">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 lg:mt-16 lg:px-8 xl:mt-20">
                    <div class="text-center">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block">Document Conversion</span>
                            <span class="block text-indigo-600">Made Simple & Free</span>
                        </h1>
                        <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                            Convert your documents between PDF and Markdown formats with ease. No sign-up required, completely free, and your data stays private.
                        </p>
                    </div>

                    <!-- Conversion Options -->
                    <div class="mt-16 grid gap-8 md:grid-cols-2 max-w-4xl mx-auto">
                        <!-- Markdown to PDF Card -->
                        <a href="{{ route('markdown.index') }}" class="card hover:shadow-xl transition-shadow duration-300">
                            <div class="text-center">
                                <div class="h-16 w-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto">
                                    <svg class="h-8 w-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                                <h2 class="mt-4 text-xl font-semibold text-gray-900">Markdown to PDF</h2>
                                <p class="mt-2 text-gray-600">Convert your Markdown files into beautifully formatted PDFs</p>
                            </div>
                        </a>

                        <!-- PDF to Markdown Card -->
                        <a href="{{ route('pdf.index') }}" class="card hover:shadow-xl transition-shadow duration-300">
                            <div class="text-center">
                                <div class="h-16 w-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto">
                                    <svg class="h-8 w-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <h2 class="mt-4 text-xl font-semibold text-gray-900">PDF to Markdown</h2>
                                <p class="mt-2 text-gray-600">Extract and convert PDF content into clean Markdown format</p>
                            </div>
                        </a>
                    </div>

                    <!-- Features Section -->
                    <div class="mt-20">
                        <h2 class="text-center text-3xl font-bold text-gray-900">Why Choose Our Converter?</h2>
                        <div class="mt-10 grid gap-8 md:grid-cols-3">
                            <!-- Feature 1 -->
                            <div class="text-center">
                                <div class="h-12 w-12 bg-indigo-100 rounded-full flex items-center justify-center mx-auto">
                                    <svg class="h-6 w-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <h3 class="mt-4 text-lg font-medium text-gray-900">Lightning Fast</h3>
                                <p class="mt-2 text-gray-600">Convert your documents in seconds</p>
                            </div>

                            <!-- Feature 2 -->
                            <div class="text-center">
                                <div class="h-12 w-12 bg-indigo-100 rounded-full flex items-center justify-center mx-auto">
                                    <svg class="h-6 w-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </div>
                                <h3 class="mt-4 text-lg font-medium text-gray-900">100% Private</h3>
                                <p class="mt-2 text-gray-600">Your files are never stored on our servers</p>
                            </div>

                            <!-- Feature 3 -->
                            <div class="text-center">
                                <div class="h-12 w-12 bg-indigo-100 rounded-full flex items-center justify-center mx-auto">
                                    <svg class="h-6 w-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                    </svg>
                                </div>
                                <h3 class="mt-4 text-lg font-medium text-gray-900">No Installation</h3>
                                <p class="mt-2 text-gray-600">Works right in your browser</p>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</x-app-layout>