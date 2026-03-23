<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="">


{{-- NAVBAR --}}
<nav id="navbar" class="w-full">

    <div class="nav-wrap">

        <div class="text-2xl font-bold logo-text">
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

            <h1 class="title reveal-left r1">
                <span class="grad">Turning Ideas Into Code</span><br>
                <span class="blue">Portfolio Infrastructure</span>
            </h1>

            <p class="desc reveal-left r2">
                I build web applications, game developer, and experimental projects
            </p>

            <p class="sub reveal-left r3">
                Visit my GitHub to see my work and ongoing projects.
            </p>

            <div class="btns">

                <a href="https://github.com/Geeqty"
                    target="_blank"
                    class="btn1 github-btn reveal-left r4">

                    Github >

                    <img src="{{ asset('img/github.png') }}" class="gh-icon">

                </a>

            </div>

        </div>


        <div class="right">
            <img src="{{ asset('img/Qty-Logo.png') }}" 
                class="hero-logo reveal-right">
        </div>

    </div>

    <div class="scroll-down">

    <span></span>
    <span></span>

    </div>

</section>

{{-- ABOUT / HUD --}}

<section id="about" class="about-sec reveal-up">

    <div class="about-box">

        <h2 class="about-title">
            Developer Overview
        </h2>


        <div class="hud-bar">

        <div>
        <h3>1.5+</h3>
            <p>Years Coding</p>
        </div>

        <div>
            <h3>10+</h3>
             <p>Projects</p>
        </div>

        <div>
            <h3>5+</h3>
            <p>Languages</p>
        </div>

        <div>
            <h3>∞</h3>
            <p>Learning</p>
        </div>

        </div>


        <div class="about-grid">

            <div class="about-card">
                Web Developer
            </div>

            <div class="about-card">
                Game Developer
            </div>

            <div class="about-card">
                Laravel & PHP
            </div>

            <div class="about-card">
                Experimental Projects
            </div>

        </div>

    </div>

</section>


<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>