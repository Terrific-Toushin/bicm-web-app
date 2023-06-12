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
                <li class="nav-item {{ (request()->is('mastersProgram')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('mastersProgram')}}">Masters’s Program</a>
                </li>
                <li class="nav-item {{ (request()->is('approch*')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('approch')}}">Diploma</a>
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
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="#">Get in touch</a></button>
            </form>
        </div>
    </div>
</nav>
<!-- =========================== NAVBER PART END =========================== -->

<section id="mob_menu">

    <div class="mob_nav_logo">
                <span class="mob_logo">
                <svg width="152" height="30" viewBox="0 0 152 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                    <path d="M151.034 19.6606H148.225V22.5503H151.034V19.6606Z" fill="#092138"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M146.07 20.714L144.528 19.1956C144.141 19.5865 143.704 19.9239 143.228 20.199C142.777 20.4369 142.277 20.5699 141.767 20.5882C141.257 20.6064 140.749 20.5094 140.281 20.3043C139.881 20.1208 139.522 19.8593 139.225 19.5351C138.925 19.2025 138.691 18.8153 138.538 18.3946C138.373 17.942 138.291 17.4633 138.295 16.9816C138.291 16.5102 138.374 16.0421 138.538 15.6003C138.691 15.1867 138.918 14.8043 139.208 14.4715C139.487 14.1489 139.829 13.8866 140.213 13.7006C140.615 13.5096 141.056 13.4124 141.502 13.4164C142.073 13.3977 142.638 13.5322 143.14 13.806C143.602 14.0817 144.024 14.4193 144.395 14.8093L145.981 13.0986C145.463 12.5257 144.843 12.0539 144.153 11.7073C143.456 11.3562 142.579 11.18 141.522 11.1789C140.748 11.1725 139.981 11.3225 139.266 11.62C138.552 11.9174 137.905 12.3561 137.364 12.9097C136.846 13.4462 136.434 14.076 136.15 14.7659C135.856 15.4819 135.707 16.2493 135.713 17.0234C135.706 17.7943 135.855 18.5587 136.15 19.2709C136.434 19.9558 136.846 20.5802 137.364 21.1103C137.89 21.6419 138.516 22.0647 139.206 22.3545C139.934 22.6618 140.718 22.816 141.509 22.8077C142.593 22.8077 143.486 22.6142 144.188 22.2274C144.897 21.838 145.533 21.3288 146.068 20.7224" fill="#092138"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M125.809 16.2775C125.809 15.4079 126.038 14.729 126.501 14.2474C126.732 14.0059 127.013 13.8162 127.323 13.6908C127.634 13.5655 127.968 13.5072 128.302 13.5199C129.056 13.5199 129.639 13.7557 130.052 14.2273C130.464 14.6939 130.668 15.3661 130.668 16.234V22.55H133.247V15.4614C133.247 14.1515 132.903 13.1102 132.214 12.3377C131.525 11.5651 130.549 11.1782 129.285 11.1771C128.889 11.1717 128.494 11.2252 128.113 11.336C127.779 11.439 127.46 11.587 127.165 11.7758C126.887 11.9504 126.632 12.1607 126.408 12.4012C126.189 12.6374 125.987 12.8901 125.806 13.1571V11.4096H123.239V22.55H125.816L125.809 16.2775Z" fill="#092138"/>
                    <path d="M119.557 7.78076H116.98V22.55H119.557V7.78076Z" fill="#092138"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M99.3814 17.8878H107.586C107.6 17.7607 107.611 17.6403 107.618 17.5283C107.625 17.4162 107.628 17.3025 107.628 17.1938C107.633 16.4149 107.52 15.6398 107.293 14.8945C107.085 14.196 106.744 13.5441 106.288 12.9748C105.835 12.4191 105.263 11.9722 104.614 11.6671C103.883 11.3293 103.085 11.1628 102.28 11.1805C101.522 11.1711 100.772 11.3299 100.083 11.6453C99.432 11.9467 98.847 12.3734 98.3617 12.9012C97.8699 13.436 97.4861 14.0606 97.2314 14.7407C96.9601 15.4622 96.8239 16.2274 96.8296 16.9982C96.8182 17.8107 96.969 18.6174 97.2733 19.3711C97.5474 20.052 97.9574 20.6701 98.4785 21.1876C98.9996 21.7051 99.6207 22.1112 100.304 22.3811C101.02 22.6654 101.784 22.8085 102.554 22.8025C103.471 22.8273 104.381 22.6323 105.207 22.234C105.939 21.8598 106.589 21.343 107.117 20.7139L105.61 19.3845C105.208 19.7864 104.744 20.1212 104.236 20.3761C103.719 20.6116 103.156 20.726 102.588 20.7106C101.819 20.732 101.069 20.4734 100.476 19.9831C99.8983 19.4982 99.5321 18.7986 99.3781 17.8845L99.3814 17.8878ZM99.3563 16.1955C99.4333 15.4067 99.764 14.6639 100.299 14.0785C100.549 13.8126 100.852 13.6027 101.19 13.4626C101.527 13.3225 101.89 13.2554 102.255 13.2658C102.643 13.2593 103.029 13.3386 103.383 13.4982C103.707 13.6474 103.997 13.8587 104.239 14.1203C104.486 14.3916 104.68 14.707 104.81 15.05C104.953 15.4187 105.046 15.8052 105.085 16.1989L99.3563 16.1955Z" fill="#092138"/>
                    <path d="M94.1203 7.14893H91.5433V22.5503H94.1203V7.14893Z" fill="#092138"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M88.2046 22.5503V7.14893H85.6276V13.1406C85.2012 12.603 84.6886 12.1396 84.1105 11.7693C83.5044 11.3747 82.7475 11.1774 81.835 11.1774C81.1734 11.1775 80.5182 11.3064 79.906 11.557C79.28 11.8114 78.7159 12.1969 78.2517 12.6874C77.7539 13.2153 77.3638 13.835 77.103 14.5118C76.8024 15.2994 76.6557 16.1373 76.671 16.98C76.6555 17.8237 76.8057 18.6622 77.1131 19.4483C77.3815 20.124 77.7745 20.7434 78.2718 21.2743C78.7337 21.7621 79.2942 22.1463 79.9161 22.4014C80.5242 22.6539 81.1764 22.7835 81.835 22.7827C82.634 22.8101 83.4228 22.5968 84.0988 22.1707C84.6956 21.7774 85.214 21.2766 85.6276 20.6941V22.5503H88.2046ZM85.6695 16.98C85.6781 17.4847 85.5883 17.9862 85.4049 18.4566C85.243 18.8734 85.0045 19.2562 84.7016 19.5854C84.2665 20.0524 83.6971 20.3731 83.0718 20.5034C82.4465 20.6337 81.7962 20.5671 81.2104 20.3128C80.8255 20.1447 80.4783 19.9013 80.189 19.5971C79.8849 19.2707 79.6492 18.887 79.4958 18.4683C79.3212 17.9918 79.2355 17.4874 79.2429 16.98C79.2348 16.4672 79.3205 15.9571 79.4958 15.475C79.6492 15.0564 79.8849 14.6726 80.189 14.3463C80.4772 14.0429 80.8249 13.8021 81.2104 13.6389C81.6009 13.4768 82.0199 13.3944 82.4428 13.3964C82.8658 13.3971 83.2841 13.4847 83.6718 13.6535C84.0595 13.8224 84.4083 14.069 84.6966 14.378C84.9995 14.7072 85.238 15.09 85.3999 15.5068C85.5844 15.9758 85.6759 16.4762 85.6695 16.98Z" fill="#092138"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M74.6415 16.9799C74.647 16.2053 74.4961 15.4375 74.1978 14.7224C73.9106 14.0342 73.4907 13.4092 72.962 12.8829C72.4236 12.3483 71.7845 11.9255 71.0816 11.6388C70.328 11.3302 69.5201 11.1756 68.7056 11.1839C67.8896 11.1758 67.0806 11.334 66.3279 11.6488C65.6263 11.9422 64.9883 12.3687 64.4492 12.9046C63.9168 13.4367 63.4931 14.0672 63.2017 14.7608C62.8982 15.4623 62.7378 16.2173 62.73 16.9814C62.7223 17.7456 62.8673 18.5036 63.1565 19.2111C63.4458 19.9186 63.8735 20.5613 64.4146 21.1016C64.9557 21.642 65.5994 22.069 66.3078 22.3578C67.8307 22.9648 69.5295 22.9612 71.0498 22.3478C72.465 21.7683 73.5931 20.6531 74.1877 19.2458C74.4926 18.5324 74.6471 17.7639 74.6415 16.9883V16.9799ZM72.0645 17.0301C72.0685 17.5011 71.9897 17.9692 71.8318 18.413C71.6856 18.8299 71.458 19.2136 71.162 19.5418C70.8514 19.8826 70.4713 20.153 70.0473 20.335C69.6234 20.517 69.1653 20.6063 68.7039 20.597C68.2364 20.6013 67.7735 20.5037 67.3476 20.311C66.9441 20.1269 66.5806 19.8656 66.2777 19.5418C65.9707 19.2081 65.7328 18.8171 65.5778 18.3913C65.4075 17.9432 65.3212 17.4676 65.3232 16.9883C65.3192 16.5178 65.3979 16.0502 65.556 15.607C65.7135 15.1793 65.957 14.7883 66.2717 14.4583C66.5864 14.1282 66.9654 13.8661 67.3855 13.6881C67.8055 13.5101 68.2577 13.4199 68.714 13.4233C69.1703 13.4266 69.621 13.5232 70.0385 13.7073C70.444 13.8933 70.8078 14.1589 71.1084 14.4883C71.4125 14.8244 71.6505 15.2147 71.81 15.6388C71.98 16.08 72.0663 16.549 72.0645 17.0217V17.0301Z" fill="#092138"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M60.762 16.9802C60.7753 15.8344 60.4428 14.7111 59.8079 13.7567C59.1729 12.8022 58.2649 12.0608 57.2021 11.629C56.4485 11.3205 55.6406 11.1658 54.8261 11.1742C54.0101 11.1657 53.201 11.3239 52.4484 11.639C51.7462 11.9338 51.1077 12.3614 50.568 12.8982C50.0366 13.4308 49.6136 14.0611 49.3222 14.7544C49.0176 15.4563 48.8564 16.2118 48.8481 16.9767C48.8398 17.7416 48.9846 18.5004 49.2739 19.2087C49.5632 19.917 49.9913 20.5604 50.533 21.1012C51.0746 21.642 51.719 22.0693 52.4283 22.3581C53.9512 22.9651 55.65 22.9615 57.1703 22.3481C58.5847 21.7673 59.7123 20.6525 60.3082 19.2461C60.6131 18.5326 60.7675 17.7642 60.762 16.9885V16.9802ZM58.185 17.0303C58.1882 17.5013 58.1094 17.9692 57.9523 18.4133C57.8058 18.83 57.5782 19.2136 57.2825 19.542C56.9853 19.8678 56.6246 20.1295 56.2226 20.3113C55.7835 20.5071 55.3069 20.6046 54.8261 20.5972C54.3585 20.6019 53.8956 20.5043 53.4698 20.3113C53.0662 20.1272 52.7027 19.8658 52.3998 19.542C52.0929 19.2084 51.855 18.8174 51.6999 18.3915C51.5289 17.9436 51.4426 17.4679 51.4454 16.9885C51.4413 16.518 51.5201 16.0505 51.6782 15.6073C51.8681 15.0697 52.1945 14.5905 52.6254 14.2166C53.0563 13.8428 53.5769 13.5869 54.1365 13.4742C54.696 13.3615 55.2753 13.3957 55.8176 13.5735C56.36 13.7513 56.8468 14.0666 57.2306 14.4885C57.5347 14.8243 57.7723 15.2147 57.9305 15.639C58.1005 16.0803 58.1868 16.5492 58.185 17.022V17.0303Z" fill="#092138"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M46.6281 15.1437C46.6367 14.1447 46.4424 13.1543 46.0571 12.2323C45.6882 11.3477 45.1378 10.5502 44.4412 9.89117C43.721 9.21526 42.8743 8.68791 41.9497 8.33933C40.9329 7.95838 39.8542 7.769 38.7682 7.78079H33.256V22.55H38.7699C39.8569 22.5622 40.9364 22.3687 41.9514 21.9798C42.8752 21.6257 43.7214 21.0958 44.4429 20.4196C45.1408 19.7571 45.6913 18.9555 46.0588 18.0668C46.4437 17.1406 46.6378 16.1464 46.6297 15.1437H46.6281ZM43.9054 15.1872C43.9132 15.8785 43.7876 16.565 43.5354 17.2089C43.301 17.8038 42.9471 18.3444 42.4955 18.7975C42.035 19.254 41.4833 19.6084 40.8764 19.8377C40.199 20.0919 39.48 20.2172 38.7565 20.2072H35.8329V10.1236H38.7548C39.4793 10.1135 40.1989 10.2424 40.8747 10.5032C41.4832 10.7395 42.0349 11.1014 42.4939 11.5651C42.9445 12.0218 43.2987 12.5643 43.5354 13.1604C43.7876 13.806 43.9127 14.4942 43.9037 15.1872H43.9054Z" fill="#092138"/>
                    <path d="M12.0174 12H6.00952V18H12.0174V12Z" fill="#4F81BD"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.00789 24V18H0V30H6.00789H18.9815V24H6.00789Z" fill="#4F81BD"/>
                    <path d="M18.9815 0H0V6H18.9815V0Z" fill="#4F81BD"/>
                    <path d="M24.9893 6H18.9814V24H24.9893V6Z" fill="#4F81BD"/>
                    </g>
                    <defs>
                    <clipPath id="clip0">
                    <rect width="151.034" height="30" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>
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

    <div class="mob_get_in_touch">
        <span>Let’s discuss your project</span>
        <a class="m_get_touch" href="Get_in_touch.html">Get In Touch </a>

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
            <li class=nav-item {{ (request()->is('mastersProgram')) ? 'active' : '' }}">
                <a class="nav-link" href="{{route('mastersProgram')}}">Masters’s Program</a>
            </li>
            <li><a href="{{route('technology')}}">Technology</a></li>
            <li><a href="{{route('approch')}}">Approach</a></li>
            <li>
                <input id="group-20" type="checkbox" hidden />
                <label for="group-20"><span class=""><svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.46875 8.9375C6.75 9.21875 7.21875 9.21875 7.5 8.9375L13.5938 2.875C13.875 2.5625 13.875 2.09375 13.5938 1.8125L12.875 1.09375C12.5938 0.8125 12.125 0.8125 11.8125 1.09375L7 5.90625L2.15625 1.09375C1.84375 0.8125 1.375 0.8125 1.09375 1.09375L0.375 1.8125C0.09375 2.09375 0.09375 2.5625 0.375 2.875L6.46875 8.9375Z" fill="#BBBBBB"/>
                    </svg>
                    </span> <p>Engagement </p></label>
                <ul class="sub-group-list">
                    <li><a href="project base.html">Project Based Engagement </a></li>
                    <li><a href="offshore team.html">Offshore Dedicated Team</a></li>
                    <li><a href="sla team.html">SLA-Based Approach</a></li>
                </ul>
            </li>
            <li>
                <input id="group-201" type="checkbox" hidden />
                <label for="group-201"><span class=""><svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.46875 8.9375C6.75 9.21875 7.21875 9.21875 7.5 8.9375L13.5938 2.875C13.875 2.5625 13.875 2.09375 13.5938 1.8125L12.875 1.09375C12.5938 0.8125 12.125 0.8125 11.8125 1.09375L7 5.90625L2.15625 1.09375C1.84375 0.8125 1.375 0.8125 1.09375 1.09375L0.375 1.8125C0.09375 2.09375 0.09375 2.5625 0.375 2.875L6.46875 8.9375Z" fill="#BBBBBB"/>
                    </svg>
                    </span> <p>Resources </p></label>
                <ul class="sub-group-list">
                    <li><a href="blog_archive.html">Blog</a></li>
                    <li><a href="recent_projects.html">Casestudies</a></li>
                </ul>
            </li>
            <li>
                <input id="group-202" type="checkbox" hidden />
                <label for="group-202"><span class=""><svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.46875 8.9375C6.75 9.21875 7.21875 9.21875 7.5 8.9375L13.5938 2.875C13.875 2.5625 13.875 2.09375 13.5938 1.8125L12.875 1.09375C12.5938 0.8125 12.125 0.8125 11.8125 1.09375L7 5.90625L2.15625 1.09375C1.84375 0.8125 1.375 0.8125 1.09375 1.09375L0.375 1.8125C0.09375 2.09375 0.09375 2.5625 0.375 2.875L6.46875 8.9375Z" fill="#BBBBBB"/>
                    </svg>
                    </span> <p>Company </p></label>
                <ul class="sub-group-list">
                    <li><a href="about.html">Company</a></li>
                    <li><a href="career.html">Career Archive </a></li>
                    <li><a href="internship.html">Advanced Training </a></li>
                </ul>
            </li>
        </ul>
    </nav>
</section>
