<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.css"> -->
    <!-- <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> -->
    <script src="https://cdn.tiny.cloud/1/wc9xuhunuxv5qpukybytmevk53ebs3p13kot3s8hzuecvm2v/tinymce/5/tinymce.min.js"></script>
    <script>
    tinymce.init({
        selector: '#textarea',
        widht: '100%',
        height: 300,
        plugins:    "link",
        statusbar:  false,
        toolbar:    "link"
    });
    </script>
    <!-- <script>
        tinymce.init({
            selector:   "textarea",
            width:      '100%',
            height:     270,
            plugins:    "link",
            statusbar:  false,
            toolbar:    "link"
        });

        // Prevent bootstrap dialog from blocking focusin
        $(document).on('focusin', function(e) {
            if ($(e.target).closest(".tox-tinymce-aux, .moxman-window, .tam-assetmanager-root").length) {
                e.stopImmediatePropagation();
            }
        });

        $('#open').click(function() {
            $("#dialog").modal({
                width: 800
            });
        });
    </script> -->
    <title>{{config('app.name', 'LSAPP')}}</title>
</head>
<body>
    <div id="app">
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
    </div>
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
