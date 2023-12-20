@extends('adminlte::page')
@section('content')
<form action="{{ route('doctor.update',$doctors->id) }}" method="POST" >
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="name"  value="{{ $doctors->name }}" class="form-control w-50" id="name"  name='name' >
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" value="{{ $doctors->email }}" class="form-control w-50" id="email"  name='email' >
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" value="{{ $doctors->password }}" class="form-control w-50" id="password"  name='password' >
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" value="{{ $doctors->phone }}" class="form-control w-50" id="phone"  name='phone' >
      </div>
      <div class="mb-3">
        <label for="city" class="form-label">City</label>
        <input type="text" value="{{ $doctors->city }}" class="form-control w-50" id="city"  name='city' >
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
