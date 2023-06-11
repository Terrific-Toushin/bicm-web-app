
@extends('admin.master')

@section('title', 'Product')

@section('body')

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Entry Product Form</h3><br/>

                    <h5 class="text-success">{{ Session::get('message') }}</h5>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Entry Product</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <form action="{{ route('update_product_info') }}" method="post" enctype="multipart/form-data" name="editProductInfo">
                                @csrf
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 col-xs-12" style="margin-top: 10px">
                                        <label style="font-size: 14px;">Product Name</label>
                                        <input class="form-control" name="product_name" value="{{$product->product_name}}" type="text" >
                                        <small class="text-danger">{{ $errors->has('name') ? $errors->first('name') : ' ' }}</small>
                                    </div>

                                    <div class="col-md-3 col-lg-3 col-xs-12" style="margin-top: 10px">
                                        <label style="font-size: 14px;">Category Name</label>
                                        <select class="form-control js-example-basic-single" name="category_id">
                                            <option>-- Select Category Name --</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" selected="{{ $category->id == $product->category_id ? 'selected' : '' }}">{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-3 col-lg-3 col-xs-12" style="margin-top: 10px">
                                        <label style="font-size: 14px;">Sub Category Name</label>
                                        <select class="form-control js-example-basic-single" name="subCategory_id">
                                            <option>-- Select Sub Product Name --</option>
                                            @foreach($subCategories as $subCategory)
                                                <option value="{{ $subCategory->id }}" selected="{{ $subCategory->id == $product->sub_category_id ? 'selected' : '' }}">{{ $subCategory->sub_category_name }}</option>
                                            @endforeach
                                        </select>
                                        <small class="text-danger">{{ $errors->has('sub_category_id') ? $errors->first('sub_category_id') : ' ' }}</small>
                                    </div>

                                    <div class="col-md-3 col-lg-3 col-xs-12" style="margin-top: 10px">
                                        <label style="font-size: 14px;">Product Type</label>
                                        <select id="company_name_id" class="form-control js-example-basic-single" name="product_type">
                                            <option>{{$product->product_type}}</option>
                                            <option>-- Select Product Type --</option>
                                            <option>   Featured Item   </option>
                                            <option>   NEW ARRIVAL     </option>
                                            <option>   BEST DEALS      </option>
                                            <option>   BEST SELLERS      </option>
                                        </select>
                                        <small class="text-danger">{{ $errors->has('product_status_id') ? $errors->first('product_status_id') : ' ' }}</small>
                                    </div>

                                    <div class="col-md-3 col-lg-3 col-xs-12" style="margin-top: 10px">
                                        <label style="font-size: 14px;">Product Ratings</label>
                                        <input class="form-control" name="ratings" type="number" value="{{$product->ratings}}" placeholder="Product_ratings">
                                        <small class="text-danger">{{ $errors->has('Product_code') ? $errors->first('Product_code') : ' ' }}</small>
                                    </div>

                                    <div class="col-md-3 col-lg-3 col-xs-12" style="margin-top: 10px">
                                        <label style="font-size: 14px;">Product Unit Price</label>
                                        <input class="form-control" name="price" type="number" value="{{$product->price}}" placeholder="Product Unit Price">
                                        <small class="text-danger">{{ $errors->has('price') ? $errors->first('price') : ' ' }}</small>
                                    </div>

                                    <div class="col-md-3 col-lg-3 col-xs-12" style="margin-top: 10px">
                                        <label style="font-size: 14px;">Product new/offer Price</label>
                                        <input class="form-control" name="newPrice" value="{{$product->newPrice}}" type="number" placeholder="Product new Price">
                                        <small class="text-danger">{{ $errors->has('newprice') ? $errors->first('newprice') : ' ' }}</small>
                                    </div>

                                    <div class="col-md-3 col-lg-3 col-xs-12" style="margin-top: 10px">
                                        <label style="font-size: 14px;">Product Quantity</label>
                                        <input class="form-control" name="quantity" type="number" id="quantity" value="{{$product->quantity}}">
                                        <small class="text-danger">{{ $errors->has('quantity') ? $errors->first('quantity') : ' ' }}</small>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 col-lg-3 col-xs-12" style="margin-top: 10px">
                                            <label style="font-size: 14px;">Skin</label>
                                            <input class="form-control" name="skin" type="text" placeholder="skin leather" value="{{$specification->skin}}">
                                            <small class="text-danger">{{ $errors->has('newprice') ? $errors->first('newprice') : ' ' }}</small>
                                        </div>

                                        <div class="col-md-3 col-lg-3 col-xs-12" style="margin-top: 10px">
                                            <label style="font-size: 14px;">size(LxWxH)</label>
                                            <input class="form-control" name="size" type="text" id="quantity" value="{{$specification->size}}">
                                            <small class="text-danger">{{ $errors->has('quantity') ? $errors->first('quantity') : ' ' }}</small>
                                        </div>

                                        <div class="col-md-3 col-lg-3 col-xs-12" style="margin-top: 10px">
                                            <label style="font-size: 14px;">Weight</label>
                                            <input class="form-control" name="weight" type="text" value="{{ $specification->weight }}">
                                            <small class="text-danger">{{ $errors->has('quantity') ? $errors->first('quantity') : ' ' }}</small>
                                        </div>

                                        <div class="col-md-3 col-lg-3 col-xs-12" style="margin-top: 10px">
                                            <label style="font-size: 14px;">Other's Specification</label>
                                            <input class="form-control" name="speciality" type="text" value="{{ $specification->speciality }}">
                                            <small class="text-danger">{{ $errors->has('quantity') ? $errors->first('quantity') : ' ' }}</small>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top: 10px">
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-12 col-xs-12" style="padding-left: 20px;">
                                                <label style="font-size: 14px;">Description</label>
                                                <textarea class="form-control" id="editor" name="description" placeholder="Type Detail About Product....">{{$product->description}}</textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-12 col-xs-12"  style="margin-top: 10px">
                                                <label for="logo">product_image</label>
                                                <input type="file" name="image" accept="image/*"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"  style="margin-top: 10px" for="name">Status</label>
                                            <div class="">
                                                <label><input type="radio" name="publication_status" {{ $product->publication_status == 1 ? 'checked' : '' }} value="1"/> Published </label>
                                                <label><input type="radio" name="publication_status" {{ $product->publication_status == 0 ? 'checked' : '' }} value="0"/> Unpublished </label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row" style="margin-top: 10px">
                                        <div class="col-md-3 col-lg-3 col-xs-12" style="margin-top: 10px">
                                            <label style="font-size: 14px;">Item Promotion</label>
                                            <select  class="form-control js-example-basic-single" name="promotion">
                                                <option>{{$product->promotion}}</option>
                                                <option>-- Select Product Promotion --</option>
                                                <option>   New   </option>
                                                <option>   Sale   </option>
                                                <option>   Call For price   </option>
                                            </select>
                                            <small class="text-danger">{{ $errors->has('product_status_id') ? $errors->first('product_status_id') : ' ' }}</small>
                                        </div>

                                        <div class="col-md-3 col-lg-3 col-xs-12" style="margin-top: 10px">
                                            <div class="control-group">
                                                <label class="control-label">Input Tags</label>
                                                <input id="tags_1" type="text" name="tags" class="tags form-control" value="{{$product->tags}}" />
                                                <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-lg-3 col-xs-12" style="margin-top: 10px">
                                            <div class="control-group">
                                                <label class="control-label">Colors</label>
                                                <div>
                                                    <input type="text" name="colors" class="form-control" value="{{$product->colors}}" data-role="tagsinput"  />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-12 col-xs-12"  style="margin-top: 10px">
                                                <label for="logo">product sub image</label>
                                                <input type="file" name="product_image[]" multiple="multiple" accept="image/*"/>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="col-md-12 mx-auto">
                                        <input type="submit" class="btn btn-block btn-info" value="Submit"/>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="x_panel">
                <div class="x_title">
                    <h2>Manage Product <small>Information's...</small></h2>
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
                            <th class="text-center">Product Name</th>
                            <th class="text-center">Category Name</th>
                            <th class="text-center">Sub Category Name</th>
                            <th class="text-center">Product Promotion</th>
                            <th class="text-center">Product Price</th>
                            <th class="text-center">Product Image</th>
                            <th class="text-center">Product colors</th>
                            <th class="text-center">Product Quantity</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php( $i=1 )
                        @foreach($productInfo as $product)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->Category->category_name }}</td>
                                <td>{{ $product->Subcategories->sub_category_name }}</td>
                                <td>{{ $product->product_type }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <img src="{{asset($product->image)}}" style="width: 100px; height: 100px">
                                </td>
                                <td>{{ $product->colors }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('edit_product_info', ['id' => $product->id]) }}" title="Edit" class="btn btn-success">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a href="{{ route('delete_product_info', ['id' => $product->id]) }}" title="Delete" class="btn btn-danger" onclick="return confirm('Are You Sure..!! To Delete This..?')">
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