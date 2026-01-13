<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal - Livewire</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-gray-50">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Personal Index Page</h1>

        @livewire('personal-table')
    </div>

    @livewireScripts
</body>
</html>