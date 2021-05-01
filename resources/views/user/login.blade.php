@extends('layout.menu')

@section('title', 'Acessar sua Conta')
@section('inner', 'Acessar')

@extends('layout.inner')

@section('content')

    <div class="row">

        <div class="login d-flex align-items-center">
            <div class="col-sm-6 col-lg-4 offset-md-4">
                <form action="#" method="post" role="form" class="php-email-form">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="name">E-mail</label>
                            <input type="email" name="name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12 mt-3 mt-md-0">
                            <label for="name">Senha</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <p class="mt-1">Não possui conta? <a href="">Registre-se</a></p>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                            <span class="ms-1">Lembrar-me</span>
                        </label>
                    </div>
                    <div class="text-center mt-5"><button type="submit">Acessar</button></div>
                </form>
            </div>
        </div>

@endsection
