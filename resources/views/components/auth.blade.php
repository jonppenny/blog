<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title . ' | JonPPenny' : 'JonPPenny' }}</title>

    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">

    {{--<link href="https://db.onlinewebfonts.com/c/2fbb6b12a1a12289408fbd5ce7e7e872?family=IBM+DOS+VGA+9x16" rel="stylesheet">--}}
    <link href="https://db.onlinewebfonts.com/c/7dcda42ac0b6f4d258b33c82b61acde6?family=IBM+Plex+Mono" rel="stylesheet">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>

<main class="container">
    <div class="w-100 bios-box">
        {{ $slot }}
    </div>
</main>

</body>
</html>
