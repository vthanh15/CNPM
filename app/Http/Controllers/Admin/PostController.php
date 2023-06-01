<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostFormRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with('category')->get();
        return view('admin.post.index', compact('posts'));
    }
    public function create(){
        $category = Category::where('status','0')->get();
        return view('admin.post.create', compact('category'));
    }

    public function store(PostFormRequest $request){
        $data = $request->validated();

        $post = new Post;
        $post->category_id = $data['category_id'];
        $post->title = $data['title'];
        $post->sort_content = $data['sort_content'];
        $post->slug = $data['slug'];
        $post->description = $data['description'];
        
        if($request->hasfile('image')){

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/post/', $filename);
            $post->image = $filename;
        }
        $post->status = $request->status == true ? '1':'0';
        $post->created_by = Auth::user()->id;

        $post->save();

        return redirect('admin/posts') ->with('message', 'Thêm bài viết thành công');
    }
    public function edit($post_id) {
        $category = Category::where('status','0')->get();
        $post = Post::find($post_id);
        return view('admin.post.edit', compact('post','category'));
    }

    public function update(PostFormRequest $request, $post_id){
        $data = $request->validated();

        $post = Post::find($post_id);
        $post->category_id = $data['category_id'];
        $post->title = $data['title'];
        $post->sort_content = $data['sort_content'];
        $post->slug = $data['slug'];
        $post->description = $data['description'];
        if($request->hasfile('image')){

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/post/', $filename);
            $post->image = $filename;
        }
        $post->status = $request->status == true ? '1':'0';
        $post->created_by = Auth::user()->id;

        $post->update();

        return redirect('admin/posts') ->with('message', 'Cập nhật bài viết thành công');
    }

    public function destroy($post_id){
        $post = Post::find($post_id);
        $post->delete();
        return redirect()->route('posts.index') ->with('message', 'Xóa bài viết thành công');
    }
}
