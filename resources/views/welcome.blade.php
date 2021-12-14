@extends('layouts.frontend')

@section('title', 'Welcome to Bali Island')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 pt-3">
            <div class="card rounded-0 shadow" style="height: 26rem">
                <div class="card-body p-0">
                    @foreach ($post_1 as $item)
                    <a href="konten-postingan/{{ $item->id }}" class="text-dark">
                        <div class="img-gradient img-effect">
                            <img src="{{ asset('images/' . $item->image) }}" style="height: 420px; width: 100%">
                        </div>
                        <div class="bottom-left img-effect">
                            <a href="konten-postingan/{{ $item->id }}" class="text-white">
                                <h4 class="text-white">
                                    {{ $item->title }}
                                </h4>
                                <p class="mb-0 text-white">
                                    {{ $item->location }}
                                </p>
                                <p class="text-secondary">
                                    {{ $item->date }}
                                </p>
                            </a>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-sm-4 pt-3">
            <div class="card rounded-0 mb-0 shadow" style="height: 12.8rem">
                <div class="card-body p-0">
                    @foreach ($post_2 as $item)
                    <a href="konten-postingan/{{ $item->id }}" class="text-dark">
                        <div class="img-gradient img-effect img-fluid w-100">
                            <img src="{{ asset('images/' . $item->image) }}" style="height: 207px;"
                                class="card-img-bottom embed-responsive-item">
                        </div>
                        <div class="bottom-left img-effect">
                            <a href="konten-postingan/{{ $item->id }}" class="text-white">
                                <h4 class="text-white">
                                    {{ $item->title }}
                                </h4>
                                <p class="mb-0 text-white">
                                    {{ $item->location }}
                                </p>
                                <p class="text-secondary">
                                    {{ $item->date }}
                                </p>
                            </a>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            <div class="card rounded-0 mt-2 shadow" style="height: 12.8rem">
                <div class="card-body p-0">
                    @foreach ($post_3 as $item)
                    <a href="konten-postingan/{{ $item->id }}" class="text-dark">
                        <div class="img-gradient img-effect img-fluid w-100">
                            <img src="{{ asset('images/' . $item->image) }}" style="height: 207px; width: 100%">
                        </div>
                        <div class="bottom-left img-effect">
                            <a href="konten-postingan/{{ $item->id }}" class="text-white">
                                <h4 class="text-white">
                                    {{ $item->title }}
                                </h4>
                                <p class="mb-0 text-white">
                                    {{ $item->location }}
                                </p>
                                <p class="text-secondary">
                                    {{ $item->date }}
                                </p>
                            </a>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('bottom-content')
    {{-- @foreach ($post_data->slice(0, 6) as $item) --}}
        @foreach ($post_data as $item)
        <a href="konten-postingan/{{ $item->id }}" class="text-dark">
            <div class="card rounded-0 mr-3 float-left shadow" style="width: 20rem; margin-bottom: 100px">
                <div class="img-gradient img-effect">
                    @if (!empty($item->image))
                    <img src="{{ asset('images/' . $item->image) }}" style="height: 200px" width="100%">
                    @else
                    No image available
                    @endif
                </div>
                <div class="bottom-right">
                    <h5 class="text-pink">
                        {{ $item->title }}
                    </h5>
                    <div class="mb-0 text-black text-bold">
                        {{ $item->location }}
                    </div>
                    <div class="text-secondary">
                        {{ $item->date }}
                    </div>
                </div>
            </div>
        </a>
        @endforeach
@endsection

@section('pagination-content')
    <div class="ml-1">
        {{ $post_data->links() }}
    </div>
@endsection
