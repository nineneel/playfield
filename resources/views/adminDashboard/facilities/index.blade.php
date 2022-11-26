@extends('adminDashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Facilities</h1>
    </div>


    <div class="table-responsive col-lg-8">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        <a href="/admin/dashboard/facilities/create" class="btn btn-primary my-3">Add New Facility</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Facility Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($facilities as $facility)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $facility->facility_name }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $facility->image) }}" alt="{{ $facility->facility_name }}"
                                class="img-thumbnail" width="400">
                        </td>
                        <td>
                            <a href="/admin/dashboard/facilities/{{ $facility->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit" class="align-text-bottom"></span></a>

                            <form action="/admin/dashboard/facilities/{{ $facility->id }}" method="POST" class="d-inline">
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
