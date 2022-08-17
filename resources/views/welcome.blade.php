<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PsiqueCitasWeb</title>
        {{-- Estilo --}}
        @vite('resources/css/app.css')

    </head>
    <body class="text-white bg-black px-1 py-1">

        <nav class="border border-black flex flex-row space-x-1 py-1 px-1 bg-teal-900">
            <div class="border border-black flex flex-row w-auto py-1 px-1">
                <img class= "border border-black h-15 w-16 mx-3" src="https://img.icons8.com/stickers/344/mental-health.png" alt="logo">
                <p class="border border-black my-5 font-bold text-lg">PsiqueCitasWeb</p>
            </div>
                
            <div class="border border-black grow flex flex-row-reverse py-1 px-1 tracking-wide">
                <a class="border border-black mx-1 my-5 underline " href="{{route('register')}}">Registrar</a>
                <a class="border border-black mx-1 my-5 underline" href="{{url('/admin')}}">Ingresar</a>
            </div>
        </nav>

        <br>
        
        <h1 class="font-sans text-3xl font-bold">Esto es un titulo</h1>
        <p class="font-bold text-1xl ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis reiciendis ipsa quo exercitationem minima et, illum corrupti impedit? Iste aliquam, ipsam aliquid delectus fugiat blanditiis expedita veniam rem architecto quaerat.</p>
        <ul>
            <li class="font-mono text-sm">item 1</li>
            <li class="font-mono text-sm">item 2</li>
            <li class="font-mono text-sm">item 3</li>
        </ul>

        

        <br>

        <div class="border border-black container text-center px-3 py-3">
            <br>
            <h1 class="text-5xl font-bold">SISTEMA DE CITAS</h1>
            <br>
            <a class="text-2xl border border-black px-1 py-1 bg-sky-700 rounded-lg" href="{{url('admin')}}">Agendar cita</a>
            <br>
        </div>

        <br>

        <div class="border border-black container">
            <div class="grid grid-cols-2">
                <div class="border border-black bg-teal-700">a</div>
                <div class="border border-black bg-teal-500">b</div>
                <div class="border border-black bg-teal-300">c</div>
                <div class="border border-blackbg-teal-100">d</div>
            </div>
        </div>
        
    </body>
</html>
