@extends('templates.main')

@section('title', 'Matilda Education')
@section('description', '')
@section('keywords', '')
@section('extra-css')

@endsection

@section('content')

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-color: #777776">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7">
                    <h2 class="mb-0">MATILDA EDUCATION</h2>
                    <p>— это Digital образование от первого в своем роде Digital-агентства в Праге.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="custom-breadcrumns border-bottom">
        <div class="container">
            <a href="/">Главная</a>
            <span class="mx-3 icon-keyboard_arrow_right" style="color:black"></span>
            <span class="current">Курсы</span>
        </div>
    </div>

    <div class="site-section">
        <div class="container  wow slideInLeft">
            <div class="row">
                @foreach($courses as $item)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                            <a href="{{ route('course', $item->id) }}"><img src="{{ $item->photo }}" alt="Image" class="img-fluid"></a>
                            <div class="price">${{ $item->price }}</div>
                            <div class="category"><h3>Инста контент</h3></div>
                        </figure>
                        <div class="course-1-content pb-4">
                            <h2>{{ $item->title }}</h2>
                            <div class="rating text-center mb-3">
                                <span class="icon-star2 text-warning"></span>
                                <span class="icon-star2 text-warning"></span>
                                <span class="icon-star2 text-warning"></span>
                                <span class="icon-star2 text-warning"></span>
                                <span class="icon-star2 text-warning"></span>
                            </div>
                            <p class="desc mb-4">{!! mb_strimwidth($item->description, 0, 96, "...") !!}</p>
                            <p><a href="{{ route('course', $item->id) }}" class="btn btn-primary rounded-0 px-4">Учавствовать в курсе</a></p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection


@section('extra-js')

@endsection
