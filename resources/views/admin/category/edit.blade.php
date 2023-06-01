@extends('admin.layouts.master')
@section('title', 'Admin Dashboard')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Thêm danh mục</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Danh mục</li>
    </ol>
    <div class="card">
        <div class="card-header">
            <h4 class=""> Sửa danh mục</h4>
        </div>

        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">     
                    @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
            </div>
            @endif
            
            <form action="{{ url('admin/update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for=""> Tên danh mục </label>
                    <input type="text" name="name" value="{{$category->name}}" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for=""> Loại </label>
                    <input type="text" name="slug" value="{{$category->slug}}" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for=""> Mô tả </label>
                    <textarea id="editor" name="description" rows="5" class="form-control">{{$category->description}}</textarea>
                </div>
                <div class="mb-3">
                    <label for=""> Ảnh </label>
                    <input type="file" name="image" class="form-control"/>
                </div>
                <h6>SEO Tags</h6>
                <div class="mb-3">
                    <label for=""> Tiêu đề </label>
                    <input type="text" name="meta_title" value="{{$category->meta_title}}" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for=""> Mô tả Meta </label>
                    <textarea name="meta_description" rows="5" class="form-control">{{$category->description}}</textarea>
                </div>
                <div class="mb-3">
                    <label for=""> Mô tả Keyword </label>
                    <textarea name="meta_keyword" rows="5" class="form-control">{{$category->meta_keywords}}</textarea>
                </div>
                <h6>Chế độ trạng thái</h6>
                <div class="row">
                </div>
                    <div class="col-md-3 mb-3">
                        <label for=""> Trạng thái thanh điều hướng </label>
                        <input type="checkbox" name="navbar_status" {{$category->navbar_status == '1' ? 'checked': ''}}/>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for=""> Trạng thái </label>
                        <input type="checkbox" name="status" {{$category->status == '1' ? 'checked': ''}}/>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary"> Cập nhật danh mục</button>
                    </div>
                </div>

            </form>
        </div>

    </div>
</div>
@endsection