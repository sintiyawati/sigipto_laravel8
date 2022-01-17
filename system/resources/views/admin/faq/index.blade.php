@extends('admin.template.base')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">FAQ</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Faq</li>
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
            <h4 class="card-title">Data Faq</h4>
            <div class="header">
                <a href="{{url('admin/faq/create')}}" class="btn btn-sm btn-secondary pull-right">Tambah Data</a>
            </div>
            <div class="table-responsive m-t-40">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th><center>No.</center></th>
                            <th><center>Pertanyaan</center></th>
                            <th><center>Aksi</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list_faq as $data)
                          <tr>
                            <td><center>{{$loop->iteration}}</center></td>
                            <td><center>{{$data->pertanyaan}}</center></td>
                        <td>
                        <center>
                            <a href="?page=faq/edit&id_faq=sadf" class="btn btn-primary">
                               <i class="fa fa-edit"></i>      
                            </a>
                            <!-- <a href="?page=faq/hapus&id_faq=asdf" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?!');">
                            <i class="fa fa-trash-o"></i>  -->
                            @include('admin.template.utils.delete', ['url' => url('admin/faq', $data->id)])     
                            </a>
                            <a href="?page=faq/detail&id_faq=asdf" class="btn btn-warning" >
                                <i class="fa fa-info-circle"></i>
                            </a>
                        </center>
                        </td>
                </tr>
                @endforeach
                   </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection