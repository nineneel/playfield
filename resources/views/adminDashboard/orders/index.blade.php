@extends('adminDashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Orders</h1>
    </div>


    <div class="table-responsive col-lg-8">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        {{-- <a href="/admin/dashboard/products/create" class="btn btn-primary my-3">Add New Product</a> --}}
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">User Id</th>
                    <th scope="col">Product Id</th>
                    <th scope="col">Bookdate</th>
                    <th scope="col">Paid Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $order->user_id }}</td>
                        <td>{{ $order->product_id }}</td>
                        <td>{{ $order->bookdate }}</td>
                        <td>{{ $order->paid_status }}</td>
                        <td>
                            <form action="/admin/dashboard/orders/{{ $order->id }}" method="POST" class="d-inline">
                                @method('put')
                                @csrf
                                @if ($order->paid_status == 'not_paid')
                                    <button class="badge bg-success border-0">
                                        <span data-feather="check" class="align-text-bottom"></span>
                                    </button>
                                @endif
                            </form>
                            <form action="/admin/dashboard/orders/{{ $order->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Are you sure delete {{ $order->name }} order?')"><span
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
