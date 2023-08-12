<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.auth.header')
</head>
<body>
    <div class="main-wrapper">
        @yield('content')
    </div>
    @include('partials.auth.footer')
</body>
</html>