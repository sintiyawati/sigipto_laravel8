<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TempatOlahraga;

class TempatOlahragaController extends Controller
{
    public function index()
    {
        return view('admin.tempat_olahraga.index');
    }

    public function create()
    {
        //
    }

    public function store(TempatOlahraga $TempatOlahraga)
    {
        $tempat_olahraga = new TempatOlahraga;
        $tempat_olahraga->kode_tempat = request()->kode_tempat;
        $tempat_olahraga->id_user = request()->id_user;
        $tempat_olahraga->nama_tempat = request()->nama_tempat;
        $tempat_olahraga->kategori_tempat = request()->kategori_tempat;
        $tempat_olahraga->nomor_telepon = request()->nomor_telepon;
        $tempat_olahraga->alamat_tempat = request()->alamat_tempat;
        $tempat_olahraga->layanan_tempat = request()->layanan_tempat;
        $tempat_olahraga->jadwal = request()->jadwal;
        $tempat_olahraga->deskripsi_tempat = request()->deskripsi_tempat;
        $tempat_olahraga->latitude = request()->latitude;
        $tempat_olahraga->longitude = request()->longitude;
        $tempat_olahraga->status_tempat = request()->status_tempat;
        $tempat_olahraga->save();
        return redirect('admin/tempat_olahraga')->with('success','Data Berhasil Ditambahkan');
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
