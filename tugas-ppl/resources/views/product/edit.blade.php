@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Edit Contact</h1>
    <hr />
    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">First Name</label>
                <input type="text" name="title" class="form-control" placeholder="First Name" value="{{ $product->title }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" name="price" class="form-control" placeholder="Last Name" value="{{ $product->price }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="product_code" class="form-control" placeholder="Email" value="{{ $product->product_code }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Phone</label>
                <textarea class="form-control" name="description" placeholder="No Phone" >{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection