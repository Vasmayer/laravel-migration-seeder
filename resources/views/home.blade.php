<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Trains</title>
</head>
<body>
    <h1 class="text-center text-success">LISTA TRENI</h1>
    <ul>
        @foreach ($trains as $train)
            <li>{{$train->azienda}}</li>
        @endforeach
    </ul>
</body>
</html>