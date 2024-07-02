@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>Carrito de Compras</h2>
            <div class="text-end">
                <a class="btn btn-primary btn-lg" href="{{ route('web.candies.index') }}" role="button">
                    <i class="fas fa-arrow-left"></i> Volver a Inicio
                </a>
            </div>
            @if($candies->isEmpty())
                <p>Aún no tenés productos en tu changuito.</p>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($candies as $candy)
                            <tr>
                                <td>
                                    <img src="/storage/{{ $candy->image->src }}" class="img-fluid" alt="{{ $candy->name }}" style="max-width: 100px;">
                                </td>
                                <td>{{ $candy->name }}</td>
                                <td>${{ number_format($candy->price, 2, ',', '.') }}</td>
                                <td>
                                    <form action="{{ route('web.candies.remove', $candy->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash"></i> Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" class="text-right"><strong>Total</strong></td>
                            <td colspan="2">${{ number_format($total, 2, ',', '.') }}</td>
                        </tr>
                    </tfoot>
                </table>
                <form action="{{ route('web.candies.buy') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-shopping-cart"></i> Comprar
                    </button>
                </form>
            @endif
        </div>
    </div>
@endsection