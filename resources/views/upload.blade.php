
@extends("layouts.main")

@section("container")

    <div class = "container">
        <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $upload->title }}</h1>

                <p> By. <a href="/berita?author={{ $upload->author->username }}" class="text-decoration-none">
                {{ $upload->author->name }} </a> di <a href="/berita?category={{ $upload->category->slug }}"
                class="text-decoration-none" >{{ $upload->category->name }}</a> </p>

                <img src="https://source.unsplash.com/1200x400/?{{ $upload->category->name }}"
                alt="{{ $upload->category->name }}" class="img-fluid">

        <article class="my-3 fs-5">

        {!! $upload->body !!}

        </article>

        <a href="/berita" class="d-block mt-3">Back to Upload</a>
        </div>
        </div>
    </div>




@endsection
