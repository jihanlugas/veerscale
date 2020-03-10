<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://nodemodules.web/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Shorai Development</title>
</head>
<body>

@yield('sidebar')
@yield('container')


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="http://nodemodules.web/jquery/dist/jquery.slim.min.js"></script>
<script src="http://nodemodules.web/popper.js/dist/umd/popper.min.js"></script>
<script src="http://nodemodules.web/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="{{ asset('js/app.js') }}"></script>

@stack('script')
</body>
</html>
