<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Alpine.js-->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Module-->
    <script src="../js/app.js"></script>

</head>

<body class="antialiased">
    <div x-data>
        <button @click="$dispatch('flash', 'Hello again')">Trigger</button>
    </div>

    <!-- Flash-->
    <div
    x-data
    @flash.window="alert($event.detail)">

    </div>

    <script>
        let flash = message => window.dispatchEvent(new CustomEvent('flash', {detail: message}));
    </script>
</body>
</html>
