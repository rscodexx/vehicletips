@extends('layout.menu')

@section('title', 'Todas as Dicas')
@section('inner', 'Dicas')

@extends('layout.inner')

@section('content')



    <div class="row">

        <div class="tips">

                <div class="tips d-flex align-items-center">
                    <div class="col-sm-6 col-lg-8">
                        <form action="{{route('user.tips.search')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <select name="filter" class="form-select">
                                        <option value="marca">Marca</option>
                                        <option value="modelo">Veículo</option>
                                        <option value="versao">Versão</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 mt-3 mt-md-0">
                                    <input type="text" class="form-control" name="search" id="search" placeholder="Buscar...">
                                </div>
                                <div class="form-group col-md-2 mt-3 mt-md-0">
                                    <button type="submit">Pesquisar</button>
                                </div>
                                <div class="form-group col-md-2 mt-3 mt-md-0">
                                    <button type="submit" formaction="{{route('user.tips')}}">Limpar</button>
                                </div>
                                </div>
                            </div>
                        </form>
                </div>

        </div>

        <div class="col-md-12">

            <div class="table-responsive">

                <table class="table">
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
                            <td><button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tips{{$tip->id}}"><i class="fas fa-eye"></i></button></td>
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

        </div>




@endsection
