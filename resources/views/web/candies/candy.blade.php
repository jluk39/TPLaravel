@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="media">
                <img src="{{ $candie->image_url }}" class="mr-3 img-fluid" alt="{{ $candie->name }}" style="max-width: 300px;">
                <div class="media-body">
                    <h5 class="mt-0">{{ $candie->name }}</h5>
                    <p>{{ $candie->description }}</p>
                    <p class="card-price"><strong>${{ number_format($candie->price, 2, ',', '.') }}</strong></p>
                    <a href="#" class="btn btn-primary"><i class="fas fa-shopping-basket"></i> Añadir Al Carrito</a>
                </div>
            </div>

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


