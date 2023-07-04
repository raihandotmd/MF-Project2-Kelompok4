@include('admin.layouts.header')
@include('admin.layouts.sidebar')

<main id="main" class="justify-content-between">
    <div class="group-container">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        @yield('content')
    </div>
    <x-admin.footer />
</main>
@include('admin.layouts.footer')
