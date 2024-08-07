@extends('admin.layouts.app')

@section('content')
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

    <div class="row mb-5">
        <div class="col-12 text-center">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="categoriesDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    Categorías Disponibles
                </button>
                <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                    @foreach($types as $type)
                        <li><a class="dropdown-item" href="{{ url('types/' . $type->id) }}">{{ $type->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-12">
            <form action="{{ route('web.candies.index') }}" method="GET" class="d-flex">
                <input class="form-control me-2" type="search" name="search" placeholder="Buscar por nombre de artículo" aria-label="Buscar">
                <button class="btn btn-outline-primary" type="submit">Buscar</button>
            </form>
        </div>
    </div>

    <div>
        <a href="{{route('web.candies.cart')}}" class="btn btn-warning" style="margin-bottom: 10px">
            <i class="fas fa-shopping-cart"></i> Carrito ({{count(session('cart',[]))}})
            </a>
    </div>

    @if (session()->has('success'))
        <div class="alert success">
            {{ session()->get('success') }}
        </div>
    @endif

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
                    <div class="card h-100 text-center">
                        <img src="/storage/{{ $candie?->image?->src }}" class="card-img-top mx-auto d-block" alt="{{ $candie->name }}" style="width: 200px">
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
@endsection
