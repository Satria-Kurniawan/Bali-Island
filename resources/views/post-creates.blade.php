@extends('layouts.app')

@section('title', 'Buat Postingan')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card rounded-0">
                    <div class="card-body">
                        <form action="{{ route('storePost') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control" id="category_id" name="category_id">
                                    <option value disabled>Pilih</option>
                                    @foreach ($category_data as $item)
                                        <option value="{{ $item->id }}">{{ $item->category }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="title" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="title" placeholder="Enter judul" name="title">
                            </div>
                            <div class="form-group mt-2">
                                <label for="description">Deskripsi</label>
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card rounded-0">
                    <div class="card-body">
                        <div>
                            <label for="location" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" id="location" placeholder="Enter lokasi" name="location">
                        </div>
                        <div class="form-group">
                            <label for="image">Gambar</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                        <div>
                            <label for="date" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                        <div>
                            <p class="mb-0 mt-2"><label for="image_preview">Preview</label></p>
                            <img id="preview-image-before-upload" class="img-thumbnail col-4">
                        </div>
                        <button type="submit" class="btn btn-success mt-2 float-right">Posting</button>
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