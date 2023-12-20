@extends('adminlte::page')
@section('content')
<form action="{{ route('major.store') }}" method="POST" >
    @method('POST')
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text"  class="form-control w-50" id="title"  name='title' >
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
