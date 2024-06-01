@extends('layouts.main')

@section('container')
    <h1 class ="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/berita">
                @if (request("category"))
                    <input type="hidden" name="category" value="{{ request("category") }}">
                @endif
                @if (request("author"))
                    <input type="hidden" name="author" value="{{ request("author") }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder = "Search..." name="search" value=
                    "{{request("search") }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($berita->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400/?{{ $berita[0]->category->name }}"
            class="card-img-top"
                alt="{{ $berita[0]->category->name }}">
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/berita/{{ $berita[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $berita[0]->title }}</a></h3>
                <p>
                    <small class="text-muted">
                        By. <a href="/berita?author={{ $berita[0]->author->username }}"
                            class="text-decoration-none">{{ $berita[0]->author->name }}</a> di
                        <a href="/berita?category={{ $berita[0]->category->slug }}"
                            class="text-decoration-none">{{ $berita[0]->category->name }}</a>
                        {{ $berita[0]->created_at->diffForHumans() }}
                    </small>
                </p>


                <p class="card-text">{{ $berita[0]->excerpt }}</p>

                <a href="/berita/{{ $berita[0]->slug }}" class="btn btn-primary">Read more</a>
            </div>
        </div>

        <div class="container">

            <div class="row">
                @foreach ($berita->skip(1) as $upload)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2 " style="background-color : rgba(0,0,0,0.7)">
                                <a href="/berita?category={{ $upload->category->slug }}"
                                    class ="text-white text-decoration-none">{{ $upload->category->name }}</a>
                            </div>
                            <img src="https://source.unsplash.com/500x400/?{{ $upload->category->name }}"
                                class="card-img-top" alt="{{ $upload->category->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $upload->title }}</h5>
                                <p>
                                    <small class="text-muted">
                                        By. <a href="/berita?author={{ $upload->author->username }}"
                                            class="text-decoration-none">{{ $upload->author->name }}</a>
                                        {{ $upload->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ $upload->excerpt }}</p>
                                <a href="/berita/{{ $upload->slug }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No upload found. </p>
    @endif

    <div class="d-flex justify-content-end">
        {{ $berita->links() }}
    </div>
@endsection
