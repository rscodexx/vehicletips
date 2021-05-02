<body>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>@yield('title')</h2>
                <ol>
                    <li><a href="{{route('home')}}">Início</a></li>
                    <li>@yield('inner')</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            @yield('content.inner')
        </div>
    </section>

</main><!-- End #main -->
</body>
