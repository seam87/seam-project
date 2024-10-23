@extends('backend.layout.master')

@section('allp')
<main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">ALL PRODUCT</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    ALL PRODUCT
                                </li>
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content Header--> <!--begin::App Content-->
             <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>

                    </tr>
                    
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->cetagory}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->description}}</td>
                        <td>
                            <img src="{{asset('upload/productphoto/'.$product->photo)}}" alt="image" width="100px" height="100px">

                        </td>
                        <td>
                            <a href="{{ url('editproduct' , $product->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{url('deleteproduct',$product->id)}}" method="POST" style="background-color:transparent; width:auto;">
                            @csrf
                            @method("DELETE")
                           <button type="submit" class="btn btn-danger">Delete</button>
                           </form>
                        </td>

                    </tr>
                    @endforeach

                </tbody>

                            
             </table>
    </main>
@endsection('allp')