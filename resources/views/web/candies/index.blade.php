<!DOCTYPE html>
<html lang="es">
    @include('admin.partials.head')

    <body>

        @include('admin.partials.nav')

        <div class="container mt-5">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="jumbotron text-center custom-jumbotron">
                        <h1 class="display-4">Bienvenido a nuestra Tienda de Golosinas</h1>
                        <p class="lead">Encontrá las mejores marcas a los mejores precios</p>
                        <hr class="my-4">
                        <p>¿Qué esperás para darte tu antojo dulce?</p>
                        <a class="btn btn-primary btn-lg" href="#productos" role="button">Ir a Productos</a>
                    </div>
                </div>
            </div>
        
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="text-center">Sobre Nosotros</h2>
                    <p class="text-center">SugarPop nació en 2021, y desde entonces somos un negocio familiar dedicado a ofrecer una gran variedad de golosinas y productos varios. Nuestro compromiso es brindarte los productos más ricos y frescos para que los disfrutes a pleno.</p>
                </div>
            </div>
        
            <div class="row">
                @if($candies->isEmpty())
                    <div class="col-12">
                        <div class="alert alert-warning text-center" role="alert">
                            Lo sentimos, en este momento no hay productos disponibles.
                        </div>
                    </div>
                @else
                    @foreach($candies as $candie)
                        <div id="productos" class="col-md-4 mb-4">
                            <div class="card h-100">
                                <img src="{{ $candie->image_url }}" class="card-img-top" alt="{{ $candie->name }}" style="width: 200px">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $candie->name }}</h5>
                                    <p class="card-text card-description">{{ $candie->description }}</p>
                                    <p class="card-text card-price"><strong>${{ number_format($candie->price, 2, ',', '.') }}</strong></p>
                                    <a href="{{ route('web.candies.candy', $candie->id) }}" class="btn btn-comprar btn-primary"><i class="fas fa-shopping-basket"></i> Más Info</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        
            <div class="d-flex justify-content-center">
                {{ $candies->links() }}
            </div>

            
        </div>
        <div id="espacio-footer" style="height: 100px;"></div>

        @include('admin.partials.footer')

    </body>
</html>
