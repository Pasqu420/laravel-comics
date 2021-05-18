@extends('layouts.main')
@section('content')
    <main class="mainCards">
        <section class="cardComics">
            <div class="currentS">
                <p>CURRENT SERIES</p>
            </div>
            <div class="containerSeries">
                <div class="series">
                    @foreach ($data as $item)
                        <a href=" {{route('box',$loop->index)}} ">
                            <div class="card">
                                <div class="thumb">
                                    <img src="{{$item['thumb']}}" alt="">
                                </div>
                                <h3>{{$item['series']}}</h3>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="more">
                <button>LOAD MORE</button>
            </div>
        </section>
        <section class="info">
          
            <div>
                <img src="/storage/assets/buy-comics-digital-comics.png" alt="">
                <p>DIGITAL COMICS</p>
            </div>
            
            <div>
                <img src="/storage/assets/buy-comics-merchandise.png" alt="">
                <p>DC MERCHANDISE</p>
            </div>
            
            <div>
                <img src="/storage/assets/buy-comics-shop-locator.png" alt="">
                <p>SUBSCRIPTION</p>
            </div>
            
            <div>
                <img src="/storage/assets/buy-comics-subscriptions.png" alt="">
                <p>COMIC SHOP LOCATOR</p>
            </div>
            
            <div>
                <img src="/storage/assets/buy-dc-power-visa.svg" alt="">
                <p>DC POWER VISA</p>    
            </div>

        </section>
    </main>
@endsection