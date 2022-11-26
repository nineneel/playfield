@extends('adminDashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <a href="/admin/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"
                        class="align-text-bottom"></span>
                    Back to all my Posts</a>
                <a href="/admin/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"
                        class="align-text-bottom"></span>
                    Edit</a>

                <form action="/admin/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger"><span data-feather="x-circle" class="align-text-bottom"
                            onclick="return confirm('Are you sure?')"></span> Delete
                    </button>
                </form>

                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="" class="card-img-top my-3"
                            alt="{{ $post->title }}">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top my-3"
                        alt="{{ $post->title }}">
                @endif


                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
