    <script src="{{ url('public/assets/js/jquery.js') }}"></script>
    <!--Revolution Slider-->
    <script src="{{ url('public/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ url('public/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ url('public/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ url('public/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ url('public/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ url('public/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ url('public/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ url('public/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ url('public/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ url('public/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ url('public/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ url('public/assets/js/main-slider-script.js') }}"></script>
    <script src="{{ url('public/assets/js/popper.min.js') }}"></script>
    <script src="{{ url('public/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('public/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ url('public/assets/js/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ url('public/assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ url('public/assets/js/appear.js') }}"></script>
    <script src="{{ url('public/assets/js/parallax.min.js') }}"></script>
    <script src="{{ url('public/assets/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ url('public/assets/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ url('public/assets/js/owl.js') }}"></script>
    <script src="{{ url('public/assets/js/wow.js') }}"></script>
    <script src="{{ url('public/assets/js/nav-tool.js') }}"></script>
    <script src="{{ url('public/assets/js/jquery-ui.js') }}"></script>
    <script src="{{ url('public/assets/js/script.js') }}"></script>
    <script src="{{ url('public/assets/js/color-settings.js') }}"></script>
    <!-- page script -->
    <script src="{{ url('public/admin/assets/plugins/slick2/slick.min.js') }}"></script>
    <script src="{{ url('public/admin/assets/plugins/slick2/custom-slick.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/assets/js/cari.js') }}"></script>
    <script type="text/javascript">
      $('.naf-for').slick({
        autoplay: false,
        slidesToShow: 1,
        arrows: true,
        fade: true,
        asNavFor: '.naf-bottom'
      });
      $('.naf-bottom').slick({
        slidesToShow: 1,
        asNavFor: '.naf-for',
        dots: false,
        dots: false,
        prevArrow: false,
        nextArrow: false,
        centerMode: true,
        focusOnSelect: true,
        centerPadding: '70px'

      });
    </script>
