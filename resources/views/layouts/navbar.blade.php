<nav class="bg-gray-800 text-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-4">
                <!-- logo -->
                <div>
                    <a href="" class="flex items-center py-5 px-2 text-white">
                        <svg class="h-6 w-6 mr-1 text-white" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M19 11H5M12 19l7-7-7-7"></path>
                        </svg>
                        <span class="font-bold">Brand</span>
                    </a>
                </div>

                <!-- primary nav -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="/home" class="py-5 px-3">Home</a>
                    <a href="/jadwal" class="py-5 px-3">Jadwal</a>
                    <a href="/mahasiswa" class="py-5 px-3">Mahasiswa</a>
                </div>
            </div>

            <!-- mobile button goes here -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M4 6h16M4 12h16m-7 6h7" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- mobile menu -->
    <div class="md:hidden">
        <div id="mobile-menu" class="hidden">
            <a href="/home" class="block py-2 px-4 text-sm hover:bg-gray-700">Home</a>
            <a href="/jadwal" class="block py-2 px-4 text-sm hover:bg-gray-700">Jadwal</a>
        </div>
    </div>
</nav>

<script>
    // Simple JavaScript to handle mobile menu toggling
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('#mobile-menu-button').addEventListener('click', function() {
            document.querySelector('#mobile-menu').classList.toggle('hidden');
        });
    });
</script>
