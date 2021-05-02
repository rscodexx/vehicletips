
@extends('layout.site')

@section('title', 'Vehicle Tips')

@section('content')
<!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    @if(Auth::user())
                        <h1>Seja bem vindo, {{Auth::user()->name}}</h1>
                        <h2>Veja todas as dicas que temos para veículos.</h2>
                        <div class="mt-2">
                            <a href="{{route('user.tips')}}" class="btn-get-started scrollto me-2 mb-2"> Todas as dicas</a>
                            <a href="{{route('user.tips.my')}}" class="btn-get-started scrollto me-2 mb-2"> Minhas Dicas</a>
                            <a href="{{route('user.tips.create')}}" class="btn-get-started scrollto me-2"> Cadastrar Dica</a>
                        </div>
                    @else
                    <h1>Dicas para veículos</h1>
                    <h2>Aqui você consegue dicas preciosas antes de comprar um veículo.</h2>
                    <div class="d-flex">
                        <a href="{{route('user.auth.register')}}" class="btn-get-started scrollto">Registre-se</a>
                    </div>
                    @endif
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="{{asset('assets/img/hero-img.svg')}}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

<main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container">


        </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset('assets/img/about.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>Somos uma comunidade!</h3>
                    <p class="fst-italic">
                        Para que o nosso site funcione, dependemos exclusivamente de nossos usuários, pois quanto mais usuários temos cadastrados, mais dicas temos.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> Todos os seus dados estão seguros e protegidos.</li>
                        <li><i class="bi bi-check-circle"></i> Não possuímos anúncios</li>
                        <li><i class="bi bi-check-circle"></i> Site pode ser visualizado em qualquer plataforma</li>
                        <li><i class="bi bi-check-circle"></i> Site sem fins lucrativos</li>
                    </ul>
                    <p>
                        Então o que está esperando? @if(Auth::user()) Adicione uma <a href="{{route('user.tips.create')}}">dica</a> @else Faça o seu <a href="{{route('user.auth.register')}}">cadastro</a> @endif e contribua com a nossa comunidade.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="{{$usersCount}}" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Membros</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="{{$motocycleCount}}" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Dicas de Motos</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="{{$carCount}}" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Dicas de Carros</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="{{$truckCount}}" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Dicas de Caminhões</p>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="tips" class="testimonials section-bg">
        <div class="container">

            <div class="section-title">
                <h2>ÚLTIMAS DICAS</h2>
                @if(Auth::user())
                    <p>Para ver todas as dicas, <a href="{{route('user.tips')}}">clique aqui</a></p>
                @else
                    <p>Para ver todas as dicas, é necessário <a href="{{route('user.auth.login')}}">acessar</a> nosso site.</p>
                @endif
            </div>

            <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    @foreach($tipsList as $tip)
                        <div class="swiper-slide">

                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    {{$tip->body}}
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <h3>{{$tip->vehicle}}</h3>
                                <h4>{{$tip->users->name}}</h4>
                                <h4>em {{date('d:m:Y', strtotime($tip->updated_at))}} às {{date('H:i:s', strtotime($tip->updated_at))}}</h4>
                            </div>

                        </div><!-- End testimonial item -->
                    @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

</main><!-- End #main -->
@endsection


