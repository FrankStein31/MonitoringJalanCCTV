<!-- resources/views/layouts/admin_app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.head') <!-- Bagian head dari layout app -->
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.partials.sidebar') <!-- Sidebar dari layout admin -->
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('layouts.partials.topbar') <!-- Topbar dari layout admin -->
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content') <!-- Tempat untuk konten halaman -->
                </div>
                <!-- End of Main Content -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        @include('layouts.partials.footer') <!-- Footer dari layout admin -->
        @include('layouts.partials.scripts') <!-- Script dari layout app -->
    </div>
</body>
</html>
