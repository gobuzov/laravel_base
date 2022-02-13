@extends("layouts/main")
@section("content")
    <h1>Это мой шаблон View для posts</h1>
    <h2>Солнышко!</h2><p>Мы с тобою в контроллере PostController</p>
    @foreach($posts as $post)
        <div class="post">
            <h5>{{ $post->id }} - {{ $post->title }}</h5>
        </div>
    @endforeach
@endsection
