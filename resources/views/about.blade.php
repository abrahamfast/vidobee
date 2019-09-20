@extends('layouts.master')

@section('main')

    <div class="bg-primary-3 o-hidden" data-overlay>
      <section class="text-white pb-0">
        <div class="container pb-5">
          <div class="row justify-content-center text-center">
            <div class="col-md-9 col-lg-8 col-xl-7">
              <h1 class="display-3">A small team with <mark data-aos="highlight-text" data-aos-delay="250">grand ambition :)</mark></h1>
              <p class="lead mb-0">we are like pipe pider team at silicon walley,  just going to own idea and implemnet vidobee</p>

            </div>
          </div>
        </div>
        <div class="position-absolute w-50 h-100 top left" data-jarallax-element="100 50">
          <div class="blob blob-4 bg-gradient w-100 h-100 top left"></div>
        </div>
        <div class="divider divider-bottom bg-white"></div>
      </section>
    </div>


    <section>
      <div class="container">
        <div class="row align-items-center justify-content-around text-center text-lg-left">
          <div class="col-md-9 col-lg-6 col-xl-5 mb-4 mb-md-5 mb-lg-0" data-aos="fade-in">
            <h2 class="h1">We’re a growing team of makers and doers</h2>
          </div>
          <div class="col-md-9 col-lg-6 col-xl-5" data-aos="fade-in">
            <img src="assets/img/about-2.jpg" alt="Image" class="img-fluid rounded shadow">
            <img src="assets/img/about-2a.jpg" alt="Image" class="position-absolute p-0 col-4 col-xl-5 border border-white border-thick rounded-circle top left shadow-lg mt-5 ml-n5 ml-lg-n3 ml-xl-n5 d-none d-md-block" data-jarallax-element="-20 0">
          </div>
        </div>
      </div>
    </section>

        <section class="pt-0 o-hidden">
      <div class="container">
        <div class="row align-items-center justify-content-around text-center text-lg-left">
          <div class="col-md-9 col-lg-6 col-xl-5 mb-4 mb-md-5 mb-lg-0 order-lg-2 pl-lg-5 pl-xl-0">
            <div data-aos="fade-in" data-aos-offset="250">
              <h2 class="h1">We forge partnerships and build great products</h2>
            </div>
          </div>
          <div class="col-md-9 col-lg-6 col-xl-5 order-lg-1" data-aos="fade-in" data-aos-offset="250">
            <img src="assets/img/about-1.jpg" alt="Image" class="img-fluid rounded shadow">
          </div>
        </div>
      </div>
    </section>

        <section class="bg-primary-3 text-white pt-0">
      <div class="divider divider-top transform-flip-x bg-white"></div>
      <div class="container">
        <div class="row section-title justify-content-center text-center">
          <div class="col-md-9 col-lg-8 col-xl-7">
            <h3 class="display-4">Here are the numbers of result</h3>
            <div class="lead">we never lose friends. very happy side by side</div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card card-body bg-white h-100">
              <div class="display-4 text-primary mb-3" data-countup data-start="" data-end="97" data-duration="" data-decimal-places="" data-prefix="" data-separator="" data-grouping="" data-suffix="%" data-easing=""></div>
              <div>Average satisfaction rating received in the past year</div>
            </div>
          </div>
          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card card-body bg-white h-100">
              <div class="display-4 text-primary mb-3" data-countup data-start="20" data-end="24" data-duration="1" data-decimal-places="" data-prefix="" data-separator="" data-grouping="" data-suffix="/7" data-easing="false"></div>
              <div>Our support experts are ready to assist anytime</div>
            </div>
          </div>
          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card card-body bg-white h-100">
              <div class="display-4 text-primary mb-3" data-countup data-start="" data-end="1" data-duration="" data-decimal-places="" data-prefix="" data-separator="" data-grouping="" data-suffix="k+" data-easing=""></div>
              <div>Video Uploaded in our media server</div>
            </div>
          </div>

        </div>
      </div>
    </section>

@stop