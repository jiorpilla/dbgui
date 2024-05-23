<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="body-wrapper dashboard">
    @include('main::partials.sidebar')
    <main class="main-wrapper">
        @include('main::partials.header')
        @include('main::partials.breadcrumbs')
        <div class="main-content row g-4">
            @yield('content')
        </div>
        @include('main::partials.footer')
    </main>
</div>

@yield('page_script')
</body>
</html>
