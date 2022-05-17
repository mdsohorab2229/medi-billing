<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Template Design</title>

    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

</head>
<body>
    
    @yield('base.content')

    <script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/boxicons/dist/boxicons.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>