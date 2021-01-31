@extends('layouts.app')

@section('content')
    <section id="homepage">
        <div class="container">
            <div class="welcome-header">
                <div class="row align-items-center">
                    <div data-aos="fade-up" class="col-lg-6 aos-init aos-animate">
                        <h1 style="font-size:60px" class="page-header-title">Contact</h1>
                        <h2 style="margin-bottom: 190px">Fill up the form and our Team will get back
                            to you within 24 hours.
                        </h2>

                        <div class="info-card mb-lg-3 row">
                            <svg class="" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                                <path id="Icon_awesome-phone-alt" data-name="Icon awesome-phone-alt" d="M34.973,25.439,27.1,22.064a1.687,1.687,0,0,0-1.969.485L21.641,26.81A26.062,26.062,0,0,1,9.183,14.351l4.261-3.488A1.683,1.683,0,0,0,13.929,8.9L10.554,1.02A1.7,1.7,0,0,0,8.62.043L1.308,1.73A1.688,1.688,0,0,0,0,3.375,32.621,32.621,0,0,0,32.625,36a1.687,1.687,0,0,0,1.645-1.308l1.687-7.313a1.708,1.708,0,0,0-.985-1.941Z" transform="translate(0 0)" fill="#5468ff"></path>
                            </svg>
                            <h2 class="ml-lg-5">+31 6 12345678</h2>
                        </div>
                        <div class="info-card mb-lg-3 row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40.494" height="32.395" viewBox="0 0 40.494 32.395">
                                <path id="Icon_material-email" data-name="Icon material-email" d="M39.445,6H7.049A4.044,4.044,0,0,0,3.02,10.049L3,34.346A4.061,4.061,0,0,0,7.049,38.4h32.4a4.061,4.061,0,0,0,4.049-4.049v-24.3A4.061,4.061,0,0,0,39.445,6Zm0,8.1-16.2,10.123L7.049,14.1V10.049l16.2,10.123,16.2-10.123Z" transform="translate(-3 -6)" fill="#5468ff"></path>
                            </svg>

                            <h2 class="ml-lg-5">info@spingplank.nl</h2>
                        </div>
                        <div class="info-card mb-lg-3 row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26.18" height="37.4" viewBox="0 0 26.18 37.4">
                                <path id="Icon_material-location-on" data-name="Icon material-location-on" d="M20.59,3A13.08,13.08,0,0,0,7.5,16.09c0,9.818,13.09,24.31,13.09,24.31S33.68,25.908,33.68,16.09A13.08,13.08,0,0,0,20.59,3Zm0,17.765a4.675,4.675,0,1,1,4.675-4.675A4.677,4.677,0,0,1,20.59,20.765Z" transform="translate(-7.5 -3)" fill="#5468ff"></path>
                            </svg>
                            <h2 class="ml-lg-5">Teststraat 12 Ergens</h2>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="50" class="col-lg-6 aos-init aos-animate">
                        <div class="container input-field">
                            <h3 class="mt-4">Your name</h3>
                            <input class="input-field-input mb-4" type="text" placeholder="Enter your name here...">

                            <h3>Mail</h3>
                            <input class="input-field-input mb-4" type="text" placeholder="Enter your mail here...">

                            <h3>Message</h3>
                            <textarea class="input-field-input-message mb-4" rows="12" cols="57" placeholder="Message"></textarea>

                            <a class="btn btn-lg sendBtn mb-4">Send message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
