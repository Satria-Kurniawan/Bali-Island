@extends('layouts.frontend')

@section('bottom-content')

<div class="row">
    <div class="col-12">
        @foreach ($post_data as $item)
        <a href="konten-postingan/{{ $item->id }}" class="text-dark">
            <div class="card-transparent mt-2 mb-2 border-bottom">
                <div class="row">
                    <div class="col-auto pb-2">
                        <img src="{{ asset('storage/' . $item->image) }}" style="height: 150px" width="150px">
                    </div>
                    <div class="col">
                        <div class="px-1">
                            <h4 class="card-title text-primary pb-2">{{ $item->title }}</h4>
                            <p class="card-text text-justify">
                                {{ Illuminate\Support\Str::limit($item->description, 200) }}
                            </p>
                            {{-- <h6 class="card-text text-pink">{{ $item->location }}</h6> --}}
                            <p class="card-text text-pink">{{ $item->date }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>

@endsection
