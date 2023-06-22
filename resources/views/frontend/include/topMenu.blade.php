<!-- ========== PRE-LOADER START ========== -->
<div class="preloader">
    <div class="loader"></div>
</div>
<!-- ========== PRE-LOADER END ========== -->
<!-- =========================== NAVBER PART START =========================== -->
<nav class="navbar navbar-expand-xl">
    <div class="container">
        <div class="logo-area">
            <div class="logo">
                <a class="navbar-brand white" href="{{route('home')}}">
                    <img src="{{ asset('/') }}assets/frontend/images/BICM-Logo.png" height="" width="" alt="Bicm Logo" />
                </a>
                <a class="navbar-brand black" href="{{route('home')}}">
                    <img src="{{ asset('/') }}assets/frontend/images/bicmLogo_white.png" height="" width="" alt="Bicm Logo" />
                </a>
            </div>

        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item Engagement_Dropdown{{ (request()->is('service*')) ? 'active' : '' }}">
                    <a class="nav-link" href="#">About</a>
                    <div class="engagement_dropdown">
                        <ul>
                            <li><a href="#">Mission & Vision</a></li>
                            <li><a href="#">Board of Directors</a></li>
                            <li><a href="#">Faculty Members</a></li>
                            <li><a href="#">Registrar’s Office</a></li>
                            <li><a href="#">Resources</a></li>
                            <li><a href="#">Webmail</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ (request()->is('masters-program')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('mastersProgram')}}">Master’s Program</a>
                </li>
                <li class="nav-item {{ (request()->is('diploma*')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('diploma')}}">Diploma</a>
                </li>

                <li class="nav-item Engagement_Dropdown {{ (request()->is('certificationTraining')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('certificationTraining')}}">Certification and Training</a>
                    <div class="engagement_dropdown">
                        <ul>
                            <li><a href="#">Certificate Courses</a></li>
                            <li><a href="#">Certification Program</a></li>
                            <li><a href="#">Online Course</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item Engagement_Dropdown padding {{ (request()->is('resource*')) ? 'active' : '' }}">
                    <a class="nav-link" href="">Research and Publication</a>
                    <div class="engagement_dropdown">
                        <ul>
                            <li><a href="#">Working Papers</a></li>
                            <li><a href="#">Policy Papers</a></li>
                            <li><a href="#">Faculty Publication</a></li>
                            <li><a href="#">Financial Market Review</a></li>
                            <li><a href="#">BICM Jounral</a></li>
                            <li><a href="#">Research Seminar Series</a></li>
                            <li><a href="#">ICSFI 2021</a></li>
                            <li><a href="#">BICM RESEARCH GRANT</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item Engagement_Dropdown padding {{ (request()->is('Company*')) ? 'active' : '' }}">
                    <a class="nav-link" href="#">D-Library</a>
                </li>
                <li class="nav-item Engagement_Dropdown padding {{ (request()->is('Company*')) ? 'active' : '' }}">
                    <a class="nav-link" href="#">Online Service</a>
                </li>
                <li class="nav-item Engagement_Dropdown padding {{ (request()->is('Company*')) ? 'active' : '' }}">
                    <a class="nav-link" href="#">Tender</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- =========================== NAVBER PART END =========================== -->

