@extends('backend.layout.master')

@section('editp')
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">EDIT PRODUCT</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Edit Product
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header-->
    
    <!--begin::App Content-->

    <div class="container mt-3">
        <form action="{{ url('/updateproduct' , $product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            
            <div class="mb-3 mt-3">
                <label for="name">Product Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Product Name" name="name" value="{{ old('name', $product->name) }}">
            </div>

            <div class="mb-3 mt-3">
                <label for="cetagory">Product Category:</label>
                <input type="text" class="form-control" id="cetagory" placeholder="Product Category" name="cetagory" value="{{ old('cetagory', $product->cetagory) }}">
            </div>

            <div class="mb-3 mt-3">
                <label for="price">Product Price:</label>
                <input type="number" class="form-control" id="price" placeholder="Product Price" name="price" value="{{ old('price', $product->price) }}">
            </div>

            <div class="mb-3 mt-3">
                <label for="description">Product Description:</label>
                <textarea name="description" id="description" class="form-control" placeholder="Product Description">{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="mb-3 mt-3">
                <label for="photo">Product Photo:</label>
                <input type="file" class="form-control" id="photo" name="photo" value="{{ asset('upload/productphoto/' . $product->photo) }}">
                
                <!-- Optional: Display current product photo -->
                @if($product->photo)
                    <div class="mt-2">
                        <img src="{{ asset('upload/productphoto/' . $product->photo) }}" alt="Current Photo" width="100px">
                    </div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
</main>
@endsection('editp')
