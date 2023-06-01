@extends('admin.layouts.master')
@section('title', 'Sửa bài viết')
@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        
        <div class="card-header">
            <h4>Sửa bài viết
                <a href="{{url('admin/posts')}}" class="btn btn-danger float-end">Trở lại</a>
            </h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
             @endif
            <form action="{{url('admin/update-post/'.$post->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Danh mục</label>
                    <select name="category_id" required id="" class="form-control">
                        <option value="">Chọn danh mục</option>
                        @foreach($category as $cateitem )
                            <option value="{{$cateitem->id}}" {{$post->category_id == $cateitem-> id ? 'selected':'' }}>
                                {{$cateitem->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Tiêu đề bài viết</label>
                    <input type="text" name="title" value="{{$post->title}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for=""> Nội dung rút gọn </label>
                    <input type="text" name="sort_content" value="{{$post->sort_content}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Slug</label>
                    <input type="text" name="slug" value="{{$post->slug}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for=""> Nội dung </label>
                    <textarea id="editor" name="description" rows="4" class="form-control"><p>{{$post->description}}</p></textarea>
                </div>
                <div class="mb-3">
                    <label for=""> Ảnh </label>
                    <input type="file" name="image" value="{{$post->image}}" class="form-control">
                </div>
                <h6>Chế độ trạng thái</h6>
                <div class="row">
                </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for=""> Hiển thị bài viết </label>
                            <input type="text" name="status" {{$post->status == '1' ? 'checked': ''}} />
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mb-3">
                            <button type="submit" value="update" class="btn btn-primary"> Cập nhật bài viết</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection