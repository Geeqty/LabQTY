<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="font-sans bg-gradient-to-br from-[#f4f6ff] via-[#eef3ff] to-[#f8f9ff]">


{{-- NAVBAR --}}
<nav id="navbar" class="w-full">

    <div class="nav-wrap">

        <div class="text-2xl font-bold">
            LabQTY
        </div>

        <div class="space-x-8 text-gray-600">
            <a href="#">About</a>
            <a href="#">Support</a>
            <a href="#">Developers</a>
            <a href="#">Ecosystem</a>
        </div>

        <a href="https://instagram.com/gee.qty"
             target="_blank"
             class="btn-connect">

             <img src="{{ asset('img/instagram.png') }}" class="connect-icon">

        </a>

    </div>

</nav>



{{-- HERO --}}
<section class="hero">

    <div class="hero-wrap">

        <div class="left">

            <h1 class="title">
                <span class="grad">Turning Ideas Into Code</span><br>
                <span class="blue">Portfolio Infrastructure</span>
            </h1>

            <p class="desc">
                I build web applications, game developer, and experimental projects
            </p>

            <p class="sub">
                Visit my GitHub to see my work and ongoing projects.
            </p>

            <div class="btns">

                <a href="https://github.com/Geeqty"
                   target="_blank"
                   class="btn1 github-btn">

                    Github >

                    <img src="{{ asset('img/github.png') }}" class="gh-icon">

                </a>

            </div>

        </div>


        <div class="right">
            <img src="/img/hero.png">
        </div>

    </div>

</section>


<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>