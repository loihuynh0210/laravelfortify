<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Blog')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.6/tailwind.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@tailwindcss/typography@0.2.x/dist/typography.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
    @livewireStyles
</head>
<body>
    <x-header></x-header>

    <x-panel title="Update Your Info!" class="max-w-2xl">
        <h1>I AM IN THE SLOT</h1>
    </x-panel>

    <x-card src="https://static.yeah1.com/uploads/59/2020/12/29/5feab4f3149d8.jpg">
        Blade Rocks
        <x-slot name="description">Slots for the win</x-slot>
    </x-card>


    @yield('content')

    @livewireScripts
</body>
</html>
