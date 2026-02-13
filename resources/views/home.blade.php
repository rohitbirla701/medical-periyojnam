@extends('layouts.app')

@section('title','Home')

@section('content')

 <main class="main bg-pink-50 pb-20">

    <!-- Courses Hero Section -->
<section class="">
  <img 
    src="/assets/img/education/medical 1herotop.png"
    alt="Hero Image"
    class="w-full h-full object-cover"
  />
</section>


<!-- ABOUT SECTION -->
<section class="py-10 md:pt-16 px-6 md:px-12 lg:px-20">

  <div class="max-w-7xl mx-auto">

    <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

      <!-- LEFT CONTENT -->
      <div>

        <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl 
                   font-medium text-[#313131] mb-6">
          ABOUT US
        </h2>

        <p class="text-gray-700 text-base font-medium sm:text-lg leading-7 sm:leading-8 mb-8">
         Medical Prayojanam is one of the best Coaching Institute in Nagpur Exclusively for NEET. It is the only Institute of Central India which is only preparation for Medical Entrance. Here you will get Central India’s Best Faculty Team & see the Magic of Biology, Strength of Chemistry & Power of Physics. It may change your view towards study. Our main moto is to guide the students for Examination of Medical Entrance. Secondary aim is to promote and encourage all the students to fulfil their dream. If you want to become a Doctor then Join Medical Prayojanam.
        </p>

        <div class="flex flex-col sm:flex-row gap-4">

          <a href="#"
             class="px-6 py-3 text-center uppercase border border-red-600 
                    text-red-600 hover:bg-red-600 hover:text-white 
                    transition duration-300">
            Learn More
          </a>

          <button 
            class="px-6 py-3 border border-red-600 text-red-600 
                   hover:bg-red-600 hover:text-white 
                   transition duration-300 
                   flex items-center justify-center gap-2">

            Watch Video

            <img src="{{ asset('/assets/icons/Polygon 1.png') }}" 
                 alt="icon" 
                 class="w-4 h-4">
          </button>

        </div>

      </div>

      <!-- RIGHT STATS -->
      <div class="grid grid-cols-2 gap-4 sm:gap-6">

        <!-- CARD -->
        <div class="group bg-[#FAFAFA] p-6 sm:p-8 md:p-10 
                    shadow-md text-center
                    transition duration-300
                    hover:-translate-y-2 hover:shadow-xl hover:bg-white">

          <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-2">
            1000+
          </h3>

          <p class="text-gray-500 group-hover:text-gray-700">
            Trusted Tutors
          </p>
        </div>

        <!-- CARD -->
        <div class="group bg-[#FAFAFA] p-6 sm:p-8 md:p-10 
                    shadow-md text-center
                    transition duration-300
                    hover:-translate-y-2 hover:shadow-xl hover:bg-white">

          <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-2">
            250+
          </h3>

          <p class="text-gray-500 group-hover:text-gray-700">
            Employees
          </p>
        </div>

        <!-- CARD -->
        <div class="group bg-[#FAFAFA] p-6 sm:p-8 md:p-10 
                    shadow-md text-center
                    transition duration-300
                    hover:-translate-y-2 hover:shadow-xl hover:bg-white">

          <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-2">
            100+
          </h3>

          <p class="text-gray-500 group-hover:text-gray-700">
            Branches
          </p>
        </div>

        <!-- CARD -->
        <div class="group bg-[#FAFAFA] p-6 sm:p-8 md:p-10 
                    shadow-md text-center
                    transition duration-300
                    hover:-translate-y-2 hover:shadow-xl hover:bg-white">

          <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-2">
            10+
          </h3>

          <p class="text-gray-500 group-hover:text-gray-700">
            Awards
          </p>
        </div>

      </div>

    </div>

  </div>

</section>



<!-- Featured Courses Section -->
<section class="px-6 sm:px-10 md:px-4 lg:px-20 py-10">

  <!-- Heading -->
  <div class="flex justify-center mb-10 md:mb-14">
    <h2 class="px-6 py-3 font-medium text-base md:text-lg 
               border border-black rounded-full">
      Course
    </h2>
  </div>

  <!-- Cards Grid -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

    <!-- CARD 1 -->
    <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">

      <img src="/assets/img/education/course_thumb01.jpg.png" 
           class="w-full h-52 sm:h-56 md:h-60 lg:h-72 object-cover p-3 sm:p-4 lg:p-5" 
           alt="Course">

      <div class="p-4 sm:p-5 md:p-6">

        <div class="flex justify-between items-center mb-4">
          <span class="bg-[#EFEFF2] font-medium text-xs sm:text-sm px-3 py-1 rounded-full">
            NEET
          </span>

          <div class="text-right text-sm sm:text-base">
            <span class="line-through text-[#7F7E97] mr-2">$29.00</span>
            <span class="text-[#5751E1] font-semibold">$9.00</span>
          </div>
        </div>

        <h3 class="text-base sm:text-lg font-bold text-[#161439] mb-4">
          Foundation course – 11th+12th
        </h3>

        <div class="flex justify-between items-center mb-4">
          <div class="flex items-center gap-2">
            <img src="assets/img/education/Link → course_author001.png.png"
                 class="w-7 h-7 sm:w-8 sm:h-8 object-cover"
                 alt="">
            <span class="text-lg text-[#6D6C80]">Mohit Rao</span>
          </div>

          <div class="text-xs sm:text-lg text-[#7F7E97]">
            ⭐ (4.8 Reviews)
          </div>
        </div>

        <hr class="mb-4 border border-[#B5B5C3]">

        <div class="flex justify-between text-xs sm:text-lg font-normal text-[#1C1A4A]">

          <div class="flex items-center gap-2">
            <img src="{{ asset('/assets/icons/walleticon.png') }}" 
                 class="w-5 h-5">
            05 .
          </div>

          <div class="flex items-center gap-2">
            <img src="{{ asset('/assets/icons/watchicon.png') }}" 
                 class="w-5 h-5">
            11h 20m .
          </div>

          <div class="flex items-center gap-2">
            <img src="{{ asset('/assets/icons/capicon.png') }}" 
                 class="w-5 h-5">
            22
          </div>

        </div>

      </div>
    </div>


    <!-- CARD 2 -->
    <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">

      <img src="/assets/img/education/course_thumb02.jpg.png" 
           class="w-full h-52 sm:h-56 md:h-60 lg:h-72 object-cover p-3 sm:p-4 lg:p-5" 
           alt="Course">

      <div class="p-4 sm:p-5 md:p-6">

        <div class="flex justify-between items-center mb-4">
          <span class="bg-[#EFEFF2] text-xs sm:text-sm font-medium px-3 py-1 rounded-full">
            NEET
          </span>

          <div class="">
            <span class="line-through font-normal text-sm  text-[#7F7E97] mr-2">$20.00</span>
            <span class="text-[#5751E1] text-lg font-semibold">$10.00</span>
          </div>
        </div>

        <h3 class="text-base sm:text-lg font-bold text-[#161439] mb-4">
          Countdown course – 12th
        </h3>

        <div class="flex justify-between items-center mb-4">
          <div class="flex items-center gap-2">
            <img src="/assets/img/education/Link → course_author002.png.png"
                 class="w-7 h-7 sm:w-8 sm:h-8 rounded-full object-cover"
                 alt="">
            <span class="text-lg font-normal text-[#6D6C80]">Kriti Mishra</span>
          </div>

          <div class="text-xs sm:text-lg font-normal text-[#7F7E97]">
            ⭐ (4.5 Reviews)
          </div>
        </div>

        <hr class="mb-4 border border-[#B5B5C3]">

        <div class="flex justify-between text-xs sm:text-lg font-normal text-[#1C1A4A]">

          <div class="flex items-center gap-2">
            <img src="{{ asset('/assets/icons/walleticon.png') }}" 
                 class="w-5 h-5">
            05 .
          </div>

          <div class="flex items-center gap-2">
            <img src="{{ asset('/assets/icons/watchicon.png') }}" 
                 class="w-5 h-5">
            11h 20m .
          </div>

          <div class="flex items-center gap-2">
            <img src="{{ asset('/assets/icons/capicon.png') }}" 
                 class="w-5 h-5">
            22
          </div>

        </div>

      </div>
    </div>


    <!-- CARD 3 -->
    <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">

      <img src="/assets/img/education/course_thumb03.jpg.png" 
           class="w-full h-52 sm:h-56 md:h-60 lg:h-72 object-cover p-3 sm:p-4 lg:p-5" 
           alt="Course">

      <div class="p-4 sm:p-5 md:p-6">

        <div class="flex justify-between items-center mb-4">
          <span class="bg-gray-200 text-xs sm:text-sm px-3 py-1 rounded-full">
            NEET
          </span>

          <span class="text-blue-600 font-semibold text-sm sm:text-base">$20.00</span>
        </div>

        <h3 class="text-base sm:text-lg font-bold text-gray-800 mb-4">
          Target Course – After 12th passed
        </h3>

        <div class="flex justify-between items-center mb-4">
          <div class="flex items-center gap-2">
            <img src="/assets/img/education/Link → course_author003.png.png"
                 class="w-7 h-7 sm:w-8 sm:h-8 rounded-full object-cover"
                 alt="">
            <span class="text-lg text-gray-600">Rohit</span>
          </div>

          <div class="text-xs sm:text-lg text-gray-500">
            ⭐ (4.8 Reviews)
          </div>
        </div>

        <hr class="mb-4">

        <div class="flex justify-between text-xs sm:text-lg font-normal text-[#1C1A4A]">

          <div class="flex items-center gap-2">
            <img src="{{ asset('/assets/icons/walleticon.png') }}" 
                 class="w-5 h-5">
            05 .
          </div>

          <div class="flex items-center gap-2">
            <img src="{{ asset('/assets/icons/watchicon.png') }}" 
                 class="w-5 h-5">
            11h 20m .
          </div>

          <div class="flex items-center gap-2">
            <img src="{{ asset('/assets/icons/capicon.png') }}" 
                 class="w-5 h-5">
            22
          </div>

        </div>

      </div>
    </div>

  </div>

  <!-- Button -->
  <div class="flex justify-center mt-10">
    <button
       class="px-8 sm:px-12 py-3 font-bold text-sm md:text-md 
              border rounded-full border-b-8 
              border-blue-950 bg-[#5751E1] text-white 
              hover:opacity-90 transition">
      See All Courses
    </button>
  </div>

</section>



<section class="relative py-10">

    <div class="mb-10 flex justify-center">
      <h1 class="text-lg py-2 px-5 font-medium border rounded-full border-black shadow-sm">
        Our Top Doctors
      </h1>
    </div>

  <!-- Pink Circle -->
  <div class="absolute 
              -bottom-14
              left-1/2 
              -translate-x-1/2 
              w-[489px] 
              h-[489px] 
              bg-[#FF7E7E] 
              rounded-full">
  </div>

<div class="relative z-10  text-center 
            bg-white/20 
            backdrop-blur-md 
            border border-white/30 
            rounded-xl 
            bg-pink-100
            shadow-lg">
<!-- Doctor Cards -->
<div class="grid md:grid-cols-3 justify-center gap-5 py-20 px-20">

  <!-- CARD -->
  <div class="flex justify-center">
    <div class="group 
                w-[275px] h-[435px] 
                transition-all duration-500 
                hover:scale-125 hover:z-20">

      <div class="bg-white rounded-2xl overflow-hidden shadow-lg h-full 
                  transition-all duration-500 
                  hover:shadow-2xl">

        <div class="h-[380px] overflow-hidden">
          <img src="/assets/img/education/front-view-male-student-wearing-black-backpack-holding-copybooks-files-blue-wall 1.png"
               class="w-full h-full object-cover object-center 
                      transition-transform duration-500 
                      group-hover:scale-110"
               alt="">
        </div>

        <div class="py-4">
          <h6 class="text-center font-semibold">
            Ruchita Ghoshpal
          </h6>
        </div>

      </div>
    </div>
  </div>


  <!-- CARD -->
  <div class="flex justify-center">
    <div class="group 
                w-[275px] h-[435px] 
                transition-all duration-500 
                hover:scale-125 hover:z-20">

      <div class="bg-white rounded-2xl overflow-hidden shadow-lg h-full 
                  transition-all duration-500 
                  hover:shadow-2xl">

        <div class="h-[380px] overflow-hidden">
          <img src="/assets/img/education/697078c6bd0682489206e2ce 1.png"
               class="w-full h-full object-cover object-center 
                      transition-transform duration-500 
                      group-hover:scale-110"
               alt="">
        </div>

        <div class="py-4">
          <h6 class="text-center font-semibold">
            Satysabrata Pal
          </h6>
        </div>

      </div>
    </div>
  </div>


  <!-- CARD -->
  <div class="flex justify-center">
    <div class="group 
                w-[275px] h-[435px] 
                transition-all duration-500 
                hover:scale-125 hover:z-20">

      <div class="bg-white rounded-2xl overflow-hidden shadow-lg h-full 
                  transition-all duration-500 
                  hover:shadow-2xl">

        <div class="h-[380px] overflow-hidden">
          <img src="/assets/img/education/front-view-male-student-wearing-black-backpack-holding-copybooks-files-blue-wall 1 (1).png"
               class="w-full h-full object-cover object-center 
                      transition-transform duration-500 
                      group-hover:scale-110"
               alt="">
        </div>

        <div class="py-4">
          <h6 class="text-center font-semibold">
            Anaya Mukherjee
          </h6>
        </div>

      </div>
    </div>
  </div>

</div>



</div>

  </div>
</section>



<section class="reative z-0 px-20 bg-transparent">

<div class="relative z-30 flex justify-center -top-2">
  <h1 class="px-5 py-2 font-medium text-md border border-black rounded-full">Testimonial</h1>
</div>

  <div class="mt-7">

    <!-- Section Title -->
    <div class="text-center mb-14">
      <h2 class="text-4xl font-medium">Testimonial</h2>
      <p class="text-[#000000] font-normal text-md mt-2">
        Don’t take our word for it. Trust our students
      </p>
    </div>

    <!-- Cards -->
    <div class="grid md:grid-cols-3 gap-8">

      <!-- Card 1 -->
      <div class="bg-white p-6 rounded-md shadow-md">

        <div class="flex items-start justify-between mb-4">
          <div class=" gap-3">
            <img src="/assets/img/education/Rectangle 729.png"
                 class="w-10 h-10 object-cover"
                 alt="">
            <div>
              <h4 class="font-bold text-lg mt-2">Floyd Miles</h4>
            </div>
          </div>

          <div class="text-yellow-400 text-xl">
            ★★★★★
          </div>
        </div>

        <p class="text-gray-600 font-normal text-sm font-normal leading-relaxed">
          Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.<br/>
Exercitation veniam consequat sunt nostrud amet. Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim...
        </p>

      </div>


      <!-- Card 2 -->
      <div class="bg-white p-6 rounded-md shadow-md">

        <div class="flex items-start justify-between mb-4">
          <div class="gap-3">
            <img src="/assets/img/education/Rectangle 729 (1).png"
                 class="w-10 h-10 object-cover"
                 alt="">
            <div>
              <h4 class="font-bold text-lg mt-2">Ronald Richards</h4>
            </div>
          </div>

          <div class="text-yellow-400 text-xl">
            ★★★★☆
          </div>
        </div>

        <p class="text-gray-600 font-normal text-sm leading-relaxed">
          ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
        </p>

      </div>


      <!-- Card 3 -->
      <div class="bg-white p-6 rounded-md shadow-md">

        <div class="flex items-start justify-between mb-4">
          <div class="gap-3">
            <img src="/assets/img/education/Rectangle 729 (2).png"
                 class="w-10 h-10 object-cover"
                 alt="">
            <div>
              <h4 class="font-bold text-lg mt-2">Savannah Nguyen</h4>
            </div>
          </div>

          <div class="text-yellow-400 text-xl">
            ★★★★☆
          </div>
        </div>

        <p class="text-gray-600 text-sm font-normal leading-relaxed">
          Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.<br/>
          Exercitation veniam consequat sunt nostrud amet. Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim...
        </p>
        <p></p>

      </div>

    </div>

      <!-- Dots -->
  <div class="flex justify-center mt-4 gap-2" id="dotPagination">
    <div class="dot w-3 h-3 bg-gray-300 rounded-full"></div>
    <div class="dot w-3 h-3 bg-gray-300 rounded-full"></div>
    <div class="dot w-3 h-3 bg-gray-300 rounded-full"></div>
  </div>

<!-- Pagination -->
<div class="relative flex justify-center mt-5">

  <!-- Gradient Background Strip -->
  <div class="absolute inset-0  mx-56
              bg-[linear-gradient(90deg,rgba(255,255,255,0)_0%,#CF242A_49.52%,rgba(255,255,255,0)_100%)]
              opacity-100 
              rounded-full">
  </div>

  <!-- Buttons Container -->
  <div class="relative flex items-center gap-3 
              px-6 py-2 
              rounded-full">

    <button class="w-7 h-7 flex items-center justify-center 
                   bg-white 
                   rounded-sm text-xs">
      1
    </button>

    <button class="w-7 h-7 flex items-center justify-center 
                   bg-white rounded-sm shadow text-xs">
      2
    </button>

    <button class="w-7 h-7 flex items-center justify-center 
                   bg-white rounded-sm shadow text-xs">
      3
    </button>

    <button class="w-7 h-7 flex items-center justify-center 
                   bg-white border-2 border-black rounded-sm shadow text-xs">
      4
    </button>

  </div>

</div>

  </div>

</section>

<section class="px-20 mt-10">

  <div class="text-center">

    <!-- Title -->
    <h1 class="text-4xl font-medium">
      Our Student Feedback
    </h1>

    <!-- Video Cards -->
    <div class="grid md:grid-cols-3 mt-14 gap-8">

<div class="relative rounded-2xl overflow-hidden shadow-lg group">

  <!-- Full Image -->
  <img src="/assets/img/education/image 3youtube.png"
       class="w-full object-cover"
       alt="Student Feedback">

  <!-- Dark Overlay (optional like image depth) -->
  <!-- <div class="absolute inset-0 bg-black/10"></div> -->

<!-- YouTube Play Button -->
<div class="absolute inset-0 flex items-center justify-center">

  <div class=" 
              flex items-center justify-center 
              overflow-hidden
              group-hover:scale-110 
              transition duration-300">

    <img src="{{ asset('/assets/icons/youtubyoutubeicon.png') }}"
         alt="Play Icon"
         class="w-40 h-40 object-contain">

  </div>

</div>



</div>


<div class="relative rounded-2xl overflow-hidden shadow-lg group">

  <!-- Full Image -->
  <img src="/assets/img/education/image 3youtube.png"
       class="w-full object-cover"
       alt="Student Feedback">

  <!-- Dark Overlay (optional like image depth) -->
  <div class="absolute inset-0 bg-black/10"></div>

<!-- YouTube Play Button -->
<div class="absolute inset-0 flex items-center justify-center">

  <div class=" 
              flex items-center justify-center 
              overflow-hidden
              group-hover:scale-110 
              transition duration-300">

    <img src="{{ asset('/assets/icons/youtubyoutubeicon.png') }}"
         alt="Play Icon"
         class="w-40 h-40 object-contain">

  </div>

</div>

</div>


      <!-- Duplicate for 3rd -->
<div class="relative rounded-2xl overflow-hidden shadow-lg group">

  <!-- Full Image -->
  <img src="/assets/img/education/image 3youtube.png"
       class="w-full object-cover"
       alt="Student Feedback">

  <!-- Dark Overlay (optional like image depth) -->
  <div class="absolute inset-0 bg-black/10"></div>

<!-- YouTube Play Button -->
<div class="absolute inset-0 flex items-center justify-center">

  <div class=" 
              flex items-center justify-center 
              overflow-hidden
              group-hover:scale-110 
              transition duration-300">

    <img src="{{ asset('/assets/icons/youtubyoutubeicon.png') }}"
         alt="Play Icon"
         class="w-40 h-40 object-contain">

  </div>

</div>

</div>
  </div>

      <!-- Bottom Navigation -->
    <div class="flex justify-center items-center gap-6 mt-10">

            <button class="
               flex items-center justify-center 
               transition duration-300  hover:border-black">

  <img src="{{ asset('/assets/icons/leftarrow.png') }}" 
       alt="Arrow Icon"
       class="w-14 h-14 object-contain">

</button>

      <button class="
               flex items-center justify-center 
               transition duration-300  hover:border-black">

  <img src="{{ asset('/assets/icons/rightarrow.png') }}" 
       alt="Arrow Icon"
       class="w-14 h-14 object-contain">

</button>


    </div>

</section>


<section class="py-10 px-20">

<div class="flex justify-center mb-10">
  <h1 class="border rounded-full py-2 px-8 text-lg font-medium border-black">Blog</h1>
</div>

  <div class="">

    <!-- Section Title -->
    <div class="mb-12">
      <h2 class="text-3xl font-bold text-gray-900">
        Latest Post
      </h2>
    </div>

    <!-- Blog Cards -->
    <div class="grid md:grid-cols-3 gap-8">

      <!-- Card -->
      <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">

        <!-- Image -->
        <img src="/assets/img/education/course_thumb03.jpg.png"
             class="w-full h-72 p-5 rounded-[6px] object-cover"
             alt="Blog">

        <div class="p-6">

          <!-- Category -->
          <span class="text-sm font-medium bg-[#4B6BFB0D] text-blue-600 px-3 py-2 rounded-md">
            Medical
          </span>

          <!-- Title -->
          <h3 class="mt-4 text-2xl font-bold text-gray-900 leading-snug">
            Trusted NEET Coaching Classes in Nagpur for Future Doctors
          </h3>

          <!-- Author -->
          <div class="flex items-center gap-3 mt-6">

            <img src="/assets/img/blog/blogprofileImage (1).png"
                 class="w-9 h-9 rounded-full object-cover"
                 alt="Author">

            <div class="text-md text-gray-400">
              <span class="font-medium">Tracey Wilson</span>
              <span class="mx-2 font-weight-normal"></span>
              August 20, 2022
            </div>

          </div>

        </div>
      </div>


      <!-- Card 2 -->
      <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">

        <img src="/assets/img/education/course_thumb02.jpg.png"
             class="w-full h-72 p-5 radius-[6px] object-cover"
             alt="Blog">

        <div class="p-6">

          <!-- Category -->
          <span class="text-sm font-medium bg-[#4B6BFB0D] text-blue-600 px-3 py-2 rounded-md">
            Medical
          </span>

          <!-- Title -->
          <h3 class="mt-4 text-2xl font-bold text-gray-900 leading-snug">
            Trusted NEET Coaching Classes in Nagpur for Future Doctors
          </h3>

          <!-- Author -->
          <div class="flex items-center gap-3 mt-6">

            <img src="/assets/img/blog/blogprofileImage (2).png"
                 class="w-9 h-9 rounded-full object-cover"
                 alt="Author">

            <div class="text-md text-gray-400">
              <span class="font-medium">Jason Francisco</span>
              <span class="mx-2 font-weight-normal"></span>
              August 20, 2022
            </div>

          </div>

        </div>
      </div>


      <!-- Card 3 -->
      <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">

        <img src="/assets/img/education/Rectangle 38.png"
             class="w-full h-72 p-5 object-cover"
             alt="Blog">

        <div class="p-6">

          <!-- Category -->
          <span class="text-sm font-medium bg-[#4B6BFB0D] text-blue-600 px-3 py-2 rounded-md">
            Medical
          </span>

          <!-- Title -->
          <h3 class="mt-4 text-2xl font-bold text-gray-900 leading-snug">
            Trusted NEET Coaching Classes in Nagpur for Future Doctors
          </h3>

          <!-- Author -->
          <div class="flex items-center gap-3 mt-6">

            <img src="/assets/img/blog/blogprofileImage (3).png"
                 class="w-9 h-9 rounded-full object-cover"
                 alt="Author">

            <div class="text-md text-gray-400">
              <span class="font-medium">Elizabeth Slavin</span>
              <span class="mx-2 font-weight-normal"></span>
              August 20, 2022
            </div>

          </div>

        </div>
      </div>

    </div>

  </div>

</section>

<div class="flex justify-center my-6">
  <h3 class="py-2 px-4 font-medium text-lg border border-black rounded-full">Enquiry form with lead</h3>
</div>

<section class="py-20 px-20">

  <div class="">

    <div class="grid md:grid-cols-2 gap-10 items-center">

      <!-- LEFT: FORM CARD -->
      <div class="bg-white rounded-2xl shadow-md p-8">

        <h1 class="text-4xl font-bold text-red-600 mb-6">
          Admission Enquiry Form
        </h1>

        <form class="space-y-7">

          <!-- Full Name -->
          <div>
            <label class="text-sm text-gray-600">Full Name</label>
            <div class="grid grid-cols-2 gap-3 mt-1">
              <input type="text" placeholder="First"
                     class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-red-400">
              <input type="text" placeholder="Last"
                     class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-red-400">
            </div>
          </div>

          <!-- Phone -->
          <div>
            <label class="text-sm text-gray-600">Phone no</label>
            <input type="text" placeholder="Phone number"
                   class="w-full mt-1 border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-red-400">
          </div>

          <!-- Course -->
          <div>
            <label class="text-sm text-gray-600">Course name</label>
            <select class="w-full mt-1 border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-red-400">
              <option>Choose course</option>
              <option>NEET</option>
              <option>Medical</option>
            </select>
          </div>

          <!-- City -->
          <div>
            <label class="text-sm text-gray-600">City</label>
            <input type="text"
                   class="w-full mt-1 border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-red-400">
          </div>

          <!-- Query -->
          <div>
            <label class="text-sm text-gray-600">Query</label>
            <textarea rows="3"
                      class="w-full mt-1 border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-red-400"></textarea>
          </div>

          <!-- Submit -->
           <div class="py-7">
          <button type="submit"
                  class="bg-red-600 font-bold text-white px-6 py-2 rounded-md text-sm hover:bg-red-700 transition">
            Submit
          </button>
          </div>
        </form>

      </div>


      <!-- RIGHT: IMAGE -->
      <div class="rounded-2xl overflow-hidden shadow-md">
        <img src="/assets/img/education/formImage.png"
             class=" object-cover"
             alt="Doctors">
      </div>

    </div>

  </div>

</section>

<section class="py-7 px-20">

<div class="flex justify-center mb-28">
    <h1 class="px-4 py-2 mb-16 border font-medium text-lg font-santoshi border-black rounded-full">Download our app</h1>
</div>

  <div class=" relative">

    <!-- Pink Rounded Container -->
    <div class="bg-[#FFCECE] rounded-3xl 
                px-12 py-8 h-96
                relative overflow-visible">

      <div class="">

        <h2 class="relative text-5xl font-medium text-black mb-7">
          Download our app
        </h2>

        <!-- QR Codes -->
        <div class="flex gap-6 mb-3">

          <div class="bg-white rounded-2xl shadow-md">
            <img src="/assets/icons/barcode.png"
                 class="w-36 h-36 object-contain"
                 alt="">
          </div>

          <div class="bg-white rounded-2xl shadow-md">
            <img src="/assets/icons/barcode.png"
                 class="w-36 h-36 object-contain"
                 alt="">
          </div>

        </div>

        <!-- Store Buttons -->
        <div class="text-left">
          <img src="/assets/img/education/PhotoshopExtension_Image (3) 1.png"
               class="h-24"
               alt="">
        </div>

      </div>

    </div>


    <!-- iPhone Floating Image -->
    <div class="absolute 
                right-0 
                bottom-0
                md:right-10">

      <img src="/assets/img/education/iphoneMask group (3).png"
           class="h-full object-contain drop-shadow-2xl"
           alt="App Preview">

    </div>

  </div>

</section>

<div class="flex justify-center my-10">
  <h4 class="py-2 px-4 font-medium text-lg border rounded-full border-black">Award and achievenment</h4>
</div>

<section class="relative py-16 lg:px-10">

  <!-- Background Image -->
  <div class="absolute inset-0">
    <img src="/assets/img/bg/badgeBGimage.png"
         class="w-full h-full object-cover opacity-100"
         alt="">
  </div>

  <!-- Dark Overlay -->
  <div class="absolute inset-0"></div>

  <div class="relative max-w-7xl mx-auto">

    <div class="grid grid-cols-2 md:grid-cols-5 gap-10 text-center">

      <!-- ITEM -->
      <div class="flex flex-col items-center text-white">

        <!-- Badge Image -->
        <img src="/assets/img/education/badgeGroup 1000006861.png"
             class="w-44 h-44 object-contain mb-6"
             alt="Badge">

        <h1 class="text-6xl text-white font-light">
          2020
        </h1>

        <p class="text-sm text-white mt-2 font-normal leading-6 max-w-44">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </p>

      </div>

      <!-- Duplicate 4 more -->
      <div class="flex flex-col items-center text-white">
        <img src="/assets/img/education/badgeGroup 1000006861.png"
             class="w-44 h-44 object-contain mb-6"
             alt="">
        <h1 class="text-6xl text-white font-light">2020</h1>
        <p class="text-sm font-normal text-white mt-2 max-w-44">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </p>
      </div>

      <div class="flex flex-col items-center text-white">
        <img src="/assets/img/education/badgeGroup 1000006861.png"
             class="w-44 h-44 object-contain mb-6"
             alt="">
        <h1 class="text-6xl text-white font-light">2020</h1>
        <p class="text-sm text-white font-normal mt-2 max-w-44">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </p>
      </div>

      <div class="flex flex-col items-center text-white">
        <img src="/assets/img/education/badgeGroup 1000006861.png"
             class="w-44 h-44 object-contain mb-6"
             alt="">
        <h1 class="text-6xl text-white font-light">2020</h1>
        <p class="text-sm text-white font-normal  mt-2 max-w-44">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </p>
      </div>

      <div class="flex flex-col  items-center text-white">
        <img src="/assets/img/education/badgeGroup 1000006861.png"
             class="w-44 h-44 object-contain mb-6"
             alt="">
        <h1 class="text-6xl font-santoshi text-white font-light">2020</h1>
        <p class="text-sm font-santoshi text-white font-normal mt-2 max-w-44">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </p>
      </div>

    </div>

  </div>

</section>

  </main>

@endsection
