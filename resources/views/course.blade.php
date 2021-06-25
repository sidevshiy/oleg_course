@extends('templates.main')

@section('title', 'Matilda Education')
@section('description', '')
@section('keywords', '')
@section('extra-css')

@endsection

@section('content')
    <div class="hero-slide owl-carousel site-blocks-cover">
        <div class="intro-section" style="background-image: url('{{ asset('images/hero_1.jpg') }}');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                        <h1>Дайте мне фотки про курс сюда пожалуйста!</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro-section" style="background-image: url('{{ asset('images/hero_1.jpg') }}');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                        <h1>Много красивых фото!</h1>
                    </div>
                </div>
            </div>
        </div>

    </div>





    <div class="custom-breadcrumns border-bottom">
        <div class="container">
            <a href="/">Главная</a>
            <span class="mx-3 icon-keyboard_arrow_right" style="color:black"></span>
            <a href="{{ route('courses') }}">Курсы</a>
            <span class="mx-3 icon-keyboard_arrow_right" style="color:black"></span>
            <span class="current">{{ $course->title }}</span>
        </div>
    </div>

    <div class="site-section" style="color:white;
    background-color: #3c3c3b;
    background-repeat-x: no-repeat;
    background-position-x: center;
    backdrop-filter: none;
    background-clip: unset;
    background-size: cover;
    background-attachment: fixed;
z-index: -999999;
">
        <div class="container  wow slideInLeft animated">
            <div class="row">
                <div class="col-md-5 mb-4 py-4" style="background-color: rgb(0,0,0,0.5);
     ">
                    <p>
                        <iframe width="450" height="215" src="{{ $course->youtube_link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </p>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            {!! $course->description !!}
                        </div>
                    </div>
                    <div class="row">

                        <form id="revolutForm" style="width: 100%" action="">
                            <div class="col-md-12 form-group">
                                <label for="username">Вас зовут</label>
                                <input type="text" id="username" class="form-control form-control-lg">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="pword">E-mail</label>
                                <input type="text" id="pword" class="form-control form-control-lg">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="pword">Телефон</label>
                                <input type="text" id="phnform" class="form-control form-control-lg">
                            </div>
                            <div class="col-12">
                                <input type="submit" value="Оставить заявку" class="btn btn-primary btn-lg px-5">
                            </div>
                        </form>
                    </div>



                </div>
                <div class="  col-md-5 mb-4 py-5  ml-auto align-self-center" style="background-color: rgb(0,0,0,0.5);
     ">
                    <h2 class="section-title-underline mb-5">
                        <span>Course Details</span>
                    </h2>

                    <p><strong class="text-white d-block">Teacher:</strong> {{ $course->teacher }}</p>
                    <p class="mb-5"><strong class="text-white d-block">Hours:</strong> {{ $course->from }} &mdash; {{ $course->to }}</p>
                    {!! $course->text !!}
                    {{--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At itaque dolore libero corrupti! Itaque, delectus?</p>
                    <p>Modi sit dolor repellat esse! Sed necessitatibus itaque libero odit placeat nesciunt, voluptatum totam facere.</p>--}}

                    <ul class="ul-check primary list-unstyled mb-5">
                        <li>Lorem ipsum dolor sit amet consectetur</li>
                        <li>consectetur adipisicing  </li>
                        <li>Sit dolor repellat esse</li>
                        <li>Necessitatibus</li>
                        <li>Sed necessitatibus itaque </li>
                    </ul>

                    <p>
                        <a href="#" class="btn btn-primary rounded-0 btn-lg px-5">БЕРУ!</a>
                    </p>

                </div>
            </div>
        </div>
    </div>
@endsection


@section('extra-js')

@endsection
