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
            <li class="breadcrumb-item"><a href="app.php">Home</a></li>
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

<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Faq</h4>
                    <form class="m-t-40" action="{{url('admin/faq')}}" method="post" >
                        @csrf
                        <div class="form-group">
                        <h5>Pertanyaan</h5>
                        <div class="controls">
                            <input type="text" name="pertanyaan" class="form-control" required placeholder="Pertanyaan" required data-validation-required-message="Data ini wajib diisi"> </div>
                        </div>
                        <div class="form-group">
                            <h5>Jawaban</h5>                
                            <textarea name="jawaban" class="summernote">
                                 
                            </textarea>
                        </div>
                        <div class="form-group">
                            <h5>Link Video<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="link_video" class="form-control" required placeholder="Link video " required data-validation-required-message="This field is required">
                            </div>
                        </div>
                        
                        <div class="text-xs-right">
                            <button type="submit" name="simpan" class="btn btn-info" onclick="return confirm('Yakin ingin menyimpan perubahan data ini ?!');">Simpan</button>
                            <a href="{{url('admin/faq')}}" type="reset" class="btn btn-inverse">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
@endsection
