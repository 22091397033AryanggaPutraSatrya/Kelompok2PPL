@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Edit Contact</h1>
    <hr />
    <form action="{{ route('Contact.update', $Contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">First Name</label>
                <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{ $Contact->last_name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{ $Contact->last_name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input class="form-control" name="email" placeholder="email" value= "{{$Contact->email}}"> </input>
            </div>
            <div class="col mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $Contact->phone }}" > </input>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection