    @extends('frontend.master')

    @section('stylesheet')
        <link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/blog_archive.css">
    @endsection

@section('content')
    <!-- =========================== NAVBER PART START =========================== -->
    <section id="digital-solution">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="digital-part text-center technology">
                        <h2><span>BICM Certification</span> and Training</h2>
                        <div class="digital-overlay">
                            <img src="{{ asset('/') }}/assets/frontend/images/mastersProgram.jpg" alt="Digital-Solution">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->
        </div>
    </section>
    <section id="blog-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-text">
                        <h3>Read from Our Blog</h3>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12">
                    <div class="controls">
                        <button type="button" id="test1" class="control" data-filter="all"> <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 5.5H8.5V1C8.5 0.46875 8.03125 0 7.5 0H6.5C5.9375 0 5.5 0.46875 5.5 1V5.5H1C0.4375 5.5 0 5.96875 0 6.5V7.5C0 8.0625 0.4375 8.5 1 8.5H5.5V13C5.5 13.5625 5.9375 14 6.5 14H7.5C8.03125 14 8.5 13.5625 8.5 13V8.5H13C13.5312 8.5 14 8.0625 14 7.5V6.5C14 5.96875 13.5312 5.5 13 5.5Z" fill="black"/>
                            </svg>
                            All</button>
                        <button type="button" class="control" data-filter=".technology"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 5.5H8.5V1C8.5 0.46875 8.03125 0 7.5 0H6.5C5.9375 0 5.5 0.46875 5.5 1V5.5H1C0.4375 5.5 0 5.96875 0 6.5V7.5C0 8.0625 0.4375 8.5 1 8.5H5.5V13C5.5 13.5625 5.9375 14 6.5 14H7.5C8.03125 14 8.5 13.5625 8.5 13V8.5H13C13.5312 8.5 14 8.0625 14 7.5V6.5C14 5.96875 13.5312 5.5 13 5.5Z" fill="black"/>
                            </svg>
                            Technology</button>
                        <button type="button" class="control" data-filter=".corporate"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 5.5H8.5V1C8.5 0.46875 8.03125 0 7.5 0H6.5C5.9375 0 5.5 0.46875 5.5 1V5.5H1C0.4375 5.5 0 5.96875 0 6.5V7.5C0 8.0625 0.4375 8.5 1 8.5H5.5V13C5.5 13.5625 5.9375 14 6.5 14H7.5C8.03125 14 8.5 13.5625 8.5 13V8.5H13C13.5312 8.5 14 8.0625 14 7.5V6.5C14 5.96875 13.5312 5.5 13 5.5Z" fill="black"/>
                            </svg>
                            Corporate</button>
                        <button type="button" class="control" data-filter=".job"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 5.5H8.5V1C8.5 0.46875 8.03125 0 7.5 0H6.5C5.9375 0 5.5 0.46875 5.5 1V5.5H1C0.4375 5.5 0 5.96875 0 6.5V7.5C0 8.0625 0.4375 8.5 1 8.5H5.5V13C5.5 13.5625 5.9375 14 6.5 14H7.5C8.03125 14 8.5 13.5625 8.5 13V8.5H13C13.5312 8.5 14 8.0625 14 7.5V6.5C14 5.96875 13.5312 5.5 13 5.5Z" fill="black"/>
                            </svg>
                            Job</button>
                        <button type="button" class="control" data-filter=".javascript"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 5.5H8.5V1C8.5 0.46875 8.03125 0 7.5 0H6.5C5.9375 0 5.5 0.46875 5.5 1V5.5H1C0.4375 5.5 0 5.96875 0 6.5V7.5C0 8.0625 0.4375 8.5 1 8.5H5.5V13C5.5 13.5625 5.9375 14 6.5 14H7.5C8.03125 14 8.5 13.5625 8.5 13V8.5H13C13.5312 8.5 14 8.0625 14 7.5V6.5C14 5.96875 13.5312 5.5 13 5.5Z" fill="black"/>
                            </svg>
                            Javascript</button>
                        <button type="button" class="control" data-filter=".react"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 5.5H8.5V1C8.5 0.46875 8.03125 0 7.5 0H6.5C5.9375 0 5.5 0.46875 5.5 1V5.5H1C0.4375 5.5 0 5.96875 0 6.5V7.5C0 8.0625 0.4375 8.5 1 8.5H5.5V13C5.5 13.5625 5.9375 14 6.5 14H7.5C8.03125 14 8.5 13.5625 8.5 13V8.5H13C13.5312 8.5 14 8.0625 14 7.5V6.5C14 5.96875 13.5312 5.5 13 5.5Z" fill="black"/>
                            </svg>
                            React</button>
                    </div>
                </div>
            </div>

            <div class="row blog-tab-container">
                <!-- 1 -->
                <div class="col-lg-4 col-sm-6 mix technology">
                    <div class="blog-tab">
                        <div class="img">
                            <a href="blog_single.html"><img src="{{ asset('/') }}/assets/frontend/images/technology-1.png" alt="Technology" class="img-fluid w-100"></a>
                        </div>
                        <h4><a href="blog_single.html">Technology </a> <span>5 min read</span></h4>
                        <p><a href="blog_single.html">High Time for Cyberlaw Enforcement and a Future of Work Strategy</a></p>
                    </div>
                </div>
                <!-- 2 -->
                <div class="col-lg-4 col-sm-6 mix corporate">
                    <div class="blog-tab">
                        <div class="img">
                            <a href="blog_single.html"><img src="{{ asset('/') }}/assets/frontend/images/corporate-1.png" alt="Technology" class="img-fluid w-100"></a>
                        </div>
                        <h4><a href="blog_single.html">Technology </a> <span>8 min read</span></h4>
                        <p><a href="blog_single.html">High Time for Cyberlaw Enforcement and a Future of Work Strategy</a></p>
                    </div>
                </div>
                <!-- 3 -->
                <div class="col-lg-4 col-sm-6 mix job">
                    <div class="blog-tab">
                        <div class="img">
                            <a href="blog_single.html"><img src="{{ asset('/') }}/assets/frontend/images/job-1.png" alt="Technology" class="img-fluid w-100"></a>
                        </div>
                        <h4><a href="blog_single.html">Technology </a> <span>10 min read</span></h4>
                        <p><a href="blog_single.html">High Time for Cyberlaw Enforcement and a Future of Work Strategy</a></p>
                    </div>
                </div>
                <!-- 4 -->
                <div class="col-lg-4 col-sm-6 mix javascript">
                    <div class="blog-tab">
                        <div class="img">
                            <a href="blog_single.html"> <img src="{{ asset('/') }}/assets/frontend/images/javascript-1.png" alt="Technology" class="img-fluid w-100"></a>
                        </div>
                        <h4><a href="blog_single.html">Technology </a> <span>5 min read</span></h4>
                        <p><a href="blog_single.html">High Time for Cyberlaw Enforcement and a Future of Work Strategy</a></p>
                    </div>
                </div>
                <!-- 5 -->
                <div class="col-lg-4 col-sm-6 mix react">
                    <div class="blog-tab">
                        <div class="img">
                            <a href="blog_single.html"><img src="{{ asset('/') }}/assets/frontend/images/react-1.png" alt="Technology" class="img-fluid w-100"></a>
                        </div>
                        <h4><a href="blog_single.html">Technology </a> <span>8 min read</span></h4>
                        <p><a href="blog_single.html">High Time for Cyberlaw Enforcement and a Future of Work Strategy</a></p>
                    </div>
                </div>
                <!-- 6 -->
                <div class="col-lg-4 col-sm-6 mix job">
                    <div class="blog-tab">
                        <div class="img">
                            <a href="blog_single.html"><img src="{{ asset('/') }}/assets/frontend/images/job-1.png" alt="Technology" class="img-fluid w-100"></a>
                        </div>
                        <h4><a href="blog_single.html">Technology </a> <span>10 min read</span></h4>
                        <p><a href="blog_single.html">High Time for Cyberlaw Enforcement and a Future of Work Strategy</a></p>
                    </div>
                </div>

                <!-- 1 -->
                <div class="col-lg-4 col-sm-6 mix technology">
                    <div class="blog-tab">
                        <div class="img">
                            <a href="blog_single.html"><img src="{{ asset('/') }}/assets/frontend/images/technology-2.png" alt="Technology" class="img-fluid w-100"></a>
                        </div>
                        <h4><a href="blog_single.html">Technology </a> <span>5 min read</span></h4>
                        <p><a href="blog_single.html">High Time for Cyberlaw Enforcement and a Future of Work Strategy</a></p>
                    </div>
                </div>
                <!-- 2 -->
                <div class="col-lg-4 col-sm-6 mix corporate">
                    <div class="blog-tab">
                        <div class="img">
                            <a href="blog_single.html"><img src="{{ asset('/') }}/assets/frontend/images/corporate-2.png" alt="Technology" class="img-fluid w-100"></a>
                        </div>
                        <h4><a href="blog_single.html">Technology </a> <span> 8 min read</span></h4>
                        <p><a href="blog_single.html">High Time for Cyberlaw Enforcement and a Future of Work Strategy</a></p>
                    </div>
                </div>
                <!-- 3 -->
                <div class="col-lg-4 col-sm-6 mix job">
                    <div class="blog-tab">
                        <div class="img">
                            <a href="blog_single.html"><img src="{{ asset('/') }}/assets/frontend/images/job-2.png" alt="Technology" class="img-fluid w-100"></a>
                        </div>
                        <h4><a href="blog_single.html">Technology </a> <span>10 min read</span></h4>
                        <p><a href="blog_single.html">High Time for Cyberlaw Enforcement and a Future of Work Strategy</a></p>
                    </div>
                </div>
                <!-- 4 -->
                <div class="col-lg-4 col-sm-6 mix javascript">
                    <div class="blog-tab">
                        <div class="img">
                            <a href="blog_single.html"><img src="{{ asset('/') }}/assets/frontend/images/javascript-2.png" alt="Technology" class="img-fluid w-100"></a>
                        </div>
                        <h4><a href="blog_single.html">Technology </a> <span>5 min read</span></h4>
                        <p><a href="blog_single.html">High Time for Cyberlaw Enforcement and a Future of Work Strategy</a></p>
                    </div>
                </div>
                <!-- 5 -->
                <div class="col-lg-4 col-sm-6 mix react">
                    <div class="blog-tab">
                        <div class="img">
                            <a href="blog_single.html"> <img src="{{ asset('/') }}/assets/frontend/images/react-2.png" alt="Technology" class="img-fluid w-100"></a>
                        </div>
                        <h4><a href="blog_single.html">Technology </a> <span>8 min read</span></h4>
                        <p><a href="blog_single.html">High Time for Cyberlaw Enforcement and a Future of Work Strategy</a></p>
                    </div>
                </div>
                <!-- 6 -->
                <div class="col-lg-4 col-sm-6 mix job">
                    <div class="blog-tab">
                        <div class="img">
                            <a href="blog_single.html"><img src="{{ asset('/') }}/assets/frontend/images/job-2.png" alt="Technology" class="img-fluid w-100"></a>
                        </div>
                        <h4><a href="blog_single.html">Technology </a> <span>10 min read</span></h4>
                        <p><a href="blog_single.html">High Time for Cyberlaw Enforcement and a Future of Work Strategy</a></p>
                    </div>
                </div>

                <!-- 1 -->
                <div class="col-lg-4 col-sm-6 mix technology">
                    <div class="blog-tab">
                        <div class="img">
                            <a href="blog_single.html"><img src="{{ asset('/') }}/assets/frontend/images/technology-3.png" alt="Technology" class="img-fluid w-100"></a>
                        </div>
                        <h4><a href="blog_single.html">Technology </a> <span>5 min read</span></h4>
                        <p><a href="blog_single.html">High Time for Cyberlaw Enforcement and a Future of Work Strategy</a></p>
                    </div>
                </div>
                <!-- 2 -->
                <div class="col-lg-4 col-sm-6 mix corporate">
                    <div class="blog-tab">
                        <div class="img">
                            <a href="blog_single.html"><img src="{{ asset('/') }}/assets/frontend/images/corporate-3.png" alt="Technology" class="img-fluid w-100"></a>
                        </div>
                        <h4><a href="blog_single.html">Technology </a> <span>8 min read</span></h4>
                        <p><a href="blog_single.html">High Time for Cyberlaw Enforcement and a Future of Work Strategy</a></p>
                    </div>
                </div>
                <!-- 3 -->
                <div class="col-lg-4 col-sm-6 mix job">
                    <div class="blog-tab">
                        <div class="img">
                            <a href="blog_single.html"><img src="{{ asset('/') }}/assets/frontend/images/job-3.png" alt="Technology" class="img-fluid w-100"></a>
                        </div>
                        <h4><a href="blog_single.html">Technology </a> <span>10 min read</span></h4>
                        <p><a href="blog_single.html">High Time for Cyberlaw Enforcement and a Future of Work Strategy</a></p>
                    </div>
                </div>
                <!-- 4 -->
                <div class="col-lg-4 col-sm-6 mix javascript">
                    <div class="blog-tab">
                        <div class="img">
                            <a href="blog_single.html"><img src="{{ asset('/') }}/assets/frontend/images/javascript-3.png" alt="Technology" class="img-fluid w-100"></a>
                        </div>
                        <h4><a href="blog_single.html">Technology </a> <span>5 min read</span></h4>
                        <p><a href="blog_single.html">High Time for Cyberlaw Enforcement and a Future of Work Strategy</a></p>
                    </div>
                </div>
                <!-- 5 -->
                <div class="col-lg-4 col-sm-6 mix react">
                    <div class="blog-tab">
                        <div class="img">
                            <a href="blog_single.html"><img src="{{ asset('/') }}/assets/frontend/images/react-3.png" alt="Technology" class="img-fluid w-100"></a>
                        </div>
                        <h4><a href="blog_single.html">Technology </a> <span>8 min read</span></h4>
                        <p><a href="blog_single.html">High Time for Cyberlaw Enforcement and a Future of Work Strategy</a></p>
                    </div>
                </div>
                <!-- 6 -->
                <div class="col-lg-4 col-sm-6 mix job">
                    <div class="blog-tab">
                        <div class="img">
                            <a href="blog_single.html"><img src="{{ asset('/') }}/assets/frontend/images/job-3.png" alt="Technology" class="img-fluid w-100"></a>
                        </div>
                        <h4><a href="blog_single.html">Technology </a> <span>10 min read</span></h4>
                        <p><a href="blog_single.html">High Time for Cyberlaw Enforcement and a Future of Work Strategy</a></p>
                    </div>
                </div>

                <!-- 1 -->
                <div class="col-lg-4 col-sm-6 mix technology">
                    <div class="blog-tab">
                        <div class="img">
                            <a href="blog_single.html"><img src="{{ asset('/') }}/assets/frontend/images/technology-3.png" alt="Technology" class="img-fluid w-100"></a>
                        </div>
                        <h4><a href="blog_single.html">Technology </a> <span>5 min read</span></h4>
                        <p><a href="blog_single.html">High Time for Cyberlaw Enforcement and a Future of Work Strategy</a></p>
                    </div>
                </div>
                <!-- 2 -->
                <div class="col-lg-4 col-sm-6 mix corporate">
                    <div class="blog-tab">
                        <div class="img">
                            <a href="blog_single.html"><img src="{{ asset('/') }}/assets/frontend/images/corporate-3.png" alt="Technology" class="img-fluid w-100"></a>
                        </div>
                        <h4><a href="blog_single.html">Technology </a> <span>8 min read</span></h4>
                        <p><a href="blog_single.html">High Time for Cyberlaw Enforcement and a Future of Work Strategy</a></p>
                    </div>
                </div>

                <!-- 4 -->
                <div class="col-lg-4 col-sm-6 mix javascript">
                    <div class="blog-tab">
                        <div class="img">
                            <a href="blog_single.html"><img src="{{ asset('/') }}/assets/frontend/images/javascript-3.png" alt="Technology" class="img-fluid w-100"></a>
                        </div>
                        <h4><a href="blog_single.html">Technology </a> <span>5 min read</span></h4>
                        <p><a href="blog_single.html">High Time for Cyberlaw Enforcement and a Future of Work Strategy</a></p>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-4 m-auto">
                    <div class="blog_number">
                        <ul>
                            <li><a class="active" href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href="">5</a></li>
                            <li><a href="">6</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================== NAVBER PART END =========================== -->










    <!-- =========================== FOOTER PART START =========================== -->

    <!-- creating gap started  -->
    <div class="inside_gap footer"></div>
    <!-- Creating gap ended  -->
    <!-- =========================== FOOTER PART START =========================== -->

    <section id="mh_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rs-footer-text">
                        <h3>Want to Make Something Great Together? </h3>

                        <div class="row">
                            <div class="col-lg-8">
                                <p>Drop us a line <a href="">here</a>, we'll get in touch. Or mail us at hello@bicm.ac.bd. We'll see if we're a match and how we can help each other.</p>
                            </div>
                            <div class="col-lg-4">
                                <form action="">
                                    <button class="banner-overlay">
                                        <span>Get Started</span>
                                        <div class="banner-arrow">
                                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0)">
                                                    <path d="M8.50116 4.178L5.51578 1.19254C5.43056 1.10732 5.31698 1.06055 5.19587 1.06055C5.07463 1.06055 4.96111 1.10739 4.87589 1.19254L4.60484 1.46366C4.51969 1.54875 4.47278 1.6624 4.47278 1.78357C4.47278 1.90468 4.51969 2.02216 4.60484 2.10725L6.34647 3.85271H0.813236C0.563759 3.85271 0.366638 4.04801 0.366638 4.29756V4.68085C0.366638 4.93039 0.563759 5.14539 0.813236 5.14539H6.36623L4.60491 6.9006C4.51976 6.98582 4.47285 7.09637 4.47285 7.21755C4.47285 7.33859 4.51976 7.45076 4.60491 7.53591L4.87596 7.80616C4.96118 7.89138 5.0747 7.93782 5.19594 7.93782C5.31705 7.93782 5.43063 7.89077 5.51585 7.80555L8.50123 4.82017C8.58665 4.73468 8.63363 4.62056 8.63329 4.49925C8.63356 4.37754 8.58665 4.26335 8.50116 4.178Z" fill="#444444"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0">
                                                        <rect width="8.26667" height="8.26667" fill="white" transform="translate(0.366638 0.366211)"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="tiny_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-6 col-md-6">
                    <div class="tiny_footer_logo">
                        <a href="index.html"><img class="img-responsive" src="{{ asset('/') }}/assets/frontend/images/tiny_.png" alt="" srcset=""></a>
                        <span>© Copyright 2021 Doodle Inc.</span>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-6 col-md-6">
                    <div class="social_icon">
                        <a>
                            <svg width="10" height="19" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.91797 3.23828H9.64062V0.390625C9.32422 0.355469 8.33984 0.25 7.14453 0.25C4.71875 0.25 3.03125 1.76172 3.03125 4.50391V7H0.359375V10.1992H3.03125V18.25H6.33594V10.1992H8.9375L9.35938 7H6.33594V4.82031C6.33594 3.87109 6.61719 3.23828 7.91797 3.23828Z" fill="black"/>
                            </svg>
                        </a>
                        <a>
                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.1367 4.59375C16.8398 4.06641 17.4727 3.43359 17.9648 2.69531C17.332 2.97656 16.5938 3.1875 15.8555 3.25781C16.6289 2.80078 17.1914 2.09766 17.4727 1.21875C16.7695 1.64062 15.9609 1.95703 15.1523 2.13281C14.4492 1.39453 13.5 0.972656 12.4453 0.972656C10.4062 0.972656 8.75391 2.625 8.75391 4.66406C8.75391 4.94531 8.78906 5.22656 8.85938 5.50781C5.80078 5.33203 3.05859 3.85547 1.23047 1.64062C0.914062 2.16797 0.738281 2.80078 0.738281 3.50391C0.738281 4.76953 1.37109 5.89453 2.39062 6.5625C1.79297 6.52734 1.19531 6.38672 0.703125 6.10547V6.14062C0.703125 7.93359 1.96875 9.41016 3.65625 9.76172C3.375 9.83203 3.02344 9.90234 2.70703 9.90234C2.46094 9.90234 2.25 9.86719 2.00391 9.83203C2.46094 11.3086 3.83203 12.3633 5.44922 12.3984C4.18359 13.3828 2.60156 13.9805 0.878906 13.9805C0.5625 13.9805 0.28125 13.9453 0 13.9102C1.61719 14.9648 3.55078 15.5625 5.66016 15.5625C12.4453 15.5625 16.1367 9.97266 16.1367 5.08594C16.1367 4.91016 16.1367 4.76953 16.1367 4.59375Z" fill="black"/>
                            </svg>
                        </a>
                        <a>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.64062 16V5.48828H0.371094V16H3.64062ZM1.98828 4.08203C3.04297 4.08203 3.88672 3.20312 3.88672 2.14844C3.88672 1.12891 3.04297 0.285156 1.98828 0.285156C0.96875 0.285156 0.125 1.12891 0.125 2.14844C0.125 3.20312 0.96875 4.08203 1.98828 4.08203ZM15.8398 16H15.875V10.2344C15.875 7.42188 15.2422 5.24219 11.9375 5.24219C10.3555 5.24219 9.30078 6.12109 8.84375 6.92969H8.80859V5.48828H5.67969V16H8.94922V10.7969C8.94922 9.42578 9.19531 8.125 10.8828 8.125C12.5703 8.125 12.6055 9.67188 12.6055 10.9023V16H15.8398Z" fill="black"/>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>


        </div>
    </div>

    <!-- =========================== FOOTER PART END =========================== -->

    <!-- =========================== FOOTER PART END =========================== -->


    <!-- ========== BACK TO TOP START ========== -->
    <a href="#" class="back-to-top">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- ========== BACK TO TOP END ========== -->
@endsection
