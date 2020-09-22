<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class ContactController extends Controller
{
    public function index()
    {
        $post = Post::query()->where('slug', 'kontakt')->get()->first();
        $post = $post->content;

        return view("contact", ['content'=>$post]);
    }
}
