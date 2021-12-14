@extends('layouts.frontend')

@section('title', 'About Me')

@section('bottom-content')

<div class="card-transparent">
    <div class="card-header">
        <h5>AUTHOR</h5>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="card shadow">
            <img class="card-img-top" src="{{ asset('images/Satria.jpg') }}" alt="AbangSat" style="height: 400px;width: 300px;">
            <div class="card-body text-center">
                <p>KADEK SATRIA KURNIAWAN</p>
                <p>20 YEARS OLD</p>
                <p>SINGARAJA, BALI</p>
            </div>
        </div>
    </div>
</div>

@endsection