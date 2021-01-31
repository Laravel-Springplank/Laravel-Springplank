@extends('layouts.app')

@section('content')
    <section id="homepage">
        <div class="container">
            <div class="welcome-header">
                <div class="row align-items-center">
                    <div data-aos="fade-up" class="col-lg-6 aos-init aos-animate">
                        <h1 style="font-size:60px" class="page-header-title">Laravel Springplank</h1>
                        <h1>Deltion College project</h1>
                        <h1 class="mb-4">Hoofdpagina</h1>
                        <p style="font-size: 20px" class="page-header-text mb-2">Subscribe to our newsletter</p>
                        <input class="subInput " placeholder="name@example.com" type="text">
                        <a class="btn btn-lg mr-3 font-weight-500 subBtn" >Get started</a>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="50" class="col-lg-6 d-none d-lg-block aos-init aos-animate">
                        <img width="100%" src="{{ asset('images/iphone12.svg') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="blogpost">
        <div class="container">
            <h1>Blog dingetjes</h1>
        </div>
    </section>
    <section id="footer">
        <div class="container">
            <div class="jumbotron">
                <div class="row">
                    <div data-aos="fade-up" class="col-lg-6 aos-init aos-animate">
                        <h1 style="font-size: 50px">Laravel Springplank</h1>
                        <h2 style="opacity: 0.6">Deltion College project</h2>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="50" class="col-lg-6 aos-init aos-animate">
                        <a class="btn btn-lg mr-3 contactBtn">Contact</a>
                        <a class="btn btn-lg ml-3 backBtn">Back to top</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
