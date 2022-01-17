<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrasiController extends Controller
{
    public function registrasi()
    {
        return view('registrasi');
    }

    public function store(User $user)
    {
        $user = new User;
        $user->name = request()->name;
        $user->email = request()->email;
        $user->password = bcrypt(request()->password);
        $user->level = request()->level;
        $user->status_akun = request()->status_akun;
        // dd(Request()->all());
        $user->save();

        return redirect('login');
    }
}
