    @extends('frontend.master')

    @section('stylesheet')
        <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/recent_projects.css">
        <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/approch.css">
        <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/media.css">
    @endsection

@section('content')
    <!-- =========================== APPROCH Discovary PART START =========================== -->
    <section id="approch-part" class="dismiss_">
        <div class="container">
            <div class="row app_text">
                <div class="col-lg-6">
                    <div class="approch-hedding">
                        <h3>Empowering The Future With Cutting Edge Digital Solution</h3>
                        <p>We enable growing business and enthusiastic individuals who want to convert their ideas into a living and useful reality by various elements.</p>
                        <h4>Let’s talk about the specifics</h4>
                    </div>
                </div>
            </div>
            <!-- ROW -->

            <!-- START DISCOVARY PART -->
            <div id="top_approach" class="approach_slider">
                <div class="approach_items">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="" id="discovery">
                                <div class="approch-text">
                                    <h3>Discovery </h3>
                                    <h4>Objective</h4>

                                    <div class="approch-ul">
                                        <ul>
                                            <li><a href="">Project briefing, analyzing primary requirement and
                                                    initial agreement</a></li>
                                            <li><a href="">Understanding the client’s business goals, needs and
                                                    ideas of project objective</a></li>
                                            <li><a href="">Drawing the competitive factors, considering business
                                                    mission, vision and core values</a></li>
                                            <li><a href="">Understanding the business needs according to audience
                                                    targeting, business geography and market</a></li>
                                            <li><a href="">Understanding client’s business and branding plan </a>
                                            </li>
                                            <li><a href="">Pre-design analysis according to branding and client
                                                    requirement </a></li>
                                            <li><a href="" class="last-child">Queries, clarifying feature doubts,
                                                    initial post-requirement analysis</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="overlay-planing">

                                        <img src="{{ asset('/') }}assets/frontend/images/discovery 1.png" alt="Image" class="img-fluid w-100">

                                    </div>

                                </div>
                                <!--approch-text End-->

                                <div class="outcome">
                                    <div class="row">

                                        <div class="col-lg-8">
                                            <div class="approch-ul">
                                                <ul>
                                                    <li><a>Total Understanding of vision of clients</a></li>
                                                    <li><a>Note down the Business Requirement Specifications from
                                                            client</a></li>
                                                    <li><a>Have a clarified and detailed requirements of clients</a>
                                                    </li>
                                                    <li><a>Detailed cognizance of the branding of business</a></li>
                                                    <li><a>Understanding the clients’ taste of choices</a></li>
                                                    <li><a>Having all the elements of planning ahead</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--Col-lg-6-->

                                        <div class="col-lg-4">
                                            <div class="approch-ul">
                                                <h4>Team Members Involved</h4>
                                                <ul>
                                                    <li><a href="">Project Manager</a></li>
                                                    <li><a href="">Tech Lead</a></li>
                                                    <li><a href="">IA & UX Lead</a></li>
                                                    <li><a href="">Project Owner / Client</a></li>
                                                    <li><a href="">Business Analyst</a>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--Col-lg-6-->
                                    </div>
                                    <!--Row-->


                                    <div class="outcome-overlay">
                                        <img src="{{ asset('/') }}assets/frontend/images/approch-Outcome.png" alt="Iamges" class="img-fluid">
                                    </div>
                                </div>

                                <!-- Mobile Image -->
                                <div class="Mob_overlay">
                                    <img src="{{ asset('/') }}assets/frontend/images/discovery 1.png" alt="Image" class="img-fluid w-100">
                                </div>
                            </div>
                            <!-- =====================================================Start planning =========================================== -->
                            <div class="" id="planning">
                                <div class="approch-text">
                                    <h3>Planning </h3>
                                    <h4>Objective</h4>

                                    <div class="approch-ul">
                                        <ul>
                                            <li><a>Documentation on every step and execution of the whole project
                                                    pointing each detail deeply including System Required
                                                    Specification (SRS)</a></li>
                                            <li><a>Making Wire Framing on total features and user experience</a>
                                            </li>
                                            <li><a>Meeting with client for having the approval of done documents; if
                                                    necessary, repeat. </a></li>
                                            <li><a>Making detail project plan and timeframe with step by step
                                                    scheduling</a></li>
                                            <li><a>Pointing out the specific methods of following branding and
                                                    designing guideline during projects</a></li>
                                        </ul>
                                    </div>

                                    <div class="overlay-planing">

                                        <img src="{{ asset('/') }}assets/frontend/images/discovery 1.png" alt="Image" class="img-fluid w-100">

                                    </div>

                                </div>
                                <!--approch-text End-->

                                <div class="outcome">
                                    <div class="row">

                                        <div class="col-lg-8">
                                            <div class="approch-ul">
                                                <h4>Outcome</h4>
                                                <ul>
                                                    <li><a>A clear confirmation on documents from client</a></li>
                                                    <li><a>A complete SRS having each feature explained with
                                                            dependency</a></li>
                                                    <li><a>Time Schedule and milestone to follow</a></li>
                                                    <li><a>Wire Frame sketch</a></li>
                                                    <li><a>Understand and writing down the test case and
                                                            scenarios</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--Col-lg-6-->

                                        <div class="col-lg-4">
                                            <div class="approch-ul">
                                                <h4>Team Members Involved</h4>
                                                <ul>
                                                    <li><a href="">Project Manager</a></li>
                                                    <li><a href="">Tech Lead</a></li>
                                                    <li><a href="">IA & UX Lead</a></li>
                                                    <li><a href="">Project Owner / Client</a></li>
                                                    <li><a href="">Business Analyst</a>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--Col-lg-6-->
                                    </div>
                                    <!--Row-->


                                    <div class="outcome-overlay">
                                        <img src="{{ asset('/') }}assets/frontend/images/approch-Outcome.png" alt="Iamges" class="img-fluid">
                                    </div>
                                </div>

                                <div class="Deliverables">
                                    <div class="outcome">
                                        <h4>Deliverables</h4>
                                        <div class="approch-ul">
                                            <ul>
                                                <li><a>UI design file and mockup of every page in visible format</a>
                                                </li>
                                                <li><a>Source file (PSD/xD etc)</a></li>
                                                <li><a>Approved printed signed copy of UI</a></li>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="outcome-overlay">
                                            <img src="{{ asset('/') }}assets/frontend/images/approch-Outcome.png" alt="Iamges" class="img-fluid">
                                        </div>
                                    </div>
                                </div>

                                <!-- Mobile Image -->
                                <div class="Mob_overlay">
                                    <img src="{{ asset('/') }}assets/frontend/images/discovery 1.png" alt="Image" class="img-fluid w-100">
                                </div>
                            </div>

                            <!-- ========================================================Start Design =========================================== -->

                            <div class="" id="design">
                                <div class="approch-text">
                                    <h3> Design </h3>
                                    <h4>Objective</h4>

                                    <div class="approch-ul">
                                        <ul>
                                            <li><a>Following client’s requirement, brief user story will be written
                                                    down. </a></li>
                                            <li><a>Designing every screen for both web and mobile version
                                                    considering different platforms and screen sizes</a></li>
                                            <li><a>Designing all elements including icons, banners buttons and
                                                    screen-based project pages on approved wire framing</a></li>
                                            <li><a>Preparing short demo of user experience</a></li>
                                            <li><a>Approving design from clients. If necessary; revision</a></li>
                                        </ul>
                                    </div>

                                    <div class="overlay-planing">

                                        <img src="{{ asset('/') }}assets/frontend/images/discovery 1.png" alt="Image" class="img-fluid w-100">

                                    </div>

                                </div>
                                <!--approch-text End-->

                                <div class="outcome">
                                    <div class="row">

                                        <div class="col-lg-8">
                                            <div class="approch-ul">
                                                <h4>Outcome</h4>
                                                <ul>
                                                    <li><a>A final approved UI and UX design to work on</a></li>
                                                    <li><a>Total mockup of whole system</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--Col-lg-6-->

                                        <div class="col-lg-4">
                                            <div class="approch-ul">
                                                <h4>Team Members Involved</h4>
                                                <ul>
                                                    <li><a href="">Project Manager</a></li>
                                                    <li><a href="">Tech Lead</a></li>
                                                    <li><a href="">IA & UX Lead</a></li>
                                                    <li><a href="">Project Owner / Client</a></li>
                                                    <li><a href="">Business Analyst</a>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--Col-lg-6-->
                                    </div>
                                    <!--Row-->


                                    <div class="outcome-overlay">
                                        <img src="{{ asset('/') }}assets/frontend/images/approch-Outcome.png" alt="Iamges" class="img-fluid">
                                    </div>
                                </div>

                                <div class="Deliverables">
                                    <div class="outcome">
                                        <h4>Deliverables</h4>
                                        <div class="approch-ul">
                                            <ul>
                                                <li><a>UI design file and mockup of every page in visible format</a>
                                                </li>
                                                <li><a>Source file (PSD/xD etc)</a></li>
                                                <li><a>Approved printed signed copy of UI</a></li>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="outcome-overlay">
                                            <img src="{{ asset('/') }}assets/frontend/images/approch-Outcome.png" alt="Iamges" class="img-fluid">
                                        </div>
                                    </div>
                                </div>

                                <!-- Mobile Image -->
                                <div class="Mob_overlay">
                                    <img src="{{ asset('/') }}assets/frontend/images/discovery 1.png" alt="Image" class="img-fluid w-100">
                                </div>
                            </div>

                            <!-- ========================================================Start Development =============================================== -->
                            <div class="" id="development">
                                <div class="approch-text">
                                    <h3>Development </h3>
                                    <h4>Objective</h4>

                                    <div class="approch-ul">
                                        <ul>
                                            <li><a>Finalizing the system Architecture</a></li>
                                            <li><a>Understanding the plan of pre-development process; distributing
                                                    work and deadline among the teams</a></li>
                                            <li><a>Briefing whole front end, backend and API integrations to the
                                                    team</a></li>
                                            <li><a>Distributing works to members according to chart and plan</a>
                                            </li>
                                            <li><a>Crafting an ideal coding operation and maintain a good code
                                                    base</a></li>
                                            <li><a>Crafting an ideal coding operation and maintain a good code
                                                    base</a></li>
                                        </ul>
                                    </div>

                                    <div class="overlay-planing">

                                        <img src="{{ asset('/') }}assets/frontend/images/discovery 1.png" alt="Image" class="img-fluid w-100">

                                    </div>

                                </div>
                                <!--approch-text End-->

                                <div class="outcome">
                                    <div class="row">

                                        <div class="col-lg-8">
                                            <div class="approch-ul">
                                                <h4>Outcome</h4>
                                                <ul>
                                                    <li><a>Solutions as per the vision of the client.</a></li>
                                                    <li><a>Cost reduction.</a></li>
                                                    <li><a>Quicker delivery.</a></li>
                                                    <li><a>Risk minimization</a></li>
                                                    <li><a>Delivery of a better product</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--Col-lg-6-->

                                        <div class="col-lg-4">
                                            <div class="approch-ul">
                                                <h4>Team Members Involved</h4>
                                                <ul>
                                                    <li><a href="">Project Manager</a></li>
                                                    <li><a href="">Tech Lead</a></li>
                                                    <li><a href="">IA & UX Lead</a></li>
                                                    <li><a href="">Project Owner / Client</a></li>
                                                    <li><a href="">Business Analyst</a>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--Col-lg-6-->
                                    </div>
                                    <!--Row-->


                                    <div class="outcome-overlay">
                                        <img src="{{ asset('/') }}assets/frontend/images/approch-Outcome.png" alt="Iamges" class="img-fluid">
                                    </div>
                                </div>

                                <div class="Deliverables">
                                    <div class="outcome">
                                        <h4>Deliverables</h4>
                                        <div class="approch-ul">
                                            <ul>
                                                <li><a>UI design file and mockup of every page in visible format</a>
                                                </li>
                                                <li><a>Source file (PSD/xD etc)</a></li>
                                                <li><a>Approved printed signed copy of UI</a></li>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="outcome-overlay">
                                            <img src="{{ asset('/') }}assets/frontend/images/approch-Outcome.png" alt="Iamges" class="img-fluid">
                                        </div>
                                    </div>
                                </div>

                                <!-- Mobile Image -->
                                <div class="Mob_overlay">
                                    <img src="{{ asset('/') }}assets/frontend/images/discovery 1.png" alt="Image" class="img-fluid w-100">
                                </div>
                            </div>

                            <!-- =========================================================Start Testing ===================================================== -->

                            <div class="" id="testings">
                                <div class="approch-text">
                                    <h3>Testing </h3>
                                    <h4>Objective</h4>

                                    <div class="approch-ul">
                                        <ul>
                                            <li><a>Testing case analysis and writing down</a></li>
                                            <li><a>Feature checking from feature checkbox</a></li>
                                            <li><a>Each of the feature and milestone checking manually</a></li>
                                            <li><a>Bugs and lags detecting and noting down</a></li>
                                        </ul>
                                    </div>

                                    <div class="overlay-planing">

                                        <img src="{{ asset('/') }}assets/frontend/images/discovery 1.png" alt="Image" class="img-fluid w-100">

                                    </div>

                                </div>
                                <!--approch-text End-->

                                <div class="outcome">
                                    <div class="row">

                                        <div class="col-lg-8">
                                            <div class="approch-ul">
                                                <h4>Outcome</h4>
                                                <ul>
                                                    <li><a>Solutions as per the vision of the client.</a></li>
                                                    <li><a>Cost reduction.</a></li>
                                                    <li><a>Quicker delivery.</a></li>
                                                    <li><a>Risk minimization</a></li>
                                                    <li><a>Delivery of a better product</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--Col-lg-6-->

                                        <div class="col-lg-4">
                                            <div class="approch-ul">
                                                <h4>Team Members Involved</h4>
                                                <ul>
                                                    <li><a href="">Project Manager</a></li>
                                                    <li><a href="">Tech Lead</a></li>
                                                    <li><a href="">IA & UX Lead</a></li>
                                                    <li><a href="">Project Owner / Client</a></li>
                                                    <li><a href="">Business Analyst</a>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--Col-lg-6-->
                                    </div>
                                    <!--Row-->


                                    <div class="outcome-overlay">
                                        <img src="{{ asset('/') }}assets/frontend/images/approch-Outcome.png" alt="Iamges" class="img-fluid">
                                    </div>
                                </div>

                                <div class="Deliverables">
                                    <div class="outcome">
                                        <h4>Deliverables</h4>
                                        <div class="approch-ul">
                                            <ul>
                                                <li><a>UI design file and mockup of every page in visible format</a>
                                                </li>
                                                <li><a>Source file (PSD/xD etc)</a></li>
                                                <li><a>Approved printed signed copy of UI</a></li>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="outcome-overlay">
                                            <img src="{{ asset('/') }}assets/frontend/images/approch-Outcome.png" alt="Iamges" class="img-fluid">
                                        </div>
                                    </div>
                                </div>

                                <!-- Mobile Image -->
                                <div class="Mob_overlay">
                                    <img src="{{ asset('/') }}assets/frontend/images/discovery 1.png" alt="Image" class="img-fluid w-100">
                                </div>
                            </div>

                            <!-- ========================================================Start Maintenance================================================= -->

                            <div class="" id="maintenance">
                                <div class="approch-text">
                                    <h3>Maintenance </h3>
                                    <h4>Objective</h4>

                                    <div class="approch-ul">
                                        <ul>
                                            <li><a>Planning for a maintenance schedule for specific product</a></li>
                                            <li><a>Following agile approach to maintain product enhancement</a></li>
                                            <li><a>Security audit as per maintenance schedule</a></li>
                                            <li><a>Weekly/Monthly code backups according to project complexity</a>
                                            </li>
                                            <li><a>Software upgradation based on regular basis or requirement</a>
                                            </li>
                                            <li><a>Scheduled bug finding and fixing</a></li>
                                            <li><a>Monitoring the traffic engagement and loading capabilities and
                                                    optimizing as per business needs. </a></li>
                                        </ul>
                                    </div>

                                    <div class="overlay-planing">

                                        <img src="{{ asset('/') }}assets/frontend/images/discovery 1.png" alt="Image" class="img-fluid w-100">

                                    </div>

                                </div>
                                <!--approch-text End-->

                                <div class="outcome">
                                    <div class="row">

                                        <div class="col-lg-8">
                                            <div class="approch-ul">
                                                <h4>Outcome</h4>
                                                <ul>
                                                    <li><a href="">Solutions as per the vision of the client.</a>
                                                    </li>
                                                    <li><a href="">Cost reduction.</a></li>
                                                    <li><a href="">Quicker delivery.</a></li>
                                                    <li><a href="">Risk minimization</a></li>
                                                    <li><a href="">Delivery of a better product</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--Col-lg-6-->

                                        <div class="col-lg-4">
                                            <div class="approch-ul">
                                                <h4>Team Members Involved</h4>
                                                <ul>
                                                    <li><a href="">Project Manager</a></li>
                                                    <li><a href="">Tech Lead</a></li>
                                                    <li><a href="">IA & UX Lead</a></li>
                                                    <li><a href="">Project Owner / Client</a></li>
                                                    <li><a href="">Business Analyst</a>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--Col-lg-6-->
                                    </div>
                                    <!--Row-->


                                    <div class="outcome-overlay">
                                        <img src="{{ asset('/') }}assets/frontend/images/approch-Outcome.png" alt="Iamges" class="img-fluid">
                                    </div>
                                </div>

                                <div class="Deliverables">
                                    <div class="outcome">
                                        <h4>Deliverables</h4>
                                        <div class="approch-ul">
                                            <ul>
                                                <li><a>UI design file and mockup of every page in visible format</a>
                                                </li>
                                                <li><a>Source file (PSD/xD etc)</a></li>
                                                <li><a>Approved printed signed copy of UI</a></li>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="outcome-overlay">
                                            <img src="{{ asset('/') }}assets/frontend/images/approch-Outcome.png" alt="Iamges" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">&nbsp;</div>
                        <div class="col-md-3 pull-right">
                            <nav class="right_sidenav">
                                <ul class="right_sidenav_ul">
                                    <li class=""><a class="" href="#discovery">Discovery</a></li>
                                    <li class=""><a class="" href="#planning">Planning</a></li>
                                    <li class=""><a class="" href="#design">Design</a></li>
                                    <li class=""><a class="" href="#development">Development</a></li>
                                    <li class=""><a class="" href="#testings">Testing</a></li>
                                    <li class=""><a class="" href="#maintenance">Maintenance</a></li>
                                    <div class="lefi_overlays">
                                        <img src="{{ asset('/') }}assets/frontend/images/approch_left.png" alt="image" class="img-fluid">
                                    </div>
                                </ul>

                            </nav>
                        </div>
                    </div>


                </div>
                <!-- ROW -->
                <!-- END DISCOVARY PART -->

                <!-- START PLANING PART -->

                <!-- ROW -->
                <!-- END PLANING PART -->
            </div>
            <!-- Container -->
    </section>

    <!-- =========================== APPROCH Discovary PART END =========================== -->


    <!-- =========================== APPROCH Collaboration Tools PART START =========================== -->
    <section id="r_collaboration">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="approch-hedding">
                        <h3>Collaboration Tools</h3>
                        <p>We prioritize proper communication and thus we use profound platforms to ensure smooth communication. We can opt for the communication tools you prefer and comfortable with.
                        </p>
                    </div>
                </div>
            </div>
            <!-- ROW -->

            <div class="row">

                <div class="col-lg col-sm-6">
                    <div class="collaboration-logo">
                        <div class="svg">
                            <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M63.1285 39.3986C67.8356 18.2465 49.3052 -0.96914 27.5438 2.71961C15.73 -4.61185 0 3.67294 0 17.7292C0 20.9982 0.901875 24.0586 2.47 26.6965C-1.90396 47.8973 16.7781 66.8367 38.5206 62.8961C53.8904 71.0238 70.8744 54.8144 63.1285 39.3986ZM42.4423 52.1548C36.7331 54.503 27.3379 54.5165 21.6531 51.54C13.5471 47.2175 12.1063 37.4865 19.0992 37.4865C24.3696 37.4865 22.7013 43.6317 28.0231 46.1369C30.466 47.2663 35.7175 47.3827 38.7698 45.3244C41.7842 43.3067 41.5079 40.1325 39.8694 38.6159C35.5279 34.6075 23.1048 36.2 17.4254 29.1827C14.9581 26.1386 14.4923 20.7679 17.5256 16.8734C22.8123 10.07 38.3256 9.65565 44.9963 14.7934C51.155 19.56 49.4921 25.8867 44.5223 25.8867C38.545 25.8867 41.6867 18.065 32.0369 18.065C25.0413 18.065 22.2896 23.0402 27.216 25.4615C33.8948 28.7792 50.914 27.6715 50.914 40.6363C50.9004 46.0313 47.5935 50.0532 42.4423 52.1548Z"
                                    fill="black" />
                            </svg>
                        </div>
                        <p>Skype</p>
                    </div>
                </div>
                <!--col-lg-->

                <div class="col-lg col-sm-6">
                    <div class="collaboration-logo">
                        <div class="svg">
                            <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M40.625 0L4.0625 14.2188V52.8125L16.25 48.75V16.25L40.625 12.1875V57.0537L4.0625 52.8125L40.625 65L60.9375 58.9062V6.09375L40.625 0Z"
                                    fill="black" />
                            </svg>
                        </div>

                        <p>Office 365</p>
                    </div>
                </div>
                <!--col-lg-->

                <div class="col-lg col-sm-6">
                    <div class="collaboration-logo">
                        <div class="svg">
                            <svg width="65" height="63" viewBox="0 0 65 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M32.5 0.354492C14.5437 0.354492 0 14.6545 0 32.2912C0 46.4043 9.31125 58.3724 22.2219 62.592C23.8469 62.8926 24.4427 61.9041 24.4427 61.0564C24.4427 60.298 24.4156 58.2885 24.4021 55.6262C15.3617 57.5518 13.455 51.3416 13.455 51.3416C11.9762 47.6555 9.83937 46.6697 9.83937 46.6697C6.89542 44.6899 10.0669 44.7305 10.0669 44.7305C13.3304 44.9526 15.0448 48.0212 15.0448 48.0212C17.9427 52.9043 22.6525 51.4932 24.5104 50.678C24.8029 48.6116 25.6398 47.206 26.5688 46.407C19.351 45.608 11.765 42.8618 11.765 30.6255C11.765 27.1399 13.0244 24.2907 15.1098 22.0564C14.7442 21.2493 13.6473 18.002 15.3942 13.6037C15.3942 13.6037 18.116 12.7478 24.3317 16.878C26.9317 16.1685 29.6942 15.8164 32.4567 15.8001C35.2192 15.8164 37.9817 16.1685 40.5817 16.878C46.7567 12.7478 49.4785 13.6037 49.4785 13.6037C51.2254 18.002 50.1285 21.2493 49.8035 22.0564C51.8754 24.2907 53.1348 27.1399 53.1348 30.6255C53.1348 42.8943 45.5379 45.5945 38.3067 46.3799C39.4442 47.3387 40.5004 49.2968 40.5004 52.2895C40.5004 56.5632 40.4598 59.9974 40.4598 61.0347C40.4598 61.8716 41.0285 62.871 42.6942 62.5514C55.6969 58.3589 65 46.3826 65 32.2912C65 14.6545 50.4481 0.354492 32.5 0.354492Z"
                                    fill="#212121" />
                            </svg>


                        </div>

                        <p>Github</p>
                    </div>
                </div>
                <!--col-lg-->

                <div class="col-lg col-sm-6">
                    <div class="collaboration-logo">
                        <div class="svg">
                            <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M63.1285 39.3986C67.8356 18.2465 49.3052 -0.96914 27.5438 2.71961C15.73 -4.61185 0 3.67294 0 17.7292C0 20.9982 0.901875 24.0586 2.47 26.6965C-1.90396 47.8973 16.7781 66.8367 38.5206 62.8961C53.8904 71.0238 70.8744 54.8144 63.1285 39.3986ZM42.4423 52.1548C36.7331 54.503 27.3379 54.5165 21.6531 51.54C13.5471 47.2175 12.1063 37.4865 19.0992 37.4865C24.3696 37.4865 22.7013 43.6317 28.0231 46.1369C30.466 47.2663 35.7175 47.3827 38.7698 45.3244C41.7842 43.3067 41.5079 40.1325 39.8694 38.6159C35.5279 34.6075 23.1048 36.2 17.4254 29.1827C14.9581 26.1386 14.4923 20.7679 17.5256 16.8734C22.8123 10.07 38.3256 9.65565 44.9963 14.7934C51.155 19.56 49.4921 25.8867 44.5223 25.8867C38.545 25.8867 41.6867 18.065 32.0369 18.065C25.0413 18.065 22.2896 23.0402 27.216 25.4615C33.8948 28.7792 50.914 27.6715 50.914 40.6363C50.9004 46.0313 47.5935 50.0532 42.4423 52.1548Z"
                                    fill="black" />
                            </svg>
                        </div>
                        <p>Skype</p>
                    </div>
                </div>
                <!--col-lg-->

                <div class="col-lg col-sm-6">
                    <div class="collaboration-logo">
                        <div class="svg p-2">
                            <svg width="65" height="47" viewBox="0 0 65 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.0968656 10.0718C2.62824 7.7673 6.07908 5.66991 10.3619 3.82882L7.98364 0.558594H0V10.1617C0.032501 10.1317 0.0639823 10.1016 0.0968656 10.0718Z"
                                    fill="black" />
                                <path
                                    d="M64.9995 19.5059C64.7618 19.0079 63.5614 17.9019 59.8072 16.9067C55.2442 15.6971 48.4327 15.0576 40.1087 15.0576C31.8294 15.0576 22.0288 15.6813 13.8919 16.7257C5.86381 17.7563 1.7395 18.9075 0 19.6722V19.6818C1.7395 20.4465 5.86381 21.5977 13.8919 22.6283C22.0288 23.6728 31.8294 24.2964 40.1087 24.2964C48.4327 24.2964 55.2442 23.657 59.8072 22.4473C63.5614 21.452 64.7619 20.3461 64.9995 19.8481C65.0001 19.7909 65.0001 19.563 64.9995 19.5059Z"
                                    fill="black" />
                                <path
                                    d="M0.421875 15.4497C0.580301 15.3996 0.73911 15.3508 0.897791 15.3032C3.51316 14.5188 7.13836 13.7993 11.6729 13.1651C20.1896 11.9737 31.0857 11.2337 40.1089 11.2337C48.7587 11.2337 55.9092 11.9173 60.7872 13.2106C62.0545 13.5465 63.1723 13.9251 64.1434 14.3444C63.1076 11.2641 61.1558 8.55171 58.4023 6.44284C58.0709 6.18908 57.7271 5.94526 57.3735 5.70921C52.9595 3.01724 46.9476 1.60352 39.8267 1.60352C31.2327 1.60352 20.8796 3.65171 12.8074 6.94871C8.53564 8.69357 5.03051 10.7512 2.67094 12.8993C1.74689 13.7404 0.997333 14.5918 0.421875 15.4497Z"
                                    fill="black" />
                                <path
                                    d="M58.4033 32.9111C61.1568 30.8023 63.1085 28.0899 64.1443 25.0096C63.1733 25.4289 62.0555 25.8075 60.7882 26.1434C55.9101 27.4366 48.7597 28.1202 40.1098 28.1202C31.0865 28.1202 20.1906 27.3801 11.6739 26.1889C7.13933 25.5546 3.51414 24.8352 0.898768 24.0507C0.740086 24.0032 0.581405 23.9543 0.422852 23.9043C0.99831 24.7622 1.74787 25.6136 2.67192 26.4548C5.03161 28.6029 8.53675 30.6605 12.8084 32.4054C20.8806 35.7025 31.2336 37.7506 39.8276 37.7506C46.9654 37.7506 52.9886 36.33 57.4054 33.6257C57.7483 33.3957 58.0812 33.1578 58.4033 32.9111Z"
                                    fill="black" />
                                <path
                                    d="M42.0596 41.5279V46.4425H49.0696V40.7295C46.8698 41.1599 44.527 41.4276 42.0596 41.5279Z"
                                    fill="black" />
                                <path
                                    d="M38.2369 41.5517C33.224 41.4181 27.7415 40.6663 22.4639 39.4297C23.2348 43.4194 26.7518 46.4425 30.9632 46.4425H38.2369V41.5517Z"
                                    fill="black" />
                                <path
                                    d="M0.0968656 29.2811C0.0641097 29.2513 0.032501 29.2212 0 29.1914V38.7945H8.62091L10.8495 35.7302C6.34087 33.8398 2.72333 31.6722 0.0968656 29.2811Z"
                                    fill="black" />
                            </svg>

                        </div>

                        <p>Slacks</p>
                    </div>
                </div>
                <!--col-lg-->

            </div>
            <!--Row-->

            <div class="row">

                <div class="col-lg col-sm-6">
                    <div class="collaboration-logo">
                        <div class="svg">
                            <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M59.2871 34.4043H40.1172C36.9671 34.4043 34.4043 36.9671 34.4043 40.1172C34.4043 43.2673 36.9671 45.8301 40.1172 45.8301H59.2871C62.4372 45.8301 65 43.2673 65 40.1172C65 36.9671 62.4372 34.4043 59.2871 34.4043Z"
                                    fill="black" />
                                <path
                                    d="M24.8828 19.1699H5.71289C2.5628 19.1699 0 21.7327 0 24.8828C0 28.0329 2.5628 30.5957 5.71289 30.5957H24.8828C28.0329 30.5957 30.5957 28.0329 30.5957 24.8828C30.5957 21.7327 28.0329 19.1699 24.8828 19.1699Z"
                                    fill="black" />
                                <path
                                    d="M40.1172 30.5957C43.2673 30.5957 45.8301 28.0329 45.8301 24.8828V5.71289C45.8301 2.5628 43.2673 0 40.1172 0C36.9671 0 34.4043 2.5628 34.4043 5.71289V24.8828C34.4043 28.0329 36.9671 30.5957 40.1172 30.5957Z"
                                    fill="black" />
                                <path
                                    d="M24.8828 34.4043C21.7327 34.4043 19.1699 36.9671 19.1699 40.1172V59.2871C19.1699 62.4372 21.7327 65 24.8828 65C28.0329 65 30.5957 62.4372 30.5957 59.2871V40.1172C30.5957 36.9671 28.0329 34.4043 24.8828 34.4043Z"
                                    fill="black" />
                                <path
                                    d="M51.6699 30.5957H57.3828C61.5829 30.5957 65 27.1786 65 22.9785C65 18.7784 61.5829 15.3613 57.3828 15.3613C53.1827 15.3613 49.7656 18.7784 49.7656 22.9785V28.6914C49.7656 29.7431 50.6182 30.5957 51.6699 30.5957Z"
                                    fill="black" />
                                <path
                                    d="M13.3301 34.4043H7.61719C3.41707 34.4043 0 37.8214 0 42.0215C0 46.2216 3.41707 49.6387 7.61719 49.6387C11.8173 49.6387 15.2344 46.2216 15.2344 42.0215V36.3086C15.2344 35.2569 14.3818 34.4043 13.3301 34.4043Z"
                                    fill="black" />
                                <path
                                    d="M22.9785 0C18.7784 0 15.3613 3.41707 15.3613 7.61719C15.3613 11.8173 18.7784 15.2344 22.9785 15.2344H28.6914C29.7431 15.2344 30.5957 14.3818 30.5957 13.3301V7.61719C30.5957 3.41707 27.1786 0 22.9785 0Z"
                                    fill="black" />
                                <path
                                    d="M42.0215 49.7656H36.3086C35.2569 49.7656 34.4043 50.6182 34.4043 51.6699V57.3828C34.4043 61.5829 37.8214 65 42.0215 65C46.2216 65 49.6387 61.5829 49.6387 57.3828C49.6387 53.1827 46.2216 49.7656 42.0215 49.7656Z"
                                    fill="black" />
                            </svg>

                        </div>
                        <p>Slacks</p>
                    </div>
                </div>
                <!--col-lg-->

                <div class="col-lg col-sm-6">
                    <div class="collaboration-logo">
                        <div class="svg p-2">
                            <svg width="65" height="47" viewBox="0 0 65 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.0968656 10.0713C2.62824 7.76681 6.07908 5.66942 10.3619 3.82834L7.98364 0.558105H0V10.1612C0.032501 10.1312 0.0639823 10.1011 0.0968656 10.0713Z"
                                    fill="black" />
                                <path
                                    d="M64.9995 19.5049C64.7618 19.007 63.5614 17.9009 59.8072 16.9058C55.2442 15.6961 48.4327 15.0566 40.1087 15.0566C31.8294 15.0566 22.0288 15.6803 13.8919 16.7248C5.86381 17.7554 1.7395 18.9065 0 19.6713V19.6808C1.7395 20.4455 5.86381 21.5967 13.8919 22.6273C22.0288 23.6718 31.8294 24.2954 40.1087 24.2954C48.4327 24.2954 55.2442 23.656 59.8072 22.4463C63.5614 21.451 64.7619 20.3451 64.9995 19.8472C65.0001 19.7899 65.0001 19.562 64.9995 19.5049Z"
                                    fill="black" />
                                <path
                                    d="M0.420898 15.4492C0.579325 15.3991 0.738133 15.3503 0.896814 15.3028C3.51219 14.5183 7.13738 13.7988 11.672 13.1646C20.1886 11.9733 31.0847 11.2333 40.1079 11.2333C48.7577 11.2333 55.9082 11.9168 60.7863 13.2101C62.0535 13.546 63.1713 13.9246 64.1424 14.3439C63.1066 11.2636 61.1549 8.55122 58.4013 6.44236C58.0699 6.18859 57.7261 5.94477 57.3725 5.70873C52.9585 3.01675 46.9466 1.60303 39.8257 1.60303C31.2317 1.60303 20.8787 3.65122 12.8064 6.94822C8.53467 8.69308 5.02953 10.7507 2.66996 12.8988C1.74592 13.7399 0.996356 14.5913 0.420898 15.4492Z"
                                    fill="black" />
                                <path
                                    d="M58.4013 32.9102C61.1549 30.8013 63.1066 28.0889 64.1424 25.0086C63.1713 25.4279 62.0535 25.8065 60.7863 26.1424C55.9082 27.4356 48.7577 28.1193 40.1079 28.1193C31.0846 28.1193 20.1886 27.3791 11.672 26.1879C7.13738 25.5536 3.51219 24.8343 0.896814 24.0498C0.738133 24.0022 0.579452 23.9533 0.420898 23.9033C0.996356 24.7612 1.74592 25.6126 2.66996 26.4538C5.02966 28.6019 8.53479 30.6596 12.8064 32.4044C20.8787 35.7016 31.2317 37.7496 39.8257 37.7496C46.9634 37.7496 52.9867 36.329 57.4035 33.6247C57.7463 33.3947 58.0792 33.1568 58.4013 32.9102Z"
                                    fill="black" />
                                <path
                                    d="M42.0576 41.5274V46.442H49.0676V40.729C46.8679 41.1594 44.525 41.4271 42.0576 41.5274Z"
                                    fill="black" />
                                <path
                                    d="M38.2369 41.5512C33.224 41.4176 27.7415 40.6658 22.4639 39.4292C23.2348 43.4189 26.7518 46.442 30.9632 46.442H38.2369V41.5512Z"
                                    fill="black" />
                                <path
                                    d="M0.0968656 29.2811C0.0641097 29.2513 0.032501 29.2212 0 29.1914V38.7945H8.62091L10.8495 35.7302C6.34087 33.8398 2.72333 31.6722 0.0968656 29.2811Z"
                                    fill="black" />
                            </svg>

                        </div>

                        <p>Zeplin</p>
                    </div>
                </div>
                <!--col-lg-->

                <div class="col-lg col-sm-6">
                    <div class="collaboration-logo">
                        <div class="svg">
                            <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M63.1285 39.3986C67.8356 18.2465 49.3052 -0.96914 27.5438 2.71961C15.73 -4.61185 0 3.67294 0 17.7292C0 20.9982 0.901875 24.0586 2.47 26.6965C-1.90396 47.8973 16.7781 66.8367 38.5206 62.8961C53.8904 71.0238 70.8744 54.8144 63.1285 39.3986ZM42.4423 52.1548C36.7331 54.503 27.3379 54.5165 21.6531 51.54C13.5471 47.2175 12.1063 37.4865 19.0992 37.4865C24.3696 37.4865 22.7013 43.6317 28.0231 46.1369C30.466 47.2663 35.7175 47.3827 38.7698 45.3244C41.7842 43.3067 41.5079 40.1325 39.8694 38.6159C35.5279 34.6075 23.1048 36.2 17.4254 29.1827C14.9581 26.1386 14.4923 20.7679 17.5256 16.8734C22.8123 10.07 38.3256 9.65565 44.9963 14.7934C51.155 19.56 49.4921 25.8867 44.5223 25.8867C38.545 25.8867 41.6867 18.065 32.0369 18.065C25.0413 18.065 22.2896 23.0402 27.216 25.4615C33.8948 28.7792 50.914 27.6715 50.914 40.6363C50.9004 46.0313 47.5935 50.0532 42.4423 52.1548Z"
                                    fill="black" />
                            </svg>
                        </div>
                        <p>Skype</p>
                    </div>
                </div>
                <!--col-lg-->

                <div class="col-lg col-sm-6">
                    <div class="collaboration-logo">
                        <div class="svg">
                            <svg width="65" height="63" viewBox="0 0 65 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M32.5 0.354492C14.5437 0.354492 0 14.6545 0 32.2912C0 46.4043 9.31125 58.3724 22.2219 62.592C23.8469 62.8926 24.4427 61.9041 24.4427 61.0564C24.4427 60.298 24.4156 58.2885 24.4021 55.6262C15.3617 57.5518 13.455 51.3416 13.455 51.3416C11.9762 47.6555 9.83937 46.6697 9.83937 46.6697C6.89542 44.6899 10.0669 44.7305 10.0669 44.7305C13.3304 44.9526 15.0448 48.0212 15.0448 48.0212C17.9427 52.9043 22.6525 51.4932 24.5104 50.678C24.8029 48.6116 25.6398 47.206 26.5688 46.407C19.351 45.608 11.765 42.8618 11.765 30.6255C11.765 27.1399 13.0244 24.2907 15.1098 22.0564C14.7442 21.2493 13.6473 18.002 15.3942 13.6037C15.3942 13.6037 18.116 12.7478 24.3317 16.878C26.9317 16.1685 29.6942 15.8164 32.4567 15.8001C35.2192 15.8164 37.9817 16.1685 40.5817 16.878C46.7567 12.7478 49.4785 13.6037 49.4785 13.6037C51.2254 18.002 50.1285 21.2493 49.8035 22.0564C51.8754 24.2907 53.1348 27.1399 53.1348 30.6255C53.1348 42.8943 45.5379 45.5945 38.3067 46.3799C39.4442 47.3387 40.5004 49.2968 40.5004 52.2895C40.5004 56.5632 40.4598 59.9974 40.4598 61.0347C40.4598 61.8716 41.0285 62.871 42.6942 62.5514C55.6969 58.3589 65 46.3826 65 32.2912C65 14.6545 50.4481 0.354492 32.5 0.354492Z"
                                    fill="#212121" />
                            </svg>


                        </div>

                        <p>Github</p>
                    </div>
                </div>
                <!--col-lg-->

                <div class="col-lg col-sm-6">
                    <div class="collaboration-logo">
                        <div class="svg">
                            <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M40.625 0L4.0625 14.2188V52.8125L16.25 48.75V16.25L40.625 12.1875V57.0537L4.0625 52.8125L40.625 65L60.9375 58.9062V6.09375L40.625 0Z"
                                    fill="black" />
                            </svg>
                        </div>

                        <p>Office 365</p>
                    </div>
                </div>
                <!--col-lg-->

            </div>
            <!--Row-->
        </div>
        <!-- Container -->
    </section>

    <!-- ======== MOBILE APPROCH Collaboration Tools PART START ========== -->
    <section id="mob_collaboration">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="approch-hedding">
                        <h3>Collaboration Tools</h3>
                        <p>We prioritize proper communication and thus we use profound platforms to ensure smooth communication. We can opt for the communication tools you prefer and comfortable with.
                        </p>
                    </div>
                </div>
            </div>

            <div class="mob_collaboration-slider">

                <div class="mob_collaboration-item">
                    <div class="logo">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M38.8483 24.244C41.745 11.2273 30.3417 -0.597671 16.95 1.67233C9.68 -2.83934 0 2.259 0 10.909C0 12.9207 0.555 14.804 1.52 16.4273C-1.17167 29.474 10.325 41.129 23.705 38.704C33.1633 43.7057 43.615 33.7307 38.8483 24.244ZM26.1183 32.094C22.605 33.539 16.8233 33.5473 13.325 31.7157C8.33667 29.0557 7.45 23.0673 11.7533 23.0673C14.9967 23.0673 13.97 26.849 17.245 28.3907C18.7483 29.0857 21.98 29.1573 23.8583 27.8907C25.7133 26.649 25.5433 24.6957 24.535 23.7623C21.8633 21.2957 14.2183 22.2757 10.7233 17.9573C9.205 16.084 8.91833 12.779 10.785 10.3823C14.0383 6.19566 23.585 5.94066 27.69 9.10233C31.48 12.0357 30.4567 15.929 27.3983 15.929C23.72 15.929 25.6533 11.1157 19.715 11.1157C15.41 11.1157 13.7167 14.1773 16.7483 15.6673C20.8583 17.709 31.3317 17.0273 31.3317 25.0057C31.3233 28.3257 29.2883 30.8007 26.1183 32.094Z"
                                fill="black" />
                        </svg>
                    </div>
                    <p>Skype</p>
                </div>

                <div class="mob_collaboration-item">
                    <div class="logo">
                        <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M40.625 0L4.0625 14.2188V52.8125L16.25 48.75V16.25L40.625 12.1875V57.0537L4.0625 52.8125L40.625 65L60.9375 58.9062V6.09375L40.625 0Z"
                                fill="black" />
                        </svg>
                    </div>
                    <p>Office 365</p>
                </div>

                <div class="mob_collaboration-item">
                    <div class="logo">
                        <svg width="65" height="63" viewBox="0 0 65 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M32.5 0.353516C14.5437 0.353516 0 14.6535 0 32.2902C0 46.4033 9.31125 58.3714 22.2219 62.591C23.8469 62.8916 24.4427 61.9031 24.4427 61.0554C24.4427 60.2971 24.4156 58.2875 24.4021 55.6252C15.3617 57.5508 13.455 51.3406 13.455 51.3406C11.9762 47.6546 9.83937 46.6687 9.83937 46.6687C6.89542 44.6889 10.0669 44.7296 10.0669 44.7296C13.3304 44.9516 15.0448 48.0202 15.0448 48.0202C17.9427 52.9033 22.6525 51.4923 24.5104 50.6771C24.8029 48.6106 25.6398 47.205 26.5688 46.406C19.351 45.6071 11.765 42.8608 11.765 30.6246C11.765 27.1389 13.0244 24.2898 15.1098 22.0554C14.7442 21.2483 13.6473 18.001 15.3942 13.6027C15.3942 13.6027 18.116 12.7468 24.3317 16.8771C26.9317 16.1675 29.6942 15.8154 32.4567 15.7991C35.2192 15.8154 37.9817 16.1675 40.5817 16.8771C46.7567 12.7468 49.4785 13.6027 49.4785 13.6027C51.2254 18.001 50.1285 21.2483 49.8035 22.0554C51.8754 24.2898 53.1348 27.1389 53.1348 30.6246C53.1348 42.8933 45.5379 45.5935 38.3067 46.3789C39.4442 47.3377 40.5004 49.2958 40.5004 52.2885C40.5004 56.5623 40.4598 59.9964 40.4598 61.0337C40.4598 61.8706 41.0285 62.87 42.6942 62.5504C55.6969 58.3579 65 46.3816 65 32.2902C65 14.6535 50.4481 0.353516 32.5 0.353516Z"
                                fill="#212121" />
                        </svg>
                    </div>
                    <p>Github</p>
                </div>

                <div class="mob_collaboration-item">
                    <div class="logo">
                        <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M59.2871 34.4043H40.1172C36.9671 34.4043 34.4043 36.9671 34.4043 40.1172C34.4043 43.2673 36.9671 45.8301 40.1172 45.8301H59.2871C62.4372 45.8301 65 43.2673 65 40.1172C65 36.9671 62.4372 34.4043 59.2871 34.4043Z"
                                fill="black" />
                            <path
                                d="M24.8828 19.1699H5.71289C2.5628 19.1699 0 21.7327 0 24.8828C0 28.0329 2.5628 30.5957 5.71289 30.5957H24.8828C28.0329 30.5957 30.5957 28.0329 30.5957 24.8828C30.5957 21.7327 28.0329 19.1699 24.8828 19.1699Z"
                                fill="black" />
                            <path
                                d="M40.1172 30.5957C43.2673 30.5957 45.8301 28.0329 45.8301 24.8828V5.71289C45.8301 2.5628 43.2673 0 40.1172 0C36.9671 0 34.4043 2.5628 34.4043 5.71289V24.8828C34.4043 28.0329 36.9671 30.5957 40.1172 30.5957Z"
                                fill="black" />
                            <path
                                d="M24.8828 34.4043C21.7327 34.4043 19.1699 36.9671 19.1699 40.1172V59.2871C19.1699 62.4372 21.7327 65 24.8828 65C28.0329 65 30.5957 62.4372 30.5957 59.2871V40.1172C30.5957 36.9671 28.0329 34.4043 24.8828 34.4043Z"
                                fill="black" />
                            <path
                                d="M51.6699 30.5957H57.3828C61.5829 30.5957 65 27.1786 65 22.9785C65 18.7784 61.5829 15.3613 57.3828 15.3613C53.1827 15.3613 49.7656 18.7784 49.7656 22.9785V28.6914C49.7656 29.7431 50.6182 30.5957 51.6699 30.5957Z"
                                fill="black" />
                            <path
                                d="M13.3301 34.4043H7.61719C3.41707 34.4043 0 37.8214 0 42.0215C0 46.2216 3.41707 49.6387 7.61719 49.6387C11.8173 49.6387 15.2344 46.2216 15.2344 42.0215V36.3086C15.2344 35.2569 14.3818 34.4043 13.3301 34.4043Z"
                                fill="black" />
                            <path
                                d="M22.9785 0C18.7784 0 15.3613 3.41707 15.3613 7.61719C15.3613 11.8173 18.7784 15.2344 22.9785 15.2344H28.6914C29.7431 15.2344 30.5957 14.3818 30.5957 13.3301V7.61719C30.5957 3.41707 27.1786 0 22.9785 0Z"
                                fill="black" />
                            <path
                                d="M42.0215 49.7656H36.3086C35.2569 49.7656 34.4043 50.6182 34.4043 51.6699V57.3828C34.4043 61.5829 37.8214 65 42.0215 65C46.2216 65 49.6387 61.5829 49.6387 57.3828C49.6387 53.1827 46.2216 49.7656 42.0215 49.7656Z"
                                fill="black" />
                        </svg>


                    </div>
                    <p>Slacks</p>
                </div>

                <div class="mob_collaboration-item">
                    <div class="logo">
                        <svg width="65" height="47" viewBox="0 0 65 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.0968656 10.0718C2.62824 7.7673 6.07908 5.66991 10.3619 3.82882L7.98364 0.558594H0V10.1617C0.032501 10.1317 0.0639823 10.1016 0.0968656 10.0718Z"
                                fill="black" />
                            <path
                                d="M64.9995 19.5049C64.7618 19.007 63.5614 17.9009 59.8072 16.9058C55.2442 15.6961 48.4327 15.0566 40.1087 15.0566C31.8294 15.0566 22.0288 15.6803 13.8919 16.7248C5.86381 17.7554 1.7395 18.9065 0 19.6713V19.6808C1.7395 20.4455 5.86381 21.5967 13.8919 22.6273C22.0288 23.6718 31.8294 24.2954 40.1087 24.2954C48.4327 24.2954 55.2442 23.656 59.8072 22.4463C63.5614 21.451 64.7619 20.3451 64.9995 19.8472C65.0001 19.7899 65.0001 19.562 64.9995 19.5049Z"
                                fill="black" />
                            <path
                                d="M0.421875 15.4497C0.580301 15.3996 0.73911 15.3508 0.897791 15.3032C3.51316 14.5188 7.13836 13.7993 11.6729 13.1651C20.1896 11.9737 31.0857 11.2337 40.1089 11.2337C48.7587 11.2337 55.9092 11.9173 60.7872 13.2106C62.0545 13.5465 63.1723 13.9251 64.1434 14.3444C63.1076 11.2641 61.1558 8.55171 58.4023 6.44284C58.0709 6.18908 57.7271 5.94526 57.3735 5.70921C52.9595 3.01724 46.9476 1.60352 39.8267 1.60352C31.2327 1.60352 20.8796 3.65171 12.8074 6.94871C8.53564 8.69357 5.03051 10.7512 2.67094 12.8993C1.74689 13.7404 0.997333 14.5918 0.421875 15.4497Z"
                                fill="black" />
                            <path
                                d="M58.4033 32.9111C61.1568 30.8023 63.1085 28.0899 64.1443 25.0096C63.1733 25.4289 62.0555 25.8075 60.7882 26.1434C55.9101 27.4366 48.7597 28.1202 40.1098 28.1202C31.0865 28.1202 20.1906 27.3801 11.6739 26.1889C7.13933 25.5546 3.51414 24.8352 0.898768 24.0507C0.740086 24.0032 0.581405 23.9543 0.422852 23.9043C0.99831 24.7622 1.74787 25.6136 2.67192 26.4548C5.03161 28.6029 8.53675 30.6605 12.8084 32.4054C20.8806 35.7025 31.2336 37.7506 39.8276 37.7506C46.9654 37.7506 52.9886 36.33 57.4054 33.6257C57.7483 33.3957 58.0812 33.1578 58.4033 32.9111Z"
                                fill="black" />
                            <path
                                d="M42.0596 41.5269V46.4416H49.0696V40.7285C46.8698 41.1589 44.527 41.4266 42.0596 41.5269Z"
                                fill="black" />
                            <path
                                d="M38.2369 41.5517C33.224 41.4181 27.7415 40.6663 22.4639 39.4297C23.2348 43.4194 26.7518 46.4425 30.9632 46.4425H38.2369V41.5517Z"
                                fill="black" />
                            <path
                                d="M0.0968656 29.2811C0.0641097 29.2513 0.032501 29.2212 0 29.1914V38.7945H8.62091L10.8495 35.7302C6.34087 33.8398 2.72333 31.6722 0.0968656 29.2811Z"
                                fill="black" />
                        </svg>

                    </div>

                    <p>Zeplin</p>
                </div>

                <div class="mob_collaboration-item">
                    <div class="logo">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M38.8483 24.244C41.745 11.2273 30.3417 -0.597671 16.95 1.67233C9.68 -2.83934 0 2.259 0 10.909C0 12.9207 0.555 14.804 1.52 16.4273C-1.17167 29.474 10.325 41.129 23.705 38.704C33.1633 43.7057 43.615 33.7307 38.8483 24.244ZM26.1183 32.094C22.605 33.539 16.8233 33.5473 13.325 31.7157C8.33667 29.0557 7.45 23.0673 11.7533 23.0673C14.9967 23.0673 13.97 26.849 17.245 28.3907C18.7483 29.0857 21.98 29.1573 23.8583 27.8907C25.7133 26.649 25.5433 24.6957 24.535 23.7623C21.8633 21.2957 14.2183 22.2757 10.7233 17.9573C9.205 16.084 8.91833 12.779 10.785 10.3823C14.0383 6.19566 23.585 5.94066 27.69 9.10233C31.48 12.0357 30.4567 15.929 27.3983 15.929C23.72 15.929 25.6533 11.1157 19.715 11.1157C15.41 11.1157 13.7167 14.1773 16.7483 15.6673C20.8583 17.709 31.3317 17.0273 31.3317 25.0057C31.3233 28.3257 29.2883 30.8007 26.1183 32.094Z"
                                fill="black" />
                        </svg>
                    </div>
                    <p>Skype</p>
                </div>

                <div class="mob_collaboration-item">
                    <div class="logo">
                        <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M40.625 0L4.0625 14.2188V52.8125L16.25 48.75V16.25L40.625 12.1875V57.0537L4.0625 52.8125L40.625 65L60.9375 58.9062V6.09375L40.625 0Z"
                                fill="black" />
                        </svg>
                    </div>
                    <p>Office 365</p>
                </div>

                <div class="mob_collaboration-item">
                    <div class="logo">
                        <svg width="65" height="63" viewBox="0 0 65 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M32.5 0.353516C14.5437 0.353516 0 14.6535 0 32.2902C0 46.4033 9.31125 58.3714 22.2219 62.591C23.8469 62.8916 24.4427 61.9031 24.4427 61.0554C24.4427 60.2971 24.4156 58.2875 24.4021 55.6252C15.3617 57.5508 13.455 51.3406 13.455 51.3406C11.9762 47.6546 9.83937 46.6687 9.83937 46.6687C6.89542 44.6889 10.0669 44.7296 10.0669 44.7296C13.3304 44.9516 15.0448 48.0202 15.0448 48.0202C17.9427 52.9033 22.6525 51.4923 24.5104 50.6771C24.8029 48.6106 25.6398 47.205 26.5688 46.406C19.351 45.6071 11.765 42.8608 11.765 30.6246C11.765 27.1389 13.0244 24.2898 15.1098 22.0554C14.7442 21.2483 13.6473 18.001 15.3942 13.6027C15.3942 13.6027 18.116 12.7468 24.3317 16.8771C26.9317 16.1675 29.6942 15.8154 32.4567 15.7991C35.2192 15.8154 37.9817 16.1675 40.5817 16.8771C46.7567 12.7468 49.4785 13.6027 49.4785 13.6027C51.2254 18.001 50.1285 21.2483 49.8035 22.0554C51.8754 24.2898 53.1348 27.1389 53.1348 30.6246C53.1348 42.8933 45.5379 45.5935 38.3067 46.3789C39.4442 47.3377 40.5004 49.2958 40.5004 52.2885C40.5004 56.5623 40.4598 59.9964 40.4598 61.0337C40.4598 61.8706 41.0285 62.87 42.6942 62.5504C55.6969 58.3579 65 46.3816 65 32.2902C65 14.6535 50.4481 0.353516 32.5 0.353516Z"
                                fill="#212121" />
                        </svg>
                    </div>
                    <p>Github</p>
                </div>

                <div class="mob_collaboration-item">
                    <div class="logo">
                        <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M59.2871 34.4043H40.1172C36.9671 34.4043 34.4043 36.9671 34.4043 40.1172C34.4043 43.2673 36.9671 45.8301 40.1172 45.8301H59.2871C62.4372 45.8301 65 43.2673 65 40.1172C65 36.9671 62.4372 34.4043 59.2871 34.4043Z"
                                fill="black" />
                            <path
                                d="M24.8828 19.1699H5.71289C2.5628 19.1699 0 21.7327 0 24.8828C0 28.0329 2.5628 30.5957 5.71289 30.5957H24.8828C28.0329 30.5957 30.5957 28.0329 30.5957 24.8828C30.5957 21.7327 28.0329 19.1699 24.8828 19.1699Z"
                                fill="black" />
                            <path
                                d="M40.1172 30.5957C43.2673 30.5957 45.8301 28.0329 45.8301 24.8828V5.71289C45.8301 2.5628 43.2673 0 40.1172 0C36.9671 0 34.4043 2.5628 34.4043 5.71289V24.8828C34.4043 28.0329 36.9671 30.5957 40.1172 30.5957Z"
                                fill="black" />
                            <path
                                d="M24.8828 34.4043C21.7327 34.4043 19.1699 36.9671 19.1699 40.1172V59.2871C19.1699 62.4372 21.7327 65 24.8828 65C28.0329 65 30.5957 62.4372 30.5957 59.2871V40.1172C30.5957 36.9671 28.0329 34.4043 24.8828 34.4043Z"
                                fill="black" />
                            <path
                                d="M51.6699 30.5957H57.3828C61.5829 30.5957 65 27.1786 65 22.9785C65 18.7784 61.5829 15.3613 57.3828 15.3613C53.1827 15.3613 49.7656 18.7784 49.7656 22.9785V28.6914C49.7656 29.7431 50.6182 30.5957 51.6699 30.5957Z"
                                fill="black" />
                            <path
                                d="M13.3301 34.4043H7.61719C3.41707 34.4043 0 37.8214 0 42.0215C0 46.2216 3.41707 49.6387 7.61719 49.6387C11.8173 49.6387 15.2344 46.2216 15.2344 42.0215V36.3086C15.2344 35.2569 14.3818 34.4043 13.3301 34.4043Z"
                                fill="black" />
                            <path
                                d="M22.9785 0C18.7784 0 15.3613 3.41707 15.3613 7.61719C15.3613 11.8173 18.7784 15.2344 22.9785 15.2344H28.6914C29.7431 15.2344 30.5957 14.3818 30.5957 13.3301V7.61719C30.5957 3.41707 27.1786 0 22.9785 0Z"
                                fill="black" />
                            <path
                                d="M42.0215 49.7656H36.3086C35.2569 49.7656 34.4043 50.6182 34.4043 51.6699V57.3828C34.4043 61.5829 37.8214 65 42.0215 65C46.2216 65 49.6387 61.5829 49.6387 57.3828C49.6387 53.1827 46.2216 49.7656 42.0215 49.7656Z"
                                fill="black" />
                        </svg>


                    </div>
                    <p>Slacks</p>
                </div>

                <div class="mob_collaboration-item">
                    <div class="logo">
                        <svg width="65" height="47" viewBox="0 0 65 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.0968656 10.0718C2.62824 7.7673 6.07908 5.66991 10.3619 3.82882L7.98364 0.558594H0V10.1617C0.032501 10.1317 0.0639823 10.1016 0.0968656 10.0718Z"
                                fill="black" />
                            <path
                                d="M64.9995 19.5049C64.7618 19.007 63.5614 17.9009 59.8072 16.9058C55.2442 15.6961 48.4327 15.0566 40.1087 15.0566C31.8294 15.0566 22.0288 15.6803 13.8919 16.7248C5.86381 17.7554 1.7395 18.9065 0 19.6713V19.6808C1.7395 20.4455 5.86381 21.5967 13.8919 22.6273C22.0288 23.6718 31.8294 24.2954 40.1087 24.2954C48.4327 24.2954 55.2442 23.656 59.8072 22.4463C63.5614 21.451 64.7619 20.3451 64.9995 19.8472C65.0001 19.7899 65.0001 19.562 64.9995 19.5049Z"
                                fill="black" />
                            <path
                                d="M0.421875 15.4497C0.580301 15.3996 0.73911 15.3508 0.897791 15.3032C3.51316 14.5188 7.13836 13.7993 11.6729 13.1651C20.1896 11.9737 31.0857 11.2337 40.1089 11.2337C48.7587 11.2337 55.9092 11.9173 60.7872 13.2106C62.0545 13.5465 63.1723 13.9251 64.1434 14.3444C63.1076 11.2641 61.1558 8.55171 58.4023 6.44284C58.0709 6.18908 57.7271 5.94526 57.3735 5.70921C52.9595 3.01724 46.9476 1.60352 39.8267 1.60352C31.2327 1.60352 20.8796 3.65171 12.8074 6.94871C8.53564 8.69357 5.03051 10.7512 2.67094 12.8993C1.74689 13.7404 0.997333 14.5918 0.421875 15.4497Z"
                                fill="black" />
                            <path
                                d="M58.4033 32.9111C61.1568 30.8023 63.1085 28.0899 64.1443 25.0096C63.1733 25.4289 62.0555 25.8075 60.7882 26.1434C55.9101 27.4366 48.7597 28.1202 40.1098 28.1202C31.0865 28.1202 20.1906 27.3801 11.6739 26.1889C7.13933 25.5546 3.51414 24.8352 0.898768 24.0507C0.740086 24.0032 0.581405 23.9543 0.422852 23.9043C0.99831 24.7622 1.74787 25.6136 2.67192 26.4548C5.03161 28.6029 8.53675 30.6605 12.8084 32.4054C20.8806 35.7025 31.2336 37.7506 39.8276 37.7506C46.9654 37.7506 52.9886 36.33 57.4054 33.6257C57.7483 33.3957 58.0812 33.1578 58.4033 32.9111Z"
                                fill="black" />
                            <path
                                d="M42.0596 41.5269V46.4416H49.0696V40.7285C46.8698 41.1589 44.527 41.4266 42.0596 41.5269Z"
                                fill="black" />
                            <path
                                d="M38.2369 41.5517C33.224 41.4181 27.7415 40.6663 22.4639 39.4297C23.2348 43.4194 26.7518 46.4425 30.9632 46.4425H38.2369V41.5517Z"
                                fill="black" />
                            <path
                                d="M0.0968656 29.2811C0.0641097 29.2513 0.032501 29.2212 0 29.1914V38.7945H8.62091L10.8495 35.7302C6.34087 33.8398 2.72333 31.6722 0.0968656 29.2811Z"
                                fill="black" />
                        </svg>

                    </div>

                    <p>Zeplin</p>
                </div>

            </div>

        </div>

    </section>


    <!-- =========================== APPROCH Collaboration Tools PART END =========================== -->



    <!-- =========================== APPROCH PROJECT COMMUNICATION PART START =========================== -->
    <section id="r_project_communication" class="dismiss_">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto">
                    <div class="approch-hedding text-center">
                        <h3>Project Communication Structure</h3>
                    </div>
                </div>
            </div>
            <!--Row-->

            <div class="row">

                <div class="col-lg-3 col-sm-6 m-auto">
                    <div class="r_communication-text text-center">
                        <h3>Daily Scrum </h3>
                        <h3 class="pabbing-btm">Standup</h3>
                        <h4>Mon -Fri</h4>
                        <h4 class="pabbing-btm">30 minutes</h4>
                        <p>Check previous day’s work, current day’s plans, any queries, hurdles etc</p>
                        <p>Project Manager with the entire Project Team</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 m-auto">
                    <div class="r_communication-text text-center">
                        <h3>Weekly </h3>
                        <h3 class="pabbing-btm">Review</h3>
                        <h4>Weekly</h4>
                        <h4 class="pabbing-btm">45-60 minutes</h4>
                        <p>Check previous day’s work, current day’s plans, any queries, hurdles etc</p>
                        <p>Project Manager with the entire Project Team</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 m-auto">
                    <div class="r_communication-text text-center">
                        <h3>Sprint</h3>
                        <h3 class="pabbing-btm">Delivery</h3>
                        <h4>2-3 weeks</h4>
                        <h4 class="pabbing-btm">1-2 hours</h4>
                        <p>Check previous day’s work, current day’s plans, any queries, hurdles etc</p>
                        <p>Project Manager with the entire Project Team</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 m-auto">
                    <div class="r_communication-text text-center">
                        <h3>Code</h3>
                        <h3 class="pabbing-btm">Reviews</h3>
                        <h4>Bi-Weekly </h4>
                        <h4 class="pabbing-btm">3-4 hours</h4>
                        <p>Check previous day’s work, current day’s plans, any queries, hurdles etc</p>
                        <p>Project Manager with the entire Project Team</p>
                    </div>
                </div>

            </div>
            <!--Row-->
        </div>
        <!-- Container -->
    </section>
    <!-- =========================== APPROCH PROJECT COMMUNICATION PART END =========================== -->


    <section id="mh_engagement_models">
        <div class="container">
            <div class="mh_engagement_models_header">
                <h2>Engagement models</h2>
                <p>Leveraging years of experience, we’ve designed super convenient schemes of choosing services for our clients.</p>
            </div>

            <div class="row mh_engagement_models_elements_all">
                <div class="col-lg-4">
                    <div class="mh_engagement_models_elements">

                        <div class="off_shor_logo">
                            <img src="{{ asset('/') }}assets/frontend/images/all icon v2/offshore team.svg" alt="images">
                        </div>

                        <h5>Offshore Dedicated team</h5>
                        <p>
                            Hiring a dedicated offshore team can significantly reduce your operational expenses. We will manage the best available talents along with the necessary resources and infrastructure to set up a fully functional team as per your requirement. This team will
                            operate under your complete authority and guidance as your in-house team does.
                        </p>

                        <a href="#" class="link_span">
                            <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.6453 4.7496L6.73847 0.842661C6.62695 0.731137 6.47831 0.669922 6.31982 0.669922C6.16115 0.669922 6.0126 0.731225 5.90108 0.842661L5.54636 1.19746C5.43493 1.30881 5.37354 1.45754 5.37354 1.61611C5.37354 1.7746 5.43493 1.92835 5.54636 2.03969L7.82556 4.32391H0.584444C0.257965 4.32391 0 4.5795 0 4.90606V5.40766C0 5.73422 0.257965 6.01558 0.584444 6.01558H7.85142L5.54645 8.31255C5.43502 8.42408 5.37363 8.56876 5.37363 8.72734C5.37363 8.88574 5.43502 9.03253 5.54645 9.14397L5.90116 9.49762C6.01269 9.60915 6.16124 9.66992 6.31991 9.66992C6.4784 9.66992 6.62703 9.60836 6.73856 9.49683L10.6454 5.58998C10.7572 5.47811 10.8187 5.32876 10.8182 5.17001C10.8186 5.01073 10.7572 4.8613 10.6453 4.7496Z"
                                    fill="#4F81BD" />
                            </svg> Learn More
                        </a>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mh_engagement_models_elements">
                        <div class="off_shor_logo">
                            <img src="{{ asset('/') }}assets/frontend/images/all icon v2/sla based.svg" alt="images">
                        </div>

                        <h5>SLA Based Approach</h5>
                        <p>
                            We recommend the SLA approach for long-term projects with clearly agreed requirements & limitations as per the conditions mentioned in the Service Level Agreement between both parties, Doodle Inc. will take the complete responsibility of monitoring and
                            guiding your offshore team to successfully implement the project throughout the project lifecycle.

                        </p>

                        <a href="#" class="link_span">
                            <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.6453 4.7496L6.73847 0.842661C6.62695 0.731137 6.47831 0.669922 6.31982 0.669922C6.16115 0.669922 6.0126 0.731225 5.90108 0.842661L5.54636 1.19746C5.43493 1.30881 5.37354 1.45754 5.37354 1.61611C5.37354 1.7746 5.43493 1.92835 5.54636 2.03969L7.82556 4.32391H0.584444C0.257965 4.32391 0 4.5795 0 4.90606V5.40766C0 5.73422 0.257965 6.01558 0.584444 6.01558H7.85142L5.54645 8.31255C5.43502 8.42408 5.37363 8.56876 5.37363 8.72734C5.37363 8.88574 5.43502 9.03253 5.54645 9.14397L5.90116 9.49762C6.01269 9.60915 6.16124 9.66992 6.31991 9.66992C6.4784 9.66992 6.62703 9.60836 6.73856 9.49683L10.6454 5.58998C10.7572 5.47811 10.8187 5.32876 10.8182 5.17001C10.8186 5.01073 10.7572 4.8613 10.6453 4.7496Z"
                                    fill="#4F81BD" />
                            </svg> Learn More
                        </a>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mh_engagement_models_elements">
                        <div class="off_shor_logo">
                            <img src="{{ asset('/') }}assets/frontend/images/all icon v2/project base.svg" alt="images">
                        </div>

                        <h5>Project based approach
                        </h5>
                        <p>
                            If you want to develop a project that has specific deliverables & requirements, our Project Based Engagement module is the perfect match. We will implement & execute the project with our long experienced team of professionals and It will be our responsibility
                            to ensure the successful completion of your project on-time.

                        </p>

                        <a href="#" class="link_span">
                            <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.6453 4.7496L6.73847 0.842661C6.62695 0.731137 6.47831 0.669922 6.31982 0.669922C6.16115 0.669922 6.0126 0.731225 5.90108 0.842661L5.54636 1.19746C5.43493 1.30881 5.37354 1.45754 5.37354 1.61611C5.37354 1.7746 5.43493 1.92835 5.54636 2.03969L7.82556 4.32391H0.584444C0.257965 4.32391 0 4.5795 0 4.90606V5.40766C0 5.73422 0.257965 6.01558 0.584444 6.01558H7.85142L5.54645 8.31255C5.43502 8.42408 5.37363 8.56876 5.37363 8.72734C5.37363 8.88574 5.43502 9.03253 5.54645 9.14397L5.90116 9.49762C6.01269 9.60915 6.16124 9.66992 6.31991 9.66992C6.4784 9.66992 6.62703 9.60836 6.73856 9.49683L10.6454 5.58998C10.7572 5.47811 10.8187 5.32876 10.8182 5.17001C10.8186 5.01073 10.7572 4.8613 10.6453 4.7496Z"
                                    fill="#4F81BD" />
                            </svg> Learn More
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </section>




    <!-- =========================== FOOTER PART START =========================== -->

    <!-- creating gap started  -->
    <div class="inside_gap footer dismiss_"></div>
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
                                            <svg width="158" height="158" viewBox="0 0 158 158" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d)">
                                                    <circle cx="79" cy="79" r="29" fill="#4F81BD" />
                                                </g>
                                                <path
                                                    d="M85.7762 78.3732L80.7203 72.9666C80.576 72.8123 80.3837 72.7275 80.1785 72.7275C79.9732 72.7275 79.781 72.8124 79.6367 72.9666L79.1776 73.4576C79.0334 73.6117 78.954 73.8175 78.954 74.0369C78.954 74.2562 79.0334 74.469 79.1776 74.6231L82.1272 77.7841H72.7563C72.3338 77.7841 72 78.1378 72 78.5897V79.2838C72 79.7357 72.3338 80.1251 72.7563 80.1251H82.1606L79.1777 83.3037C79.0335 83.458 78.9541 83.6583 78.9541 83.8777C78.9541 84.0969 79.0335 84.3 79.1777 84.4542L79.6368 84.9437C79.7811 85.098 79.9733 85.1821 80.1787 85.1821C80.3838 85.1821 80.5761 85.0969 80.7204 84.9426L85.7763 79.5361C85.921 79.3813 86.0006 79.1746 86 78.9549C86.0005 78.7345 85.921 78.5277 85.7762 78.3732Z"
                                                    fill="white" />
                                                <defs>
                                                    <filter id="filter0_d" x="0" y="0" width="158" height="158"
                                                            filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="25" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0.956863 0 0 0 0 0.501961 0 0 0 0 0.223529 0 0 0 0.4 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow" />
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                                 in2="effect1_dropShadow" result="shape" />
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
                                <span>+88 01966 00 00 51</span>
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
                                <span>hello@doodlei.net</span>
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

    <div id="tiny_footer" class="dismiss_">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-6 col-md-6 col-sm-6">
                    <div class="tiny_footer_logo">
                        <a href="index.html"><img class="img-responsive" src="{{ asset('/') }}assets/frontend/images/tiny_.png" alt="" srcset=""></a>
                        <span>© Copyright 2021 Doodle Inc.</span>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-6 col-md-6 col-sm-6 ">
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
