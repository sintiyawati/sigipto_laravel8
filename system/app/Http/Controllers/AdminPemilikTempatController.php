<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;

class AdminPemilikTempatController extends Controller
{
    public function index()
    {
        $data['list_user'] = DB::table('user')
            ->select('*')
            ->get();
        // dd($data['list_user']);
        return view('admin.admin_pemilik_tempat.index',$data);
    }

    public function create()
    {
        //
    }

    public function status_akun(User $user, Request $request)
    {
        DB::table('user')->where('id', $request->id)->update([
                'status_akun'=>$request->status_akun
            ]);                                                                                              
        return redirect('admin/admin_pemilik_tempat');
    }

    public function show(User $user,$id)
    {
        $data['user'] = DB::table('user')
            ->select('*')
            ->where('id',$id)
            ->first();
        // dd($data['user']);
        return view('admin.admin_pemilik_tempat.detail',$data);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    function destroy(User $user){
        $user->delete();
        return redirect('admin/admin_pemilik_tempat')->with('danger','Data Berhasil Dihapus');
    }
}
