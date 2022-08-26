@extends('dashboard.layout.main')

@section('container')
    <div class="container">
        <div class="row my-4">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left-circle"></i> Back to all my posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning text-white"><i class="bi bi-pencil"></i> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i> Delete</button>
                  </form>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="" class="img-fluid mt-4">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                
            </div>

        </div>
    </div>
@endsection