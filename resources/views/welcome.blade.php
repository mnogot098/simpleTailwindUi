<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Laravel</title>
    </head>
    <body class="main bg-green-50">
        <header class="bg-green-500 p-4">
            <nav class="container mx-auto flex flex-row justify-between items-center text-white ">
                <div class="text-2xl font-bold">
                    Mohamed overflow
                </div>
                <div>
                    <a class="ml-8 hover:underline" href="">Portfolio</a>
                    <a class="ml-8 hover:underline" href="">About</a>
                    <a class="ml-8 hover:underline" href="">Contact-me</a>
                </div>
            </nav>
        </header>
        <div>
            <div class="container mx-auto mt-8 lg:flex flex-row justify-between items-center">
                <div class="flex flex-col">
                    <h1>
                    We build amazing experiences
                    </h1>
                    <p class="mb-5">
                        I am a web developper | Designer
                    </p>
                    <a class="text-white w-max cursor-pointer bg-green-500 rounded py-2 px-4 hover:bg-green-600" href="#">
                        Checkout my work
                    </a>
                </div>
                <div >
                    <img class="h-56 w-96" src="{{url('/img/bg.png')}}" alt="image here">
                </div>
            </div>
        </div>
    </body>
</html>
