<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>testing</title>
</head>

<body>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">

        {{-- navbar --}}
        <x-navbar></x-navbar>
        <!-- Sidebar -->
        <x-aside></x-aside>

        <div class="main">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
