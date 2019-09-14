@extends('layouts.master')

@section('main')
<div data-overlay="" class="bg-primary-3 text-white o-hidden" style="padding-top: 80px !important;">
      <section class="pb-0">
        <div class="container pb-5">
          <div class="row">
            <div class="col-lg-6 col-md-8">
              <h1 class="display-3">Plugins</h1>
              <div class="lead">An overview of Jumpstart's extended Javascript functionality. <a target="_blank" href="documentation/index.html">Click here</a> to see full documentation.</div>
            </div>
          </div>
        </div>
        <div class="w-50 h-100 position-absolute top right" data-jarallax-element="100" style="z-index: 0; transform: translate3d(0px, 55.622px, 0px);">
          <div class="blob blob-2 top right w-100 h-100 bg-gradient"></div>
          <div class="blob blob-2 top right w-75 h-75 bg-white opacity-10"></div>
          <div class="blob blob-2 top right w-50 h-50 bg-white opacity-10"></div>
        <div id="jarallax-container-1" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;"><div style="position: fixed;"></div></div></div>
        <div class="divider divider-bottom bg-white"></div>
      </section>
    </div>



          <player></player>


<!-- Plyr resources and browser polyfills are specified in the pen settings -->
<!-- Hls.js 0.9.x and 0.10.x both have critical bugs affecting this demo. Using fixed git hash to when it was working (0.10.0 pre-release), until https://github.com/video-dev/hls.js/issues/1790 has been resolved -->


@stop