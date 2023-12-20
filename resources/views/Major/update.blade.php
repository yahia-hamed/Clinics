@extends('adminlte::page')
@section('content')
<form action="{{ route('major.update',$majors->id) }}" method="POST" >
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text"  value="{{ $majors->title }}" class="form-control w-50" id="title"  name='title' >
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
