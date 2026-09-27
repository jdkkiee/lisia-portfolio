/* =========================================================
   LISIA ZAHWA ALIFA — PORTFOLIO
   Interactive Portfolio JavaScript
   ========================================================= */


/* =========================================================
   01. INITIALIZATION
   ========================================================= */

document.documentElement.classList.add("js-enabled");


document.addEventListener("DOMContentLoaded", () => {

    initInteractiveBackground();

    initCursorGlow();

    initScrollReveal();

    initScrollProgress();

    initNavbar();

    initSmoothLinks();

    initProjectInteractions();

});


/* =========================================================
   02. INTERACTIVE PARTICLE BACKGROUND
   ========================================================= */

function initInteractiveBackground() {

    if (
        window.matchMedia(
            "(prefers-reduced-motion: reduce)"
        ).matches
    ) {
        return;
    }

    const background = document.createElement("div");

    background.id = "portfolio-background";

    document.body.prepend(background);


    /*
     * Desktop = more particles
     * Mobile = fewer particles
     */

    const isMobile = window.innerWidth < 768;

    const particleCount = isMobile ? 26 : 55;

    const particles = [];


    /*
     * Create particles
     */

    for (let i = 0; i < particleCount; i++) {

        const particle = document.createElement("span");

        particle.className = "portfolio-particle";


        const x =
            Math.random() * window.innerWidth;

        const y =
            Math.random() * document.documentElement.scrollHeight;


        const size =
            Math.random() * 3 + 2;


        const opacity =
            Math.random() * 0.35 + 0.1;


        particle.style.width =
            `${size}px`;

        particle.style.height =
            `${size}px`;

        particle.style.opacity =
            opacity;


        particle.style.setProperty(
            "--x",
            `${x}px`
        );

        particle.style.setProperty(
            "--y",
            `${y}px`
        );


        background.appendChild(particle);


        particles.push({
            element: particle,

            x,

            y,

            baseX: x,

            baseY: y,

            offset: Math.random() * Math.PI * 2,

            speed:
                Math.random() * 0.0005 + 0.0002
        });

    }


    /*
     * Mouse position
     */

    let mouseX =
        window.innerWidth / 2;

    let mouseY =
        window.innerHeight / 2;


    window.addEventListener(
        "mousemove",
        (event) => {

            mouseX = event.clientX;

            mouseY =
                event.clientY +
                window.scrollY;

        },
        {
            passive: true
        }
    );


    /*
     * Animation
     */

    let animationFrame;


    function animate(time) {

        const scrollY =
            window.scrollY;


        particles.forEach((particle) => {

            /*
             * Floating movement
             */

            const floatX =
                Math.sin(
                    time *
                    particle.speed +
                    particle.offset
                ) * 14;


            const floatY =
                Math.cos(
                    time *
                    particle.speed *
                    1.2 +
                    particle.offset
                ) * 14;


            let targetX =
                particle.baseX +
                floatX;

            let targetY =
                particle.baseY +
                floatY;


            /*
             * Cursor repulsion
             */

            const dx =
                targetX -
                mouseX;


            const dy =
                targetY -
                mouseY;


            const distance =
                Math.sqrt(
                    dx * dx +
                    dy * dy
                );


            const radius = 150;


            if (
                distance < radius &&
                distance > 0
            ) {

                const force =
                    (1 - distance / radius);


                targetX +=
                    (dx / distance) *
                    force *
                    45;


                targetY +=
                    (dy / distance) *
                    force *
                    45;

            }


            /*
             * Parallax based on scroll
             */

            const parallax =
                scrollY * 0.025;


            targetY -= parallax;


            /*
             * Smooth movement
             */

            particle.x +=
                (targetX - particle.x) *
                0.04;


            particle.y +=
                (targetY - particle.y) *
                0.04;


            particle.element.style.transform =
                `translate3d(
                    ${particle.x}px,
                    ${particle.y}px,
                    0
                )`;

        });


        animationFrame =
            requestAnimationFrame(animate);

    }


    animationFrame =
        requestAnimationFrame(animate);


    /*
     * Recalculate particles when resizing
     */

    window.addEventListener(
        "resize",
        () => {

            particles.forEach((particle) => {

                particle.baseX =
                    Math.random() *
                    window.innerWidth;

            });

        },
        {
            passive: true
        }
    );

}


/* =========================================================
   03. CURSOR GLOW
   ========================================================= */

function initCursorGlow() {

    if (
        window.matchMedia(
            "(pointer: coarse)"
        ).matches
    ) {
        return;
    }


    const glow =
        document.createElement("div");

    glow.id =
        "cursor-glow";


    document.body.appendChild(glow);


    let mouseX =
        window.innerWidth / 2;

    let mouseY =
        window.innerHeight / 2;


    let currentX =
        mouseX;

    let currentY =
        mouseY;


    window.addEventListener(
        "mousemove",
        (event) => {

            mouseX =
                event.clientX;

            mouseY =
                event.clientY;

            glow.style.opacity =
                "1";

        },
        {
            passive: true
        }
    );


    window.addEventListener(
        "mouseleave",
        () => {

            glow.style.opacity =
                "0";

        }
    );


    function animate() {

        currentX +=
            (mouseX - currentX) *
            0.12;


        currentY +=
            (mouseY - currentY) *
            0.12;


        glow.style.transform =
            `translate3d(
                ${currentX}px,
                ${currentY}px,
                0
            )`;


        requestAnimationFrame(
            animate
        );

    }


    animate();

}


/* =========================================================
   04. SCROLL REVEAL
   ========================================================= */

