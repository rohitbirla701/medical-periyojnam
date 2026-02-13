<div class="flex justify-center">

<header class="absolute fixed w-full top-6 rounded-full z-50 bg-white shadow-sm">

  <div class="px-7">

    <div class="flex items-center justify-between h-20">

      <!-- Logo -->
      <a href="/" class="flex items-center mt-8">
        <img src="{{ asset('/assets/img/education/footerlogo.png') }}" 
             alt="Logo"
             class="h-32 w-32">
      </a>

      <!-- Desktop Menu -->
      <nav class="hidden md:flex items-center gap-10 text-sm font-medium text-gray-700">

        <a href="/" class="hover:text-red-500 transition">Home</a>
        <a href="/about" class="hover:text-red-500 transition">About</a>
        <a href="/foundationcourse" class="hover:text-red-500 transition">Courses</a>
        <a href="/instructors" class="hover:text-red-500 transition">Instructors</a>
        <a href="/pricing" class="hover:text-red-500 transition">Pricing</a>
        <a href="/blog" class="hover:text-red-500 transition">Blog</a>
        <a href="/contact" class="hover:text-red-500 transition">Contact</a>

      </nav>

      <!-- Right Side Buttons -->
      <div class="hidden md:flex items-center">

        <a href="/login"
           class="px-4 py-2 rounded-full bg-black text-white text-xl font-inter font-medium hover:opacity-90 transition">
          Login
        </a>

       <a href="/enroll"
   class="inline-flex items-center px-3 py-3 rounded-full bg-black text-white text-sm hover:bg-red-700 transition">

    <img src="{{ asset('/assets/icons/headerarrow.png') }}" 
         alt="Enroll Icon" 
         class="w-4 h-4">
</a>

      </div>

      <!-- Mobile Menu Button -->
      <button id="menu-btn"
              class="md:hidden text-2xl text-gray-700">
        ☰
      </button>

    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu"
         class="hidden md:hidden  flex-col gap-4 py-4 text-sm font-medium text-gray-700">

      <a href="/">Home</a>
      <a href="/about">About</a>
      <a href="/foundationcourse">Courses</a>
      <a href="/instructors">Instructors</a>
      <a href="/pricing">Pricing</a>
      <a href="/blog">Blog</a>
      <a href="/contact">Contact</a>

      <a href="/login"
         class="px-4 py-2 rounded-full bg-black text-white text-center">
        Login
      </a>

      <a href="/enroll"
   class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-red-600 text-white">

   <img src="{{ asset('/assets/icons/headerarrow.png') }}" 
        alt="Logo" 
        class="w-5 h-5">
</a>

    </div>

  </div>

</header>
</div>