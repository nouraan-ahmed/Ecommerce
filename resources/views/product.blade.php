@extends('master')
@section('content')
    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                @foreach ($products as $item)
                    <div class="carousel-item {{ $item['id'] == 1 ? 'active' : '' }}">
                        <a href="detail/{{ $item['id'] }}">
                            <img style="max-height:500px" src="{{ $item['gallery'] }}" class="d-block w-100 slider_img">
                            <div style=" background-color: #35443585;" class="carousel-caption d-none d-md-block">
                                <h5>{{ $item['name'] }}</h5>
                                <p>{{ $item['description'] }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="pb-4 pt-4">Trending Products</h2>
        <div class="row">
            @foreach ($products as $item)
                <div class="col-lg-4 col-sm-6">
                    <div style="min-height:350px; min-width:300px;" class="card m-3">
                        <div class="card-body">
                            <a href="detail/{{ $item['id'] }}">
                                <img style="max-height:200px" src="{{ $item['gallery'] }}" class="trending_img">
                                <div>
                                    <h5 class="card-title pt-3">{{ $item['name'] }}</h5>
                                    <p class="card-text">{{ $item['description'] }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endsection
