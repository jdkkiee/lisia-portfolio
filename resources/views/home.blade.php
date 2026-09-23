@extends('layouts.app')

@section('content')

<nav class="navbar">
    <div class="container navbar-inner">
        <a href="#" class="logo">Lisia Zahwa ALifa</a>

        <div class="nav-links">
            <a href="#about">About</a>
            <a href="#experience">Experience</a>
            <a href="#projects">Projects</a>
            <a href="#learning">Learning</a>
            <a href="#certifications">Certifications</a>
            <a href="#contact">Contact</a>
        </div>
    </div>
</nav>


{{-- HERO --}}
<section class="hero">
    <div class="container">
        <div class="hero-content">

            <p class="location">Based in Padang, Indonesia</p>

            <h1>
                Hi, I'm<br>
                Lisia Zahwa Alifa.
            </h1>

            <p class="hero-description">
                I'm an Informatics student at Universitas Negeri Padang,
                building practical web applications and digital solutions.
                while exploring web development and software engineering.
            </p>

            <div class="hero-buttons">
                <a href="#projects" class="btn btn-primary">
                    View my work
                </a>

                <a
                    href="https://www.linkedin.com/in/lisia-zahwa-alifa-9136a0386/"
                    target="_blank"
                    class="btn btn-secondary"
                >
                    LinkedIn ↗
                </a>
            </div>

        </div>
    </div>
</section>


{{-- ABOUT --}}
<section class="section" id="about">
    <div class="container">

        <div class="section-header">
            <span class="section-number">01</span>

            <h2 class="section-title">
                A little about me
            </h2>
        </div>

        <div class="section-content">

            <p>
                I'm an Informatics student at Universitas Negeri Padang,
                currently exploring programming, web development,
                and software engineering.
            </p>

            <p>
                Most of what I build so far comes from university coursework,
                small experiments, and my curiosity about how digital products work.
            </p>

            <p>
                Outside programming, I enjoy creating content, drawing,
                designing, reading, and exploring new places.
            </p>

        </div>

    </div>
</section>


{{-- EXPERIENCE --}}
<section class="section" id="experience">
    <div class="container">

        <div class="section-header">
            <span class="section-number">02</span>

            <h2 class="section-title">
                Experience
            </h2>
        </div>


        <div class="experience-item">

            <div class="experience-date">
                2026 — Present
            </div>

            <div>
                <h3 class="experience-title">
                    KOL Content Creator
                </h3>

                <p class="experience-company">
                    Analitica
                </p>

                <p class="experience-description">
                    Creating educational content around TKA, SNBT,
                    and university entrance preparation.
                </p>
            </div>

        </div>


        <div class="experience-item">

            <div class="experience-date">
                2026 — Present
            </div>

            <div>
                <h3 class="experience-title">
                    UGC Creator
                </h3>

                <p class="experience-company">
                    aimasukptn
                </p>

                <p class="experience-description">
                    Creating short-form educational content for students
                    preparing for university entrance exams.
                </p>
            </div>

        </div>


        <div class="experience-item">

            <div class="experience-date">
                2026
            </div>

            <div>
                <h3 class="experience-title">
                    Quality Assurance Tester
                </h3>

                <p class="experience-company">
                    aimasukptn
                </p>

                <p class="experience-description">
                    Testing digital products and helping identify
                    issues during product development.
                </p>
            </div>

        </div>

    </div>
</section>


