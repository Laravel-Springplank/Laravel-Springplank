{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <div>--}}
{{--        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}--}}
{{--    </div>--}}

{{--    @if (session('status'))--}}
{{--        <div>--}}
{{--            {{ session('status') }}--}}
{{--        </div>--}}
{{--    @endif--}}

{{--    @if ($errors->any())--}}
{{--        <div>--}}
{{--            <div>{{ __('Whoops! Something went wrong.') }}</div>--}}

{{--            <ul>--}}
{{--                @foreach ($errors->all() as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}

{{--    <form method="POST" action="{{ route('password.email') }}">--}}
{{--        @csrf--}}

{{--        <div>--}}
{{--            <label>{{ __('Email') }}</label>--}}
{{--            <input type="email" name="email" value="{{ old('email') }}" required autofocus />--}}
{{--        </div>--}}

{{--        <div>--}}
{{--            <button type="submit">--}}
{{--                {{ __('Email Password Reset Link') }}--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--@endsection--}}

@extends('layouts.app')

@section('content')
    <section id="homepage">
        <div class="container">
            <div class="contact-header">
                <div class="row align-items-center">
                    <div data-aos="fade-up" class="col-lg-6 aos-init aos-animate">
                        <h1 style="font-size:60px" class="page-header-title">Wachtwoord vergeten</h1>
                        <h2 style="margin-bottom: 150px">Maak hier uw nieuwe wachtwoord
                            <br>aan.</h2>

                        <div class="mb-lg-3 row">
                            <h4 style="font-size:18px;">Gaat iets fout of heeft een vraag neem gerust contact<br> met ons op.</h4>
                        </div>
                        <div class="info-card mb-lg-3 row">
                            <svg class="" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                                <path id="Icon_awesome-phone-alt" data-name="Icon awesome-phone-alt" d="M34.973,25.439,27.1,22.064a1.687,1.687,0,0,0-1.969.485L21.641,26.81A26.062,26.062,0,0,1,9.183,14.351l4.261-3.488A1.683,1.683,0,0,0,13.929,8.9L10.554,1.02A1.7,1.7,0,0,0,8.62.043L1.308,1.73A1.688,1.688,0,0,0,0,3.375,32.621,32.621,0,0,0,32.625,36a1.687,1.687,0,0,0,1.645-1.308l1.687-7.313a1.708,1.708,0,0,0-.985-1.941Z" transform="translate(0 0)" fill="#5468ff"></path>
                            </svg>
                            <h2 style="font-size: 26px; margin: auto;" class="ml-lg-5">+31 6 12345678</h2>
                        </div>
                        <div class="info-card mb-lg-3 row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40.494" height="32.395" viewBox="0 0 40.494 32.395">
                                <path id="Icon_material-email" data-name="Icon material-email" d="M39.445,6H7.049A4.044,4.044,0,0,0,3.02,10.049L3,34.346A4.061,4.061,0,0,0,7.049,38.4h32.4a4.061,4.061,0,0,0,4.049-4.049v-24.3A4.061,4.061,0,0,0,39.445,6Zm0,8.1-16.2,10.123L7.049,14.1V10.049l16.2,10.123,16.2-10.123Z" transform="translate(-3 -6)" fill="#5468ff"></path>
                            </svg>

                            <h2 style="font-size: 26px; margin: auto;" class="ml-lg-5">info@spingplank.nl</h2>
                        </div>
                        <div class="info-card mb-lg-3 row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26.18" height="37.4" viewBox="0 0 26.18 37.4">
                                <path id="Icon_material-location-on" data-name="Icon material-location-on" d="M20.59,3A13.08,13.08,0,0,0,7.5,16.09c0,9.818,13.09,24.31,13.09,24.31S33.68,25.908,33.68,16.09A13.08,13.08,0,0,0,20.59,3Zm0,17.765a4.675,4.675,0,1,1,4.675-4.675A4.677,4.677,0,0,1,20.59,20.765Z" transform="translate(-7.5 -3)" fill="#5468ff"></path>
                            </svg>
                            <h2 style="font-size: 26px; margin: auto;" class="ml-lg-5">Teststraat 12 Ergens</h2>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="50" class="col-lg-6 aos-init aos-animate">
                        @if ($errors->any())
                            <div>
                                <div>
                                    <h3>{{ __('Whoops! Something went wrong.') }}</h3>
                                </div>

                                @foreach ($errors->all() as $error)
                                    <h4 style="font-size:18px;">{{ $error }}</h4>
                                @endforeach

                            </div>
                        @endif
                        <div class="container input-field">
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <h3 class="mt-4">Your email</h3>
                                <input class="input-field-input mb-4" type="email" name="email" value="{{ old('email') }}" placeholder="Enter your email here..." required autofocus />


                                <button class="btn btn-lg sendBtn mb-4" type="submit">
                                    {{ __('Email Password Reset Link') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

