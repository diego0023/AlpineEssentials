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
</head>

<body class="antialiased">
    <div x-data="{ currentTab: 'first'}">
        <button @click="currentTab = 'first'">first</button>
        <button @click="currentTab = 'second'">secnod</button>
        <button @click="currentTab = 'third'">third</button>

        <div>
            <div x-show="currentTab === 'first'">
                <p>Frist tab.</p>
            </div>

            <div x-show="currentTab === 'second'">
                <p>Second tab.</p>
            </div>

            <div x-show="currentTab === 'third'">
                <p>Third tab.</p>
            </div>
        </div>
    </div>

</body>

</html>
