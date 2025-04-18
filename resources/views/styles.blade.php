<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Halaman ini berisi Foto & Style</title>
        <link rel="stylesheet" href="{{ asset('styles/ini_styles.css') }}">
        <script src="https://cdn.tailwindcss.com/3.4.1"></script>
    </head>
    <body>
        <div class="m-10 p-10 bg-green-100">
            <h1 class="font-bold">Teks ini berwarna Merah</h1>
            <img src="{{ asset('images/inimotor.jpeg') }}">
            <img src="{{ asset('images/inimobil.jpeg') }}">
        </div>
    </body>
</html>