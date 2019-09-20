<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>VIDOBEE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="VIDEO HOSTING PLATFORM">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
    <script src="https://cdn.rawgit.com/video-dev/hls.js/18bb552/dist/hls.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plyr.polyfilled.min.js') }}"></script>
    
        @yield('main')

</body>

</html>