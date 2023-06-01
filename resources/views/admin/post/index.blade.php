@extends('admin.layouts.master')
@section('title', 'Admin Dashboard')
@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>Xem bài viết
            <a href="{{url('admin/add-post')}}" class="btn btn-primary float-end">Thêm bài viết</a>
            </h4>
        </div>
        <div class="card-body">
            @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Danh mục</td>
                        <td>Tên bài viết</td>
                        <td>Ảnh</td>
                        <td>Trạng thái</td>
                        <td>Tác vụ</td>
                    </tr>
                </thead>
                <tbody>

                    @foreach($posts as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{ optional($item->category)->name }}</td>
                        <td>{{$item->title}}</td>
                        <td><img src="{{ asset('uploads/post/'.$item->image)}}" width="100" height="50px" alt=""></td>
                        <td>{{$item->status == '1' ? 'Hiển thị' : 'Ẩn'}}</td>
                        <td>
                            <a href="{{url('admin/post/'.$item->id)}}" class="btn btn-success">Sửa</a>
                            <a href="{{ route('posts.destroy', $item->id)}}" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection