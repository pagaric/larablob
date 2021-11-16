<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blob</title>
</head>
<body>
    <h1>Affichage des images</h1>
    <a href="{{ route('accueil')}}">Accueil</a>
    @foreach ($data as $img)
        {{-- Si pas de addslashes() --}}
        {{-- <p><img src="data:image/jpeg;base64,{{base64_encode( $img->img_blob )}}" alt="image"/></p> --}}

        {{-- Si avec addslashes() --}}
        <p><img src="data:image/jpeg;base64,{{base64_encode( stripslashes($img->img_blob ))}}" alt="image"/></p>
    @endforeach
</body>
</html>