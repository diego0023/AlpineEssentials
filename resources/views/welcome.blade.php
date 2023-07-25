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
    <form
    x-data="{
       form: {
        name: 'diego'
       }

       submit(){
           fetch('endpoint',{
            'teImaginasElResto': ''
           });
       }
    }"

    @submit.prevent="submit"
    >
    <label>Name</label>
    <input type="text" name="name" id="name" required :model="from.name">

    </form>
</body>
</html>

