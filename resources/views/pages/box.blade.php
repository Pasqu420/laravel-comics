@extends('layouts.main')
@section('content')
    <main class="mainCard">
        <section class="cover">
            <div class="coverThumb">
                <img src=" {{$card['thumb']}} " alt="">
                <p>VIEW GALLERY</p>
            </div>
        </section>
        <section class="contentCard">
            <div class="container">
                <div class="infoCard">
                    <h1> {{$card['title']}} </h1>
                    <div class="price">
                        <div>
                            <p>U.S Price {{$card['price']}}</p>
                            <span>AVAILABLE</span>
                        </div>
                        <a href="#">
                            <span>Check Availability<i class="fas fa-caret-down"></i></span>
                        </a>
                    </div>
                    <p class="desc"> {{$card['description']}} </p>
                </div>
                <div class="ad">
                    <p>ADVERTISEMENT</p>
                    <img src=" {{asset('/storage/assets/adv.jpg')}} " alt="">
                </div>
            </div>
        </section>
    </main>
@endsection