<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('/') }}assets/frontend/js/jquery-1.12.4.min.js"></script>
<script src="{{ asset('/') }}assets/frontend/js/popper.min.js"></script>
<script src="{{ asset('/') }}assets/frontend/js/bootstrap.min.js"></script>
<script src="{{ asset('/') }}assets/frontend/js/mixitup.min.js"></script>
<!-- venubox -->
<script src="{{ asset('/') }}assets/frontend/js/venobox.min.js"></script>
<script src="{{ asset('/') }}assets/frontend/js/jquery.mb.YTPlayer.min.js"></script>
<script src="{{ asset('/') }}assets/frontend/js/jquery.background-video.js"></script>

<script src="{{ asset('/') }}assets/frontend/js/slick.min.js"></script>
<script src="{{ asset('/') }}assets/frontend/js/custom.js"></script>
<script src="{{ asset('/') }}assets/frontend/js/mehedi.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js" type="text/javascript"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
@yield('customScript')
<script>
    AOS.init();
</script>


