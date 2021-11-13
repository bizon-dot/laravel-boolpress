<!DOCTYPE html>

<html lang="en">

<head>

    @include('admin.partials.head')

    <title>@yield('title')</title>
 

</head>

{{-- @include('sweetalert::alert') --}}

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    @include('admin.partials.navbar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">



            <!-- Begin Page Content -->
            @yield('content')
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        
        <!-- Footer -->
        @include('admin.partials.footer')
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->



    @include('admin.partials.footer-script')

</body>

</html>
