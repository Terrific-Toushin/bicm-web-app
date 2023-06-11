
<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ route('home') }}" class="site_title text-center"><span>Green Comerce</span></a>
        </div>
        <div class="clearfix"></div>
        <!-- menu profile quick info -->
        <!-- /menu profile quick info -->

        <br />
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Dashboard </a>
                        {{--<ul class="nav child_menu">--}}
                            {{--<li><a href="{{ route('home') }}">Dashboard</a></li>--}}
                        {{--</ul>--}}
                    </li>
                </ul>

                <ul class="nav side-menu">
                    <li><a><i class="fa fa-cc-mastercard"></i> Category <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('category_info_form' )}}">Add/Edit Category</a></li>
                            <li><a href="#">Existing Category</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav side-menu">
                    <li><a><i class="fa fa-cc-mastercard"></i>Sub Category <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('subCategory_info_form') }}">Add/Edit Sub Category</a></li>
                            <li><a href="#">Existing Sub Category</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav side-menu">
                    <li><a><i class="fa fa-cc-mastercard"></i>Sub Category Content<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('subCategoryContent_info_form') }}">Add/Edit Sub Category Content</a></li>
                            <li><a href="#">Existing Sub Category Content</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav side-menu">
                    <li><a><i class="fa fa-shopping-basket"></i> Product <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('product_upload_form') }}">Product</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav side-menu">
                    <li><a><i class="fa fa-shopping-basket"></i> Promotion <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">New Arival</a></li>
                            <li><a href="#">New Deals</a></li>
                            <li><a href="#">Top Sell</a></li>
                            <li><a href="#">Top Sell</a></li>
                            <li><a href="#">Featured Product</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav side-menu">
                    <li><a><i class="fa fa-shopping-basket"></i> Customer Order <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Confirmed Order</a></li>
                            <li><a href="#">Pending Order</a></li>
                            <li><a href="#">Deliverd Order</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav side-menu">
                    <li><a><i class="fa fa-shopping-basket"></i> Reporting <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Delivered Product</a></li>
                            <li><a href="#">Pending Product</a></li>
                            <li><a href="#">Order Confirmation</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav side-menu">
                    <li><a><i class="fa fa-cc-mastercard"></i>Suplier<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('subCategory_info_form') }}">Add/Edit Suplier</a></li>
                            <li><a href="#">Existing Suplier</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-cc-mastercard"></i>Store<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('subCategory_info_form') }}">Add/Edit Store</a></li>
                            <li><a href="#">Existing Store</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-cc-mastercard"></i>Brand<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('subCategory_info_form') }}">Add/Edit Brand</a></li>
                            <li><a href="#">Existing Brand</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true" style="color: white"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true" style="color: white"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true" style="color: white"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <span class="glyphicon glyphicon-off" aria-hidden="true" style="color: white"></span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>