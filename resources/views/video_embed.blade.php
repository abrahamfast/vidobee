@extends('layouts.master_embed')

@section('main')
 <video preload="metadata"  class="plyr" controls crossorigin playsinline 
 poster="https://cdn.video.snapycloud.com/cover/5d8540860507d66eb1.jpg"
 ></video>

 <script>
  document.addEventListener('DOMContentLoaded', () => {
  const source = 'https://cdn.video.snapycloud.com/5d854d18d2cf7b999/playlist.m3u8';
  const video = document.querySelector('video');
  
  // For more options see: https://github.com/sampotts/plyr/#options
  // captions.update is required for captions to work with hls.js
  const player = new Plyr(video, {settings: ['captions', 'quality', 'speed', 'loop'],title: 'Example Title',captions: {active: false, update: true, language: 'en'}, quality: { default: 720, options: [4320, 2880, 2160, 1440, 1080, 720, 576, 480, 360, 240] }});
  const track = video.addTextTrack('subtitles', 'Volapük', 'vo');
 track.addCue(new VTTCue(0, 3, 'Your first cue'));
  // track.addCue(new VTTCue(0, 4, 'Ven lärnoy püki votik, vödastok plösenon fikulis.'));
  // track.addCue(new VTTCue(5, 9, 'Mutoy ai dönu sukön vödis nesevädik, e seko nited paperon.'));

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

@stop