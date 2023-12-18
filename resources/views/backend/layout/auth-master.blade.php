<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.includes.head')
</head>
<body class="bg-light">

<div class="h-100 d-flex align-items-center justify-content-center">
    <div class="container-fluid py-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-4">
                @yield('content')
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="{{asset('backend/js/scripts.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
</body>
</html>
