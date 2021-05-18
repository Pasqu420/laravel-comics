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
        <section class="details">
            <div class="containerDetails">
                <div class="talent">
                    <h2>Talent</h2>
                    <ul>
                       <li>
                            <span>Art by:</span>
                            @foreach ($card['artists'] as $artist)
                                <span> {{$artist}} </span>
                                @if ($loop->last)
                                    .
                                @else 
                                    ,
                                @endif
                            @endforeach
                       </li>
                       <li>
                           <span>Written by</span>
                           @foreach ($card['writers'] as $writer)
                               <span> {{$writer}}</span>
                                @if ($loop->last)
                                    .
                                @else 
                                    ,
                                @endif
                           @endforeach
                       </li>
                    </ul>
                </div>
                <div class="specs">
                    <h2>Specs</h2>
                    <ul>
                        <li>
                            <span>Series:</span>
                            <span> {{$card['series']}} </span>
                        </li>
                        <li>
                            <span>U.S. Price:</span>
                            <span> {{$card['price']}} </span>
                        </li>
                        <li>
                            <span>On Sale Date:</span>
                            <span> {{$card['sale_date']}} </span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
@endsection