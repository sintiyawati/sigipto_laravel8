@php

function checkrouteactive($route){
  if(Route::current()->uri == $route) return 'active';
}
@endphp
<!-- Sidebar navigation-->
<nav class="sidebar-nav">
    <ul id="sidebarnav">
        <li class="nav-devider"></li>
        <li class="nav-small-cap">MENU</li>
        <li><a class="waves-effect waves-dark {{checkrouteactive('admin/dashboard_admin')}}" href="{{url('admin/dashboard_admin')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
        </li>

        <li><a class="waves-effect waves-dark {{checkrouteactive('admin/tempat_olahraga')}}" href="{{url('admin/tempat_olahraga')}}" aria-expanded="false"><i class="mdi mdi-map-marker"></i><span class="hide-menu">Tempat Olahraga</span></a>
        </li>

        <li> <a class="waves-effect waves-dark {{checkrouteactive('admin/admin_pemilik_tempat')}}" href="{{url('admin/admin_pemilik_tempat')}}" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Pemilik Tempat</span></a>
        </li>

        <li> <a class="waves-effect waves-dark {{checkrouteactive('admin/faq')}}" href="{{url('admin/faq')}}" href="#" aria-expanded="false"><i class="mdi mdi-information-variant"></i><span class="hide-menu">FAQ</span></a>
        </li>

    </ul>
</nav>
<!-- End Sidebar navigation -->