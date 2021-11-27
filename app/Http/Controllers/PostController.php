<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $post_data = Post::with('category')->latest()->paginate(5);
        $category_data = Category::all();

        return view('posts', compact('post_data'), compact('category_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post_data = Post::with('category')->get();
        $category_data = Category::all();

        return view('post-creates', compact('post_data'), compact('category_data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:posts|max:50',
            'description' => 'required',
            'location' => 'required',
            'image' => 'required|file|max:2048',
            'date' => 'required',
        ]);

        $file_name = $request->image->getClientOriginalName();
        $image = $request->image->storeAs('images', $file_name);

        Post::create([
            'id' => $request->id,
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'image' => $image,
            'date' => $request->date,
            'category_id' => $request->category_id
        ]);

        return redirect()->route('postingan')->with('success', 'Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post_data = Post::findOrFail($id);
        $category_data = Category::all();

        return view('post-edits', compact('post_data'), compact('category_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:50',
            'description' => 'required',
            'location' => 'required',
            'image' => 'required|file|max:2048',
            'date' => 'required',
        ]);

        $post_data = Post::findOrFail($id);
        $post_data->title = $request->input('title');
        $post_data->description = $request->input('description');
        $post_data->location = $request->input('location');
        if ($request->has('image')) {
            $file_name = $request->image->getClientOriginalName();
            $image = $request->image->storeAs('images', $file_name);
            $post_data->image = $image;
        }
        $post_data->date = $request->input('date');
        $post_data->category_id = $request->input('category_id');
        $post_data->save($request->all());

        return redirect()->route('postingan')->with('success', 'Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post_data = Post::findOrFail($id);
        $post_data->delete();

        return back()->with('success', 'Berhasil dihapus');
    }

    public function searchDataPost()
    {
        $search_text = $_GET['kueri'];
        $post_data = Post::where('title', 'LIKE', '%' . $search_text . '%')->latest()->paginate(5);

        return view('posts', [
            'post_data' => $post_data
        ]);
    }
}
