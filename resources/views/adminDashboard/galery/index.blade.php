@extends('adminDashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Galery</h1>
    </div>


    <div class="table-responsive col-lg-8">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        <a href="/admin/dashboard/photos/create" class="btn btn-primary my-3">Add New Galery</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Photo Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($photos as $photo)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $photo->photo_name }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $photo->image) }}" alt="{{ $photo->photo_name }}"
                                class="img-thumbnail" width="400">
                        </td>
                        <td>

                            <form action="/admin/dashboard/photos/{{ $photo->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"><span data-feather="x-circle"
                                        class="align-text-bottom" onclick="return confirm('Are you sure?')"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
