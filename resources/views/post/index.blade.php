@extends("layouts.main")
@section("content")
    <div class="alert alert-success">Это мой шаблон View для posts</div>
    <h2>Солнышко!</h2>
    <div class="alert alert-danger">Мы с тобою в контроллере PostController</div>
    <ul class="list-group">
        @foreach($posts as $post)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $post->id }} - {{ $post->title }}
                <div>
                    <span class="badge bg-danger">{{ $post->likes }}</span>
                    <a href="{{route('posts.show', $post->id)}}" class="btn btn-outline-success">Показать запись</a>
                </div>
            </li>
        @endforeach
    </ul>

@endsection
