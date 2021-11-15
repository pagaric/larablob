<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blob</title>
</head>
<body>
    <h1>Formulaire pour image/blob</h1>

    <form enctype="multipart/form-data" action="{{ route('store.blob') }}" method="post">
        @csrf
        <input type="hidden" name="MAX_FILE_SIZE" value="250000" />
        <input type="file" name="fic" size=50 />
        <br>
        <br>
        <input type="submit" value="Envoyer" />
    </form>
</body>
</html>