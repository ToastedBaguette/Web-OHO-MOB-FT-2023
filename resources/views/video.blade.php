<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="height: 100%">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>OHO MOB FT 2023</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/logo.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        iframe{
            height: 80%;
            width: 80%;
        }
    </style>
</head>

<body style="height: 100%">
    <div class="text-center" style="height: 100%">
        <h1 class="text-mob text-white mt-3">Rute OHO</h1>
        <iframe src="{{ $url }}?autoplay=1" title="Video OHO" frameborder="0"
            allow="autoplay;" allowfullscreen>
        </iframe>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</html>
