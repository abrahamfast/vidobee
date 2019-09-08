@extends('layouts.master')

@section('main')

    <section class="bg-light pb-0 o-hidden">
      <div class="container">
        <div class="row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
          <div class="col-md-9 col-lg-6 col-xl-5 mb-4 mb-lg-0 pr-lg-5 pr-xl-0">
            <div data-aos="fade-in" data-aos-delay="250">
              <h1 class="display-4">Upload Video Content With <mark data-aos="highlight-text" data-aos-delay="500"> VIDOBEE</mark> </h1>
              <p class="lead">Video publishing made easy.
              </p>

            </div>
          </div>
          <div class="col-md-9 col-lg-6" data-aos="fade-left">
            <img src="assets/img/illustrations/illustration-1.svg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>


<div class="container">
  <video controls crossorigin playsinline poster="https://bitdash-a.akamaihd.net/content/sintel/poster.png"></video>
</div>
<!-- Plyr resources and browser polyfills are specified in the pen settings -->
<!-- Hls.js 0.9.x and 0.10.x both have critical bugs affecting this demo. Using fixed git hash to when it was working (0.10.0 pre-release), until https://github.com/video-dev/hls.js/issues/1790 has been resolved -->
<script src="https://cdn.rawgit.com/video-dev/hls.js/18bb552/dist/hls.min.js"></script>
<script src="https://cdn.plyr.io/3.5.6/plyr.polyfilled.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
  const source = 'https://cdn.video.snapycloud.com/5d6bc0695551544d5/playlist.m3u8';
  const video = document.querySelector('video');
  
  // For more options see: https://github.com/sampotts/plyr/#options
  // captions.update is required for captions to work with hls.js
  const player = new Plyr(video, {captions: {active: true, update: true, language: 'en'}, quality: { default: 576, options: [4320, 2880, 2160, 1440, 1080, 720, 576, 480, 360, 240] }});
  
  if (!Hls.isSupported()) {
    video.src = source;
  } else {
    // For more Hls.js options, see https://github.com/dailymotion/hls.js
    const hls = new Hls();
    hls.loadSource(source);
    hls.attachMedia(video);
    window.hls = hls;
    
    // Handle changing captions
    player.on('languagechange', () => {
      // Caption support is still flaky. See: https://github.com/sampotts/plyr/issues/994
      setTimeout(() => hls.subtitleTrack = player.currentTrack, 50);
    });
  }
  
  // Expose player so it can be used from the console
  window.player = player;

  // Bind event listener
  function on(selector, type, callback) {
    document.querySelector(selector).addEventListener(type, callback, false);
  }

  // Play
  on('.js-play', 'click', () => { 
    player.play();
  });

  // Pause
  on('.js-pause', 'click', () => { 
    player.pause();
  });

  // Stop
  on('.js-stop', 'click', () => { 
    player.stop();
  });

  // Rewind
  on('.js-rewind', 'click', () => { 
    player.rewind();
  });

  // Forward
  on('.js-forward', 'click', () => { 
    player.forward();
  });

  
});
</script>



        <section class="bg-light">
      <div class="container">
        <div class="row section-title justify-content-center text-center">
          <div class="col-md-9 col-lg-8 col-xl-7">
            <h3 class="display-4"><mark data-aos='highlight-text' data-aos-delay='500'>Do more</mark> with Jumpstart</h3>
            <div class="lead">The simplest way for anyone to embed video content, for free.</div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col d-flex flex-wrap justify-content-center">
            <div class="m-2">
              <div class="media rounded align-items-center pl-3 pr-4 pl-md-4 pr-md-5 py-2 bg-white">
                <img src="assets/img/icons/theme/navigation/route.svg" alt="Binoculars icon" class="icon mr-3 bg-primary" data-inject-svg>
                <h5 class="mb-0">Fully Responsive</h5>
              </div>
            </div>
            <div class="m-2">
              <div class="media rounded align-items-center pl-3 pr-4 pl-md-4 pr-md-5 py-2 bg-white">
                <img src="assets/img/icons/theme/layout/layout-left-panel-2.svg" alt="Layouts icon" class="icon mr-3 bg-primary" data-inject-svg>
                <h5 class="mb-0">Multiple Layouts</h5>
              </div>
            </div>
            <div class="m-2">
              <div class="media rounded align-items-center pl-3 pr-4 pl-md-4 pr-md-5 py-2 bg-white">
                <img src="assets/img/icons/theme/shopping/box-2.svg" alt="Box icon" class="icon mr-3 bg-primary" data-inject-svg>
                <h5 class="mb-0">Modular Components</h5>
              </div>
            </div>
            <div class="m-2">
              <div class="media rounded align-items-center pl-3 pr-4 pl-md-4 pr-md-5 py-2 bg-white">
                <img src="assets/img/icons/theme/general/thunder-move.svg" alt="Lightning icon" class="icon mr-3 bg-primary" data-inject-svg>
                <h5 class="mb-0">Suits Your Style</h5>
              </div>
            </div>
            <div class="m-2">
              <div class="media rounded align-items-center pl-3 pr-4 pl-md-4 pr-md-5 py-2 bg-white">
                <img src="assets/img/icons/theme/general/bookmark.svg" alt="Bookmark icon" class="icon mr-3 bg-primary" data-inject-svg>
                <h5 class="mb-0">Well Documented</h5>
              </div>
            </div>
            <div class="m-2">
              <div class="media rounded align-items-center pl-3 pr-4 pl-md-4 pr-md-5 py-2 bg-white">
                <img src="assets/img/icons/theme/design/select.svg" alt="Selection interface icon" class="icon mr-3 bg-primary" data-inject-svg>
                <h5 class="mb-0">Highly Customizable</h5>
              </div>
            </div>
            <div class="m-2">
              <div class="media rounded align-items-center pl-3 pr-4 pl-md-4 pr-md-5 py-2 bg-white">
                <img src="assets/img/icons/theme/general/fire.svg" alt="Fire icon" class="icon mr-3 bg-primary" data-inject-svg>
                <h5 class="mb-0">Saves You Time</h5>
              </div>
            </div>
            <div class="m-2">
              <div class="media rounded align-items-center pl-3 pr-4 pl-md-4 pr-md-5 py-2 bg-white">
                <img src="assets/img/icons/theme/food/sushi.svg" alt="Sushi icon" class="icon mr-3 bg-primary" data-inject-svg>
                <h5 class="mb-0">Delicious Stuff</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>






    <section class="bg-primary-3 text-white">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 mb-3 mb-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card card-body bg-white align-items-start flex-sm-row h-100">
              <img src="assets/img/icons/theme/general/settings-1.svg" alt="Icon for Settings-1" class="icon bg-primary mb-4 mb-sm-0" data-inject-svg>
              <div class="ml-sm-3 ml-md-4">
                <h5>High definition</h5>
                <p>
                  Create rich layouts, using any combination of elements. Jumpstart’s UI elements are designed to play nice together, wherever you place them.
                </p>
                <a href="style-guide.html" class="btn btn-sm btn-primary fade-page">View Style Guide</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-3 mb-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card card-body bg-white align-items-start flex-sm-row h-100">
              <img src="assets/img/icons/theme/design/layers.svg" alt="Icon for Layers" class="icon bg-primary mb-4 mb-sm-0" data-inject-svg>
              <div class="ml-sm-3 ml-md-4">
                <h5>Safe embeds</h5>
                <p>
                  Enhance the functionality of your site with Jumpstart's convenient suite of easily configurable javascript plugins.
                </p>
                <a href="plugins.html" class="btn btn-sm btn-primary fade-page">View Plugins</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-3 mb-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card card-body bg-white align-items-start flex-sm-row h-100">
              <img src="assets/img/icons/theme/devices/display-1.svg" alt="Icon for Display-1" class="icon bg-primary mb-4 mb-sm-0" data-inject-svg>
              <div class="ml-sm-3 ml-md-4">
                <h5>Blazing fast</h5>
                <p>
                  Get your site off the ground quicker with Livereload and SCSS compling using our simple Gulp-powered build process.
                </p>
                <a href="documentation/index.html" class="btn btn-sm btn-primary fade-page">View Documentation</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-3 mb-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="card card-body bg-white align-items-start flex-sm-row h-100">
              <img src="assets/img/icons/theme/communication/chat-smile.svg" alt="Icon for Chat-Smile" class="icon bg-primary mb-4 mb-sm-0" data-inject-svg>
              <div class="ml-sm-3 ml-md-4">
                <h5>Frustration free</h5>
                <p>
                  We work closely with customers to provide a high-standard of support, prompt bug fixes and general troubleshooting.
                </p>
                <a href="http://mediumrare.ticksy.com/" class="btn btn-sm btn-primary" target="_blank">Open a Suport Ticket</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



@stop