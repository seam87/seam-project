@extends('backend.layout.master')

@section('addp')
<main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">ADD PRODUCT</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    ADD PRODUCT
                                </li>
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content Header--> <!--begin::App Content-->
            
  <div class="container mt-3">
  <form action="{{ url('store') }}" method="post" enctype="multipart/form-data">
  @csrf
    <div class="mb-3 mt-3">
      <label for="name">Product Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Product Name" name="name">
    </div>

    <div class="mb-3 mt-3">
      <label for="name">Product Cetagory:</label>
      <input type="text" class="form-control" id="cetagory" placeholder="Product cetagory" name="cetagory">
    </div>

    <div class="mb-3 mt-3">
      <label for="price">Product Price:</label>
      <input type="number" class="form-control" id="price" placeholder="Product price" name="price">
    </div>

    

    <div class="mb-3 mt-3">
      <label for="description">Product Description:</label>
      <textarea name="description" id="description"></textarea>
    </div>

    <div class="mb-3 mt-3">
      <label for="name">Product Photo:</label>
      <input type="file" class="form-control" id="photo" name="photo">
    </div>
    
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
        </main>
        @endsection('addp')