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
            <h4 class=""> Thêm danh mục</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                
                    @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
                
            </div>
            @endif
            
            <form action="{{ url('admin/add-category') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for=""> Tên danh mục </label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for=""> Loại </label>
                    <input type="text" name="slug" class="form-control">
                </div>
                <div class="mb-3">
                    <label for=""> Mô tả </label>
                    <textarea id="editor" name="description" rows="4" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for=""> Ảnh </label>
                    <input type="file" name="image" class="form-control">
                </div>
                <h6>SEO Tags</h6>
                <div class="mb-3">
                    <label for=""> Tiêu đề </label>
                    <input type="text" name="meta_title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for=""> Mô tả Meta </label>
                    <input type="text" name="meta_description" class="form-control">
                </div>
                <div class="mb-3">
                    <label for=""> Mô tả Keyword </label>
                    <input type="text" name="meta_keyword" class="form-control">
                </div>
                <h6>Chế độ trạng thái</h6>
                <div class="row">
                </div>
                    <div class="col-md-3 mb-3">
                        <label for=""> Hiển thị  </label>
                        <input type="checkbox" name="navbar_status">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for=""> Ẩn </label>
                        <input type="checkbox" name="status" >
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary"> Lưu danh mục</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection