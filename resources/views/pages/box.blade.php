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
                            <span class="by">Art by:</span>
                            <p>
                                @foreach ($card['artists'] as $artist)
                                    <span> {{$artist}} </span>
                                    @if ($loop->last)
                                        .
                                    @else 
                                        ,
                                    @endif
                                @endforeach
                            </p>
                       </li>
                       <li>
                           <span class="by">Written by:</span>
                           <p>
                               @foreach ($card['writers'] as $writer)
                                   <span class="writer"> {{$writer}} </span>
                                    @if ($loop->last)
                                        .
                                    @else 
                                        ,
                                    @endif
                               @endforeach
                           </p>
                       </li>
                    </ul>
                </div>
                <div class="specs">
                    <h2 >Specs</h2>
                    <ul>
                        <li>
                            <span class="by">Series:</span>
                            <span class="specsSeries"> {{$card['series']}} </span>
                        </li>
                        <li>
                            <span class="by">U.S. Price:</span>
                            <span class="specsPrice"> {{$card['price']}} </span>
                        </li>
                        <li>
                            <span class="by">On Sale Date:</span>
                            <span class="specsSale"> {{$card['sale_date']}} </span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="info">
          
            <div>
                <p>DIGITAL COMICS</p>
                <img src="/storage/assets/buy-comics-digital-comics.png" alt="">
            </div>
            
            <div>
                <p>SHOP DC</p>
                <img src="/storage/assets/buy-comics-merchandise.png" alt="">
            </div>
            
            <div>
                <p>COMIC SHOP LOCATOR</p>
                <img src="/storage/assets/buy-comics-subscriptions.png" alt="">
            </div>

            <div>
                <p>SUBSCRIPTION</p>
                <img src="/storage/assets/buy-comics-shop-locator.png" alt="">
            </div>

        </section>
    </main>
@endsection