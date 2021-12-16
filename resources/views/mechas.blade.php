<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gundam - Mechas</title>
    <link rel="stylesheet" href="/css/mechas.css">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Armata&display=swap" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <div class="logo">
                <img src="/img/unicorn.png" alt="">
            </div>
            <ul>
                @foreach ($indexes as $index)
                <li>
                    <a href="/{{ strtolower($index)}}">
                        {{$index}}
                    </a>
                </li>
                @endforeach
            </ul>
        </header>

        <main>
            <div class="container">
                @foreach ($mechas as $mecha)
                    <div class="card">
                        <h2>
                            {{strtoupper($mecha['name'])}}
                        </h2>
                        <div class="poster">
                            <img src="{{$mecha['image']}}" alt="">
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
    </div>
</body>
</html>