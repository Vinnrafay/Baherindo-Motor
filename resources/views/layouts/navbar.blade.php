<nav class="bg-gray-900 shadow-md sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">

      <!-- Mobile menu button -->
      <div class="flex items-center sm:hidden">
        <button type="button" aria-controls="mobile-menu" aria-expanded="false" id="mobile-menu-button"
                class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white transition">
          <span class="sr-only">Open main menu</span>
          <!-- Icon open menu (hamburger) -->
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!-- Icon close menu (X) -->
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!-- Logo + Nav Links -->
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <a href="/" class="flex items-center space-x-2 select-none">
          <i class="fa-solid fa-motorcycle text-white text-2xl"></i>
          <span class="text-white font-extrabold text-xl">Baherindo Motor</span>
        </a>

        <div class="hidden sm:ml-10 sm:flex sm:space-x-4">
          <a href="/" class="inline-flex items-center px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition">
            Beli Motor
          </a>
          <a href="/about" class="inline-flex items-center px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition">
            About
          </a>
          <a href="/contact" class="inline-flex items-center px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition">
            Contact
          </a>
          <a href="/motor" class="inline-flex items-center px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition">
            + Tambah Motor
          </a>
        </div>
      </div>

      <!-- WhatsApp Contact -->
      <div class="hidden sm:flex items-center space-x-2 select-none">
        <i class="fab fa-whatsapp text-green-500 text-xl"></i>
        <span class="text-white font-medium">Chat Ki Baher</span>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide with JS -->
  <div class="sm:hidden" id="mobile-menu" hidden>
    <div class="space-y-1 px-2 pt-2 pb-3 bg-gray-800">
       <a href="/" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition">Beli Motor</a>
      <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition">About</a>
      <a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition">Contact</a>
      <a href="/motor" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition">+ Tambah Motor</a>
    </div>
  </div>

  <script>
    // Mobile menu toggle script
    const btn = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');
    const openIcon = btn.querySelector('svg.block');
    const closeIcon = btn.querySelector('svg.hidden');

    btn.addEventListener('click', () => {
      const isHidden = menu.hasAttribute('hidden');
      if (isHidden) {
        menu.removeAttribute('hidden');
        openIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');
        btn.setAttribute('aria-expanded', 'true');
      } else {
        menu.setAttribute('hidden', '');
        openIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
        btn.setAttribute('aria-expanded', 'false');
      }
    });
  </script>
</nav>
