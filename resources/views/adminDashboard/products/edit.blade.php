@extends('adminDashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Product</h1>
    </div>

    <div class="col-lg-8">
        <a href="/admin/dashboard/products" class="btn btn-danger text-white mb-3">Back</a>
        <form action="/admin/dashboard/products/{{ $product->id }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name"
                    name="name" value="{{ old('name', $product->name) }}">
                @error('name')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slogan" class="form-label">Slogan</label>
                <input type="text" class="form-control  @error('slogan') is-invalid @enderror" id="slogan"
                    name="slogan" value="{{ old('slogan', $product->slogan) }}">
                @error('slogan')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="excerpt" class="form-label">Excerpt</label>
                <input type="text" class="form-control  @error('excerpt') is-invalid @enderror" id="excerpt"
                    name="excerpt" value="{{ old('excerpt', $product->excerpt) }}">
                @error('excerpt')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="text" class="form-control  @error('age') is-invalid @enderror" id="age" name="age"
                    value="{{ old('age', $product->age) }}">
                @error('age')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                @error('description')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <input id="description" type="hidden" name="description"
                    value="{{ old('description', $product->description) }}">
                <trix-editor input="description"></trix-editor>
            </div>


            {{-- Tags --}}
            <div class="mb-3">
                <label for="tags" class="form-label @error('tags') is-invalid @enderror">Tags</label>
                @error('tags')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                @foreach ($tags as $tag)
                    <div class="form-check">
                        <input class="form-check-input" name="tags[]" type="checkbox" id="{{ $tag->id }}"
                            value="{{ $tag->id }}" @if ($product->tags->find($tag->id)) checked @endif
                            id="{{ $tag->name }}">
                        <label class="form-check-label" for="{{ $tag->id }}">
                            {{ $tag->title }}
                        </label>
                    </div>
                @endforeach
            </div>

            {{-- Price --}}
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control  @error('price') is-invalid @enderror" id="price"
                    name="price" value="{{ old('price', $product->price) }}">
                @error('price')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="files" class="form-label">Upload Product Images</label>
                <input class="form-control @error('images') is-invalid @enderror" type="file" id="images"
                    name="images[]" accept="image/*" multiple>
                @error('images')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- Details Product --}}
            <div class="mb-3">
                <label for="body" class="form-label">How To Play</label>
                @error('body')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <input id="body" type="hidden" name="body" value="{{ old('body', $product->details->body) }}">
                <trix-editor input="body"></trix-editor>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Learning kit contents</label>
                <textarea class="form-control @error('content') is-invalid  @enderror" name="content" id="content" rows="2">{{ old('content', $product->details->contents) }}</textarea>
                @error('content')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="duration" class="form-label">Duration</label>
                <input type="text" class="form-control  @error('duration') is-invalid @enderror" id="duration"
                    name="duration" value="{{ old('duration', $product->details->duration) }}">
                @error('duration')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="donts" class="form-label">Dont's</label>
                <textarea class="form-control @error('donts') is-invalid  @enderror" name="donts" id="donts" rows="2">{{ old('donts', $product->details->donts) }}</textarea>
                @error('donts')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="benefits" class="form-label">Benefits</label>
                <textarea class="form-control @error('benefits') is-invalid  @enderror" name="benefits" id="benefits"
                    rows="2">{{ old('benefits', $product->details->benefits) }}</textarea>
                @error('benefits')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mb-5">Update Product</button>
        </form>
    </div>

    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });
    </script>
@endsection
