@extends('layouts.frontend')

@section('title', 'Galeri')

@section('bottom-content')

<div class="card-transparent border-bottom p-2 mt-2 mb-3">
    <h5>FOTO</h5>
</div>
<div class="row justify-content-center">
    {{-- @foreach ($post_data as $item)
    <div class="col-sm-4">
        <div class="card-transparent">
            <div class="card-header">
                <h6 class="text-center">{{ $item->title }}</h6>
            </div>
            <div class="card-body p-3">
                <div class="img-gradient img-effect">
                    <img src="{{ asset('images/' . $item->image) }}" style="height: 200px; width: 100%">
                </div>
            </div>
        </div>
    </div>
    @endforeach --}}

    <div id="carouselExampleIndicators" class="carousel slide mb-3" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
            @foreach($post_data as $key => $slider)
            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                <img src="{{ asset('images/' . $slider->image) }}" class="" alt="..." width="700px" height="450px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $slider->title }}</h5>
                </div>
            </div>
            @endforeach

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="fas fa-angle-left fa-3x" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="fas fa-angle-right fa-3x" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
@endsection