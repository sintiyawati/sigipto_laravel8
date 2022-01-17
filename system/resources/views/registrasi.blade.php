<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('public/admin/assets/images/favicon.png')}}">
    <title>SIGIPTO || REGISTRASI</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{url('public/admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{url('public/admin/css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{url('public/admin/css/colors/blue.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <link rel="stylesheet" href="{{url('public/admin/assets/plugins/swal/sweetalert2.min.css')}}">
    <style type="text/css">
        .field-icon {
            float: right;
            margin-left: -35px;
            margin-right: 10px;
            margin-top: 10px;
            position: absolute;
            z-index: 2;
        }
    </style>
</head>

<body>
 <!-- ============================================================== -->
 <!-- Preloader - style you can find in spinners.css -->
 <!-- ============================================================== -->
 <div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
     <section id="wrapper">
        <div class="login-register" style="background-image:url({{url('public/admin/assets/images/18.jpeg')}});">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="loginform" action="{{url('registrasi')}}" method="POST">
                        @csrf
                        <input type="hidden" name="level" value="pemilik_tempat">
                        <input type="hidden" name="status_akun" value="Menunggu Konfirmasi">
                        <br><h4 class="box-title m-b-20"> <center><b>Sistem Informasi Geografis<br> Persebaran Tempat Olahraga</b></center></h4>
                        <center><font size="2" face="cambria"><b>Silahkan Melakukan Registrasi Terlebih dahulu</b></font></center><br>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="name" required="" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="form-group" style="margin-top:-10px;">
                            <div class="col-xs-12">
                                <input class="form-control" type="email" name="email" placeholder="Email" required oninvalid="this.setCustomValidity('Email yang anda masukkan tidak benar')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <input id="password-field" type="password" class="form-control" name="password" required placeholder="Password">
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"></span>
                                </div>
                            </div>

                            <div class="form-group text-center m-t-20">
                                <div class="col-xs-12">
                                    <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" >Daftar</button>
                                </div>
                            </div>
                            <div class="form-group m-b-0">
                                <div class="col-sm-12 text-center">
                                    <div>Sudah punya akun? <a href="{{url('login')}}" class="text-info m-l-5"><b>Log In</b></a></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="{{url('public/admin/assets/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{url('public/admin/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
        <script src="{{url('public/admin/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="{{url('public/admin/assets/js/jquery.slimscroll.js')}}"></script>
        <!--Wave Effects -->
        <script src="{{url('public/admin/assets/js/waves.js')}}"></script>
        <!--Menu sidebar -->
        <script src="{{url('public/admin/assets/js/sidebarmenu.js')}}"></script>
        <!--stickey kit -->
        <script src="{{url('public/admin/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
        <script src="{{url('public/admin/assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
        <!--Custom JavaScript -->
        <script src="{{url('public/admin/assets/js/custom.min.js')}}"></script>
        <script src="{{url('public/admin/assets/plugins/swal/sweetalert2.all.min.js')}}"></script>
        <!-- ============================================================== -->
        <!-- Style switcher -->
        <!-- ============================================================== -->
        <script src="{{url('public/admin/assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
</body>

</html>

