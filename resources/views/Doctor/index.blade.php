@extends('adminlte::page')
@section('content')
<form action="{{ route("doctor.create") }}" >
    @csrf
    <button class="btn btn-primary">Create</button>
</form>
<table class="table" >
    <thead class="table-dark">
       <tr>
        <th scope="col">ID</th>
        <th scope="col" > Name</th>
        <th scope="col" > Email</th>
        <th scope="col" > Image</th>
        <th scope="col" > Show</th>
        <th scope="col" > Delete</th>
       </tr>
    </thead>
    <tbody>
        @foreach ($doctors as $doctor)
        <tr>
            <td scope="col">{{ $doctor->id }}</td>
            <td scope="col">{{ $doctor->name }}</td>
            <td scope="col">{{ $doctor->email }}</td>
            <td scope="col"><img src="{{ url("$doctor->image") }}" class="img-thumbnail" alt="" width="50"></td>
            <td scope="col">
                <form action="{{ route('doctor.show',$doctor->id) }}">
                    <button class="btn btn-primary">Show</button>
                </form>
               </td>
            <td scope="col">
                <form action="{{ route("doctor.destroy",$doctor->id) }}"  method='POST'>
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $doctors->links() }}
@endsection
