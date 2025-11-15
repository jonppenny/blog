<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title . ' | JonPPenny' : 'JonPPenny' }}</title>

    <link rel="icon" type="image/png" sizes="32x32" href="{{ Vite::asset('resources/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ Vite::asset('resources/images/favicon-16x16.png') }}">

    <link href="https://db.onlinewebfonts.com/c/2fbb6b12a1a12289408fbd5ce7e7e872?family=IBM+DOS+VGA+9x16" rel="stylesheet">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>

<header class="my-4">
    <div class="text-center">Copyright (C) 1983-{{date('Y')}} JONPPENNY</div>
</header>

<main class="container">
    <div class="w-100 bios-box">
        {{ $slot }}

        <div class="d-flex align-items-center justify-content-start gap-4 w-100 p-5 bios-box">
            <div><a href="https://linkedin.com/in/jonppenny" class="d-inline-block my-2 text-uppercase bios-link" target="_blank">LinkedIn</a></div>
            <div><a href="https://github.com/jonppenny" class="d-inline-block my-2 text-uppercase bios-link" target="_blank">Github</a></div>
        </div>
    </div>
</main>

</body>
</html>
