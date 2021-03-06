<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gundam - About</title>
    <link rel="stylesheet" href="/css/about-style.css">
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
                <div class="text">
                    <h2>
                        Mobile Suit Gundam Unicorn
                    </h2>
                    <p>
                        Mobile Suit Gundam Unicorn (機動戦士ガンダムUCユニコーン Kidō Senshi Gandamu Yunikōn?) is 2010 theatrical OVA series based on the novel series of the same name written by Japanese author Harutoshi Fukui, 
                        with character and mechanical designs provided by Yoshikazu Yasuhiko and Hajime Katoki, respectively, and music by Hiroyuki Sawano.
                    </p>
                </div>
                <div class="poster">
                    <img src="https://m.media-amazon.com/images/M/MV5BY2RmOTBkMWItYzJlYy00MDQ3LWEyNDUtMDg3YzI0YTNlYTlmXkEyXkFqcGdeQXVyNzgzODI1OTE@._V1_FMjpg_UX1000_.jpg" alt="">
                </div>
            </div>
        </main>
    </div>
</body>
</html>