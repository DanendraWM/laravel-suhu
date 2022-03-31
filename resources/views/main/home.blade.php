<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">


    <title>Web Sensor</title>

</head>

<body class="dark:bg-slate-900 dark:text-slate-100">
    @include('nav.navbar')
    @yield('isi')
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    @yield('script')
</body>

</html>
