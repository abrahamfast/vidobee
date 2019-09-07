<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>VIDOBEE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="VIDEO HOSTING PLATFORM">
    <!-- Begin loading animation -->
    <style>
        @keyframes hideLoader {
            0% {
                width: 100%;
                height: 100%;
            }
            100% {
                width: 0;
                height: 0;
            }
        }
        
        body > div.loader {
            position: fixed;
            background: white;
            width: 100%;
            height: 100%;
            z-index: 1071;
            opacity: 0;
            transition: opacity .5s ease;
            overflow: hidden;
            pointer-events: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        body:not(.loaded) > div.loader {
            opacity: 1;
        }
        
        body:not(.loaded) {
            overflow: hidden;
        }
        
        body.loaded > div.loader {
            animation: hideLoader .5s linear .5s forwards;
        }
        
        .loading-animation {
            width: 40px;
            height: 40px;
            margin: 100px auto;
            background-color: #2568ef;
            border-radius: 100%;
            animation: pulse 1s infinite ease-in-out
        }
        
        @keyframes pulse {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 0
            }
        }
    </style>
    <script type="text/javascript">
        window.addEventListener("load", function() {
            document.querySelector('body').classList.add('loaded');
        });
    </script>
    <!-- End loading animation -->
    <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,600,700&amp;display=swap" rel="stylesheet">
</head>

<body>
    <div class="loader">
        <div class="loading-animation"></div>
    </div>
    <!-- <div class="alert alert-dismissible d-none d-md-block bg-primary-3 text-white py-4 py-md-3 px-0 mb-0 rounded-0 border-0">
    <div class="container">
        <div class="row no-gutters align-items-md-center justify-content-center">
            <div class="col-lg-11 col-md d-flex flex-column flex-md-row align-items-md-center justify-content-lg-center">
                <div class="mb-3 mb-md-0"><strong>Intro Sale</strong> $10 per license for Jumpstart's launch. Act fast, ends soon.</div>
                <a class="btn btn-sm btn-success ml-md-3" target="_blank" href=>Redeem Offer</a>
            </div>
            <div class="col-auto position-absolute right">
                <button type="button" class="close p-0 position-relative" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <img src="assets/img/icons/interface/icon-x.svg" alt="Close" class="icon icon-sm bg-white" data-inject-svg>
                    </span>
                </button>
            </div>
        </div>
    </div>
</div> -->
    <div class="navbar-container">
        <nav class="navbar navbar-expand-lg navbar-dark" data-overlay data-sticky="top">
            <div class="container">
                <a class="navbar-brand navbar-brand-dynamic-color fade-page" href="index.html">
                    <img alt="Jumpstart" data-inject-svg src="assets/img/logos/jumpstart.svg">
                </a>
                <div class="d-flex align-items-center order-lg-3">
                    <a href="" class="btn btn-primary ml-lg-4 mr-3 mr-md-4 mr-lg-0 d-none d-sm-block order-lg-3">Login</a>
                    <a href="" class="btn btn-info ml-lg-4 mr-3 mr-md-4 mr-lg-0 d-none d-sm-block order-lg-3">Upload</a>
                    <button aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                        <img alt="Navbar Toggler Open Icon" class="navbar-toggler-open icon icon-sm" data-inject-svg src="assets/img/icons/interface/icon-menu.svg">
                        <img alt="Navbar Toggler Close Icon" class="navbar-toggler-close icon icon-sm" data-inject-svg src="assets/img/icons/interface/icon-x.svg">
                    </button>
                </div>
