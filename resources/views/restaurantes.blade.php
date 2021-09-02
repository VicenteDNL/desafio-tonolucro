@extends('base')
@section('content')

    <div class="d-flex align-content-stretch flex-wrap">
        @foreach ($restaurantes as $restaurante)
            <div class="card text-center  m-2" style="width: 22rem;">
                <div class="card-body pb-1 d-flex flex-column">
                    <h5 class="card-title">{{$restaurante->nome}}</h5>
                    <hr class="text-warning mt-0 ">
                    <div class="flex-grow-1 mb-3  d-flex align-items-center justify-content-center">
                        <p class="card-text">{{$restaurante->descricao}}</p>
                    </div>
                    <div class="text-muted fw-light">
                        <p class="mb-0 ">
                            @if ($restaurante->telefone!=null)
                                {{"(".substr($restaurante->telefone,0,2).") ".substr($restaurante->telefone,2,-4)."-".substr($restaurante->telefone,-4)}}
                            @else
                                sem telefone
                            @endif
                        </p>
                        <span>
                            @if ($restaurante->cidade!=null && $restaurante->estado!=null)
                                {{$restaurante->cidade}} -{{$restaurante->estado}} </span>
                            @else
                                sem endereço
                            @endif
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{route('cardapios.index', ['restaurante'=>$restaurante->id])}}" class="btn btn-sm btn-dark">Ver Cardápios</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
