<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<!-- Head -->
@include('layout.head')

<body>
<!-- Navigation Bar -->
@include('layout.navbar')

<div id="web">
    @yield('content')
</div>

<!-- Footer -->
@include('layout.footer')

<!-- Scripts -->
@include('layout.scripts')
</body>
</html>
