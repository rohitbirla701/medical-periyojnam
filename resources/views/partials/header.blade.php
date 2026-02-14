<header class="fixed top-4 left-1/2 -translate-x-1/2 
               w-[85%] max-w-7xl 
               {{ request()->is('/') ? 'bg-white' : 'bg-[#F4F4F4]' }}
               shadow-md rounded-full z-50">


  <div class="px-6 lg:px-10">

    <div class="flex items-center justify-between h-16 lg:h-20">

      <!-- Logo -->
      <a href="/" class="flex items-center">
        <img src="{{ asset('/assets/img/education/footerlogo.png') }}" 
             alt="Logo"
             class="h-10 lg:h-32 lg:mt-7 w-auto">
      </a>

      <!-- Desktop Menu -->
      <nav class="hidden md:flex items-center gap-8 lg:gap-6 text-base font-medium text-[#7B7B7B]">

        <a href="/" class="hover:text-red-500 transition">Home</a>
        <a href="/#about" class="hover:text-red-500 transition">About</a>
        <a href="/instructors" class="hover:text-red-500 transition">Announcement</a>
        <a href="/foundationcourse" class="hover:text-red-500 transition">Courses</a>
        <a href="/#blog" class="hover:text-red-500 transition">Blog</a>
        <a href="/#contact" class="hover:text-red-500 transition">Contact us</a>

      </nav>

      <!-- Right Buttons (Desktop) -->
      <div class="hidden md:flex items-center">

        <a href="/login"
           class="px-4 py-2 rounded-full bg-black text-white hover:bg-gray-600 text-[22.86px] font-medium hover:opacity-90 transition">
          Login
        </a>

        <a href="/enroll"
           class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-black text-white hover:bg-gray-600 transition">

          <img src="{{ asset('/assets/icons/headerarrow.png') }}" 
               alt="Enroll Icon" 
               class="w-5 h-4">

        </a>

      </div>

      <!-- Mobile Button -->
      <button id="menu-btn"
              class="md:hidden text-2xl text-gray-700 focus:outline-none">
        ☰
      </button>

    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu"
     class="hidden md:hidden flex flex-col gap-4 pb-6 pt-4 text-sm font-medium text-gray-700">


      <a href="/" class="hover:text-red-500">Home</a>
      <a href="/about" class="hover:text-red-500">About</a>
      <a href="/instructors" class="hover:text-red-500">Announcement</a>
      <a href="/pricing" class="hover:text-red-500">Courses</a>
      <a href="/blog" class="hover:text-red-500">Blog</a>
      <a href="/contact" class="hover:text-red-500">Contact</a>

      <a href="/login"
         class="px-4 py-2 rounded-full bg-black text-white text-center">
        Login
      </a>

      <a href="/enroll"
         class="inline-flex items-center justify-center w-full py-2 rounded-full bg-red-600 text-white">

        <img src="{{ asset('/assets/icons/headerarrow.png') }}" 
             alt="Enroll" 
             class="w-5 h-5">

      </a>

    </div>

  </div>

</header>








@push('scripts')
<script>
  document.addEventListener("DOMContentLoaded", function () {

    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');

    if (btn && menu) {
      btn.addEventListener('click', function () {
        menu.classList.toggle('hidden');
      });
    }

  });
</script>
@endpush

