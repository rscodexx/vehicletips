@extends('layout.menu')

@section('title', 'Registre-se')
@section('inner', 'Registrar')

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
                        <div class="form-group col-md-12 mt-3 mt-md-0">
                            <label for="name">Repita a senha</label>
                            <input type="password" name="password_confirmation" class="form-control" required>
                        </div>
                        <p class="mt-1">Já possui conta? <a href="">Acesse</a></p>
                    </div>
                    <div class="text-center mt-5"><button type="submit">Registrar</button></div>
                </form>
            </div>
        </div>

    </div>

@endsection
