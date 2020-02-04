
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <ul class="list-group">
                    <li class="list-group-item">Nombre: {{ $order->customer_name }} </li>
                    <li class="list-group-item">Email: {{ $order->customer_email }} </li>
                    <li class="list-group-item">Teléfono: {{ $order->customer_mobile }} </li>
                    <li class="list-group-item">Estado: {{ $order->status == 'APROVED' ? 'Aprovado' : 'Rechazado' }} </li>
                    @if ($order->status == 'REJECTED')
                    <li class="list-group-item text-center">
                        <form action="{{ route('neworder') }}">                            
                            <input class="btn btn-warning" type="submit" value="Volver al comienzo" />
                        </form>  
                    </li>                    
                    @endif                                      
                </ul>
            </div>
        </div>
    </div>
@endsection