<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'E-Commerce' }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">


    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    <x-navbar />

    <main>
        <div class="container">
            {{ $slot }}
        </div>
    </main>

    <x-footer />

    {{ $extrajs ?? '' }}
</body>

</html>
