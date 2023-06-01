@extends('admin.layouts.master')
@section('title', 'Admin Dashboard')
@section('content')
<div class="container-fluid px-4">
    {{-- <h1 class="mt-4">Thêm danh mục</h1> --}}
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Slider</li>
    </ol>
    <div class="card">
        <div class="card-header">
            <h4 class=""> Sửa slider</h4>
        </div>

        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">     
                    @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
            </div>
            @endif
            
            <form action="{{ url('admin/update-slider/'.$slider->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Tiêu đề</label>
                    <input type="text" name="title" value="{{$slider->title}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for=""> Ảnh </label>
                    <input type="file" name="image" value="{{$slider->image}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Mô tả ngắn</label>
                    <input type="text" name="short_description" value="{{$slider->short_description}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for=""> Nội dung </label>
                    <textarea id="editor" name="description" value="" rows="4" class="form-control">{{$slider->description}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="location" value="{{$slider->location}}" class="form-control">
                </div>
                <h6>Chế độ trạng thái</h6>
                <div class="row">
                </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for=""> Hiển thị bài viết </label>
                            <input type="checkbox" value="{{$slider->status}}" name="status" />
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