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
       SMOOTH SCROLL ARROW
    ========================= */

    const arrow = document.querySelector(".scroll-down");

    if (arrow) {
        arrow.addEventListener("click", () => {
            const about = document.querySelector("#about");

            if (!about) return;

            about.scrollIntoView({
                behavior: "smooth",
                block: "start",
            });
        });
    }

    /* =========================
       REVEAL ANIMATION (PRO)
    ========================= */

    const revealElements = document.querySelectorAll(".reveal-up");

    if (revealElements.length > 0) {
        const observer = new IntersectionObserver(
            (entries, obs) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("active");

                        // stop observing after reveal (lebih ringan)
                        obs.unobserve(entry.target);
                    }
                });
            },
            {
                root: null,
                threshold: 0.15,
                rootMargin: "0px 0px -50px 0px",
            },
        );

        revealElements.forEach((el) => observer.observe(el));
    }
});