function initScrollReveal() {

    document.body.classList.add(
        "js-reveal-ready"
    );


    const elements =
        document.querySelectorAll(
            ".reveal, " +
            ".section-header, " +
            ".section-content, " +
            ".project-card, " +
            ".certification-item, " +
            ".experience-item, " +
            ".learning-item, " +
            ".outside-item"
        );


    if (!elements.length) {
        return;
    }


    const observer =
        new IntersectionObserver(
            (entries) => {

                entries.forEach(
                    (entry) => {

                        if (
                            entry.isIntersecting
                        ) {

                            entry.target.classList.add(
                                "is-visible"
                            );


                            observer.unobserve(
                                entry.target
                            );

                        }

                    }
                );

            },
            {
                threshold: 0.12,

                rootMargin:
                    "0px 0px -40px 0px"
            }
        );


    elements.forEach(
        (element, index) => {

            /*
             * Small stagger effect
             */

            const delay =
                Math.min(
                    index * 35,
                    280
                );


            element.style.transitionDelay =
                `${delay}ms`;


            observer.observe(
                element
            );

        }
    );

}


/* =========================================================
   05. SCROLL PROGRESS
   ========================================================= */

function initScrollProgress() {

    const progress =
        document.createElement("div");

    progress.id =
        "scroll-progress";


    document.body.appendChild(
        progress
    );


    let ticking = false;


    function updateProgress() {

        const scrollTop =
            window.scrollY;


        const documentHeight =
            document.documentElement
                .scrollHeight -
            window.innerHeight;


        const percentage =
            documentHeight > 0
                ? (scrollTop / documentHeight) * 100
                : 0;


        progress.style.width =
            `${percentage}%`;


        ticking = false;

    }


    window.addEventListener(
        "scroll",
        () => {

            if (!ticking) {

                window.requestAnimationFrame(
                    updateProgress
                );

                ticking = true;

            }

        },
        {
            passive: true
        }
    );


    updateProgress();

}


/* =========================================================
   06. NAVBAR SCROLL EFFECT
   ========================================================= */

function initNavbar() {

    const nav =
        document.querySelector(
            "nav, .navbar, .site-nav"
        );


    if (!nav) {
        return;
    }


    function updateNavbar() {

        nav.classList.toggle(
            "scrolled",
            window.scrollY > 20
        );

    }


    window.addEventListener(
        "scroll",
        updateNavbar,
        {
            passive: true
        }
    );


    updateNavbar();

}


/* =========================================================
   07. SMOOTH ANCHOR LINKS
   ========================================================= */

function initSmoothLinks() {

    const links =
        document.querySelectorAll(
            'a[href^="#"]'
        );


    links.forEach(
        (link) => {

            link.addEventListener(
                "click",
                (event) => {

                    const targetId =
                        link.getAttribute(
                            "href"
                        );


                    if (
                        !targetId ||
                        targetId === "#"
                    ) {
                        return;
                    }


                    const target =
                        document.querySelector(
                            targetId
                        );


                    if (!target) {
                        return;
                    }


                    event.preventDefault();


                    const offset =
                        75;


                    const targetPosition =
                        target.getBoundingClientRect()
                            .top +
                        window.scrollY -
                        offset;


                    window.scrollTo({

                        top:
                            targetPosition,

                        behavior:
                            "smooth"

                    });


                    /*
                     * Update URL
                     * without jumping
                     */

                    history.replaceState(
                        null,
                        "",
                        targetId
                    );

                }
            );

        }
    );

}


/* =========================================================
   08. PROJECT INTERACTIONS
   ========================================================= */

function initProjectInteractions() {

    const cards =
        document.querySelectorAll(
            ".project-card"
        );


    cards.forEach(
        (card) => {

            card.addEventListener(
                "mouseenter",
                () => {

                    card.style.setProperty(
                        "--hover-scale",
                        "1"
                    );

                }
            );


            card.addEventListener(
                "mousemove",
                (event) => {

                    if (
                        window.innerWidth < 900
                    ) {
                        return;
                    }


                    const rect =
                        card.getBoundingClientRect();


                    const x =
                        event.clientX -
                        rect.left;


                    const y =
                        event.clientY -
                        rect.top;


                    const rotateX =
                        ((y / rect.height) -
                            0.5) *
                        -1.8;


                    const rotateY =
                        ((x / rect.width) -
                            0.5) *
                        1.8;


                    card.style.transform =
                        `perspective(900px)
                         rotateX(${rotateX}deg)
                         rotateY(${rotateY}deg)
                         translateY(-4px)`;

                }
            );


            card.addEventListener(
                "mouseleave",
                () => {

                    card.style.transform =
                        "";

                }
            );

        }
    );

}


/* =========================================================
   09. SECTION BACKGROUND MOVEMENT
   ========================================================= */

window.addEventListener(
    "scroll",
    () => {

        const scrollY =
            window.scrollY;


        const background =
            document.querySelector(
                "#portfolio-background"
            );


        if (!background) {
            return;
        }


        const shift =
            Math.min(
                scrollY * 0.03,
                180
            );


        background.style.setProperty(
            "--scroll-shift",
            `${shift}px`
        );

    },
    {
        passive: true
    }
);


/* =========================================================
   10. IMAGE LOADING
   ========================================================= */

document.addEventListener(
    "DOMContentLoaded",
    () => {

        const images =
            document.querySelectorAll(
                "img"
            );


        images.forEach(
            (image) => {

                image.addEventListener(
                    "error",
                    () => {

                        image.style.opacity =
                            "0.5";

                    }
                );

            }
        );

    }
);