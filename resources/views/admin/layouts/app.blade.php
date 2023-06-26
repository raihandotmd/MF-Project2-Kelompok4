@include('admin.layouts.header')
@include('admin.layouts.sidebar')
<main id="main" class="d-flex justify-content-between">
    @yield('content')
    <x-admin.footer />
</main>
@include('admin.layouts.footer')
