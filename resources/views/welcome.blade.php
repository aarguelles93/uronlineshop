
@extends('layouts.app')

@section('additional_head')
<!-- Styles -->
<style>
    html, body {             
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }
    .quarter-height {
        height: 25vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
@endsection
@section('content')

<div class="flex-center position-ref quarter-height">
    <div class="content">
        <div class="title m-b-md d-flex">
            <div class="div"><img src="/svg/carrito-de-compras.svg" alt="" style="height:80px; border-right:1px solid;" class="pr-3"></div>
            {{-- Iconos diseñados por <a href="https://www.flaticon.es/autores/wanicon" title="wanicon">wanicon</a> from <a href="https://www.flaticon.es/" title="Flaticon"> www.flaticon.es</a> --}}
            <span class="text-dark align-text-bottom pl-3">urOnlineShop</span>
        </div>        
        
    </div>
</div>
<div class="container">
    <div class="row">
    @foreach ($articles as $article)
        <div class="col-sm-6 pb-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title"><strong>{{$article->description}}</strong></h5>
                    <p class="card-text">${{$article->cost}}</p>
                    <a href="/order/create?article={{ $article->id }}" class="btn btn-light">Comprar</a>
                </div>
            </div>
        </div>                        
    @endforeach
    </div>
</div>
  
@endsection
