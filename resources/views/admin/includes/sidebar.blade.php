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
            <li class="{{ (request()->is('menu*')) ? 'active' : '' }}">
                <a href="javascript:;">
                    <i class="icon-link"></i>
                    <span class="title">Menu</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ (request()->is('menu-all')) ? 'active' : '' }}">
                        <a href="{{route('allMenu')}}">
                            <i class="icon-graph"></i>
                            <span class="title">All Menu</span>
                        </a>
                    </li>
                    <li class="{{ (request()->is('menu-create/new')) ? 'active' : '' }}">
                        <a href="{{route('newMenu', ['id' => 'new', 'parentId' => '0'])}}">
                            <i class="icon-tag"></i>
                            <span class="title">ADD Menu</span>
                        </a>
                    </li>
                    <li style="padding-left: 15px; color: #a4abb5">
                        <h4 class="uppercase">Created Menu</h4>
                    </li>
                    @foreach($backDataMenu['backMenus'] as $backMenu)
                        <li class="{{ (request()->is('menu-details*')) ? 'active' : '' }}">
                            <a href="{{route('detailsMenu', ['parentId' => $backMenu['menu_id']])}}">
                                <span class="title">{{$backMenu['menu_tittle']}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li class="{{ (request()->is('page*')) ? 'active' : '' }}">
                <a href="javascript:;">
                    <i class="icon-docs"></i>
                    <span class="title">Pages</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ (request()->is('/pages-all')) ? 'active' : '' }}">
                        <a href="{{route('allPages')}}">
                            <i class="icon-wallet"></i>
                            <span class="title">All Pages</span>
                        </a>
                    </li>
                    <li class="{{ (request()->is('/page-details/new')) ? 'active' : '' }}">
                        <a href="{{route('pageDetails', ['id' => 'new'])}}">
                            <i class="icon-puzzle"></i>
                            <span class="title">ADD Page</span>
                        </a>
                    </li>
                    <li style="padding-left: 15px; color: #a4abb5">
                        <h4 class="uppercase">Created Page</h4>
                    </li>
                    @foreach($backDataMenu['backMainPages'] as $backMainPages)
                        @if($backMainPages['page_type'] == 'home')
                            <li class="{{ (request()->is('home*')) ? 'active' : '' }}">
                                <a href="{{route('homePage')}}">
                                    <i class="icon-home"></i>
                                    <span class="title">Home</span>
                                </a>
                            </li>
                        @else
                            <li class="{{ (request()->is('page-details*')) ? 'active' : '' }}">
                                <a href="{{route('pageDetails', ['id' => $backMainPages['page_id']])}}">
                                    <i class="icon-puzzle"></i>
                                    <span class="title">{{$backMainPages['page_name']}}</span>
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </li>
{{--            <li class="{{ (request()->is('about*')) ? 'active' : '' }}">--}}
{{--                <a href="{{route('aboutPage')}}">--}}
{{--                    <i class="icon-speech"></i>--}}
{{--                    <span class="title">Common Page</span>--}}
{{--                </a>--}}
{{--            </li>--}}
            <li class="{{ (request()->is('master*')) ? 'active' : '' }}">
                <a href="{{route('mastersPage')}}">
                    <i class="icon-graduation"></i>
                    <span class="title">Master's Program</span>
                </a>
            </li>
            <li class="{{ (request()->is('course*')) ? 'active' : '' }}">
                <a href="{{route('coursesPage')}}">
                    <i class="icon-badge"></i>
                    <span class="title">Course</span>
                </a>
            </li>
            <li class="{{ (request()->is('event*')) ? 'active' : '' }}">
                <a href="{{route('eventsPage')}}">
                    <i class="icon-speech"></i>
                    <span class="title">Event</span>
                </a>
            </li>
            <li class="{{ (request()->is('side*')) ? 'active' : '' }}">
                <a href="{{route('sideBar')}}">
                    <i class="icon-bar-chart"></i>
                    <span class="title">Side Bar</span>
                </a>
            </li>
            <li class="{{ (request()->is('form*')) ? 'active' : '' }}">
                <a href="javascript:;">
                    <i class="icon-anchor"></i>
                    <span class="title">Form Wizard</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ (request()->is('/form-create*')) ? 'active' : '' }}">
                        <a href="{{route('createForm')}}">
                            <i class="icon-speech"></i>
                            <span class="title">Create Form</span>
                        </a>
                    </li>
                    <li class="{{ (request()->is('/form-list*')) ? 'active' : '' }}">
                        <a href="{{route('formList')}}">
                            <i class="icon-speech"></i>
                            <span class="title">Form List</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
<!-- END SIDEBAR -->
