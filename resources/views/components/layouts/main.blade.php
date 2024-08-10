<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>{{$title ?? env('APP_NAME')}}</title>
    @vite('resources/js/app.js')
</head>

<body>
    <x-navigation></x-navigation>
    {{$slot}}
</body>

</html>