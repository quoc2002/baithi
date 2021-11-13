@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h2 class="text-center">Add Product</h2>
    </div>
    <div class="col-lg-12 text-center" style="margin-top: 10px;margin-bottom: 10px;">
        <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
    </div>
</div>
 
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Oops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }} </li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong> Product Name:</strong>
            <input type="text" name="product_name" class="form-control" placeholder="Product Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <textarea class="form-control"  name="price"
                placeholder="Price"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product image</strong>
                <input type="number" class="form-control" name="product_image" placeholder="Product Image">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection