<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>

</head>

<body>
    <header class="h-[10vh]">
        <x-navbar />
    </header>



    {{ $slot }}
    <script src="https://kit.fontawesome.com/034cbb1f70.js" crossorigin="anonymous"></script>
</body>

</html>
