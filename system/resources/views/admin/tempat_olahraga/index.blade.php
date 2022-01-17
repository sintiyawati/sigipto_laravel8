@extends('admin.template.base')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Tempat Olahraga</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Tempat Olahraga</li>
        </ol>
    </div>
    <div>
        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Tempat Olahraga</h4>
            <div class="header">
                <a href="?page=tempat_olahraga/tambah" class="btn btn-sm btn-secondary pull-right">Tambah Data</a>
            </div>
            <div class="table-responsive m-t-40">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th><center>No.</center></th>
                            <th><center>Nama Tempat</center></th>
                            <th><center>Kategori Tempat</center></th>
                            <th><center>Alamat</center></th>
                            <th><center>Aksi</center></th>
                        </tr>
                    </thead>
                    <tbody>
                          <tr>
                            <td><center>1</center></td>
                            <td><center>asdf</center></td>
                            <td><center>adf</center></td>
                            <td><center>asdf...</center></td>
                            <td>
                               <center>
                                <a href="?page=tempat_olahraga/edit&kode_tempat=asdf" class="btn btn-primary">
                                   <i class="fa fa-edit"></i>      
                                </a>
                                <a href="?page=tempat_olahraga/hapus&kode_tempat=asdf" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?!');">
                                    <i class="fa fa-trash-o"></i>      
                                </a>
                                <a href="?page=tempat_olahraga/detail&kode=asdf" class="btn btn-warning" >
                                    <i class="fa fa-info-circle"></i>
                                </a>
                            </center>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection