<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.includes.head')
</head>
<body>
<!-- Responsive navbar-->
@include('frontend.includes.navbar')
<!-- Page header with logo and tagline-->
@include('frontend.includes.slider')
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            @yield('content')
        </div>
        <!-- Side widgets-->
        @include('frontend.includes.sidebar')
    </div>
</div>
<!-- Footer-->
@include('frontend.includes.footer')
</body>
</html>
