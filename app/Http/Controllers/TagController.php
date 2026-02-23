<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::all();
        return view("tag.index",['tags'=>$tags]);
    }

    public function create()
    {
        Tag::create([
            'title' => 'CSS'
        ]);

        return redirect('/tag');
    }

    public function delete()
    {
        Tag::destroy(2);
        return redirect('/tag');
    }

    public function testManyToMany()
    {
        $post01 = Post::find(1);
        $post02 = Post::find(2);
        $post03 = Post::find(3);

        Post::find(7)->tags()->attach([1, 4, 5]);

        return redirect('/blog');

    }

}
