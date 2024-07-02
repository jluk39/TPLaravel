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

            <!-- Preguntas Frecuentes -->
            <div class="accordion mt-5" id="accordionPanelsStayOpenExample">
                <h5>Preguntas Frecuentes</h5>
                <!-- Pregunta 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            ¿Cuál es el tiempo de entrega?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                        <div class="accordion-body">
                            El tiempo de entrega estimado es de 3 a 5 días hábiles, dependiendo del destino y de la demanda de nuestro servicio de envíos.
                        </div>
                    </div>
                </div>
                <!-- Pregunta 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            ¿Se pueden hacer devoluciones?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                        <div class="accordion-body">
                            Dado a que trabajamos solo con alimentos, no se permiten de voluciones. A excepcion de que el producto llegue en mal estado o vencido.
                        </div>
                    </div>
                </div>
                <!-- Pregunta 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            ¿Qué métodos de pago aceptan?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                        <div class="accordion-body">
                            Aceptamos tarjetas de crédito, débito y efecti por puntos de cobro como RapiPago y pagos por PayPal.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection