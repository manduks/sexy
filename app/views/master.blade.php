<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alchilito</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/css/bootstrap.min.css">
    <link href="{{{ asset('assets/css/main.css') }}}" rel="stylesheet">
    <link href="{{{ asset('assets/css/custom.css') }}}" rel="stylesheet">
</head>
<body>	
	@include('home.toolbar_with_login')
   	@yield('content')
</body>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/js/bootstrap.min.js"></script>
</html>
