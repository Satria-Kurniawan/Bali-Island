<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class WelcomeController extends Controller
{
    public function index()
    {
        $post_data = Post::with('category')->where('category_id', '>', 3)->latest()->paginate(6);
        $post_1 = Post::with('category')->where('category_id', 1)->get();
        $post_2 = Post::with('category')->where('category_id', 2)->get();
        $post_3 = Post::with('category')->where('category_id', 3)->get();

        return view('welcome', [
            'post_data' => $post_data,
            'post_1' => $post_1,
            'post_2' => $post_2,
            'post_3' => $post_3
        ]);
    }

    public function show($id)
    {
        $post_data = Post::findOrFail($id);
        $post_1 = Post::with('category')->where('category_id', 1)->get();
        $post_2 = Post::with('category')->where('category_id', 2)->get();
        $post_3 = Post::with('category')->where('category_id', 3)->get();

        return view('post-contents', [
            'post_data' => $post_data,
            'post_1' => $post_1,
            'post_2' => $post_2,
            'post_3' => $post_3
        ]);
    }

    public function searchData()
    {
        $search_text = $_GET['kueri'];
        $post_data = Post::where('title', 'LIKE', '%' . $search_text . '%')->get();
        $post_1 = Post::with('category')->where('category_id', 1)->get();
        $post_2 = Post::with('category')->where('category_id', 2)->get();
        $post_3 = Post::with('category')->where('category_id', 3)->get();

        return view('post-searched', [
            'post_data' => $post_data,
            'post_1' => $post_1,
            'post_2' => $post_2,
            'post_3' => $post_3
        ]);
    }

    public function galeri()
    {
        $post_data = Post::orderBy('created_at', 'DESC')->get();
        $post_1 = Post::with('category')->where('category_id', 1)->get();
        $post_2 = Post::with('category')->where('category_id', 2)->get();
        $post_3 = Post::with('category')->where('category_id', 3)->get();

        return view('galeri', [
            'post_data' => $post_data,
            'post_1' => $post_1,
            'post_2' => $post_2,
            'post_3' => $post_3
        ]);
    }

    public function contact()
    {
        $post_1 = Post::with('category')->where('category_id', 1)->get();
        $post_2 = Post::with('category')->where('category_id', 2)->get();
        $post_3 = Post::with('category')->where('category_id', 3)->get();

        return view('contact', [
            'post_1' => $post_1,
            'post_2' => $post_2,
            'post_3' => $post_3
        ]);
    }

    public function overview()
    {
        $post_1 = Post::with('category')->where('category_id', 1)->get();
        $post_2 = Post::with('category')->where('category_id', 2)->get();
        $post_3 = Post::with('category')->where('category_id', 3)->get();

        return view('overview', [
            'post_1' => $post_1,
            'post_2' => $post_2,
            'post_3' => $post_3
        ]);
    }

    public function aboutMe()
    {
        $post_1 = Post::with('category')->where('category_id', 1)->get();
        $post_2 = Post::with('category')->where('category_id', 2)->get();
        $post_3 = Post::with('category')->where('category_id', 3)->get();

        return view('about-me', [
            'post_1' => $post_1,
            'post_2' => $post_2,
            'post_3' => $post_3
        ]);
    }
}
