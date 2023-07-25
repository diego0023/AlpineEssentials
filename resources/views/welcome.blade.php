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
    <div x-data="taskApp()" >

        <form @submit.prevent="
            tasks.push({
                body: newTask,
                completed: false
            });

            newTask='';">
            <input type="text" placeholder="Go to the markert" x-model="newTask">
        </form>

        <ul>
            <template x-for="(task, index) in tasks" :key="index">
                <li>
                    <input type="checkbox" x-model="task.completed">
                    <span x-text="task.body"></span>
                </li>
            </template>
        </ul>
    </div>

</body>
    <script>
      let taskApp = () => {
        return {
            tasks: [],
            newTask: '',

        };

    }
    </script>
</html>
