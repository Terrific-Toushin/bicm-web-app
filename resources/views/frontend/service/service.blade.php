@extends('frontend.master')
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/jquery.mb.YTPlayer.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/jquery.background-video.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/recent_projects.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/service.css">
@endsection
@section('content')
    <div class="padding-top"></div>

    <section class="development">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="development_texts">
                        <h5>Software Development</h5>
                        <p>Sit enim sit malesuada purus est. Consectetur laoreet suscipit euismod tellus, iaculis in. Est vitae sit suscipit dui. Arcu sollicitudin mattis eget sed.</p>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="300">
                    <div class="development_elements" onclick="location.href='custom-swe-development.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="custom-swe-development.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/custom software development.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Custom Software Development
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="350">
                    <div class="development_elements" onclick="location.href='enterprise software dev.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="enterprise software dev.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/enterprise software.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Enterprise Software Development</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="400">
                    <div class="development_elements" onclick="location.href='product development.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="product development.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/Product development.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Product <br> Development
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="450">
                    <div class="development_elements" onclick="location.href='web application.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="web application.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/web application.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Web Application Development</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up">
                    <div class="development_elements" onclick="location.href='mobile application.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="mobile application.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/mobile application.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Mobile Application Development
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up">
                    <div class="development_elements" onclick="location.href='cloud application.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="cloud application.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/cloud application development.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Cloud Application <br> Development</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up">
                    <div class="development_elements" onclick="location.href='system integration.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="system integration.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/system integration.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>System <br> Integration
                            </h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="development advance_development">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="development_texts">
                        <h5>Advisory</h5>
                        <p>Sit enim sit malesuada purus est. Consectetur laoreet suscipit euismod tellus, iaculis in. Est vitae sit suscipit dui. Arcu sollicitudin mattis eget sed.</p>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="300">
                    <div class="development_elements" onclick="location.href='Digital transformation.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="Digital transformation.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/digital transformation.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Digital <br> Transformation</h5>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="350">
                    <div class="development_elements" onclick="location.href='Business technology consulting.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="Business technology consulting.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/business techonology consulting.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Business Technology Consulting</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="400">
                    <div class="development_elements" onclick="location.href='cloud strategy consulting.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="cloud strategy consulting.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/cloud strategy conlusting.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Cloud Strategy <br> Consulting</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="450">
                    <div class="development_elements" onclick="location.href='maintenance and support.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="maintenance and support.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/maintenance.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Maintenance and <br> Support</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up">
                    <div class="development_elements" onclick="location.href='application services.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="application services.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/application support.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Application <br> Support</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up">
                    <div class="development_elements" onclick="location.href='infrastucture support.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="infrastucture support.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/infrasturcture support.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Infrastructure <br> Support</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up">
                    <div class="development_elements" onclick="location.href='customer support.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="customer support.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/customer support.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Customer <br> Support</h5>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <section class="development advance_development">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="development_texts">
                        <h5>Security and Compliance</h5>
                        <p>Sit enim sit malesuada purus est. Consectetur laoreet suscipit euismod tellus, iaculis in. Est vitae sit suscipit dui. Arcu sollicitudin mattis eget sed.</p>
                    </div>
                </div>
            </div>
            <div class="row text-center">

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="300">
                    <div class="development_elements" onclick="location.href='ntwork security.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="ntwork security.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/network security.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Network <br> Security</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="350">
                    <div class="development_elements" onclick="location.href='infrastucture security.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="infrastucture security.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/infrasturcture security.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Infrastructure <br> Security</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="400">
                    <div class="development_elements" onclick="location.href='app security.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="app security.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/application security.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Application <br> Security</h5>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="450">
                    <div class="development_elements" onclick="location.href='risk and complience.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="risk and complience.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/risk and complience.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Risks and <br> Compliance</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="development advance_development">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="development_texts">
                        <h5>Advanced Tech</h5>
                        <p>Sit enim sit malesuada purus est. Consectetur laoreet suscipit euismod tellus, iaculis in. Est vitae sit suscipit dui. Arcu sollicitudin mattis eget sed.</p>
                    </div>
                </div>
            </div>
            <div class="row text-center">

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="300">
                    <div class="development_elements" onclick="location.href='robotics.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="robotics.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/robotics process and automation.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Robotic Process <br> Automation</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="350">
                    <div class="development_elements" onclick="location.href='artificial intelligence.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="artificial intelligence.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/artificial-intelligence.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Artificial <br> Intelligence</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="450">
                    <div class="development_elements" onclick="location.href='machine learnign.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="machine learnign.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/machine learning.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Machine <br> Learning</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="450">
                    <div class="development_elements" onclick="location.href='internet of things.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="internet of things.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/internet of things.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Internet of <br> Things</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="450">
                    <div class="development_elements" onclick="location.href='data analysis.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="data analysis.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/data analysis.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Data Analytics and Visualization</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="450">
                    <div class="development_elements" onclick="location.href='big data.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="big data.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/big data.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Big <br> data</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="development advance_development">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="development_texts">
                        <h5>Infrastructure</h5>
                        <p>Sit enim sit malesuada purus est. Consectetur laoreet suscipit euismod tellus, iaculis in. Est vitae sit suscipit dui. Arcu sollicitudin mattis eget sed.</p>
                    </div>
                </div>
            </div>
            <div class="row text-center">

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="300">
                    <div class="development_elements" onclick="location.href='Cloud infrastucture.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="Cloud infrastucture.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/cloud infrasturcture.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Cloud <br> Infrastructure</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="350">
                    <div class="development_elements" onclick="location.href='hybrid infrastucture.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="hybrid infrastucture.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/hybrid infrastucture.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Hybrid <br> Infrastructure</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="450">
                    <div class="development_elements" onclick="location.href='on-premesis infrastucture.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="on-premesis infrastucture.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/onpremesis infrastucture.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>On-Premises <br> Infrastructure</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="450">
                    <div class="development_elements" onclick="location.href='integration.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="integration.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/integration.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Integration <br></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="450">
                    <div class="development_elements" onclick="location.href='migration.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="migration.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/migration.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Migration</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="450">
                    <div class="development_elements" onclick="location.href='devOps.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="devOps.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/devOps.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>DevOps</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="development advance_development">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="development_texts">
                        <h5>BI & Analytics</h5>
                        <p>Sit enim sit malesuada purus est. Consectetur laoreet suscipit euismod tellus, iaculis in. Est vitae sit suscipit dui. Arcu sollicitudin mattis eget sed.</p>
                    </div>
                </div>
            </div>
            <div class="row text-center">

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="300">
                    <div class="development_elements" onclick="location.href='BI consulting.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="single_service.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/BI consulting.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>BI <br> Consulting</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="350">
                    <div class="development_elements" onclick="location.href='bI implementation.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="bI implementation.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/BI Implementation.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>BI <br> Implementation</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="450">
                    <div class="development_elements" onclick="location.href='BI service delivery and famework.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="BI service delivery and famework.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/BI service delivery and famework.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>BI Service Delivery <br> & Framework</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="flip-up" data-aos-delay="450">
                    <div class="development_elements" onclick="location.href='big data_.html';" style="cursor: pointer;">
                        <div class="go text-right">
                            <a href="big data_.html">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4983 6.34616L9.81038 0.268705C9.64801 0.0952232 9.43161 0 9.20087 0C8.96987 0 8.7536 0.09536 8.59123 0.268705L8.07482 0.820616C7.91258 0.993824 7.8232 1.22518 7.8232 1.47186C7.8232 1.7184 7.91258 1.95755 8.07482 2.13076L11.393 5.68398H0.850878C0.375565 5.68398 0 6.08156 0 6.58956V7.36981C0 7.8778 0.375565 8.31548 0.850878 8.31548H11.4307L8.07495 11.8885C7.91271 12.062 7.82333 12.2871 7.82333 12.5338C7.82333 12.7802 7.91271 13.0085 8.07495 13.1818L8.59136 13.732C8.75373 13.9055 8.97 14 9.201 14C9.43174 14 9.64814 13.9042 9.8105 13.7307L15.4984 7.65343C15.6611 7.4794 15.7506 7.24709 15.75 7.00014C15.7505 6.75237 15.6611 6.51992 15.4983 6.34616Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="development_icon text-center">
                            <div class="dev_img">
                                <img src="{{ asset('/') }}assets/frontend/images/all icon v2/big data.svg" alt="images">
                            </div>

                        </div>
                        <div class="development_title">
                            <h5>Big Data</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================== SERVICE PART END =========================== -->









    <!-- =========================== FOOTER PART START =========================== -->

    <!-- creating gap started  -->
    <div class="inside_gap footer"></div>
    <!-- Creating gap ended  -->
    <section id="recent-project-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="recent-contact-part">
                        <h3>We’re Here for You!</h3>
                        <form action="">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="from">
                                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="from">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Email">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="from">
                                        <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="from">
                                        <label for="exampleFormControlInput1" class="form-label">Company</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ex: Pixel">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="from">
                                        <label for="exampleFormControlInput1" class="form-label">Message</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Please describe your project">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="custom-inputs">
                                        <input type="file" class="custom-file-input" id="customFileLangHTML">
                                        <label class="custom-file-label" for="customFileLangHTML" data-browse="Bestand kiezen">
                                        </label>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="custom-inputs submit">
                                        <button type="submit" class="btn">
                                            Send
                                            <svg width="158" height="158" viewBox="0 0 158 158" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d)">
                                                    <circle cx="79" cy="79" r="29" fill="#4F81BD"/>
                                                </g>
                                                <path d="M85.7762 78.3732L80.7203 72.9666C80.576 72.8123 80.3837 72.7275 80.1785 72.7275C79.9732 72.7275 79.781 72.8124 79.6367 72.9666L79.1776 73.4576C79.0334 73.6117 78.954 73.8175 78.954 74.0369C78.954 74.2562 79.0334 74.469 79.1776 74.6231L82.1272 77.7841H72.7563C72.3338 77.7841 72 78.1378 72 78.5897V79.2838C72 79.7357 72.3338 80.1251 72.7563 80.1251H82.1606L79.1777 83.3037C79.0335 83.458 78.9541 83.6583 78.9541 83.8777C78.9541 84.0969 79.0335 84.3 79.1777 84.4542L79.6368 84.9437C79.7811 85.098 79.9733 85.1821 80.1787 85.1821C80.3838 85.1821 80.5761 85.0969 80.7204 84.9426L85.7763 79.5361C85.921 79.3813 86.0006 79.1746 86 78.9549C86.0005 78.7345 85.921 78.5277 85.7762 78.3732Z" fill="white"/>
                                                <defs>
                                                    <filter id="filter0_d" x="0" y="0" width="158" height="158" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                                        <feOffset/>
                                                        <feGaussianBlur stdDeviation="25"/>
                                                        <feColorMatrix type="matrix" values="0 0 0 0 0.956863 0 0 0 0 0.501961 0 0 0 0 0.223529 0 0 0 0.4 0"/>
                                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                                                    </filter>
                                                </defs>
                                            </svg>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-1"></div>

                <div class="col-lg-4">
                    <div class="recent-contact-part">
                        <p>Got a question or just want to say HI? Doodle loves hearing from you! Reach us out and share your thoughts. We will get back to you. </p>
                        <div class="phone">
                            <div class="svg">
                                <svg width="15" height="22" viewBox="0 0 15 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.7445 15.1124C14.1991 15.1124 14.5676 14.7451 14.5676 14.2921V3.95117C14.5676 2.14189 13.0907 0.669922 11.2755 0.669922H3.29211C1.47684 0.669922 0 2.14189 0 3.95117V18.3887C0 20.198 1.47684 21.6699 3.29211 21.6699H11.2755C13.0907 21.6699 14.5676 20.198 14.5676 18.3887C14.5676 17.9356 14.1991 17.5684 13.7445 17.5684C13.29 17.5684 12.9215 17.9356 12.9215 18.3887C12.9215 19.2933 12.1831 20.0293 11.2755 20.0293H3.29211C2.38447 20.0293 1.64605 19.2933 1.64605 18.3887V3.95117C1.64605 3.04653 2.38447 2.31055 3.29211 2.31055H11.2755C12.1831 2.31055 12.9215 3.04653 12.9215 3.95117V14.2921C12.9215 14.7451 13.29 15.1124 13.7445 15.1124Z"
                                        fill="black" />
                                    <path
                                        d="M7.28384 18.7627C7.73839 18.7627 8.10687 18.3954 8.10687 17.9424C8.10687 17.4893 7.73839 17.1221 7.28384 17.1221C6.8293 17.1221 6.46082 17.4893 6.46082 17.9424C6.46082 18.3954 6.8293 18.7627 7.28384 18.7627Z"
                                        fill="black" />
                                    <path
                                        d="M8.9298 4.40723C8.9298 3.95417 8.56133 3.58691 8.10677 3.58691H6.46072C6.00616 3.58691 5.6377 3.95417 5.6377 4.40723C5.6377 4.86029 6.00616 5.22754 6.46072 5.22754H8.10677C8.56133 5.22754 8.9298 4.86024 8.9298 4.40723Z"
                                        fill="black" />
                                </svg>

                                <span>Phone</span>
                                <span>+88 02 9588506</span>
                            </div>
                        </div>

                        <div class="phone">
                            <div class="svg">
                                <svg width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.1797 9.62598C20.6327 9.62598 21 9.25872 21 8.80566V3.43262C21 1.62334 19.528 0.151367 17.7188 0.151367H3.28125C1.47197 0.151367 0 1.62334 0 3.43262V12.9072C0 14.7165 1.47197 16.1885 3.28125 16.1885H17.7188C19.528 16.1885 21 14.7165 21 12.9072C21 12.4542 20.6327 12.0869 20.1797 12.0869C19.7266 12.0869 19.3594 12.4542 19.3594 12.9072C19.3594 13.8119 18.6234 14.5479 17.7188 14.5479H3.28125C2.37661 14.5479 1.64062 13.8119 1.64062 12.9072V3.60644L8.76729 8.03797C9.30169 8.37024 9.90084 8.5364 10.5 8.5364C11.0992 8.5364 11.6983 8.37024 12.2327 8.03797L19.3594 3.60644V8.80566C19.3594 9.25872 19.7266 9.62598 20.1797 9.62598ZM11.3663 6.64471C10.832 6.97698 10.168 6.97702 9.63367 6.64471L2.32513 2.1001C2.59453 1.90626 2.92478 1.79199 3.28125 1.79199H17.7188C18.0752 1.79199 18.4055 1.9063 18.6749 2.10014L11.3663 6.64471Z"
                                        fill="black" />
                                </svg>

                                <span>Email</span>
                                <span>info@bicm.ac.bd</span>
                            </div>
                        </div>

                        <div class="phone">
                            <p>BGIC Tower (Ground- 3rd Floor and 8th-9th),
                                34, Topkhana Road, Dhaka- 1000, Bangladesh</p>
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
                        <a href="index.html"><img class="img-responsive" src="{{ asset('/') }}assets/frontend/images/tiny_.png" alt="" srcset=""></a>
                        <span>© Copyright 2021 Doodle Inc.</span>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-6 col-md-6">
                    <div class="social_icon">
                        <a>
                            <svg width="10" height="19" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.91797 3.23828H9.64062V0.390625C9.32422 0.355469 8.33984 0.25 7.14453 0.25C4.71875 0.25 3.03125 1.76172 3.03125 4.50391V7H0.359375V10.1992H3.03125V18.25H6.33594V10.1992H8.9375L9.35938 7H6.33594V4.82031C6.33594 3.87109 6.61719 3.23828 7.91797 3.23828Z"
                                    fill="black" />
                            </svg>
                        </a>
                        <a>
                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.1367 4.59375C16.8398 4.06641 17.4727 3.43359 17.9648 2.69531C17.332 2.97656 16.5938 3.1875 15.8555 3.25781C16.6289 2.80078 17.1914 2.09766 17.4727 1.21875C16.7695 1.64062 15.9609 1.95703 15.1523 2.13281C14.4492 1.39453 13.5 0.972656 12.4453 0.972656C10.4062 0.972656 8.75391 2.625 8.75391 4.66406C8.75391 4.94531 8.78906 5.22656 8.85938 5.50781C5.80078 5.33203 3.05859 3.85547 1.23047 1.64062C0.914062 2.16797 0.738281 2.80078 0.738281 3.50391C0.738281 4.76953 1.37109 5.89453 2.39062 6.5625C1.79297 6.52734 1.19531 6.38672 0.703125 6.10547V6.14062C0.703125 7.93359 1.96875 9.41016 3.65625 9.76172C3.375 9.83203 3.02344 9.90234 2.70703 9.90234C2.46094 9.90234 2.25 9.86719 2.00391 9.83203C2.46094 11.3086 3.83203 12.3633 5.44922 12.3984C4.18359 13.3828 2.60156 13.9805 0.878906 13.9805C0.5625 13.9805 0.28125 13.9453 0 13.9102C1.61719 14.9648 3.55078 15.5625 5.66016 15.5625C12.4453 15.5625 16.1367 9.97266 16.1367 5.08594C16.1367 4.91016 16.1367 4.76953 16.1367 4.59375Z"
                                    fill="black" />
                            </svg>
                        </a>
                        <a>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.64062 16V5.48828H0.371094V16H3.64062ZM1.98828 4.08203C3.04297 4.08203 3.88672 3.20312 3.88672 2.14844C3.88672 1.12891 3.04297 0.285156 1.98828 0.285156C0.96875 0.285156 0.125 1.12891 0.125 2.14844C0.125 3.20312 0.96875 4.08203 1.98828 4.08203ZM15.8398 16H15.875V10.2344C15.875 7.42188 15.2422 5.24219 11.9375 5.24219C10.3555 5.24219 9.30078 6.12109 8.84375 6.92969H8.80859V5.48828H5.67969V16H8.94922V10.7969C8.94922 9.42578 9.19531 8.125 10.8828 8.125C12.5703 8.125 12.6055 9.67188 12.6055 10.9023V16H15.8398Z"
                                    fill="black" />
                            </svg>
                        </a>
                    </div>

                </div>
            </div>


        </div>
    </div>

    <!-- =========================== FOOTER PART END =========================== -->


    <!-- ========== BACK TO TOP START ========== -->
    <a href="#" class="back-to-top">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- ========== BACK TO TOP END ========== -->
@endsection
