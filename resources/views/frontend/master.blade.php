<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>BICM</title>

    <!-- ========== Bootstrap CSS ========== -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/font-awesome.min.css">
    <!-- ========== FONT LINK ========== -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Venubox -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/venobox.min.css">

    @yield('stylesheet')

    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/common.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/index.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/media.css">
</head>
<body>
<div class="all-overflow">
    @include('frontend.include.topMenu')
    @yield('content')
</div>
@include('frontend.include.script')
</body>
</html>



