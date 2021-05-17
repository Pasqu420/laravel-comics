@extends('layouts.main')
@section('content')
    <main>
        <div class="currentS">
            <p>CURRENT SERIES</p>
        </div>
        <div class="series">
            <div class="containerSeries">
                @foreach ($data as $item)
                    <div class="card">
                        <div class="thumb">
                            <img src="{{$item['thumb']}}" alt="">
                        </div>
                        <h3>{{$item['title']}}</h3>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="more">
            <button>LOAD MORE</button>
        </div>
    </main>
@endsection