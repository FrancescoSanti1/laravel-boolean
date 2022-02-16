<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Postcards Home</title>
</head>
<body>
    <header>
        <div class="container text-center">
            <a href="{{route('postcard.new')}}" class="btn btn-success py-3 my-3">Aggiungi una nuova cartolina</a>
        </div>
    </header>
    
    <div class="container text-center">
        <h2>Lista delle cartoline</h2>
        <div id="app">
            <postcards-list></postcards-list>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>