
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nombre: {{ $order->customer_name }} </li>
                    <li class="list-group-item">Email: {{ $order->customer_email }} </li>
                    <li class="list-group-item">Teléfono: {{ $order->customer_mobile }} </li>
                    @if ($order->status == 'CREATED')
                    <li class="list-group-item text-center">
                        <form action="/order/processPayment/{{ $order->id }}" method="post">
                            @csrf
                            <input class="btn btn-warning" type="submit" value="Proceder al pago" />
                        </form>  
                    </li>
                    @endif                                      
                </ul>
            </div>
        </div>
    </div>
@endsection