<!DOCTYPE html>
<html lang="es">
    @include('admin.partials.head')

    <body>

        @include('admin.partials.nav')

        <div class="container mt-5">
            <div class="row">
                @foreach($candies as $candie)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ $candie->url_imagen }}" class="card-img-top" alt="{{ $candie->nombre }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $candie->nombre }}</h5>
                                <p class="card-text">{{ $candie->descripcion }}</p>
                                <p class="card-text"><strong>Precio: ${{ $candie->precio }}</strong></p>
                                <a href="#" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    
            <div class="d-flex justify-content-center">
                {{ $candie->links() }}
            </div>
        </div>

        @include('admin.partials.footer')

    </body>
</html>
