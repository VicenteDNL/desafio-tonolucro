@extends('base')
@section('content')
    <div class="text-center">
        <h3>{{$restaurante->nome}}</h3>
        <div class="text-muted d-flex flex-column">
            <span>{{$restaurante->endereco}}, {{$restaurante->cidade}} -{{$restaurante->estado}}</span>
            <span> {{"(".substr($restaurante->telefone,0,2).") ".substr($restaurante->telefone,2,-4)."-".substr($restaurante->telefone,-4)}}</span>
        </div>
        <div class="d-flex mb-3">
            {{$restaurante->descricao}}
        </div>
        <div class="d-flex align-content-stretch flex-wrap">
            @foreach ($cardapios as $cardapio)
                <div class="card shadow-sm m-2 border-warning" style="width: 24rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$cardapio->nome}}</h5>
                        <p class="card-text">{{$cardapio->descricao}}</p>
                        <ul class="list-group list-group-flush">
                            @forelse ($cardapio->produtos as $produto)
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col text-start">
                                            <span>{{$produto->nome}}</span>
                                        </div>
                                        <div class="col-auto text-start fw-bolder ">
                                            <span>R$ {{str_replace(".",",",$produto->preco)}}</span>
                                        </div>
                                    </div>
                                    <div class="text-muted text-start">
                                        <small>{{$produto->descricao}}</small>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item"><small>nenhum produto</small></li>
                            @endforelse
                        </ul>
                    </div>
                    <div class="card-footer text-muted">
                        <small>Atualizado em {{ strftime('%d de %b de %Y, %R' , strtotime($cardapio->updated_at))}}</small>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
