@extends("layouts.main")
@section("content")
    <div class="alert alert-danger">Демонстрация статьи {{ $post->id }}</div>
    <div class="card">
        <div class="card-header">
            {{ $post->title }}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $post->id }}. {{ $post->title }}</h5>
            <div class="card-text">{{$post->content}}
                <span class="badge bg-danger">{{ $post->likes }}</span>
            </div>
        </div>
    </div>

@endsection
