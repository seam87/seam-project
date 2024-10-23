@extends('frontend.layout.master')

@section('show')
<div style="margin-top:10rem; padding:1rem"> 
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-2 mb-4 " style="border:1px solid gray; gap:1rem; padding:1rem; margin:1rem; border-radius:10px">
                    <div class="card" style="width: 100%;">
                        <div style="width:100%; height 200px; display:flex; justify-content:center; align-items:center;">
                        <img  src="{{ asset('upload/productphoto/' . $product->photo) }}" class="card-img-top" alt="{{ $product->name }}" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">
                                <strong>Category:</strong> {{ $product->category }}<br>
                                <strong>Price:</strong> ${{ $product->price }}<br>
                                <strong>Description:</strong> {{ Str::limit($product->description, 100) }}<br>
                            </p>
                            <a href="#" style="padding:5px; background-color: #03adfc; border-radius:10px; color: white;">View Product</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
</div>
 @endsection('show')