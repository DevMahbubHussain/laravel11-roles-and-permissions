@include('admin.layouts.partials.header')
@yield('styles')

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        @include('admin.layouts.partials.navigation')
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            @yield('admin-content')
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        @include('admin.layouts.partials.footer')
        @yield('scripts')
