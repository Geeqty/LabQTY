document.addEventListener("DOMContentLoaded", () => {
    /* =========================
       NAVBAR SCROLL
    ========================= */

    const nav = document.getElementById("navbar");

    let ticking = false;

    window.addEventListener(
        "scroll",
        () => {
            if (!ticking) {
                requestAnimationFrame(() => {
                    if (nav) {
                        if (window.scrollY > 50) {
                            nav.classList.add("nav-scroll");
                        } else {
                            nav.classList.remove("nav-scroll");
                        }
                    }

                    ticking = false;
                });

                ticking = true;
            }
        },
        { passive: true },
    );

    /* HERO */

    const hero = document.querySelector(".hero");

    if (hero) {
        const heroLeft = hero.querySelectorAll(".hero-left");
        const heroRight = hero.querySelectorAll(".hero-right");

        requestAnimationFrame(() => {
            heroLeft.forEach((el) => el.classList.add("active"));
            heroRight.forEach((el) => el.classList.add("active"));
        });
    }

    /* REVEAL */

    const revealElements = document.querySelectorAll(".reveal-up");

    const observer = new IntersectionObserver(
        (entries, obs) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("active");
                    obs.unobserve(entry.target);
                }
            });
        },
        {
            threshold: 0.15,
        },
    );

    revealElements.forEach((el) => observer.observe(el));

    /* SCROLL ARROW */

    const arrow = document.querySelector(".scroll-down");

    if (arrow) {
        arrow.addEventListener("click", () => {
            const about = document.querySelector("#about");

            if (!about) return;

            window.scrollTo({
                top: about.offsetTop - 80,
                behavior: "smooth",
            });
        });
    }

    /* SECTION 3 */

    const section3 = document.querySelector(".section3");

    if (section3) {
        const left = section3.querySelector(".sec3-anim-left");
        const right = section3.querySelector(".sec3-anim-right");

        const sec3Observer = new IntersectionObserver(
            (entries, obs) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        if (left) left.classList.add("active");

                        setTimeout(() => {
                            if (right) right.classList.add("active");
                        }, 120);

                        obs.unobserve(entry.target);
                    }
                });
            },
            {
                threshold: 0.2,
            },
        );

        sec3Observer.observe(section3);
    }
});
