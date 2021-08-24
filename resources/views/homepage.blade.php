<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <h1>Ricette tipiche regionali</h1>
    <ul>
        @foreach ($regions as $region)
            <li>
                <a href="/regione-{{$region}}" target="_blank">
                    {{$region}}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>