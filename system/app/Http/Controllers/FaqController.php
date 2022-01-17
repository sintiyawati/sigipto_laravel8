<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use DB;

class FaqController extends Controller
{
    public function index()
    {
        $data['list_faq'] = DB::table('faq')->select('*')->get();
        // dd($data['list_faq']);
        return view('admin.faq.index', $data);
    }

    public function create()
    {
        return view('admin.faq.create');
    }

    public function store()
    {
        $faq = new Faq;
        $faq->pertanyaan = request()->pertanyaan;
        $faq->jawaban = request()->jawaban;
        $faq->link_video = request()->link_video;
        // dd(Request()->all());
        $faq->save();
        return redirect('admin/faq')->with('success','Data Berhasil Ditambahkan');
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

    function destroy(Faq $faq){
        $faq->delete();
        return redirect('admin/faq')->with('danger','Data Berhasil Dihapus');
    }
}
