<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use APP\Modeles\Post;

class PostController extends Controller
{
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return $post->get();
    }
    //
}
