@extends('admin.layouts.master')
@section('title', 'Thêm slider')
@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
        @endif

        <div class="card-header">
            <h4>Thêm slider
            <a href="{{url('admin/add-slider')}}" class="btn btn-primary float-end">Thêm slider</a>
            </h4>
        </div>
        <div class="card-body">
            <form action="{{url('admin/add-slider')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="">Tiêu đề</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for=""> Ảnh </label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Mô tả ngắn</label>
                    <input type="text" name="short_description" class="form-control">
                </div>
                <div class="mb-3">
                    <label for=""> Nội dung </label>
                    <textarea id="editor" name="description" rows="4" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="location" class="form-control">
                </div>
                <h6>Chế độ trạng thái</h6>
                <div class="row">
                </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for=""> Hiển thị bài viết </label>
                            <input type="checkbox" name="status" />
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary"> Lưu bài viết</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection