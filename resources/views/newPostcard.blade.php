<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Nuova cartolina</title>
</head>
<body>
    <div class="container text-center">
        <header>
            <h2>Aggiungi una nuova cartolina</h2>
        </header>
    
        <form action="{{route('postcard.new.store')}}" method="post" enctype="multipart/form-data">
            @method('post')
            @csrf

            <input class="my-2" type="text" name="sender" placeholder="Mittente"><br>
            <input class="my-2" type="text" name="address" placeholder="Indirizzo del destinatario"><br>
            <input class="my-2" type="text" name="text" placeholder="Testo della cartolina"><br>
            <input class="my-2" type="file" name="image"><br>
            <br>
            <a class="btn btn-secondary" href="{{route('index')}}">Annulla</a>
            <input class="btn btn-primary my-2" type="submit" value="Salva">
        </form>
    </div>


    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>