<!DOCTYPE html>
<html lang="es">
    @include('admin.partials.head')

    <body>

        @include('admin.partials.nav')

        <div class="container mt-5">
            <div class="row">
                @foreach($candies as $candie)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="{{ $candie->image_url}}" class="card-img-top" alt="{{ $candie->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $candie->name }}</h5>
                                <p class="card-text card-description">{{ $candie->description }}</p>
                                <p class="card-text card-price"><strong>${{ number_format($candie->price, 2, ',', '.') }}</strong></p>
                                <a href="{{ route('web.candies.candy', $candie->id) }}" class="btn btn-comprar btn-primary">Comprar</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    
            <div class="d-flex justify-content-center">
                {{ $candies->links() }}
            </div>
        </div>

        @include('admin.partials.footer')

    </body>
</html>
