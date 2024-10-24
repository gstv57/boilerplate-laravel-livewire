<!-- Navbar -->
<nav class="bg-white shadow-md w-full fixed top-0 left-0" x-data="{ isOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-14 md:h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <span class="text-xl font-bold text-gray-800">Logo</span>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8">
                <a href="#" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md">Home</a>
                <a href="#" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md">Produtos</a>
                <a href="#" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md">Serviços</a>
                <a href="#" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md">Contato</a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button
                    @click="isOpen = !isOpen"
                    class="text-gray-600 hover:text-gray-900 p-2"
                    aria-label="Menu Principal"
                >
                    <!-- Ícone Menu (você pode usar um SVG aqui) -->
                    <svg
                        x-show="!isOpen"
                        class="w-6 h-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>

                    <!-- Ícone X para fechar -->
                    <svg
                        x-show="isOpen"
                        class="w-6 h-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div
        x-show="isOpen"
        class="md:hidden"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
    >
        <div class="px-2 pt-2 pb-3 space-y-1 bg-white">
            <a href="#" class="block text-gray-600 hover:text-gray-900 hover:bg-gray-50 px-3 py-2 rounded-md">Home</a>
            <a href="#" class="block text-gray-600 hover:text-gray-900 hover:bg-gray-50 px-3 py-2 rounded-md">Produtos</a>
            <a href="#" class="block text-gray-600 hover:text-gray-900 hover:bg-gray-50 px-3 py-2 rounded-md">Serviços</a>
            <a href="#" class="block text-gray-600 hover:text-gray-900 hover:bg-gray-50 px-3 py-2 rounded-md">Contato</a>
        </div>
    </div>
</nav>
