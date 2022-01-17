@if ((request()->user()->level) == 'admin')
    @include('admin.template.sidebar.sidebar_admin')
@elseif ((request()->user()->level) == 'pemilik_tempat')
    @include('admin.template.sidebar.sidebar_pemilik_tempat')
@endif