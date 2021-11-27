@extends('layouts.app')

@section('title', 'Kategori')

@section('content')
    <div class="container">
        <h1 class="mb-3">Halaman Categories</h1>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card rounded-0">
                    <div class="card-body">
                        <form action="{{ route('storeCategory') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div>
                                <label for="category" class="form-label">Kategori</label>
                                <input type="text" class="form-control" id="category" placeholder="Enter kategori"
                                    name="category">
                            </div>
                            <button type="submit" class="btn btn-success mt-2 float-right">Submit</button>
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
            <div class="col-md-5">
                <div class="card rounded-0">
                    <div class="card-body">
                        <table class="table table-hover text-center">
                            <caption>List categories</caption>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>KATEGORI</th>
                                    <th>OPERATION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category_data as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->category }}</td>
                                        <td>
                                            <a href="edit-kategori/{{ $item->id }}">
                                                <i class="fas fa-edit"></i>
                                            </a>|
                                            <a href="delete-kategori/{{ $item->id }}"
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
                    {{ $category_data->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
