<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

@include('partials.header')

@yield('content')

@include('partials.footer')



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

@stack('scripts')
</body>
</html>
