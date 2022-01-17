<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function login()
    {
        return view('admin.login');
    }

    public function dashboard_admin()
    {
        return view('admin.dashboard_admin');
    }

    public function dashboard_pemilik_tempat()
    {
        return view('admin.dashboard_pemilik_tempat');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
