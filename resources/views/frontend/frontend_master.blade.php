<!doctype html>
<html class="no-js" lang="zxx">


    @include('frontend.layouts.head')


 <body>

    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!--==============================
    Preloader
    ==============================-->
    <div class="preloader">
        <button class="vs-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <img src="{{ asset('frontend/assets/img/logo.svg') }}" alt="logo">
            <span class="loader"></span>
        </div>
    </div>

    <!--==============================
    Mobile Menu
    ============================== -->
    @include('frontend.layouts.mobile_menu')

    <!--==============================
    Popup Search Box
    ============================== -->
    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" class="border-theme" placeholder="What are you looking for">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>

    <!--==============================
    Header Area
    ==============================-->
    @include('frontend.layouts.header')

    <!--********************************
            Start Main Content
    ******************************** -->
    @yield('frontend_content')
    <!--********************************
            End Main Content
    ******************************** -->

    <!--==============================
            Footer Area
    ==============================-->
    @include('frontend.layouts.footer')

    <!-- scroll to top -->
    <button class="back-to-top" id="backToTop" aria-label="Back to Top">
        <span class="progress-circle">
            <svg viewBox="0 0 100 100">
                <circle class="bg" cx="50" cy="50" r="40"></circle>
                <circle class="progress" cx="50" cy="50" r="40"></circle>
            </svg>
            <span class="progress-percentage" id="progressPercentage">0%</span>
        </span>
    </button>

    <!--==============================
        All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- imagesloaded -->
    <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Gsap -->
    <script src="{{ asset('frontend/assets/js/gsap.min.js') }}"></script>
    <!-- ScrollTrigger -->
    <script src="{{ asset('frontend/assets/js/ScrollTrigger.min.js') }}"></script>
    <!-- Gsap ScrollTo Plugin -->
    <script src="{{ asset('frontend/assets/js/gsap-scroll-to-plugin.js') }}"></script>
    <!-- Split Text -->
    <script src="{{ asset('frontend/assets/js/SplitText.js') }}"></script>
    <!-- lenis -->
    <script src="{{ asset('frontend/assets/js/lenis.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <!-- Main Js File -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>