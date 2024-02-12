<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('/') }}/assets/frontend/js/jquery-1.12.4.min.js"></script>
<script src="{{ asset('/') }}/assets/frontend/js/popper.min.js"></script>
<script src="{{ asset('/') }}/assets/frontend/js/bootstrap.min.js"></script>
<script src="{{ asset('/') }}/assets/frontend/js/mixitup.min.js"></script>
<!-- venubox -->
<script src="{{ asset('/') }}/assets/frontend/js/venobox.min.js"></script>
<script src="{{ asset('/') }}/assets/frontend/js/jquery.mb.YTPlayer.min.js"></script>
<script src="{{ asset('/') }}/assets/frontend/js/jquery.background-video.js"></script>

<script src="{{ asset('/') }}/assets/frontend/js/slick.min.js"></script>
<script src="{{ asset('/') }}/assets/frontend/js/custom.js"></script>
{{--<script src="{{ asset('/') }}/assets/frontend/js/mehedi.js"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js" type="text/javascript"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
@yield('customScript')
<script>
    AOS.init();
</script>
<script>
    $(document).ready(function(){
        $('#myModal').modal('show');
    });
    !function(){var e,t,n,a;window.MyAliceWebChat||((t=document.createElement("div")).id="myAliceWebChat",(n=document.createElement("script")).type="text/javascript",n.async=!0,n.src="https://widget.myalice.ai/index.js",(a=(e=document.body.getElementsByTagName("script"))[e.length-1]).parentNode.insertBefore(n,a),a.parentNode.insertBefore(t,a),n.addEventListener("load",(function(){MyAliceWebChat.init({selector:"myAliceWebChat",number:"8801552376955",message:"How may I help you",color:"#25D366",channel:"wa",boxShadow:"high",text:"Contact Us",theme:"light",position:"left",mb:"115px",mx:"20px",radius:"20px"})})))}();
</script>


