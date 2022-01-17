@extends('template.base')
@section('content')


<!--Page Title-->
<section class="page-title" style="background-image:url( {{url('public/assets/images/background/11.jpg')}} )">
  <div class="auto-container">
    <div class="clearfix">
      <div class="pull-left">
        <h2>Peta</h2>
        <div class="text">Peta Pesebaran Tempat Olahraga</div>
      </div>
      <div class="pull-right">
        <ul class="page-breadcrumb">
          <li><a href="index.html">home</a></li>
          <li>Peta</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!--End Page Title-->

<!-- Sidebar Cart Item -->
<div class="xs-sidebar-group info-group">
  <div class="xs-overlay xs-bg-black"></div>
  <div class="xs-sidebar-widget">
    <div class="sidebar-widget-container">
      <div class="widget-heading">
        <a href="#" class="close-side-widget">
          X
        </a>
      </div>
      <div class="sidebar-textwidget">

        <!-- Sidebar Info Content -->
        <div class="sidebar-info-contents">
          <div class="content-inner">
            <div class="logo">
              <a href="index.html"><img src="images/logo.png" alt="" /></a>
            </div>
            <div class="content-box">
              <h2>About Us</h2>
              <p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
              <a href="#" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
            </div>
            <div class="contact-info">
              <h2>Contact Info</h2>
              <ul class="list-style-one">
                <li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City, USA</li>
                <li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
                <li><span class="icon fa fa-envelope"></span>Gym@gmail.com</li>
                <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
              </ul>
            </div>
            <!-- Social Box -->
            <ul class="social-box">
              <li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
              <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
              <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
              <li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
              <li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END sidebar widget item -->

<!-- Contact Form Section -->
<section class="contact-form-section">
  <div class="auto-container">
    <div class="row clearfix">
      <!-- Title Column -->
      <div class="title-column col-lg-12 col-md-12 col-sm-12">
        <!-- Sec Title -->
        <div id="gmaps" style="width:100%;height:450px;"></div>
      </div>
      <!-- Content Side -->
          </div>
            <!-- Content Side -->
                    <div class="content-side col-md-12 ">
                        <div class="classes-detail">
                            <div class="inner-box">
                                <div class="lower-content">
                                    <h3>List Kategori</h3>
                                    <div class="row clearfix">
                                        <!-- Schedule Column -->
                                        <div class="schedule-column col-md-4 ">
                                            <div class="inner-column">
                                                <h5>Gym</h5>
                                                <div class="time"><span>sdfasd</span></div>
                                            </div>
                                        </div>
                                        <!-- Schedule Column -->
                                        <div class="schedule-column col-md-4 ">
                                            <div class="inner-column">
                                                <h5>Zumba</h5>
                                                <div class="time"><span>sdf</span></div>
                                            </div>
                                        </div>
                                        <!-- Schedule Column -->
                                        <div class="schedule-column col-md-4 ">
                                            <div class="inner-column">
                                                <h5>Futsal</h5>
                                                <div class="time"><span>sdf</span></div>
                                            </div>
                                        </div>
                                        <!-- Schedule Column -->
                                        <div class="schedule-column col-md-4 ">
                                            <div class="inner-column">
                                                <h5>Kolam Renang</h5>
                                                <div class="time"><span>sdf</span></div>
                                            </div>
                                        </div>
                                        <div class="schedule-column col-md-4 ">
                                            <div class="inner-column">
                                                <h5>Gor</h5>
                                                <div class="time"><span>sdf</span></div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                      </div>
                    </section>
                    <!-- End Contact Form Section -->

<script type="text/javascript">   
    var marker;
        // Variabel untuk menyimpan informasi lokasi
        var infoWindow = new google.maps.InfoWindow;
        //  Variabel berisi properti tipe peta
        var mapOptions = {
            zoom: 11,
            center: {
                lat: -1.8165475,
                lng: 109.9822499
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP
        } 
        // Pembuatan peta
        var peta = new google.maps.Map(document.getElementById('gmaps'), mapOptions);      
        // Variabel untuk menyimpan batas kordinat
        var bounds = new google.maps.LatLngBounds();

        // Pengambilan data dari database MySQL
        function addMarker(lat, lng, info){
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                map: peta,
                position: lokasi
            });       
            // peta.fitBounds(bounds);
            bindInfoWindow(marker, peta, infoWindow, info);
        }
        // Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, peta, infoWindow, html){
            google.maps.event.addListener(marker, 'click', function() {
                infoWindow.setContent(html);
                infoWindow.open(peta, marker);
            });
        }
</script>


@endsection