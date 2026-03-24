document.addEventListener("DOMContentLoaded", () => {
    /* =========================
       NAVBAR SCROLL (optimized)
    ========================= */

    const nav = document.getElementById("navbar");

    window.addEventListener(
        "scroll",
        () => {
            if (!nav) return;

            if (window.scrollY > 50) {
                nav.classList.add("nav-scroll");
            } else {
                nav.classList.remove("nav-scroll");
            }
        },
        { passive: true },
    );

    /* =========================
       SMOOTH SCROLL ARROW (FIX BUG OFFSET)
    ========================= */

    const arrow = document.querySelector(".scroll-down");

    if (arrow) {
        arrow.addEventListener("click", () => {
            const about = document.querySelector("#about");
            const nav = document.getElementById("navbar");

            if (!about) return;

            requestAnimationFrame(() => {
                const navHeight = nav ? nav.offsetHeight : 0;

                const top =
                    about.getBoundingClientRect().top +
                    window.pageYOffset -
                    navHeight -
                    10;

                window.scrollTo({
                    top: top,
                    behavior: "smooth",
                });
            });
        });
    }

    /* =========================
       REVEAL ANIMATION (ABOUT)
    ========================= */

    const revealElements = document.querySelectorAll(".reveal-up");

    if (revealElements.length > 0) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (
                        entry.isIntersecting &&
                        !entry.target.classList.contains("active")
                    ) {
                        entry.target.classList.add("active");
                    }
                });
            },
            {
                threshold: 0.35,
            },
        );

        revealElements.forEach((el) => observer.observe(el));
    }

    /* =========================
       HERO ANIMATION
    ========================= */

    const hero = document.querySelector(".hero");

    if (hero) {
        const left = hero.querySelectorAll(".hero-left");
        const right = hero.querySelectorAll(".hero-right");

        const heroObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        left.forEach((el) => el.classList.add("active"));
                        right.forEach((el) => el.classList.add("active"));
                    }
                });
            },
            { threshold: 0.2 },
        );

        heroObserver.observe(hero);
    }

    /* =========================
       SECTION 3 ANIMATION
    ========================= */

    const section3 = document.querySelector(".section3");

    if (section3) {
        const left = section3.querySelector(".sec3-anim-left");
        const right = section3.querySelector(".sec3-anim-right");

        const sec3Observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        if (left) left.classList.add("active");

                        setTimeout(() => {
                            if (right) right.classList.add("active");
                        }, 150);
                    }
                });
            },
            {
                threshold: 0.55,
            },
        );

        sec3Observer.observe(section3);
    }
});
