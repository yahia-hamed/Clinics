@extends('adminlte::page')
@section('content')
<form action="{{ route('user.store') }}" method="POST"  enctype="multipart/form-data">
    @method('POST')
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="name"  class="form-control w-50" id="name"  name='name' >
    </div>
    <label for="exampleInputFile" >Type</label>
    <div>
      <select class="custom-select w-50" aria-label="Default select example" name="type">
        <option selected>Select Type</option>
        <option value="admin">admin</option>
        <option value="user">user</option>
      </select>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control w-50" id="email"  name='email' >
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control w-50" id="password"  name='password' >
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control w-50" id="phone"  name='phone' >
    </div>
    <div class="mb-3">
        <label for="city" class="form-label">City</label>
        <input type="text" class="form-control w-50" id="city"  name='city' >
    </div>
      <label for="exampleInputFile" >Image</label>
    <div class="input-group w-50">
        <div class="custom-file">
                <input type="file" class="custom-file-input   " id="exampleInputFile"  name='image' >
            <label class="custom-file-label " for="exampleInputFile" >Upload</label>
        </div>
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
