@extends('layouts.main')
@section('content')
    <div class="series">
        <div class="currentS">
            <p>CURRENT SERIES</p>
        </div>
        <div class="containerSeries">
            @foreach ($data as $item)
                <div class="card">
                    <div>
                        <img src="{{$item['thumb']}}" alt="">
                    </div>
                    <h2>{{$item['title']}}</h2>
                </div>
            @endforeach
        </div>
    </div>
@endsection