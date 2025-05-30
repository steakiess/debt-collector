<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Dashboard | Debt Collector Admin</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wdth,wght@0,96.5,100..900;1,96.5,100..900&display=swap"
        rel="stylesheet">
</head>

<body class="bg-gray-900">
    <div class="bg-gray-900">
        @yield('content')
    </div>


</body>

</html>
