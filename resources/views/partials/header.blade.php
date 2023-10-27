<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel model controller</title>

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
