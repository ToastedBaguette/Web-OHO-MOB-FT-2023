<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>OHO MOB FT 2023</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/logo.png') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/broken-console" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/04b30" rel="stylesheet">

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <section id="welcome">
        <div class="p-5 text-center">
            <h1 class="text-mob">Get Ready For</h1>
            <h1 class="title-mob">Open House Ormawa</h1>
            <h4>11 August 2023</h4>
        </div>
    </section>
    <section id="introduction">
        <div class="p-5 text-center">
            <h4>Ini adalah kata pengantar. Karena sekarang belum diberikan oleh ED. Maka ITD sedang mengarang sekarang.
                Jujur bingung mau di isi apa lagi. Cuma mau bilang aja. Mohon konsum ITD dikasih double. Sekian terima
                gaji.</h4><br>
            <h4><b>MOHON CINTAI ITD</b></h4>
        </div>
    </section>
    <section id="inputcode">
        <div class="p-5 text-center">
            <form action="{{ route('video') }}" method="post">
                @csrf
                <input type="text" class="form-control my-3" placeholder="Masukkan Kode Video" aria-label="Username"
                    aria-describedby="basic-addon1" name="kode" required>
                @if (session('status'))
                    <div class="alert alert-danger" id="status">
                        {{ session('status') }}
                    </div>
                @endif
                <button id="btn-submit" type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
