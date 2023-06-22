@extends('admin.master')

@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="{{route('home')}}">Dashboard</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="{{route('mastersPage')}}">Master's Page Edit</a>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal form-row-seperated" action="#">
                        <div class="portlet">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-shopping-cart"></i>Master's Program
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_general" data-toggle="tab">
                                                General </a>
                                        </li>
                                        <li>
                                            <a href="#tab_images" data-toggle="tab">
                                                Mater's Program List</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content no-space">
                                        <div class="tab-pane active" id="tab_general">
                                            <div class="form-body">
                                                <form class="" action="{{ route('masterPage') }}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Banner: <span class="required">
                                                        * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            <input type="file" class="form-control" name="banner" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Tittle: <span class="required">
                                                        * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" name="tittle" placeholder="Page Tittle">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Short Description: <span class="required">
                                                        * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            <textarea class="form-control" name="short_description"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <button type="submit" class="btn btn-success" style="float: right">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab_images">
                                            <div class="alert alert-success margin-bottom-10">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                                <i class="fa fa-warning fa-lg"></i> Image type and information need to be specified.
                                            </div>
                                            <div class="text-align-reverse margin-bottom-10">
                                                <a href="{{route('addMastersProgram')}}" class="btn yellow">
                                                    <i class="fa fa-plus"></i> Add program </a>
                                            </div>
                                            <div class="row">
                                                <div id="tab_images_uploader_filelist" class="col-md-6 col-sm-12">
                                                </div>
                                            </div>
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                <tr role="row" class="heading">
                                                    <th width="8%">
                                                        Image
                                                    </th>
                                                    <th width="25%">
                                                        Label
                                                    </th>
                                                    <th width="8%">
                                                        Duration
                                                    </th>
                                                    <th width="10%">
                                                        Eligibility
                                                    </th>
                                                    <th width="10%">
                                                        Amount
                                                    </th>
                                                    <th width="10%">
                                                        Type
                                                    </th>
                                                    <th width="10%">
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <a  href="{{ asset('/') }}assets/admin/pages/media/works/img1.jpg" class="fancybox-button" data-rel="fancybox-button">
                                                            <img class="img-responsive"  src="{{ asset('/') }}assets/admin/pages/media/works/img1.jpg" alt="">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="product[images][1][label]" value="Thumbnail image">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="product[images][1][sort_order]" value="1">
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="product[images][1][image_type]" value="1">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="product[images][1][image_type]" value="2">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="product[images][1][image_type]" value="3" checked>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-sm">
                                                            <i class="fa fa-times"></i> Remove </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a  href="{{ asset('/') }}assets/admin/pages/media/works/img2.jpg" class="fancybox-button" data-rel="fancybox-button">
                                                            <img class="img-responsive"  src="{{ asset('/') }}assets/admin/pages/media/works/img2.jpg" alt="">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="product[images][2][label]" value="Product image #1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="product[images][2][sort_order]" value="1">
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="product[images][2][image_type]" value="1">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="product[images][2][image_type]" value="2" checked>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="product[images][2][image_type]" value="3">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-sm">
                                                            <i class="fa fa-times"></i> Remove </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a  href="{{ asset('/') }}assets/admin/pages/media/works/img3.jpg" class="fancybox-button" data-rel="fancybox-button">
                                                            <img class="img-responsive"  src="{{ asset('/') }}assets/admin/pages/media/works/img3.jpg" alt="">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="product[images][3][label]" value="Product image #2">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="product[images][3][sort_order]" value="1">
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="product[images][3][image_type]" value="1" checked>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="product[images][3][image_type]" value="2">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="product[images][3][image_type]" value="3">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" class="btn default btn-sm">
                                                            <i class="fa fa-times"></i> Remove </a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
@endsection
