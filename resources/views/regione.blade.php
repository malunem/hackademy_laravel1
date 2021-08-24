<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regione</title>
</head>
<body>
    <h1>Regione: {{$region}}</h1>
    <ul>
        @foreach ($ricette as $ricetta)
            <li>
                <a href="/ricetta-{{$ricetta}}" target="_blank">
                    {{$ricetta}}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>