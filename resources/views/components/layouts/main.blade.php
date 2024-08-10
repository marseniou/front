<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>{{$title ?? 'Front'}}</title>
</head>

<body>
    <x-navigation></x-navigation>
    {{$slot}}
</body>

</html>