<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Crewboard</title>
</head>
<body class="bg-gray-200">
    <header class="fixed flex w-full h-screen flex-col">
        <div class="bg-teal-900 p-2 h-12 flex bg-opacity-80 backdrop-blur-sm shadow-md">
            <img src="{{asset('images/logo_white.png')}}" alt="Crewboard" class="h-full">
        </div>
        <nav class="bg-teal-800 bg-opacity-70 w-48 h-full  text-white pt-8">
            Dashboard
        </nav>
    </header>
    <div class="pt-12">
        <div class="ml-48 p-8 min-h-screen">
            @yield('body-content')
        </div>
    </div>
</body>
</html>