{{-- PROJECTS --}}
<section class="section" id="projects">
    <div class="container">

        <div class="section-header">
            <span class="section-number">03</span>

            <h2 class="section-title">
                Selected projects
            </h2>
        </div>

        <div class="projects">

            <article class="project-card project-featured">

                <div class="project-top">
                    <span class="project-number">01</span>

                    <span class="project-status">
                        Coursework
                    </span>
                </div>

                <article class="project-card project-featured">
                    <div class="project-top">
                        <span class="project-number">01</span>
                        <span class="project-status">Coursework</span>
                    </div>

                    <h3 class="project-title">Laravel Poliklinik</h3>

                    <p class="project-description">
                        A web application developed as part of my university coursework
                        while learning Laravel, PHP, database integration, and CRUD operations.
                    </p>

                    <div class="project-tech">
                        <span class="tech">Laravel</span>
                        <span class="tech">PHP</span>
                        <span class="tech">MySQL</span>
                        <span class="tech">Blade</span>
                    </div>

                    <div class="project-links">
                        <a
                            href="https://github.com/jdkkiee/laravel-poliklinik"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="project-link"
                        >
                            View project ↗
                        </a>
                    </div>
                </article>

                

                

            </article>


            <article class="project-card">
                <div class="project-top">
                    <span class="project-number">02</span>
                    <span class="project-status">Coursework</span>
                </div>

                <h3 class="project-title">Website Promo</h3>

                <p class="project-description">
                    A university project focused on design, laravel and php.
                </p>

                <div class="project-tech">
                    <span class="tech">LARAVEL</span>
                    <span class="tech">MySQL</span>
                    <span class="tech">PHP</span>
                    <span class="tech">Website Promo</span>
                </div>

                <div class="project-links">
                    <a
                        href="https://github.com/jdkkiee/website-promo.git"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="project-link"
                    >
                        View project ↗
                    </a>
                </div>
            </article>

            


            <article class="project-card">

                <div class="project-top">
                    <span class="project-number">03</span>

                    <span class="project-status">
                        Personal
                    </span>
                </div>

                <h3 class="project-title">
                    Personal Portfolio
                </h3>

                <p class="project-description">
                    My personal portfolio website for documenting my
                    projects, learning progress, experience, and
                    journey as an Informatics student.
                </p>

                <div class="project-tech">
                    <span class="tech">Laravel</span>
                    <span class="tech">Blade</span>
                    <span class="tech">CSS</span>
                    <span class="tech">Vite</span>
                </div>

                <div class="project-links">
                    <a href="#" class="project-link">
                        You're here ↗
                    </a>
                </div>

            </article>

        </div>

    </div>
</section>
 
   

{{-- CURRENTLY LEARNING --}}
<section class="section" id="learning">
    <div class="container">

        <div class="section-header">
            <span class="section-number">04</span>

            <h2 class="section-title">
                Currently learning
            </h2>
        </div>

        <div class="section-content">

            <p>
                I'm still figuring out what area of software development
                I want to focus on. For now, I'm building my foundation
                across programming, web development, and computer science.
            </p>

            <div class="learning-list">

                <div class="learning-item">
                    <span>01</span>
                    <strong>Web Development</strong>
                    <small>HTML · CSS · JavaScript · PHP · Laravel</small>
                </div>

                <div class="learning-item">
                    <span>02</span>
                    <strong>Programming</strong>
                    <small>C · Python · Programming Fundamentals</small>
                </div>

                <div class="learning-item">
                    <span>03</span>
                    <strong>Computer Science</strong>
                    <small>Algorithms · Complexity · Databases</small>
                </div>

                <div class="learning-item">
                    <span>04</span>
                    <strong>Systems</strong>
                    <small>Computer Networks · Operating Systems</small>
                </div>

                <div class="learning-item">
                    <span>05</span>
                    <strong>Developer Tools</strong>
                    <small>Git · GitHub · VS Code</small>
                </div>

            </div>

        </div>

    </div>
</section>

```blade
                    {{-- CERTIFICATIONS --}}
                    <section class="section" id="certifications">
                        <div class="container">

                            <div class="section-header">
                                <span class="section-number">05</span>

                                <h2 class="section-title">
                                    Certifications
                                </h2>
                            </div>

                            <div class="section-content">

                                <p>
                                    A collection of courses and learning programs I've completed
                                    while exploring programming, AI, and technology.
                                </p>

                                <div class="certification-list">

                                    {{-- 01 — Python Basics --}}
                                    <div class="certification-item">
                                        <div>
                                            <h3>Python Basics</h3>

                                            <div class="certification-meta">
                                                <img
                                                    src="{{ asset('images/coursera.png') }}"
                                                    alt="Coursera"
                                                    class="certification-logo"
                                                >

                                                <span>Coursera · 2026</span>
                                            </div>
                                        </div>

                                        <div class="certification-right">
                                            <span>01</span>

                                            <a
                                                href="{{ asset('certificates/python-basic.pdf') }}"
                                                target="_blank"
                                                rel="noopener noreferrer"
                                                class="certificate-link"
                                            >
                                                View certificate↗
                                            </a>
                                        </div>
                                    </div>


                                    {{-- 02 — Classifying Data Using IBM Granite --}}
                                    <div class="certification-item">
                                        <div>
                                            <h3>Classifying Data Using IBM Granite</h3>

                                            <div class="certification-meta">
                                                <img
                                                    src="{{ asset('images/ibm.jpg') }}"
                                                    alt="IBM"
                                                    class="certification-logo"
                                                >

                                                <span>IBM · 2026</span>
                                            </div>
                                        </div>

                                        <div class="certification-right">
                                            <span>02</span>

                                            <a
                                                href="{{ asset('certificates/Getting Started with AI.pdf') }}"
                                                target="_blank"
                                                rel="noopener noreferrer"
                                                class="certificate-link"
                                            >
                                                View certificate↗
                                            </a>
                                        </div>
                                    </div>


                                    {{-- 03 — Microsoft Azure AI Foundry --}}
                                    <div class="certification-item">
                                        <div>
                                            <h3>
                                                Menciptakan Copilot Pribadi dengan Azure AI Foundry
                                            </h3>

                                            <div class="certification-meta">
                                                <img
                                                    src="{{ asset('images/microsoft.webp') }}"
                                                    alt="Microsoft"
                                                    class="certification-logo"
                                                >

                                                <span>Microsoft · 2025</span>
                                            </div>
                                        </div>

                                        <div class="certification-right">
                                            <span>03</span>

                                            <a
                                                href="{{ asset('certificates/Menciptakan copailot.pdf') }}"
                                                target="_blank"
                                                rel="noopener noreferrer"
                                                class="certificate-link"
                                            >
                                                View certificate↗
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </section>
                    {{-- END CERTIFICATIONS --}}
                    ```


                    {{-- OUTSIDE CODE --}}
                    <section class="section">
                        <div class="container">

                            <div class="section-header">
                                <span class="section-number">05</span>

                                <h2 class="section-title">
                                    Outside the code
                                </h2>
                            </div>

                            <div class="section-content">

                                <p>
                                    When I'm away from my laptop, I like drawing, designing,
                                    painting, reading, creating content, and exploring new places.
                                </p>

                                <p>
                                    I think these things also influence how I approach
                                    technology — especially when it comes to visual design
                                    and creating things that feel simple and useful.
                                </p>

                            </div>

                        </div>
                    </section>


                    {{-- CONTACT --}}
                    <section class="contact" id="contact">
                        <div class="container">

                            <h2>
                                Let's build something.
                            </h2>

                            <p>
                                I'm currently learning, building projects, and looking
                                for opportunities to grow through real-world experience.
                            </p>

                            <div class="hero-buttons">

                                <a
                                    href="mailto:lisiazahwaalifa@gmail.com"
                                    class="btn btn-primary"
                                >
                                    Get in touch
                                </a>

                                <a
                                    href="https://www.linkedin.com/in/lisia-zahwa-alifa-9136a0386/"
                                    target="_blank"
                                    class="btn btn-secondary"
                                >
                                    LinkedIn ↗
                                </a>

                            </div>

                        </div>
                    </section>


<footer class="footer">
    <div class="container footer-inner">

        <span>
            © {{ date('Y') }} Lisia Zahwa Alifa
        </span>

        <span>
            Built with Laravel
        </span>

    </div>
</footer>

@endsection