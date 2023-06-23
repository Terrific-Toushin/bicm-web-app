<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="start {{ (request()->is('admin-dashboard')) ? 'active' : '' }}">
                <a href="{{route('adminDashboard')}}">
                    <i class="icon-bar-chart"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-home"></i>
                    <span class="title">Home</span>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-speech"></i>
                    <span class="title">About</span>
                </a>
            </li>
            <li class="{{ (request()->is('master*')) ? 'active' : '' }}">
                <a href="{{route('mastersPage')}}">
                    <i class="icon-graduation"></i>
                    <span class="title">Master's Program</span>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-social-dropbox"></i>
                    <span class="title">Diploma</span>
                </a>
            </li>
            <li class="{{ (request()->is('course*')) ? 'active' : '' }}">
                <a href="{{route('coursesPage')}}">
                    <i class="icon-badge"></i>
                    <span class="title">Certification and Training Course</span>
                </a>
            </li>
            <li  class="{{ (request()->is('event*')) ? 'active' : '' }}">
                <a href="{{route('eventsPage')}}">
                    <i class="icon-speech"></i>
                    <span class="title">Research and Publication Event</span>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-book-open"></i>
                    <span class="title">D-Library</span>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-globe"></i>
                    <span class="title">Online Service</span>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-screen-tablet"></i>
                    <span class="title">Tender</span>
                </a>
            </li>

            <li class="last ">
                <a href="javascript:;">
                    <i class="icon-pointer"></i>
                    <span class="title">Maps</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="maps_google.html">
                            Google Maps</a>
                    </li>
                    <li>
                        <a href="maps_vector.html">
                            Vector Maps</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
<!-- END SIDEBAR -->
