<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BICM</title>

    <!-- ========== Bootstrap CSS ========== -->
    <link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/font-awesome.min.css">
    <!-- ========== FONT LINK ========== -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Venubox -->
    <link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/venobox.min.css">

    @yield('stylesheet')

    <link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/common.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/index.css">

    <link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/media.css">
</head>
<body>
<div class="all-overflow">
    @include('frontend.include.topMenu')
    @yield('content')
</div>
<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>


@include('frontend.include.script')
<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "278796022799015");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v18.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "382349535253207");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v18.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>



