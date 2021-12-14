@extends('layouts.app')

@section('title', 'Postingan')

@section('content')
    <div class="container">
        <h1 class="mb-3">Halaman Posts</h1>
        <div class="row justify-content-end">
            {{-- <div class="col-md-6">
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
                        <button type="submit" class="btn btn-success mt-2 float-right">Submit</button>
                        </form>
                    </div>
                </div>
            </div> --}}

            <form action="{{ route('createPost') }}">
                <button class="btn btn-success mr-2 mb-2">Create</button>
            </form>

            <div class="col-md-12">
                <div class="card rounded-0">
                    <div class="card-body">
                        <table class="table table-hover table-responsive text-center">
                            <caption>List posts</caption>
                            <thead>
                                <tr>
                                    <th class="col-1">KATEGORI</th>
                                    <th class="col-2">JUDUL</th>
                                    <th class="col-2">DESKRIPSI</th>
                                    <th class="col-2">LOKASI</th>
                                    <th class="col-2">GAMBAR</th>
                                    <th class="col-2">TANGGAL</th>
                                    <th class="col-1">OPERATION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($post_data as $item)
                                    <tr>
                                        <td>{{ $item->category->category }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ Illuminate\Support\Str::limit($item->description, 40) }}</td>
                                        <td>{{ Illuminate\Support\Str::limit($item->location, 40) }}</td>
                                        <td>
                                            @if (!empty($item->image))
                                                <img src="{{ asset('images/' . $item->image) }}" class="img-fluid">
                                            @else
                                                No image available
                                            @endif
                                        </td>
                                        <td>{{ $item->date }}</td>
                                        <td>
                                            <a href="edit-postingan/{{ $item->id }}">
                                                <i class="fas fa-edit"></i>
                                            </a>|
                                            <a href="delete-postingan/{{ $item->id }}"
                                                onclick="return confirm('Are you sure?')">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="">
                    {{ $post_data->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
