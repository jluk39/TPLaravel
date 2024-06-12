<!DOCTYPE html>
<html lang="es">
<head>
    @include('admin.partials.head')
</head>
<body>
    @include('admin.partials.nav')
    
    <div class="container mt-5">
        @yield('content')
    </div>
    
    <div id="espacio-footer" style="height: 25px;"></div>
    @include('admin.partials.footer')
</body>
</html>