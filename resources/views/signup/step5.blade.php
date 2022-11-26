@extends('signup.main')

@section('container')
    <div class="bg-login-image bg-cover bg-repeat-y bg-center min-h-screen w-full h-full -z-10 ">
        <section class="our-container py-10">
            <div class="min-h-screen flex justify-center items-center">
                <div
                    class="w-full flex flex-col justify-center bg-white border-4 border-black rounded-[40px] mt-5 sm:max-w-xl lg:px-14">
                    <div class="p-6 sm:p-8">
                        <div class="flex flex-col items-center mb-5">
                            <h3 class="font-bold text-2xl text-center mb-1 uppercaselg:text-4xl">Upload Your Photo!</h3>

                        </div>
                        <form action="/upload_photo" method="POST" class="flex flex-col items-stretch justify-center gap-5"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ session('user_id') }}" name="user_id">

                            <div class="flex flex-col items-center gap-2">
                                <img
                                    class="img-preview w-28 h-28 rounded-full border-2 border-black text-center object-cover hidden">

                                <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none "
                                    aria-describedby="file_input_help" id="image" type="file" name="image"
                                    onchange="previewImage()" required>
                                <p class="mt-1 text-sm text-gray-500" id="image_help">PNG, JPG or JPEG
                                    (500x500px).</p>

                                @error('image')
                                    <div class="mt-2 text-xs font-semibold text-red-400">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit"
                                class="px-5 py-1 bg-primary rounded-xl border-2 border-solid border-black font-extrabold text-base lg:text-xl uppercase hover:bg-purple">Continue</button>
                        </form>
                    </div>
                </div>

        </section>
    </div>
    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.classList.remove('hidden');
            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
