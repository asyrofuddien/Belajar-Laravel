@extends('layout.main')
    @section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                  </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
    <div class="card mb-3 ">
        @if($posts[0]->image)
            <div style="max-height: 350px; overflow:hidden">
            <img src="{{ asset('storage/'.$posts[0]->image) }}?{{ $posts[0]->category->name }}" alt="" class="img-fluid ">
            </div>
        @else
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="">
        @endif
        
        <div class="card-body text-center">
            <a class="text-decoration-none text-dark" href="/posts/{{ $posts[0]->slug }}" >
                <h3 class="card-title">{{ $posts[0]->title }}</h3>
            </a>
          
        <p>
            <small class="text-muted">By. <a href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
        </p>

          <p class="card-text">{{ $posts[0]->excerpt }}</p>
         
          <a href="/post/{{ $posts[0]->slug }}" class="p-2 btn btn-primary">Read more</a>

        </div>
      </div>
      

    <div class="row">
        @foreach($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card ">
                    <div style="background-color: rgba(0,0,0,0.7) "class="position-absolute px-3 py-2 text-white">
                        <a class="text-white text-decoration-none text-white" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                    </div>
                    @if($post->image)
                            <img src="{{ asset('storage/'.$post->image) }}?{{ $post->category->name }}" alt="" class="img-fluid">
                    @else
                            <img src="https://source.unsplash.com/500x500?{{ $post->category->name }}" class="card-img-top" alt="">
                    @endif
                    <div class="card-body">
                    <a class="text-decoration-none text-dark" href="/posts/{{ $post->slug }}">
                        <h5 class="card-title">{{ $post->title }}</h5>
                    </a>
                    <p>
                        <small class="text-muted">By. <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $post->title }}</p>
                    <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @else
      <p class="text-center fs-4">No Post Found.</p>
    @endif
    <div class="d-flex justify-content-end">
    {{ $posts->links() }}
    </div>
    @endsection