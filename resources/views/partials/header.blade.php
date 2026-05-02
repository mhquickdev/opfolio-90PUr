<nav class="fixed top-0 w-full z-[100] bg-white/90 dark:bg-gray-900/90 backdrop-blur-xl border-b border-gray-100 dark:border-gray-800" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center h-20">
            <a href="index" class="flex items-center space-x-3 group">
                <div class="w-11 h-11 bg-gradient-to-tr from-blue-600 to-indigo-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/20 group-hover:scale-105 transition-transform duration-300">
                    <span data-lucide="gem" class="w-6 h-6 text-white"></span>
                </div>
                <div class="flex flex-col">
                    <span class="text-xl font-bold text-gray-900 dark:text-white">Lux Solutions</span>
                </div>
            </a>
            <div class="hidden lg:flex items-center space-x-10">
                <a href="#products" class="text-sm font-semibold text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400 transition-colors">Products</a>
                <a href="#services" class="text-sm font-semibold text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400 transition-colors">Services</a>
                <a href="#testimonials" class="text-sm font-semibold text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400 transition-colors">Success Stories</a>
                <a href="#faq" class="text-sm font-semibold text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400 transition-colors">FAQ</a>
                <a href="#contact" class="text-sm font-semibold text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400 transition-colors">Support</a>
            </div>
            <div class="hidden md:flex items-center space-x-4">
                <a href="#" class="text-sm font-bold text-gray-700 hover:text-blue-600 dark:text-gray-200 dark:hover:text-blue-400 transition-colors px-4 py-2">Sign In</a>
                <a href="#" class="bg-gray-900 dark:bg-gray-700 text-white text-sm font-bold px-6 py-3 rounded-full hover:bg-gray-800 dark:hover:bg-gray-600 transition-all shadow-lg hover:shadow-gray-200 dark:hover:shadow-gray-700 active:scale-95">Get Started</a>
            </div>
            <button @click="open = ! open" class="lg:hidden p-2 text-gray-600 dark:text-gray-300 focus:outline-none">
                <span data-lucide="menu" x-show="!open"></span>
                <span data-lucide="x" x-show="open" x-cloak></span>
            </button>
        </div>
    </div>
    <div x-show="open" x-cloak @click.away="open = false" class="lg:hidden bg-white dark:bg-gray-900 border-t border-gray-100 dark:border-gray-800 p-4 space-y-4">
        <a href="#products" @click="open = false" class="block text-base font-semibold text-gray-600 dark:text-gray-300 px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg">Products</a>
        <a href="#services" @click="open = false" class="block text-base font-semibold text-gray-600 dark:text-gray-300 px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg">Services</a>
        <a href="#testimonials" @click="open = false" class="block text-base font-semibold text-gray-600 dark:text-gray-300 px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg">Success Stories</a>
        <a href="#faq" @click="open = false" class="block text-base font-semibold text-gray-600 dark:text-gray-300 px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg">FAQ</a>
        <a href="#contact" @click="open = false" class="block text-base font-semibold text-gray-600 dark:text-gray-300 px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg">Support</a>
        <a href="#" class="block text-base font-bold text-gray-700 dark:text-gray-200 px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg">Sign In</a>
        <a href="#" class="block bg-gray-900 dark:bg-gray-700 text-white text-base font-bold px-4 py-3 rounded-xl text-center">Get Started</a>
    </div>
</nav>
