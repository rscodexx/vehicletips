@extends('layout.menu')

@section('title', 'Minhas Dicas')
@section('inner', 'Minhas Dicas')

@extends('layout.inner')

@section('content')

    <div class="row">

        <div class="col-md-12">

            @if(Session::has('custom_alert'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success">
                                <span>
                                {{ Session::get('custom_alert') }}
                                    @php
                                        Session::forget('custom_alert');
                                    @endphp
                                </span>
                        </div>
                    </div>
                </div>
            @endif

            <table class="table table-responsive">
                <thead class="table-dark">
                <tr>
                    <th scope="col">Título</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Veículo</th>
                    <th scope="col">Versão</th>
                    <th scope="col">Dica</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tips as $tip)
                    <tr>
                        <th scope="row">{{$tip->title}}</th>
                        <td>{{$tip->users->name}}</td>
                        <td>@if($tip->type == 'car')Carro @elseif($tip->type == 'truck') Caminhão @elseif($tip->type == 'motocycle') Moto @endif</td>
                        <td>{{$tip->brand}}</td>
                        <td>{{$tip->vehicle}}</td>
                        <td>{{$tip->version}}</td>
                        <td>
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tips{{$tip->id}}"><i class="fas fa-eye"></i></button>
                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>

                    <!-- Modal Itens -->
                    <div class="modal fade" id="tips{{$tip->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$tip->title}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{$tip->body}}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
                </tbody>
            </table>

        </div>




@endsection