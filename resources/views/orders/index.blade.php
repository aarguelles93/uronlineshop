@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="py-4">Histórico de órdenes</h1>
        <div class="row pb-3">         
        @foreach ($orders as $indexKey => $order)        
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">#{{ $order->id }} </h5>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <strong>Estado:</strong> 
                                @if ($order->status == 'CREATED')
                                <p class="text-ocre font-weight-bold">Creada/Pendiente</p>
                                @elseif($order->status == 'PAYED')
                                <p class="text-sucess font-weight-bold">Pagada</p>
                                @else
                                <p class="text-danger font-weight-bold">Rechazada</p>
                                @endif
                            </li>
                            <li class="list-group-item">
                                <strong>Producto:</strong> 
                                <p>{{ $order->article->description }}</p>
                            </li>
                            <li class="list-group-item">
                                <strong>Costo:</strong>
                                <p>{{ $order->article->cost }}</p>
                            </li>
                            <li class="list-group-item">
                                <strong>Fecha de solicitud:</strong>
                                <p>{{ $order->created_at }}</p>
                            </li>
                            <li class="list-group-item">
                                <strong>Nombre del usuario:</strong>
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
        @if (($indexKey+1) % 3== 0)
        </div>
        <div class="row pb-3">
        @endif        
        @endforeach
        </div>
    </div>
@endsection