@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="py-4">Información de la orden</h1>
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
                        @if ($order->status == 'PAYED')
                            <p class="text-success">Abrobada</p>
                        @else
                            <p class="text-danger">Rechazada</p>
                        @endif                        
                    </li>
                </ul>
                @if ($order->status == 'REJECTED')
                <div class="text-center pt-4">
                    <form action="{{ route('home') }}">                            
                        <input class="btn btn-warning" type="submit" value="Volver al comienzo" />
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