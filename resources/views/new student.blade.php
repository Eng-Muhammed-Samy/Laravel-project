@extends('layout.layout1')
@section('content')

<form class="was-validated" method="POST" action="/submit student">
    @csrf
    <div class="container">
        <div class="form-group row my-5">
            <label for="validationServer01" class="col-sm-2 col-form-label">First Name</label>
            <div class="col">
                <input type="text" class="form-control is-invalid" id="validationServer01" name="fname" required>
            </div>
        </div>
        <div class="form-group row my-5"">
            <label for=" inputEmail3" class="col-sm-2 col-form-label">Last Name</label>
            <div class="col">
                <input type="text" class="form-control is-invalid" name="lname" required>
            </div>
        </div>
        <div class="form-group row my-5"">
            <label for=" inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control is-invalid" name="email" id="inputEmail3" required>
            </div>
        </div>
        <div class="form-group row my-5">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control is-invalid" id="inputPassword3" name="password" required>
            </div>
        </div>
        <div class="form-group row my-5">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid" id="inputPassword3" name="phone" required>
            </div>
        </div>
        <div class="form-group mb-3 my-5"">
            <label for=" validationTextarea">Address</label>
            <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" name="address" required></textarea>
            <div class="invalid-feedback">
                Please enter a message in the textarea.
            </div>
            <button type="submit" class="btn btn-warning my-5">Add Student</button>
        </div>
</form>
@endsection