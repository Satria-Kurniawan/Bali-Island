@extends('layouts.app')

@section('title', 'Edit Kategori')

@section('content')
<div class="container">
    <h1 class="mb-3">Halaman Categories Edits</h1>
    <div class="row">
        <div class="col-md-7">
            <div class="card rounded-0">
                <div class="card-body">
                    <form action="{{ url('update-kategori/' . $category_data->id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="">
                            <input type="hidden" name="id" id="id" value="{{ $category_data['id'] }}">
                            <label for="category" class="form-label">Kategori</label>
                            <input type="text" class="form-control" id="category" placeholder="Enter kategori"
                                name="category" value="{{ $category_data['category'] }}">
                        </div>
                        <button type="submit" class="btn btn-success mt-2 float-right">Save</button>
                    </form>
                </div>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