<section id="mob_menu">

    <div class="mob_nav_logo">
                <span class="mob_logo">
                <img src="{{ asset('/') }}assets/frontend/images/BICM-Logo.png" height="" width="" alt="Bicm Logo" />
            </span>

        <span class="mob_nav_cross pull-right">
                        <a>
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                <path d="M10.6491 9.0146L17.6579 2.00554C18.114 1.54963 18.114 0.812491 17.6579 0.356581C17.202 -0.0993291 16.4649 -0.0993291 16.009 0.356581L8.9999 7.36564L1.99106 0.356581C1.53493 -0.0993291 0.798003 -0.0993291 0.342093 0.356581C-0.114031 0.812491 -0.114031 1.54963 0.342093 2.00554L7.35094 9.0146L0.342093 16.0237C-0.114031 16.4796 -0.114031 17.2167 0.342093 17.6726C0.5693 17.9 0.868044 18.0143 1.16657 18.0143C1.46511 18.0143 1.76364 17.9 1.99106 17.6726L8.9999 10.6636L16.009 17.6726C16.2364 17.9 16.5349 18.0143 16.8334 18.0143C17.132 18.0143 17.4305 17.9 17.6579 17.6726C18.114 17.2167 18.114 16.4796 17.6579 16.0237L10.6491 9.0146Z" fill="black"/>
                                </g>
                                <defs>
                                <clipPath id="clip0">
                                <rect width="18" height="18" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                        </a>
                    </span>

    </div>
    <nav class="nav mob_nav_" role="navigation">
        <ul class="nav__list">
            <li><a href="{{route('home')}}">Home</a></li>
            <li>
                <input id="group-20" type="checkbox" hidden />
                <label for="group-20"><span class=""><svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.46875 8.9375C6.75 9.21875 7.21875 9.21875 7.5 8.9375L13.5938 2.875C13.875 2.5625 13.875 2.09375 13.5938 1.8125L12.875 1.09375C12.5938 0.8125 12.125 0.8125 11.8125 1.09375L7 5.90625L2.15625 1.09375C1.84375 0.8125 1.375 0.8125 1.09375 1.09375L0.375 1.8125C0.09375 2.09375 0.09375 2.5625 0.375 2.875L6.46875 8.9375Z" fill="#BBBBBB"/>
                    </svg>
                    </span> <p>About </p></label>
                <ul class="sub-group-list">
                    <li><a href="#">Mission & Vision</a></li>
                    <li><a href="#">Board of Directors</a></li>
                    <li><a href="#">Faculty Members</a></li>
                    <li><a href="#">Registrar’s Office</a></li>
                    <li><a href="#">Resources</a></li>
                    <li><a href="#">Webmail</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="{{route('mastersProgram')}}">Masters’s Program</a></li>
            <li><a href="{{route('diploma')}}">Diploma</a></li>
            <li>
                <input id="group-200" type="checkbox" hidden />
                <label for="group-200"><span class=""><svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.46875 8.9375C6.75 9.21875 7.21875 9.21875 7.5 8.9375L13.5938 2.875C13.875 2.5625 13.875 2.09375 13.5938 1.8125L12.875 1.09375C12.5938 0.8125 12.125 0.8125 11.8125 1.09375L7 5.90625L2.15625 1.09375C1.84375 0.8125 1.375 0.8125 1.09375 1.09375L0.375 1.8125C0.09375 2.09375 0.09375 2.5625 0.375 2.875L6.46875 8.9375Z" fill="#BBBBBB"/>
                    </svg>
                    </span> <p>Certification and Training </p></label>
                <ul class="sub-group-list">
                    <li><a href="#">Certificate Courses</a></li>
                    <li><a href="#">Certification Program</a></li>
                    <li><a href="#">Online Course</a></li>
                </ul>
            </li>
            <li>
                <input id="group-201" type="checkbox" hidden />
                <label for="group-201"><span class=""><svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.46875 8.9375C6.75 9.21875 7.21875 9.21875 7.5 8.9375L13.5938 2.875C13.875 2.5625 13.875 2.09375 13.5938 1.8125L12.875 1.09375C12.5938 0.8125 12.125 0.8125 11.8125 1.09375L7 5.90625L2.15625 1.09375C1.84375 0.8125 1.375 0.8125 1.09375 1.09375L0.375 1.8125C0.09375 2.09375 0.09375 2.5625 0.375 2.875L6.46875 8.9375Z" fill="#BBBBBB"/>
                    </svg>
                    </span> <p>Research and Publication </p></label>
                <ul class="sub-group-list">
                    <li><a href="#">Working Papers</a></li>
                    <li><a href="#">Policy Papers</a></li>
                    <li><a href="#">Faculty Publication</a></li>
                    <li><a href="#">Financial Market Review</a></li>
                    <li><a href="#">BICM Jounral</a></li>
                    <li><a href="#">Research Seminar Series</a></li>
                    <li><a href="#">ICSFI 2021</a></li>   
                    <li><a href="#">BICM RESEARCH GRANT</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="{{route('mastersProgram')}}">D-Library</a></li>
            <li><a class="nav-link" href="{{route('mastersProgram')}}">Online Service</a></li>
            <li><a class="nav-link" href="{{route('mastersProgram')}}">Tender</a></li>
        </ul>
    </nav>
</section>
