
@extends('admin.master')

@section('title', 'Category')

@section('body')

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Entry Sub-Category Form</h3><br/>

                    <h5 class="text-success">{{ Session::get('message') }}</h5>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Entry Sub-Category</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <form action="{{ route('save_subcategory_info') }}" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">

                                @csrf
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Category Name</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control col-md-7 col-xs-12 js-example-basic-single" name="category_id">
                                            <option>-- Select Category --</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Sub Category Name</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="sub_category_name" class="form-control"  placeholder="Enter Sub Category Name">
                                        <small class="text-danger">{{ $errors->has('sub_category_name') ? $errors->first('sub_category_name') : ' ' }}</small>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Sub Category status</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label><input type="radio" name="publication_status" value="1"/> Published</label>
                                        <label><input type="radio" name="publication_status" value="0"/> Unpublished</label>
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button id="send" type="submit" class="btn btn-success">Add Sub Category<i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>


            <div class="x_panel">
                <div class="x_title">
                    <h2>Manage Sub-Category <small>Information's...</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">

                    <table id="datatable" class="text-center table table-hover table-striped table-bordered">
                        <thead>
                        <tr>
                            <th class="text-center">SL No</th>
                            <th class="text-center">Category Name</th>
                            <th class="text-center">Sub Category Name</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php( $i=1 )
                        @foreach($subcategories as $subcategory)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ App\Category::find($subcategory->category_id)->category_name }}</td>
                                <td>{{ $subcategory->sub_category_name }}</td>
                                <td>{{ $subcategory->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('edit_subcategory_info', ['id' => $subcategory->id]) }}" title="Edit" class="btn btn-success">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a href="{{ route('delete_subcategory_info', ['id' => $subcategory->id]) }}" title="Delete" class="btn btn-danger" onclick="return confirm('Are You Sure..!! To Delete This..?')">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>

@stop