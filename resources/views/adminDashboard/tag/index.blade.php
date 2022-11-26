@extends('adminDashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tags</h1>
    </div>


    <div class="table-responsive col-lg-8">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        <a href="/admin/dashboard/tags/create" class="btn btn-primary my-3">Add New Tag</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tag Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $tag->title }}</td>
                        <td>
                            {{ $tag->description }}
                        </td>
                        <td>
                            <form action="/admin/dashboard/tags/{{ $tag->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"><span data-feather="x-circle"
                                        class="align-text-bottom" onclick="return confirm('Are you sure?')"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                {{-- @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"
                                    class="align-text-bottom"></span></a>
                            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span
                                    data-feather="edit" class="align-text-bottom"></span></a>

                            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"><span data-feather="x-circle"
                                        class="align-text-bottom" onclick="return confirm('Are you sure?')"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach --}}

            </tbody>
        </table>
    </div>
@endsection
