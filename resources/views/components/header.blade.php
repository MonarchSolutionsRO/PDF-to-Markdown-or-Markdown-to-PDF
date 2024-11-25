<header class="bg-white shadow-sm">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo/Brand -->
            <div class="flex">
                <a href="{{ route('home') }}" class="flex items-center">
                    <span class="text-xl font-bold text-indigo-600">PDF.MD</span>
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden sm:flex sm:space-x-8">
                <a href="{{ route('markdown.index') }}" 
                   class="inline-flex items-center px-1 pt-1 text-sm font-medium {{ request()->routeIs('markdown.index') ? 'text-indigo-600 border-b-2 border-indigo-600' : 'text-gray-500 hover:text-gray-700 hover:border-gray-300' }}">
                    Markdown to PDF
                </a>
                <a href="{{ route('pdf.index') }}" 
                   class="inline-flex items-center px-1 pt-1 text-sm font-medium {{ request()->routeIs('pdf.index') ? 'text-indigo-600 border-b-2 border-indigo-600' : 'text-gray-500 hover:text-gray-700 hover:border-gray-300' }}">
                    PDF to Markdown
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center sm:hidden">
                <button type="button" 
                        onclick="toggleMobileMenu()"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobileMenu" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <a href="{{ route('markdown.index') }}" 
                   class="block pl-3 pr-4 py-2 text-base font-medium {{ request()->routeIs('markdown.index') ? 'text-indigo-600 border-l-4 border-indigo-600 bg-indigo-50' : 'text-gray-500 hover:text-gray-700 hover:bg-gray-50' }}">
                    Markdown to PDF
                </a>
                <a href="{{ route('pdf.index') }}" 
                   class="block pl-3 pr-4 py-2 text-base font-medium {{ request()->routeIs('pdf.index') ? 'text-indigo-600 border-l-4 border-indigo-600 bg-indigo-50' : 'text-gray-500 hover:text-gray-700 hover:bg-gray-50' }}">
                    PDF to Markdown
                </a>
            </div>
        </div>
    </nav>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }
    </script>
</header>