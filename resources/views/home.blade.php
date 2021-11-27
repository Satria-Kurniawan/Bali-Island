@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($post_data as $item)
                    <div class="col-4">
                        <div class="card rounded-0 float-left"">
                            @if (!empty($item->image))
                                <img src="{{ asset('storage/' . $item->image) }}" style="height: 200px; width: 340px">
                            @else
                                No image available
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection
