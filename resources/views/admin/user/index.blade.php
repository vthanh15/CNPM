@extends('admin.layouts.master')
@section('title', 'Admin Dashboard')
@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>Người dùng
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
                        <td>Họ tên</td>
                        <td>Email</td>
                        <td>Trạng thái</td>
                        <td>Sửa</td>
                    </tr>
                </thead>
                <tbody>

                    @foreach($user as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name }}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->role_as == '1' ? 'Quản trị' : 'Người dùng'}}</td>
                        <td>
                            <a href="{{url('admin/user/'.$item->id)}}" class="btn btn-success">Sửa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection