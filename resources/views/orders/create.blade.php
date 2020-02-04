
@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/order" method="post">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row"><h1>Nueva orden de compra</h1></div>
    
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
                    <div class="col-md-12 text-center py-4"> 
                        <button class="btn btn-primary btn-block">Registrar orden</button>
                    </div>                                    
                </div>
            </div>            
        </form>
    </div>
@endsection