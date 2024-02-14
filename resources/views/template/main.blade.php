<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>

<x-navbar/>

<x-sidebar/>

<div class="p-4 sm:ml-64">
    @yield('content')


</div>

<x-footer/>




@vite('resources/js/app.js')

@yield('script')
{{--Flowbite CDN--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>

