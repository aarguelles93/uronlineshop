
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="pb-4">Nueva orden de compra</h1>
        <form action="/order" method="post">
            @csrf
            <div class="row">                
                <div class="col-5"> 
                    <h2>Información personal</h2>   
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label">Nombre:</label>
                   
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                        
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label">Email:</label>
                   
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>                        
        
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                        
                    </div>

                    <div class="form-group row">
                        <label for="mobile" class="col-md-4 col-form-label">Teléfono:</label>
                   
                        <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" autocomplete="mobile" autofocus>
        
                        @error('mobile')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                        
                    </div>
                    {{ Form::hidden('article_id', $article->id) }}
                    <div class="col-md-12 text-center py-4"> 
                        <button class="btn btn-primary btn-block">Registrar orden</button>
                    </div>                                    
                </div>
                <div class="col-5 offset-1">
                    <h2>Descripción del producto</h2>
                    <ul class="list-group pt-4">
                        <li class="list-group-item">
                            <strong>Descripción:</strong>
                            <p>{{$article->description}}</p>
                        </li>
                        <li class="list-group-item">
                            <strong>Costo:</strong>
                            <p>${{$article->cost}}</p>
                        </li>
                    </ul>
                </div>
            </div>            
        </form>
    </div>
@endsection