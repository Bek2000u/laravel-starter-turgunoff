<!DOCTYPE html>
<html lang="ru">
<head>
    @include('admin.classes.head')
</head>
<body>
<div class="app-admin-wrap layout-sidebar-large">
    @include('admin.classes.header')
    @include('admin.classes.sidebar')
    <div class="main-content-wrap sidenav-open d-flex flex-column">
        @yield('main')
        @include('admin.classes.footer')
    </div>
    @include('sweetalert::alert')
    @include('admin.classes.scripts')
{{--    @vite(['resources/js/admin.js'])--}}
{{--    @vite(['resources/js/app.js'])--}}
</div>
</body>
</html>
