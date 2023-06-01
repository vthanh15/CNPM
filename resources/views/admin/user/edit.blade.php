@extends('admin.layouts.master')
@section('title', 'Admin Dashboard')
@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>Thay đổi thông tin người dùng
                <a href="{{url('admin/user')}}" class="btn btn-danger">Trở lại</a>
            </h4>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label>Họ Tên</label>
                <p class="form-control">{{$users->name}}</p>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <p class="form-control">{{$users->email}}</p>
            </div>
            <div class="mb-3">
                <label>Ngày tạo</label>
                <p class="form-control">{{$users->created_at->format('d/m/Y') }}</p>
            </div>
            <form action="{{url('admin/update-user/'.$users->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Quyền</label>
                    <select name="role_as" class="form-control">
                        <option value="1" {{$users->role_as == '1' ? 'selected':'' }}>Admin</option>
                        <option value="0" {{$users->role_as == '0' ? 'selected':'' }}>Người dùng</option>
                        <option value="2" {{$users->role_as == '2' ? 'selected':'' }}>Người đọc</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection