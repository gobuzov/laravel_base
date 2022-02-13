@extends("layouts.main")

@section("content")
    <div>
        <h3 class="alert alert-success">Создать заметку</h3>
        <form action="{{route('posts.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Заголовок</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="content">Содержимое</label>
                <textarea class="form-control" name="content" id="content" placeholder="Enter content"></textarea>
            </div>
            <div class="form-group">
                <label for="likes">Количество лайков</label>
                <input type="number" class="form-control" name="likes" id="likes" placeholder="Enter likes">
            </div>
            <div class="form-group">
                <label for="image">Путь к файлу</label>
                <input type="text" class="form-control" name="image" id="image" placeholder="Enter image">
            </div>

            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>

    </div>
@endsection
