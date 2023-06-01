<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view('admin.user.index', compact('user'));
    }
    public function edit($user_id){
        $users = User::find($user_id);
        return view('admin.user.edit', compact('users'));
    }
    public function update(Request $request, $user_id){
        $user = User::find($user_id);
        if($user)
        {
            $user->role_as = $request->role_as;
            $user->update();
            return redirect('admin/user')->with('message', 'Cập nhật thông tin người dùng thành công');
        }

        return redirect('admin/user')->with('message', 'Không tìm thấy thông tin người dùng');
    }
}
