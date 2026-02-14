@extends('layouts.app')

@section('title','foundatioCourses')

@section('content')

 <main class="main bg-[#F5EAEA] ">

<section class="pt-40 pb-16">

<div class="bg-[#f6eded]">
    <div class="lg:ml-20 lg:w-[110%] px-6 ">

        <div class="grid lg:grid-cols-2 gap-12 items-start">

            <!-- LEFT SIDE -->
            <div>

                <!-- IMAGE -->
                <div class="relative rounded-3xl overflow-hidden ">

                    <img src="{{ asset('assets/img/education/foundattioncourse.png') }}"
                         class="w-[1200-px] h-[380px] object-cover"
                         alt="Course">

                    <!-- Play Button -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center shadow-lg cursor-pointer">
                            <img src="/assets/icons/courseplayicon.png" alt="">
                        </div>
                    </div>
                </div>

                <!-- TEXT -->
                <div class="mt-10">

                    <p class="text-gray-900 text-2xl font-medium mb-2">
                        Class 11-12 NEET
                    </p>

                    <h1 class="text-5xl font-bold text-red-600 mb-4">
                        Foundation course
                    </h1>

                    <p class="text-gray-800 text-lg font-normal mb-10 max-w-xl">
                        Lorem Ipsum Is Simply Dummy Text Of The Printing And <br/> Typesetting Industry.
                    </p>

                    <!-- FEATURES -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-10">

                        <!-- ITEM -->
                        <div class="flex flex-col items-start space-y-3">
                            <div class="border bg-white border-[#FFB9B9] p-3 rounded-md">
                                <img src="{{ asset('/assets/icons/Live Video On.png') }}"
                                     class="w-6 h-6">
                            </div>
                            <p class="text-lg font-medium text-gray-900 leading-snug">
                                LIVE <br/> Interactive Class
                            </p>
                        </div>

                        <div class="flex flex-col items-start space-y-3">
                            <div class="border px-6 py-6 bg-white border-[#FFB9B9] p-3 rounded-md">
                                <!-- <img src="{{ asset('/assets/icons/discipline.png') }}"
                                     class="w-6 h-6"> -->
                            </div>
                            <p class="text-lg font-medium text-gray-900 leading-snug">
                                "Offline" <br/> Like Discipline
                            </p>
                        </div>

                        <div class="flex flex-col items-start space-y-3">
                            <div class="border px-6 py-6 bg-white border-[#FFB9B9] p-3 rounded-md">
                                <!-- <img src="{{ asset('/assets/icons/books.png') }}"
                                     class="w-6 h-6"> -->
                            </div>
                            <p class="text-lg font-medium text-gray-900 leading-snug">
                                Hard Copy Books <br/> Delivered to you
                            </p>
                        </div>

                        <div class="flex flex-col items-start space-y-3">
                            <div class="border px-6 py-6 border-[#FFB9B9] bg-white p-3 rounded-md">
                                <!-- <img src="{{ asset('/assets/icons/doubt.png') }}"
                                     class="w-6 h-6"> -->
                            </div>
                            <p class="text-lg font-medium text-gray-900 leading-snug">
                                24*7 Live Video Call <br/> Doubt Solving
                            </p>
                        </div>

                    </div>

                </div>
            </div>


            <!-- RIGHT SIDE FORM -->
            <div class="bg-white p-8 rounded-2xl shadow-lg w-full h-[90%] max-w-[400px]">

                <h2 class="text-[26px] text-center font-bold text-red-600 mb-6">
                    Admission Enquiry Form
                </h2>

                <form class="space-y-9">

                    <div class="grid grid-cols-2 gap-4">
                        <input type="text" placeholder="First Name"
                               class="border rounded-md px-3 py-2 w-full">
                        <input type="text" placeholder="Last Name"
                               class="border rounded-md px-3 py-2 w-full">
                    </div>

                    <input type="text" placeholder="Phone number"
                           class="border rounded-md px-3 py-2 w-full">

                    <select class="border rounded-md px-3 py-2 w-full">
                        <option>Choose course</option>
                    </select>

                    <input type="text" placeholder="City"
                           class="border rounded-md px-3 py-2 w-full">

                    <textarea rows="3"
                              placeholder="Query"
                              class="border rounded-md px-3 py-2 w-full"></textarea>
                <div class="py-10">
                    <button type="submit"
                            class="bg-red-600 text-sm font-bold text-white px-8 py-3 rounded-md">
                        Submit
                    </button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

        <!-- Subjects Bar -->
        <div class="flex justify-center mt-10">
      <div class="bg-[#F8CACA] p-6 w-[85%] max-w-7xl flex justify-between items-center">

        <div class="flex items-center gap-4">
          <span class="font-medium text-3xl">Subjects Covered :</span>

          <span class="bg-white px-4 py-1 rounded-full font-medium text-sm">Physics</span>
          <span class="bg-white px-4 py-1 rounded-full font-medium text-sm">Biology</span>
          <span class="bg-white px-4 py-1 rounded-full font-medium text-sm">Chemistry</span>
        </div>

        <a href="#" class="bg-red-600 font-medium text-md text-white px-6 py-2 rounded-lg">
          Enroll now
        </a>

      </div>
      </div>

</section>

<section class="pt-12">
    <div class="bg-[#FFEAEA] w-full px-24">
        <div class="flex justify-center pt-12">
            <h2 class="px-6 py-2 border border-black rounded-full font-medium text-lg">Courses Description</h2>
        </div>

        <h1 class="font-bold text-[42px] mt-14">Two-year Integrated Classroom Programme</h1>

        <p class="text-xl font-normal leading-9 mt-10 pb-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
</section>

