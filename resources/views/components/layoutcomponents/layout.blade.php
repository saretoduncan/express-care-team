<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js'])
    <title>Document</title>

</head>

<body>
    <header class="h-[10vh] w-full  bg-custom-blue  ">
        <x-navbarcomponents.navbar class="bg-custom-blue z-20" />
        <div class="relative lg:hidden h-[90vh] bg-custom-blue transition-all duration-500 ease-in-out translate-y-[-150%] z-[12] "
            id="sideNav">
            <x-navbarcomponents.sidebar class="absolute left-0 right-0 top-0 bottom-0 px-3 " />
        </div>

    </header>



    {{ $slot }}
    <script src="https://kit.fontawesome.com/034cbb1f70.js" crossorigin="anonymous"></script>

</body>

</html>
