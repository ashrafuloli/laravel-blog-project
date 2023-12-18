<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.includes.head')
</head>
<body class="sb-nav-fixed">
@include('backend.includes.nav')
<div id="layoutSidenav">
    @include('backend.includes.sidebar')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4 mb-4">@yield('page-title')</h1>

                @yield('content')
            </div>
        </main>
        @include('backend.includes.footer')
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.all.min.js"></script>
<script src="{{asset('backend/js/scripts.js')}}"></script>
@stack('script')
</body>
</html>