<section class="ml-8">
    <div>
        <div class="flex items-center justify-center pt-20">

    <!-- LEFT LINE -->
    <div class="flex items-center w-64">
        <div class="w-0 h-0 
                    border-t-[6px] border-t-transparent
                    border-b-[6px] border-b-transparent
                    border-l-[10px] border-l-black">
        </div>
        <div class="flex-1 h-0.5 bg-black"></div>
    </div>

    <!-- TITLE -->
    <h1 class="mx-6 font-bold text-[42px] whitespace-nowrap">
        Course Highlights
    </h1>

    <!-- RIGHT LINE -->
    <div class="flex items-center w-64">
        <div class="flex-1 h-0.5 bg-black"></div>
        <div class="w-0 h-0 
                    border-t-[6px] border-t-transparent
                    border-b-[6px] border-b-transparent
                    border-r-[10px] border-r-black">
        </div>
        
    </div>

</div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 px-6 lg:px-16 py-10">

    <!-- LEFT LIST -->
    <div class="font-medium text-2xl">
        <ul class="space-y-6">

            <li class="flex items-start gap-3">
                <img src="{{ asset('/assets/icons/tickicon.png') }}" class="w-6 h-6 mt-1">
                <span>Complete Board + NEET syllabus coverage</span>
            </li>

            <li class="flex items-start gap-3">
                <img src="{{ asset('/assets/icons/tickicon.png') }}" class="w-6 h-6 mt-1">
                <span>All India common analysis for rank boosting</span>
            </li>

            <li class="flex items-start gap-3">
                <img src="{{ asset('/assets/icons/tickicon.png') }}" class="w-6 h-6 mt-1">
                <span>Doubt clearing sessions</span>
            </li>

            <li class="flex items-start gap-3">
                <img src="{{ asset('/assets/icons/tickicon.png') }}" class="w-6 h-6 mt-1">
                <span>
                    Regular updates about student's performance
                    and attendance
                </span>
            </li>

            <li class="flex items-start gap-3">
                <img src="{{ asset('/assets/icons/tickicon.png') }}" class="w-6 h-6 mt-1">
                <span>
                    Know your potential at All India level through
                    Narayana All-India Test Series
                </span>
            </li>

            <li class="flex items-start gap-3">
                <img src="{{ asset('/assets/icons/tickicon.png') }}" class="w-6 h-6 mt-1">
                <span>Systematic and regular testing systems</span>
            </li>

        </ul>
    </div>


    <!-- RIGHT LIST -->
    <div class="font-medium text-2xl">
        <ul class="space-y-6">

            <li class="flex items-start gap-3">
                <img src="{{ asset('/assets/icons/tickicon.png') }}" class="w-6 h-6 mt-1">
                <span>Well-defined and planned academic year</span>
            </li>

            <li class="flex items-start gap-3">
                <img src="{{ asset('/assets/icons/tickicon.png') }}" class="w-6 h-6 mt-1">
                <span>Up to 90% scholarship through NACST</span>
            </li>

            <li class="flex items-start gap-3">
                <img src="{{ asset('/assets/icons/tickicon.png') }}" class="w-6 h-6 mt-1">
                <span>Feedback and Micro level analysis</span>
            </li>

            <li class="flex items-start gap-3">
                <img src="{{ asset('/assets/icons/tickicon.png') }}" class="w-6 h-6 mt-1">
                <span>Review classes for the entire syllabus</span>
            </li>

            <li class="flex items-start gap-3">
                <img src="{{ asset('/assets/icons/tickicon.png') }}" class="w-6 h-6 mt-1">
                <span>
                    All India Test Series + Grand Success Package
                </span>
            </li>

        </ul>
    </div>

</div>

    </div>
</section>

<section>
    <div class="flex justify-center py-16 bg-[#f5f5f5]">

    <!-- RED CARD -->
    <div class="bg-[#D62828] text-white rounded-2xl px-10 py-10 w-full  max-w-6xl shadow-xl">

        <!-- TITLE WITH LINES -->
        <div class="flex items-center justify-center mb-10">

                <!-- LEFT LINE -->
    <div class="flex items-center w-64">
        <div class="w-0 h-0 
                    border-t-[6px] border-t-transparent
                    border-b-[6px] border-b-transparent
                    border-l-[10px] border-l-white">
        </div>
        <div class="flex-1 h-0.5 bg-white"></div>
    </div>

            <h2 class="px-6 text-4xl font-bold tracking-wide">
                Type Of Tests
            </h2>

                <!-- RIGHT LINE -->
    <div class="flex items-center w-64">
        <div class="flex-1 h-0.5 bg-white"></div>
        <div class="w-0 h-0 
                    border-t-[6px] border-t-transparent
                    border-b-[6px] border-b-transparent
                    border-r-[10px] border-r-white">
        </div>
        
    </div>

        </div>

<div class="flex justify-center py-16">

    <!-- RED CARD WITH IMAGE -->
    <div class="relative w-full max-w-5xl">

        <!-- Background Image (icons already inside) -->
         <div class="flex justify-center">
        <img src="{{ asset('/assets/img/bg/Mask group (3).png') }}"
             class=""
             alt="Type Of Tests">
          </div>   

        <!-- TEXT OVERLAY GRID -->
        <div class="absolute -inset-14 grid grid-cols-2 md:grid-cols-3
                    items-end text-center text-white gap-10 px-10">

            <p class="text-2xl font-medium">Weekly Test <br/>(CPT - Common Practise Test)</p>
            <p class="text-2xl font-medium">Subjective Test</p>
            <p class="text-2xl font-medium">All India Test Series</p>
    
            <p class="text-2xl font-medium">Fortnightly Test</p>
            <p class="text-2xl font-medium">Term Exams</p>
            <p class="text-2xl font-medium">Grand Test</p>

        </div>

    </div>

</div>


    </div>

</div>

</section>

  </main>
@endsection