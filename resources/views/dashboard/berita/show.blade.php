@extends('dashboard.layouts.main')

@section('container')
    <div class = "container">
        <div class="row  my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $upload->title }}</h1>


                <a href="/dashboard/berita" class="btn btn-success"><span data-feather="arrow-left">
                    </span>Back to all my upload</a>

                <a href="" class="btn btn-warning"><span data-feather="edit">
                    </span>Edit</a>

                <a href="" class="btn btn-danger"><span data-feather="x-circle">
                    </span>delete</a>


                     <img src="https://source.unsplash.com/1200x400?{{ $upload->category ? $upload->category->name : 'default' }}"
                    alt="{{ $upload->category ? $upload->category->name : 'No Category' }}" class="img-fluid mt-3">


                <article class="my-3 fs-5">

                    {!! $upload->body !!}

                </article>
            </div>
        </div>
    </div>
@endsection
