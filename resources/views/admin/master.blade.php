

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Toushin Ecomerce | @yield('title')</title>

    @include('admin.includes.stylesheet')
</head>

<body class="nav-md">

<div class="container body">
    <div class="main_container">
        @include('admin.includes.sidebar')

        <!-- top navigation -->
        @include('admin.includes.top-nav')
        <!-- /top navigation -->

        <!-- page content -->
        @yield('body')
        <!-- /page content -->

        <!-- footer content -->
        @include('admin.includes.footer')
        <!-- /footer content -->
    </div>
</div>

    @include('admin.includes.scripts')
    @yield('customJs')

</body>
</html>