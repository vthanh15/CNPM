@extends('admin.layouts.master')
@section('title', 'Admin Dashboard')
@section('content')
<div class="container-fluid px-4">
    <div class="card">
        <div class="card-header">
            <h4>Danh mục
                <a href="{{ url('admin/add-category')}}" class="btn btn-primary btn-sm float-end">Thêm danh mục</a>
            </h4>
        </div>
        <div class="card-body">
            @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên danh mục</th>
                        <th>Ảnh</th>
                        <th>Trạng thái</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>
                            <img src="{{ asset('uploads/category/'.$item->image)}}" width="50px" height="50px" alt="">
                        </td>
                        <td>{{$item->status == '1' ? 'Ẩn':'Hiển thị'}}</td>
                        <td>
                            <a href="{{url('admin/edit-category/'.$item->id)}}" class="btn btn-success"> Sửa </a>
                        </td>
                        <td>
                            <a href="{{url('admin/delete-category/'.$item->id)}}" class="btn btn-danger"> Xoá </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</div>
@endsection