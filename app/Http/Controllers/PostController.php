<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index(): string
    {
        $posts = Post::all();
        return view("post.index", ["posts" => $posts]);
    }

    public function create()
    {
        return view("post.create");
    }

    public function store()
    {
        $data = request()->validate([
            "title" => "string",
            "content" => "",
            "image" => "",
            "likes" => "integer"
        ]);
        Post::create($data);

        return redirect()->route("posts.index");
    }

    public function show(Post $post) {
        return view("post.show", compact("post"));

    }
    /*
        public function create()
        {
            $newPosts = [
                [
                    "title" => "моя 5 запись",
                    "content" => "моя первая записьмоя первая записьмоя первая записьмоя первая записьмоя первая записьмоя первая запись",
                    "image" => "моя первая запись",
                    "likes" => 9,
                    "is_published" => 1
                ],
                [
                    "title" => "моя 7 запись",
                    "content" => "моя очередная запись моя очередная запись моя очередная запись моя очередная запись ",
                    "image" => "моя первая запись",
                    "likes" => 19,
                    "is_published" => 0
                ],
            ];

            foreach ($newPosts as $newPost) {
                Post::create($newPost);
            }
            return "Всё готово";
        }

        public function update()
        {
            $post = Post::find(6);
    //        dd($post->likes);
            $post->update([
                "title" => "Supers updated record моя 7 запись",
                "content" => "Supers updated record моя очередная запись моя очередная запись моя очередная запись моя очередная запись ",
                "image" => "Supers updated record моя первая запись",
                "likes" => 119,
                "is_published" => 1
            ]);
        }

        public function delete()
        {
            $post = Post::find(6);
            $post->delete();
            dd("...deleted");
        }*/
}
