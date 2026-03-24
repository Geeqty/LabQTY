<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono&display=swap" rel="stylesheet">
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

            <h1 class="title hero-left d1">
                <span class="grad">Turning Ideas Into Code</span><br>
                <span class="blue">Portfolio Infrastructure</span>
            </h1>

            <p class="desc hero-left d2">
                I build web applications, game developer, and experimental projects
            </p>

            <p class="sub hero-left d3">
                Visit my GitHub to see my work and ongoing projects.
            </p>

            <div class="btns">

                <a href="https://github.com/Geeqty"
                    target="_blank"
                    class="btn1 github-btn hero-left d4">

                    Github >

                    <img src="{{ asset('img/github.png') }}" class="gh-icon">

                </a>

            </div>

        </div>


        <div class="right">
            <img src="{{ asset('img/Qty-Logo.png') }}" 
                class="hero-logo hero-right d5">
        </div>

    </div>

    <div class="scroll-down">

    <span></span>
    <span></span>

    </div>

</section>

{{-- ABOUT / HUD --}}

<section id="about" class="about-sec">

    <div class="about-box reveal-up">

        <h2 class="about-title">
            Developer Overview
        </h2>


        <div class="hud-bar">

        <div>
        <h3>1.5+</h3>
            <p>Years Coding</p>
        </div>

        <div>
            <h3>15+</h3>
             <p>Projects</p>
        </div>

        <div>
            <h3>3+</h3>
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

{{-- SECTION 3 --}}

<section class="section3">

    <div class="sec3-wrap">

        <div class="sec3-left sec3-anim-left">

            <div class="code-box">

                <pre>

class Developer {

    constructor() {
        this.name = "Gee";
        this.role = "Web & Game Developer";
        }

    build() {

        const web = "Laravel / JS";
        const game = "Roblox";
        const lab = "Experimental";

        return { web, game, lab };

    }
}
                </pre>

            </div>

        </div>



        <div class="sec3-right sec3-anim-right">

            <h2 class="sec3-title">
                Code is My Workspace
            </h2>

            <p class="sec3-desc">
                I build web applications, game systems, and experimental projects.
                My focus is creating clean UI, smooth experience,
                and creative development ideas.
            </p>

            <h3 class="sec3-sub">
                LabQTY Development Lab
            </h3>

            <p class="sec3-text">
                This portfolio is my personal lab where I test ideas,
                build projects, and improve my skills every day.
            </p>

        </div>

    </div>

</section>

<section class="section4">

    <div class="sec4-container reveal-up">

        <h2 class="sec4-title reveal-up">
            Development Projects
        </h2>

        <p class="sec4-sub reveal-up">
            Experimental Lab Infrastructure
        </p>

        <div class="sec4-cards">

            <div class="card card1 reveal-up">

                <h3>NIGHT SHIFT:</h3>

                <p class="link">
                    THE CAFE ANOMALY [HORROR]
                </p>

                <div class="inner">
                    Horror Experience 
                    Built in Roblox
                </div>

            </div>


            <div class="card card2 reveal-up">

                <h3>Sanggabuana</h3>

                <p class="link">
                    Mountain
                </p>

                <div class="inner">
                    Exploration Project Environment Build
                </div>

            </div>


            <div class="card card3 reveal-up">

                <h3>LAB SYSTEM</h3>

                <p class="link">
                    Experimental Project
                </p>

                <div class="inner">
                    In Development
                </div>

            </div>

        </div>

    </div>

</section>

<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>