@extends('base')
@section('content')

    <div class="d-flex align-content-stretch flex-wrap">
        @foreach ($restaurantes as $restaurante)
            <div class="card text-center  m-2" style="width: 22rem;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{$restaurante->nome}}</h5>
                    <hr class="text-warning">
                    <div class="flex-grow-1 mb-3  d-flex align-items-center justify-content-center">
                        <p class="card-text">{{$restaurante->descricao}}</p>
                    </div>
                    <div class="text-muted">
                        <p class="mb-0">{{"(".substr($restaurante->telefone,0,2).") ".substr($restaurante->telefone,2,-4)."-".substr($restaurante->telefone,-4)}} </p>
                        <span>{{$restaurante->cidade}} -{{$restaurante->estado}} </span>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a href="/" class="btn btn-sm btn-dark">Ver Cardápios</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
