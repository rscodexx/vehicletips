@extends('layout.menu')

@section('title', 'Acessar sua Conta')
@section('inner', 'Acessar')

@extends('layout.inner')

@section('content')

    <div class="row">

        <div class="login d-flex align-items-center">
            <div class="col-sm-6 col-lg-4 offset-md-4">
                <form action="{{route('user.auth.loginDo')}}" method="post">
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

                        <div class="form-group col-md-12">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" class="form-control" id="email" required>
                        </div>
                        <div class="form-group col-md-12 mt-3 mt-md-0">
                            <label for="password">Senha</label>
                            <input type="password" name="password" class="form-control" id="password" min="8" required>
                        </div>
                        <p class="mt-1">Não possui conta? <a href="{{route('user.auth.register')}}">Registre-se</a></p>

                        <div class="form-check">
                            <input class="form-check-input" name="remember" type="checkbox" value="" id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                                <span class="ms-1">Lembrar-me</span>
                            </label>
                        </div>
                    </div>
                    <div class="text-center mt-5"><button type="submit">Acessar</button></div>
                </form>
            </div>
        </div>

@endsection
