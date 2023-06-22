@extends('admin.master')

@section('content')
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Widget settings form goes here
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn blue">Save changes</button>
                            <button type="button" class="btn default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <!-- END STYLE CUSTOMIZER -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="{{route('adminDashboard')}}">Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
                    <div class="dashboard-stat blue-madison">
                        <div class="visual">
                            <i class="fa fa-briefcase fa-icon-medium"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                $168,492.54
                            </div>
                            <div class="desc">
                                Lifetime Sales
                            </div>
                        </div>
                        <a class="more" href="javascript:;">
                            View more <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="dashboard-stat red-intense">
                        <div class="visual">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                1,127,390
                            </div>
                            <div class="desc">
                                Total Orders
                            </div>
                        </div>
                        <a class="more" href="javascript:;">
                            View more <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="dashboard-stat green-haze">
                        <div class="visual">
                            <i class="fa fa-group fa-icon-medium"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                $670.54
                            </div>
                            <div class="desc">
                                Average Orders
                            </div>
                        </div>
                        <a class="more" href="javascript:;">
                            View more <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!-- Begin: life time stats -->
                    <div class="portlet box blue-steel">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-thumb-tack"></i>Overview
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse">
                                </a>
                                <a href="#portlet-config" data-toggle="modal" class="config">
                                </a>
                                <a href="javascript:;" class="reload">
                                </a>
                                <a href="javascript:;" class="remove">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="tabbable-line">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#overview_1" data-toggle="tab">
                                            Top Selling </a>
                                    </li>
                                    <li>
                                        <a href="#overview_2" data-toggle="tab">
                                            Most Viewed </a>
                                    </li>
                                    <li>
                                        <a href="#overview_3" data-toggle="tab">
                                            New Customers </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                                            Orders <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="#overview_4" tabindex="-1" data-toggle="tab">
                                                    Latest 10 Orders </a>
                                            </li>
                                            <li>
                                                <a href="#overview_4" tabindex="-1" data-toggle="tab">
                                                    Pending Orders </a>
                                            </li>
                                            <li>
                                                <a href="#overview_4" tabindex="-1" data-toggle="tab">
                                                    Completed Orders </a>
                                            </li>
                                            <li>
                                                <a href="#overview_4" tabindex="-1" data-toggle="tab">
                                                    Rejected Orders </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="overview_1">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        Product Name
                                                    </th>
                                                    <th>
                                                        Price
                                                    </th>
                                                    <th>
                                                        Sold
                                                    </th>
                                                    <th>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            Apple iPhone 4s - 16GB - Black </a>
                                                    </td>
                                                    <td>
                                                        $625.50
                                                    </td>
                                                    <td>
                                                        809
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            Samsung Galaxy S III SGH-I747 - 16GB </a>
                                                    </td>
                                                    <td>
                                                        $915.50
                                                    </td>
                                                    <td>
                                                        6709
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            Motorola Droid 4 XT894 - 16GB - Black </a>
                                                    </td>
                                                    <td>
                                                        $878.50
                                                    </td>
                                                    <td>
                                                        784
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            Regatta Luca 3 in 1 Jacket </a>
                                                    </td>
                                                    <td>
                                                        $25.50
                                                    </td>
                                                    <td>
                                                        1245
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            Samsung Galaxy Note 3 </a>
                                                    </td>
                                                    <td>
                                                        $925.50
                                                    </td>
                                                    <td>
                                                        21245
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            Inoval Digital Pen </a>
                                                    </td>
                                                    <td>
                                                        $125.50
                                                    </td>
                                                    <td>
                                                        1245
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            BICM - Responsive Admin + Frontend Theme </a>
                                                    </td>
                                                    <td>
                                                        $20.00
                                                    </td>
                                                    <td>
                                                        11190
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="overview_2">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        Product Name
                                                    </th>
                                                    <th>
                                                        Price
                                                    </th>
                                                    <th>
                                                        Views
                                                    </th>
                                                    <th>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            BICM - Responsive Admin + Frontend Theme </a>
                                                    </td>
                                                    <td>
                                                        $20.00
                                                    </td>
                                                    <td>
                                                        11190
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            Regatta Luca 3 in 1 Jacket </a>
                                                    </td>
                                                    <td>
                                                        $25.50
                                                    </td>
                                                    <td>
                                                        1245
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            Apple iPhone 4s - 16GB - Black </a>
                                                    </td>
                                                    <td>
                                                        $625.50
                                                    </td>
                                                    <td>
                                                        809
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            Samsung Galaxy S III SGH-I747 - 16GB </a>
                                                    </td>
                                                    <td>
                                                        $915.50
                                                    </td>
                                                    <td>
                                                        6709
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            Motorola Droid 4 XT894 - 16GB - Black </a>
                                                    </td>
                                                    <td>
                                                        $878.50
                                                    </td>
                                                    <td>
                                                        784
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            Samsung Galaxy Note 3 </a>
                                                    </td>
                                                    <td>
                                                        $925.50
                                                    </td>
                                                    <td>
                                                        21245
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            Inoval Digital Pen </a>
                                                    </td>
                                                    <td>
                                                        $125.50
                                                    </td>
                                                    <td>
                                                        1245
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="overview_3">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        Customer Name
                                                    </th>
                                                    <th>
                                                        Total Orders
                                                    </th>
                                                    <th>
                                                        Total Amount
                                                    </th>
                                                    <th>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            David Wilson </a>
                                                    </td>
                                                    <td>
                                                        3
                                                    </td>
                                                    <td>
                                                        $625.50
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            Amanda Nilson </a>
                                                    </td>
                                                    <td>
                                                        4
                                                    </td>
                                                    <td>
                                                        $12625.50
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            Jhon Doe </a>
                                                    </td>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>
                                                        $125.00
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            Bill Chang </a>
                                                    </td>
                                                    <td>
                                                        45
                                                    </td>
                                                    <td>
                                                        $12,125.70
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            Paul Strong </a>
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        $890.85
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            Jane Hilson </a>
                                                    </td>
                                                    <td>
                                                        5
                                                    </td>
                                                    <td>
                                                        $239.85
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            Patrick Walker </a>
                                                    </td>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>
                                                        $1239.85
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="overview_4">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        Customer Name
                                                    </th>
                                                    <th>
                                                        Date
                                                    </th>
                                                    <th>
                                                        Amount
                                                    </th>
                                                    <th>
                                                        Status
                                                    </th>
                                                    <th>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            David Wilson </a>
                                                    </td>
                                                    <td>
                                                        3 Jan, 2013
                                                    </td>
                                                    <td>
                                                        $625.50
                                                    </td>
                                                    <td>
													<span class="label label-sm label-warning">
													Pending </span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            Amanda Nilson </a>
                                                    </td>
                                                    <td>
                                                        13 Feb, 2013
                                                    </td>
                                                    <td>
                                                        $12625.50
                                                    </td>
                                                    <td>
													<span class="label label-sm label-warning">
													Pending </span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            Jhon Doe </a>
                                                    </td>
                                                    <td>
                                                        20 Mar, 2013
                                                    </td>
                                                    <td>
                                                        $125.00
                                                    </td>
                                                    <td>
													<span class="label label-sm label-success">
													Success </span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            Bill Chang </a>
                                                    </td>
                                                    <td>
                                                        29 May, 2013
                                                    </td>
                                                    <td>
                                                        $12,125.70
                                                    </td>
                                                    <td>
													<span class="label label-sm label-info">
													In Process </span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            Paul Strong </a>
                                                    </td>
                                                    <td>
                                                        1 Jun, 2013
                                                    </td>
                                                    <td>
                                                        $890.85
                                                    </td>
                                                    <td>
													<span class="label label-sm label-success">
													Success </span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            Jane Hilson </a>
                                                    </td>
                                                    <td>
                                                        5 Aug, 2013
                                                    </td>
                                                    <td>
                                                        $239.85
                                                    </td>
                                                    <td>
													<span class="label label-sm label-danger">
													Canceled </span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            Patrick Walker </a>
                                                    </td>
                                                    <td>
                                                        6 Aug, 2013
                                                    </td>
                                                    <td>
                                                        $1239.85
                                                    </td>
                                                    <td>
													<span class="label label-sm label-success">
													Success </span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End: life time stats -->
                </div>
                <div class="col-md-6">
                    <!-- Begin: life time stats -->
                    <div class="portlet box red-sunglo">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-bar-chart-o"></i>Revenue
                            </div>
                            <div class="tools">
                                <a href="#portlet-config" data-toggle="modal" class="config">
                                </a>
                                <a href="javascript:;" class="reload">
                                </a>
                            </div>
                            <ul class="nav nav-tabs" style="margin-right: 10px">
                                <li>
                                    <a href="#portlet_tab2" data-toggle="tab" id="statistics_amounts_tab">
                                        Amounts </a>
                                </li>
                                <li class="active">
                                    <a href="#portlet_tab1" data-toggle="tab">
                                        Orders </a>
                                </li>
                            </ul>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="portlet_tab1">
                                    <div id="statistics_1" class="chart">
                                    </div>
                                </div>
                                <div class="tab-pane" id="portlet_tab2">
                                    <div id="statistics_2" class="chart">
                                    </div>
                                </div>
                            </div>
                            <div class="well no-margin no-border">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
										<span class="label label-success">
										Revenue: </span>
                                        <h3>$1,234,112.20</h3>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
										<span class="label label-info">
										Tax: </span>
                                        <h3>$134,90.10</h3>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
										<span class="label label-danger">
										Shipment: </span>
                                        <h3>$1,134,90.10</h3>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
										<span class="label label-warning">
										Orders: </span>
                                        <h3>235090</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End: life time stats -->
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
    <!-- END CONTENT -->

    <!-- BEGIN QUICK SIDEBAR -->
    <a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>
    <div class="page-quick-sidebar-wrapper">
        <div class="page-quick-sidebar">
            <div class="nav-justified">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                        <a href="#quick_sidebar_tab_1" data-toggle="tab">
                            Users <span class="badge badge-danger">2</span>
                        </a>
                    </li>
                    <li>
                        <a href="#quick_sidebar_tab_2" data-toggle="tab">
                            Alerts <span class="badge badge-success">7</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            More<i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-bell"></i> Alerts </a>
                            </li>
                            <li>
                                <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-info"></i> Notifications </a>
                            </li>
                            <li>
                                <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-speech"></i> Activities </a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-settings"></i> Settings </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                        <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                            <h3 class="list-heading">Staff</h3>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">8</span>
                                    </div>
                                    <img class="media-object" src="{{ asset('/') }}assets/admin/layout/img/avatar3.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Bob Nilson</h4>
                                        <div class="media-heading-sub">
                                            Project Manager
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="{{ asset('/') }}assets/admin/layout/img/avatar1.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Nick Larson</h4>
                                        <div class="media-heading-sub">
                                            Art Director
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-danger">3</span>
                                    </div>
                                    <img class="media-object" src="{{ asset('/') }}assets/admin/layout/img/avatar4.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Deon Hubert</h4>
                                        <div class="media-heading-sub">
                                            CTO
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="{{ asset('/') }}assets/admin/layout/img/avatar2.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Ella Wong</h4>
                                        <div class="media-heading-sub">
                                            CEO
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="list-heading">Customers</h3>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-warning">2</span>
                                    </div>
                                    <img class="media-object" src="{{ asset('/') }}assets/admin/layout/img/avatar6.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Lara Kunis</h4>
                                        <div class="media-heading-sub">
                                            CEO, Loop Inc
                                        </div>
                                        <div class="media-heading-small">
                                            Last seen 03:10 AM
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="label label-sm label-success">new</span>
                                    </div>
                                    <img class="media-object" src="{{ asset('/') }}assets/admin/layout/img/avatar7.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Ernie Kyllonen</h4>
                                        <div class="media-heading-sub">
                                            Project Manager,<br>
                                            SmartBizz PTL
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="{{ asset('/') }}assets/admin/layout/img/avatar8.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Lisa Stone</h4>
                                        <div class="media-heading-sub">
                                            CTO, Keort Inc
                                        </div>
                                        <div class="media-heading-small">
                                            Last seen 13:10 PM
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">7</span>
                                    </div>
                                    <img class="media-object" src="{{ asset('/') }}assets/admin/layout/img/avatar9.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Deon Portalatin</h4>
                                        <div class="media-heading-sub">
                                            CFO, H&D LTD
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="{{ asset('/') }}assets/admin/layout/img/avatar10.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Irina Savikova</h4>
                                        <div class="media-heading-sub">
                                            CEO, Tizda Motors Inc
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-danger">4</span>
                                    </div>
                                    <img class="media-object" src="{{ asset('/') }}assets/admin/layout/img/avatar11.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Maria Gomez</h4>
                                        <div class="media-heading-sub">
                                            Manager, Infomatic Inc
                                        </div>
                                        <div class="media-heading-small">
                                            Last seen 03:10 AM
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="page-quick-sidebar-item">
                            <div class="page-quick-sidebar-chat-user">
                                <div class="page-quick-sidebar-nav">
                                    <a href="javascript:;" class="page-quick-sidebar-back-to-list"><i class="icon-arrow-left"></i>Back</a>
                                </div>
                                <div class="page-quick-sidebar-chat-user-messages">
                                    <div class="post out">
                                        <img class="avatar" alt="" src="{{ asset('/') }}assets/admin/layout/img/avatar3.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body">
											When could you send me the report ? </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="{{ asset('/') }}assets/admin/layout/img/avatar2.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body">
											Its almost done. I will be sending it shortly </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="{{ asset('/') }}assets/admin/layout/img/avatar3.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body">
											Alright. Thanks! :) </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="{{ asset('/') }}assets/admin/layout/img/avatar2.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:16</span>
                                            <span class="body">
											You are most welcome. Sorry for the delay. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="{{ asset('/') }}assets/admin/layout/img/avatar3.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body">
											No probs. Just take your time :) </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="{{ asset('/') }}assets/admin/layout/img/avatar2.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:40</span>
                                            <span class="body">
											Alright. I just emailed it to you. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="{{ asset('/') }}assets/admin/layout/img/avatar3.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body">
											Great! Thanks. Will check it right away. </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="{{ asset('/') }}assets/admin/layout/img/avatar2.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:40</span>
                                            <span class="body">
											Please let me know if you have any comment. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="{{ asset('/') }}assets/admin/layout/img/avatar3.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body">
											Sure. I will check and buzz you if anything needs to be corrected. </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-quick-sidebar-chat-user-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type a message here...">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn blue"><i class="icon-paper-clip"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                        <div class="page-quick-sidebar-alerts-list">
                            <h3 class="list-heading">General</h3>
                            <ul class="feeds list-items">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    You have 4 pending tasks. <span class="label label-sm label-warning ">
													Take action <i class="fa fa-share"></i>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            Just now
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        Finance Report for year 2013 has been released.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                20 mins
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-danger">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    You have 5 pending membership that requires a quick review.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            24 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    New order received with <span class="label label-sm label-success">
													Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            30 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    You have 5 pending membership that requires a quick review.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            24 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    Web server hardware needs to be upgraded. <span class="label label-sm label-warning">
													Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            2 hours
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-default">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        IPO Report for year 2013 has been released.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                20 mins
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <h3 class="list-heading">System</h3>
                            <ul class="feeds list-items">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    You have 4 pending tasks. <span class="label label-sm label-warning ">
													Take action <i class="fa fa-share"></i>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            Just now
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-danger">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        Finance Report for year 2013 has been released.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                20 mins
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    You have 5 pending membership that requires a quick review.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            24 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    New order received with <span class="label label-sm label-success">
													Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            30 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    You have 5 pending membership that requires a quick review.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            24 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-warning">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
													Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            2 hours
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        IPO Report for year 2013 has been released.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                20 mins
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                        <div class="page-quick-sidebar-settings-list">
                            <h3 class="list-heading">General Settings</h3>
                            <ul class="list-items borderless">
                                <li>
                                    Enable Notifications <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                                <li>
                                    Allow Tracking <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                                <li>
                                    Log Errors <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                                <li>
                                    Auto Sumbit Issues <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                                <li>
                                    Enable SMS Alerts <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                            </ul>
                            <h3 class="list-heading">System Settings</h3>
                            <ul class="list-items borderless">
                                <li>
                                    Security Level
                                    <select class="form-control input-inline input-sm input-small">
                                        <option value="1">Normal</option>
                                        <option value="2" selected>Medium</option>
                                        <option value="e">High</option>
                                    </select>
                                </li>
                                <li>
                                    Failed Email Attempts <input class="form-control input-inline input-sm input-small" value="5"/>
                                </li>
                                <li>
                                    Secondary SMTP Port <input class="form-control input-inline input-sm input-small" value="3560"/>
                                </li>
                                <li>
                                    Notify On System Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                                <li>
                                    Notify On SMTP Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                            </ul>
                            <div class="inner-content">
                                <button class="btn btn-success"><i class="icon-settings"></i> Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END QUICK SIDEBAR -->
@endsection

@section('documentJquery')
    EcommerceIndex.init();
@endsection
