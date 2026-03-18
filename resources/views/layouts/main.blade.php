<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        main > .container {
            padding: 60px 15px 0;
        }
    </style>
    <link href="/css/bootsrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
    
@include('layouts.header')
<!-- Begin Page Content-->

<main class="flex-shrink-0">
    <div class="container">
        
        @yield('content')

    </div>
</main>

@include('layouts.footer')

<script src="/js/bootsrap.bundle.min.js"></script>
</body>
</html>