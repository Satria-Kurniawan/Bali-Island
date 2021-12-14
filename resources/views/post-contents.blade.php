@extends('layouts.frontend')

@section('bottom-content')
    <div style="font-family: Nunito">
        <h4 class="text-center mt-2 mb-3">{{ $post_data->title }}</h4>
        @if (!empty($post_data->image))
        <img src="{{ asset('images/' . $post_data->image) }}" style="height: 400px" width="100%">
        @else
        No image available
        @endif

        <h6>{{ $post_data->location }}</h6>
        <p class="text-justify">{{ $post_data->description }}</p>
    </div>
@endsection
