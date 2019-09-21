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
<script>
  window.vidobee = "{{$id}}";
</script>


          <player></player>



 <div class="container pb-100">
            <div class="row justify-content-around">
            <div class="col-lg-12 col-xl-8 py-4 py-md-5">
                <h1>Embed Code</h1>
                <div class="lead mb-0">
                  <p>Using embed code, you can easily copy the embed code of your site.</p>
                </div>
                <hr class="my-4 my-md-12">
              </div>
             <div class="code-snippet"><button class="btn btn-sm btn-primary btn-clipboard" type="button" title="" data-original-title="Copy To Clipboard">Copy</button><code class="language-html"><pre class="  language-html">
                 {{{ "<div style=\"width: 100%; height: 0px; position: relative; padding-bottom: 56.250%;\">
                            <iframe src=\"https://vidobee.com/video/{$id}/embed\" 
                                    frameborder=\"0\" 
                                    width=\"100%\" 
                                    height=\"100%\" 
                                    allowfullscreen 
                                    style=\"width: 100%; height: 100%; position: absolute;\">
                            </iframe>
                      </div>" }}}
             </pre></code></div>

            </div>
          </div>
        </div>
            
     


@stop