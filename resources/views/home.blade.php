<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-black py-3">
            <div class="container-fluid">

                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white fs-4" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white fs-4" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white fs-4" href="/contacts">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="bg-dark">
        <div class="container py-5">
            <div class="row row-cols-1 row-cols-md-3">
                @foreach ($movies as $i => $movie)
                    <div class="col g-3">
                        <div class="card text-left text-dark h-100">
                            <img class="card-img-top" src="https://picsum.photos/400/300?random={{ $i }}"
                                alt="">
                            <div class="card-body">

                                <h4 class="card-title">{{ $movie['title'] }}</h4>
                                <hr>
                                <h6 class="py-1 text-decoration-underline">- Original title</h6>
                                <span>{{ $movie['original_title'] }}</span>

                                <h6 class="py-1 text-decoration-underline">- Nationality</h6>
                                <span>{{ $movie['nationality'] }}</span>

                                <h6 class="py-1 text-decoration-underline">- Release date</h6>
                                <span>{{ $movie['date'] }}</span>

                                <h6 class="py-1 text-decoration-underline">- Rating</h6>
                                <span>{{ $movie['vote'] }}</span>

                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </main>
    <footer id="app_footer" class="bg-black text-white pt-5">
        <div id="footer_top" class="container d-flex justify-content-around">

            <ul class="list-unstyled"><span>
                    <h5 class="text-white">About us</h5>
                </span>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
            </ul>
            <ul class="list-unstyled"><span>
                    <h5 class="text-white">Contacts</h5>
                </span>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
            </ul>
            <ul class="list-unstyled"><span>
                    <h5 class="text-white">Work with Us</h5>
                </span>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
            </ul>
        </div>
    </footer>
</body>

</body>

</html>
