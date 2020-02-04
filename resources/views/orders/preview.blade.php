
@extends('layouts.app')

@section('content')
    <div class="container">        
        <div class="row">
            <div class="col-8 offset-2">
                <h1 class="py-4">Confirmación de la orden</h1>                
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
                @if ($order->status == 'CREATED')
                    <div class="text-center pt-4">
                        <form action="/order/processPayment/{{ $order->id }}" method="post">
                            @csrf
                            <input class="btn btn-warning" type="submit" value="Proceder al pago" />
                        </form>  
                    </div>
                @endif       
            </div>
        </div>
    </div>
@endsection