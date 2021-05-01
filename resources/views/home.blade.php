<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Vehicle Tips - Dicas de veículos</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/favicon.png')}}assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: eNno - v4.1.0
    * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="#">VEHICLE TIPS</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Início</a></li>
                <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
                <li><a class="nav-link scrollto" href="#tips">Dicas</a></li>
                @if(Auth::user())
                    <li><a class="getstarted scrollto" href="{{route('user.auth.logout')}}">SAIR</a></li>
                @else
                <li><a class="getstarted scrollto" href="{{route('user.auth.login')}}">ACESSAR</a></li>
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->


<!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    @if(Auth::user())
                        <h1>Seja bem vindo, {{Auth::user()->name}}</h1>
                        <h2>Veja todas as dicas que temos para veículos.</h2>
                        <div class="d-flex">
                            <a href="{{route('user.tips')}}" class="btn-get-started scrollto me-2"> Todas as dicas</a>
                            <a href="{{route('user.tips.my')}}" class="btn-get-started scrollto me-2"> Minhas Dicas</a>
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
                        Então o que está esperando? @if(Auth::user()) Adicione uma <a href="">dica</a> @else Faça o seu <a href="{{route('user.auth.register')}}">cadastro</a> @endif e contribua com a nossa comunidade.
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
                    <p>Para ver todas as dicas, <a href="">clique aqui</a></p>
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
                                <h4>em {{date('d:m:Y', strtotime($tip->updated_at))}} às {{date('H:m:i', strtotime($tip->updated_at))}}</h4>
                            </div>

                        </div><!-- End testimonial item -->
                    @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">

        <div class="container">

            <div class="row  justify-content-center">
                <div class="col-lg-6">
                    <h3>Vehicle Tips</h3>
                    <p>Siga e acompanhe a gente pelas redes sociais, seja o primeiro a saber de todas as novidades.</p>
                </div>
            </div>

            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>

        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            2021 &copy; Copyright <strong><span>Vehicle Tips</span></strong>. Todos os direitos reservados
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/enno-free-simple-bootstrap-template/ -->
            Sistema feito por <a href="https://rscode.com.br/">RS CODE</a> e design por <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
