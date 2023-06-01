@extends('admin.layouts.master')
@section('title', 'Admin Dashboard')
@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>Slider
            </h4>
        </div>
        <div class="card-body">
            @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <table id="myDataTable" class="table table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Tiêu đề</td>
                        <td>Ảnh</td>
                        <td>Mô tả ngắn</td>
                        <td>Trạng thái</td>
                        <td>Tác vụ</td>
                    </tr>
                </thead>
                <tbody>

                    @foreach($slider as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td><img src="{{ asset('uploads/slider/'.$item->image)}}" width="50px" height="50px" alt=""></td>
                        <td>{{$item->short_description}}</td>
                        <td>{{$item->status == '1' ? 'Hiển thị' : 'Ẩn'}}</td>
                        <td>
                            <a href="{{url('admin/edit-slider/'.$item->id)}}" class="btn btn-success">Sửa</a>
                            <a href="{{url('admin/delete-slider/'.$item->id)}}" class="btn btn-danger"> Xoá </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection