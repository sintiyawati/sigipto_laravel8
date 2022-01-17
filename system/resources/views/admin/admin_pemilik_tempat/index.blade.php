@extends('admin.template.base')
@section('content')

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Pemilik Tempat</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Pemilik Tempat</li>
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
            <h4 class="card-title">Data Pemilik Tempat Olahraga</h4>
            <div class="header">
                <a href="?page=pemilik_tempat/tambah" class="btn btn-sm btn-secondary pull-right">Tambah Data</a>
            </div>
            <div class="table-responsive m-t-40">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th><center>No.</center></th>
                            <th><center>Nama Lengkap</center></th>
                            <th><center>Email</center></th>
                            <th><center>Status Akun</center></th>
                            <th><center>Aksi</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list_user as $data)
                        <tr>
                            <td><center>{{$loop->iteration}}</center></td>
                            <td><center>{{$data->name}}</center></td>
                            <td><center>{{$data->email}}</center></td>
                            <td>
                                <center>
                                    @if($data->status_akun == 'Aktif')
                                        <a href='#konfirmasiAktif{{$data->id}}' data-toggle='modal'>
                                        <span class='label label-success'>{{$data->status_akun}}</span>
                                        </a>
                                    @elseif($data->status_akun == 'Nonaktif')
                                        <a href='#konfirmasiNonaktif{{$data->id}}' data-toggle='modal'>
                                        <span class='label label-danger'>{{$data->status_akun}}</span>
                                        </a>
                                    @elseif($data->status_akun == 'Menunggu Konfirmasi')
                                        <a href='#konfirmasiMenungguKonfirmasi{{$data->id}}' data-toggle='modal'>
                                        <span class='label label-warning'>{{$data->status_akun}}</span>
                                        </a>
                                    @endif
                              </center>
                          </td>
                              <td>
                                 <center>
                                     <!-- <a href="?page=pemilik_tempat/hapus&id=sdf" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data pemilik tempat olahraga ini?!<br>Jika dihapus maka data tempat olahraga juga akan terhapus');">
                                        <i class="fa fa-trash-o"></i>      
                                    </a> -->
                                    @include('admin.template.utils.delete', ['url' => url('admin/admin_pemilik_tempat/user', $data->id)])
                                    <a href="{{url('admin/admin_pemilik_tempat',$data->id)}}" class="btn btn-warning" >
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </center>
                            </td>
                        </tr>
<!-- Modal aktifkan akun baru -->
<div class="modal modal-warning fade" id="konfirmasiAktif{{$data->id}}">
   <div class="modal-dialog modal-sm">
      <form action="{{url('admin/admin_pemilik_tempat/status_akun')}}" method="post">
            @csrf
        <input type="hidden" name="id" value="{{$data->id}}">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Yakin ingin menonaktifkan akun ini ?!</h4>
            </div>
            <div class="modal-footer">
                <button type="submit" name="status_akun" value="Nonaktif" class="btn btn-danger">Nonaktif</button>
                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </form>
</div>
</div>
<!-- #END# Modal aktifkan akun baru -->

    <!-- Modal Nonaktifkan akun baru -->
    <div class="modal modal-danger fade" id="konfirmasiNonaktif{{$data->id}}">
       <div class="modal-dialog modal-sm">
          <form action="{{url('admin/admin_pemilik_tempat/status_akun')}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$data->id}}">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Yakin ingin mengaktifkan akun ini ?!</h4>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="status_akun" value="Aktif" class="btn btn-success">Aktif</button>
                    <button type="button" class="btn btn-warning waves-effect text-left" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- #END# Modal aktifkan akun baru -->

        <!-- Modal Menunggu Konfirmasi akun baru -->
        <div class="modal modal-success fade" id="konfirmasiMenungguKonfirmasi{{$data->id}}">
           <div class="modal-dialog modal-sm">
              <form action="{{url('admin/admin_pemilik_tempat/status_akun')}}" method="post">
            @csrf
                <input type="hidden" name="id" value="{{$data->id}}">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Yakin ingin mengaktifkan akun ini ?!</h4>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="status_akun" value="Aktif" class="btn btn-success">Aktif</button>
                    <button type="button" class="btn btn-warning waves-effect text-left" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- #END# Modal aktifkan akun baru -->
                        @endforeach





</tbody>
</table>
</div>
</div>
</div>
</div>

@endsection