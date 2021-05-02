@extends('layout.site')

@section('title', 'Registre-se')
@section('inner', 'Registrar')

@extends('layout.inner')

@section('content.inner')

    <div class="row">

        <div class="login d-flex align-items-center">
            <div class="col-sm-6 col-lg-4 offset-md-4">
                <form action="{{route('user.auth.registerDo')}}" method="post">
                    @csrf
                    <div class="row">

                        <div class="form-group col-md-12">

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </div>
                            @endif

                            <label for="name">Nome</label>
                            <input type="text" name="name" class="form-control" min="4" id="name" value="{{old('name')}}" required>

                            <label for="email">E-mail</label>
                            <input type="email" name="email" class="form-control" value="{{old('email')}}" id="email" required>
                        </div>
                        <div class="form-group col-md-12 mt-3 mt-md-0">
                            <label for="password">Senha</label>
                            <input type="password" name="password" class="form-control" min="8" id="password" required>
                        </div>
                        <div class="form-group col-md-12 mt-3 mt-md-0">
                            <label for="password_confirmation">Repita a senha</label>
                            <input type="password" name="password_confirmation" min="8" class="form-control" id="password_confirmation" required>
                        </div>
                        <p class="mt-1">Já possui conta? <a href="{{route('user.auth.login')}}">Acesse</a></p>
                    </div>
                    <div class="text-center mt-5"><button type="submit">Registrar</button></div>
                </form>
            </div>
        </div>

    </div>

@endsection
