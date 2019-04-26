<!DOCTYPE html>
<html>
    
<!-- Mirrored from stacksthemes.com/modern/admin1/layout-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Feb 2019 13:57:16 GMT -->
@include('admin.partials.header')

    <body class="page-header-fixed">
        <div class="overlay"></div>
        @include('admin.partials.navbar')
        
        <main class="page-content content-wrap">
            @include('admin.partials.sidebar')
            <div class="page-inner">
                @yield('breadcumb')
                <div id="main-wrapper">
                    @yield('content')
                </div><!-- Main Wrapper -->
                @include('admin.partials.footer')
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        @include('admin.partials.nav_container')
        <div class="cd-overlay"></div>
	

@include('admin.partials.scripts')
@yield('scripts')
    
</body>

<!-- Mirrored from stacksthemes.com/modern/admin1/layout-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Feb 2019 13:57:21 GMT -->
</html>