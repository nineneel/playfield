@extends('adminDashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Products</h1>
    </div>


    <div class="table-responsive col-lg-8">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        <a href="/admin/dashboard/products/create" class="btn btn-primary my-3">Add New Product</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Price</th>
                    <th scope="col">Total Images</th>
                    <th scope="col">Total Tags</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->age }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->images->count() }}</td>
                        <td>{{ $product->tags->count() }}</td>
                        <td>
                            <a href="/product/{{ $product->id }}" target="_blank" class="badge bg-info"><span
                                    data-feather="eye" class="align-text-bottom"></span></a>
                            <a href="/admin/dashboard/products/{{ $product->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit" class="align-text-bottom"></span></a>
                            <form action="/admin/dashboard/products/{{ $product->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Are you sure delete {{ $product->name }} product?')"><span
                                        data-feather="x-circle" class="align-text-bottom"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
