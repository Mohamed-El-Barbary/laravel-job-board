<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        // $data = Post::all();
        $data = Post::paginate(5);
        return view("post.index" ,["posts" => $data]);
    }

    public function create(){
        // Post::create([
        //     "title" => "My Fourth Post",
        //     "author" => "Elbarbary",
        //     "body" => "This is the body of my fourth post.",
        //     "published" => true
        // ]);

        Post::factory(100)->create();
        return redirect('/blog');
    }

    public function show($id){
        $post = Post::find($id);
        return view("post.show", ["post" => $post]);
    }

    public function delete(){
        Post::destroy(5);
        return redirect("/blog");
    }

}
