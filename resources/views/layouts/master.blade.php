<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <title>Laravel</title>
    </head>
    <body style="background-color: #f5f5f5">
        <div>
            <div class="bg-secondary py-2 pl-4 pr-4 d-flex justify-content-between">
                <span class="d-inline-block"><a class="text-decoration-none text-white" href="{{ route('pertanyaan.index') }}">Home</a></span>
                <span class="d-inline-block"><a class="text-decoration-none text-white" href="{{ route('pertanyaan.create') }}">Buat Pertanyaan</a></span>
            </div>
            <div class="content">
                @yield('content')
            </div>  
        </div>
    </body>
</html>
