@extends('backend.mastertemplate.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Dashboard</h4>
        <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
</div>

    <div class="br-pagebody">
        <div class="row row-sm">
            <div class="col-sm-12">
                <div class="card p-3 shadow-base">
                    <form action="{{Route('store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pname">Product Name</label>
                                    <input class="form-control" type="text" placeholder="Enter Product Name" 
                                    name="pname" id="pname" value="{{old('pname')}}">
                                    <span class="text-danger">
                                        @error('pname')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" placeholder="Enter Product Description" name="description" 
                                    id="description" cols="30" rows="4s">{{old('description')}}</textarea>
                                    <span class="text-danger">
                                        @error('description')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control" name="category" id="category">
                                        <option>-----Select Value-----</option>
                                        <option value="Man">Man</option>
                                        <option value="Woman">Woman</option>
                                        <option value="Children">Children</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="size">Size</label>
                                    <select class="form-control" name="size" id="size">
                                        <option>-----Select Size-----</option>
                                        <option value="L">L</option>
                                        <option value="M">M</option>
                                        <option value="XL">XL</option>
                                        <option value="XXL">XXL</option>
                                        <option value="XXXL">XXXL</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                <label for="costprice">Cost Price</label>
                                <input class="form-control" type="text" placeholder="Enter Product Cost Price" 
                                name="costprice" id="costprice" value="{{old('costprice')}}">
                                <span class="text-danger">
                                    @error('costprice')
                                        {{$message}}
                                    @enderror
                                </span>
                                </div>

                                <div class="form-group">
                                <label for="sellprice">Sale price</label>
                                <input class="form-control" type="text" placeholder="Enter Product Sell Price" 
                                name="sellprice" id="sellprice" value="{{old('sellprice')}}">
                                <span class="text-danger">
                                    @error('sellprice')
                                        {{$message}}
                                    @enderror
                                </span>
                                </div>

                                <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input class="form-control" type="text" placeholder="Enter Product Quantity" 
                                name="quantity" id="quantity" value="{{old('quantity')}}">
                                <span class="text-danger">
                                    @error('quantity')
                                        {{$message}}
                                    @enderror
                                </span>
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option>-----Select Status-----</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button class="form-control btn btn-info">Add Product</button>
                                </div>

                            </div>

                           

                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

@endsection