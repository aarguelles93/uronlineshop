@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Oops...
    </div>
    <div class="card-body">
        <h5 class="card-title">Algo ha ocurrido durante tu transacción</h5>
        <p class="card-text">Por favor, vuelve a intentarlo nuevamente más tarde.</p>
        <div class="text-center"><a href="{{route('home')}}" class="btn btn-primary">Regresar al inicio</a></div>
    </div>
  </div>
@endsection