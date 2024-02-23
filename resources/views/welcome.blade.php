
@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')
    <div class="jumbotron"></div>

    <div class="main-comics-section py-5">
        <div class="container">
            <div class="row align-items-center">
                
                @foreach ($comics as $singleComic)
                <div class="comic-card col-2">
                    <div class="img-container">
                        <img src="{{$singleComic['thumb']}}" alt="">
                    </div>
                    <h5 class="text-white my-4">{{$singleComic['title']}}</h5>
                </div>
                @endforeach

            </div>

            <div class="text-center">
                <button class="btn rounded-0 px-5 btn-primary text-white text-uppercase">Load more</button>
            </div>
        </div>
    </div>

    <div class="main-icons-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($icons as $singleIcon)
                    <div class="single-icon col-2 d-flex align-items-center">
                        <div class="icon-container me-3">
                            <img src="{{Vite::asset($singleIcon['img'])}}" alt="{{$singleIcon['name']}}">
                        </div>
                        <h6 class="mb-0 text-uppercase text-white">{{$singleIcon['name']}}</h6>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
