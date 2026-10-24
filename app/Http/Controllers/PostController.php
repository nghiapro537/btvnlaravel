<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function index()
    {
        // Lấy dữ liệu bài viết từ database bằng Query Builder
        $posts = DB::table('posts')->get();

        // Truyền sang view posts.index
        return view('posts.index', compact('posts'));
    }
}
