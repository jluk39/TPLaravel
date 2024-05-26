<!DOCTYPE html>
<html lang="es">

    @include('admin.partials.head')

<body>

    @include('admin.partials.nav')

   <h1>Caramelos</h1>

    <ul>
        <li><a href="{{ route('web.candies.candy', ['id' => 1]) }}">Caramelo 1</li> 
        <li><a href="{{ route('web.candies.candy', ['id' => 2]) }}">Caramelo 2</li>
        <li><a href="{{ route('web.candies.candy', ['id' => 3]) }}">Caramelo 3</li>
    </ul>

</body>

    @include('admin.partials.footer')
</html>