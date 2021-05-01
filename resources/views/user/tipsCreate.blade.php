@extends('layout.menu')

@section('title', 'Cadastrar Dica')
@section('inner', 'Cadastrar')

@extends('layout.inner')

@section('content')

    <div class="row">

        <div class="tips">

            <div class="tips d-flex align-items-center">
                    <form action="{{route('user.tips.tipsCreateDo')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </div>
                                @endif

                                <div class="col-md-6">
                                    <label for="title">Título</label>
                                    <input type="text" name="title" min="4" class="form-control" id="title" value="{{old('title')}}" required>
                                </div>
                            </div>

                            <div class="form-group col-md-3 mt-3">
                                <select name="type" class="form-select">
                                    <option value="invalid">Selecione o tipo</option>
                                    <option value="car">Carro</option>
                                    <option value="motocycle">Moto</option>
                                    <option value="truck">Caminhão</option>
                                </select>
                            </div>

                            <div class="form-group col-md-3 mt-3">
                                <select name="vehicle" class="form-select">
                                    <option value="invalid">Selecione o Veículo</option>
                                    @foreach($vehicles as $vehicle)
                                        <option value="{{$vehicle->name}}">{{$vehicle->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-3 mt-3">
                                <select name="brand" class="form-select">
                                    <option value="invalid">Selecione a marca</option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->name}}">{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-3 mt-3">
                                <select name="version" class="form-select">
                                    <option value="invalid">Selecione a Versão</option>
                                    @foreach($verions as $version)
                                        <option value="{{$version->name}}">{{$version->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <textarea name="body" class="form-group mt-5" min="10" required></textarea>

                            <div class="form-group col-md-2 mt-5">
                                <button type="submit">Cadastrar</button>
                            </div>


                </div>
                </form>
            </div>


@endsection
