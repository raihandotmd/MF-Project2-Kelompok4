@include('admin.layouts.header')
@include('admin.layouts.sidebar')
<main id="main">
    @yield('content')
    <x-admin.footer />
</main>
@include('admin.layouts.footer')
