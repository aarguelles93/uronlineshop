@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="py-4">Confirmación de la orden</h1>         
        <div class="row">            
            <div class="col-6">
                <h2>Información del artículo</h2>
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>Descripción:</strong>
                        <p>{{ $order->article->description}}</p>
                    </li>
                    <li class="list-group-item">
                        <strong>Costo:</strong>
                        <p>${{$order->article->cost}}</p>
                    </li>
                    <li class="list-group-item">
                        <strong>Estado:</strong>
                        <p class="text-ocre font-weight-bold">Pendiente</p>
                    </li>     
                </ul>
                @if ($order->status == 'CREATED')
                    <div class="text-center pt-4">
                        <form action="/order/processPayment/{{ $order->id }}" method="post">
                            @csrf
                            <input class="btn btn-warning" type="submit" value="Proceder al pago" />
                        </form>  
                    </div>
                @endif       
            </div>
            <div class="col-5 offset-1">                
                <h2>Información personal</h2>                        
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>Nombre:</strong> 
                        <p>{{ $order->customer_name }}</p>
                    </li>
                    <li class="list-group-item">
                        <strong>Email:</strong>
                        <p>{{ $order->customer_email }}</p>
                    </li>
                    <li class="list-group-item">
                        <strong>Teléfono:</strong>
                        <p>{{ $order->customer_mobile }}</p>
                    </li>                                                         
                </ul>
            </div>
        </div>
    </div>
@endsection