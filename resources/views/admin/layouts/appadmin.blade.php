@include('admin.layouts.top')
@include('admin.layouts.menu')
<div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">
@yield('content')
</div>
</main>
</div>
</div>
@include('admin.layouts.bottom')