<!--                 <div class="collapse navbar-collapse order-3 order-lg-2 justify-content-lg-end" id="navigation-menu">
                    <ul class="navbar-nav my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#">Demos</a></li>
                    </ul>
                </div> -->
            </div>
        </nav>
    </div>

    @yield('main')

    <footer class="bg-primary-3 text-white links-white pb-4 footer-1">
        <div class="container">

            <div class="row flex-column flex-lg-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                <div class="col-auto">
                    <div class="d-flex flex-column flex-sm-row align-items-center text-small">
                        <div class="text-muted">&copy; 2019 Page protected by reCAPTCHA and subject to Google's <a href="https://www.google.com/policies/privacy/" target="_blank">Privacy Policy</a> and <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a>
                        </div>
                    </div>
                </div>
                <div class="col-auto mt-3 mt-lg-0">
                    <ul class="list-unstyled d-flex mb-0">
                        <li class="mx-3">
                            <a href="#" class="hover-fade-out">
                                <img src="assets/img/icons/social/dribbble.svg" alt="Dribbble" class="icon icon-xs bg-white" data-inject-svg>
                            </a>
                        </li>
                        <li class="mx-3">
                            <a href="#" class="hover-fade-out">
                                <img src="assets/img/icons/social/twitter.svg" alt="Twitter" class="icon icon-xs bg-white" data-inject-svg>
                            </a>
                        </li>
                        <li class="mx-3">
                            <a href="#" class="hover-fade-out">
                                <img src="assets/img/icons/social/github.svg" alt="Github" class="icon icon-xs bg-white" data-inject-svg>
                            </a>
                        </li>
                        <li class="mx-3">
                            <a href="#" class="hover-fade-out">
                                <img src="assets/img/icons/social/facebook.svg" alt="Facebook" class="icon icon-xs bg-white" data-inject-svg>
                            </a>
                        </li>
                        <li class="mx-3">
                            <a href="#" class="hover-fade-out">
                                <img src="assets/img/icons/social/google.svg" alt="Google" class="icon icon-xs bg-white" data-inject-svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <a href="#top" class="btn btn-primary rounded-circle btn-back-to-top" data-smooth-scroll data-aos="fade-up" data-aos-offset="2000" data-aos-mirror="true" data-aos-once="false">
        <img src="assets/img/icons/interface/icon-arrow-up.svg" alt="Icon" class="icon bg-white" data-inject-svg>
    </a>
    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

    <!-- 
             This appears in the demo only.  This script ensures our demo countdowns are always showing a date in the future 
             by altering the date before the countdown is initialized 
        -->
    <script type="text/javascript">
        (($) => {
            var now = new Date;
            var day = 864e5;
            var weeksToAdd = 2;
            var tenWeeksFromNow = new Date(+now + day * 7 * weeksToAdd).toISOString().slice(0, 10).replace(/\-/g, '/');
            $('[data-countdown-date].add-countdown-time').attr('data-countdown-date', tenWeeksFromNow);
        })(jQuery);
    </script>

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

    <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
    <script type="text/javascript" src="assets/js/aos.js"></script>
    <!-- Clipboard (copies content from browser into OS clipboard) -->
    <script type="text/javascript" src="assets/js/clipboard.min.js"></script>
    <!-- Fancybox (handles image and video lightbox and galleries) -->
    <script type="text/javascript" src="assets/js/jquery.fancybox.min.js"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="assets/js/flatpickr.min.js"></script>
    <!-- Flickity (handles touch enabled carousels and sliders) -->
    <script type="text/javascript" src="assets/js/flickity.pkgd.min.js"></script>
    <!-- Ion rangeSlider (flexible and pretty range slider elements) -->
    <script type="text/javascript" src="assets/js/ion.rangeSlider.min.js"></script>
    <!-- Isotope (masonry layouts and filtering) -->
    <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
    <!-- jarallax (parallax effect and video backgrounds) -->
    <script type="text/javascript" src="assets/js/jarallax.min.js"></script>
    <script type="text/javascript" src="assets/js/jarallax-video.min.js"></script>
    <script type="text/javascript" src="assets/js/jarallax-element.min.js"></script>
    <!-- jQuery Countdown (displays countdown text to a specified date) -->
    <script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
    <!-- jQuery smartWizard facilitates steppable wizard content -->
    <script type="text/javascript" src="assets/js/jquery.smartWizard.min.js"></script>
    <!-- Plyr (unified player for Video, Audio, Vimeo and Youtube) -->
    <script type="text/javascript" src="assets/js/plyr.polyfilled.min.js"></script>
    <!-- Prism (displays formatted code boxes) -->
    <script type="text/javascript" src="assets/js/prism.js"></script>
    <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
    <script type="text/javascript" src="assets/js/scrollMonitor.js"></script>
    <!-- Smooth scroll (animation to links in-page)-->
    <script type="text/javascript" src="assets/js/smooth-scroll.polyfills.min.js"></script>
    <!-- SVGInjector (replaces img tags with SVG code to allow easy inclusion of SVGs with the benefit of inheriting colors and styles)-->
    <script type="text/javascript" src="assets/js/svg-injector.umd.production.js"></script>
    <!-- TwitterFetcher (displays a feed of tweets from a specified account)-->
    <script type="text/javascript" src="assets/js/twitterFetcher_min.js"></script>
    <!-- Typed text (animated typing effect)-->
    <script type="text/javascript" src="assets/js/typed.min.js"></script>
    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/theme.js"></script>
    <!-- This script appears only on the demo.  It is used to delay unnecessary image loading until after the main page content is loaded. -->
    <script type="text/javascript">
        window.addEventListener("load", function() {
            setTimeout(function() {
                const delayedImages = document.querySelectorAll('[data-delay-src]');
                theme.mrUtil.forEach(delayedImages, (index, elem) => {
                    const source = elem.getAttribute('data-delay-src');
                    elem.removeAttribute('data-delay-src');
                    elem.setAttribute('src', source);
                });
            }, 500);
        });
    </script>

    <script type="text/javascript">
        // This script appears only in the demo - it disables forms with no action attribute to prevent 
        // navigating away from the page.
        jQuery("form:not([action])").on('submit', function() {
            return false;
        });
    </script>

</body>

</html>