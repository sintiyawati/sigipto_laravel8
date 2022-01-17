<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PemilikTempatController extends Controller
{
    public function faq_pemilik_tempat()
    {
        return view('admin.pemilik_tempat.faq_pemilik_tempat');
    }

    public function index()
    {
        return view('admin.pemilik_tempat.index');
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
