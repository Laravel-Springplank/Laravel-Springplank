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
                        <a class="btn btn-lg mr-3 font-weight-500 subBtn">Get started</a>
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
                        <a class="btn btn-lg mr-3 contactBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28.969" height="25.75" viewBox="0 0 28.969 25.75">
                                <path id="Icon_awesome-mail-bulk" data-name="Icon awesome-mail-bulk" d="M8.047,22.531c-1.287,0-2.575-1.127-3.219-1.609C1.609,18.669.644,17.864,0,17.381v6.759A1.61,1.61,0,0,0,1.609,25.75H14.484a1.61,1.61,0,0,0,1.609-1.609V17.381c-.644.483-1.609,1.288-4.828,3.541C10.622,21.4,9.334,22.531,8.047,22.531Zm6.438-9.656H1.609A1.61,1.61,0,0,0,0,14.484v.8c1.288.966,1.127.966,5.794,4.345.483.322,1.448,1.288,2.253,1.288s1.77-.966,2.253-1.127c4.667-3.38,4.506-3.38,5.794-4.345v-.966A1.61,1.61,0,0,0,14.484,12.875ZM27.359,8.047H11.266A1.61,1.61,0,0,0,9.656,9.656v1.609h4.828a3.223,3.223,0,0,1,3.2,2.908l.015-.011v6.759h9.656a1.61,1.61,0,0,0,1.609-1.609V9.656A1.61,1.61,0,0,0,27.359,8.047ZM25.75,14.484H22.531V11.266H25.75ZM8.047,9.656a3.222,3.222,0,0,1,3.219-3.219H22.531V1.609A1.61,1.61,0,0,0,20.922,0H4.828A1.61,1.61,0,0,0,3.219,1.609v9.656H8.047Z" fill="#fff"/>
                            </svg>
                            Contact
                        </a>
                        <a class="btn btn-lg ml-3 backBtn">Back to top</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
