@extends('adminlte::page')
@section('content')
<table class="table" >
    <thead class="table-dark">
        <th scope="col">ID</th>
        <th scope="col" > Major_Name</th>
        <th scope="col" > Name</th>
        <th scope="col" > Email</th>
        <th scope="col" > Password</th>
        <th scope="col" > Phone</th>
        <th scope="col" > City</th>
        <th scope="col" > Image</th>
        <th scope="col" > Created_At</th>
        <th scope="col" > Update</th>
        <th scope="col" > Delete</th>
    </thead>
    <tbody>
        <tr>
            <td>{{ $doctors->id  }}</td>
            <td>{{ $doctors->major?->title }}</td>
            <td>{{ $doctors->name }}</td>
            <td>{{ $doctors->email }}</td>
            <td>{{ $doctors->password }}</td>
            <td>{{ $doctors->phone }}</td>
            <td>{{ $doctors->city }}</td>
            <th><img src="{{ url("$doctors->image") }}" class="img-thumbnail" alt="" width="50"></th>
            <td>{{ $doctors->created_at }}</td>
            <td>
               <form action="{{ route("doctor.edit",$doctors->id) }}" >
                    <button class="btn btn-warning">Update</button>
                </form>
            </td>
            <td scope="col">
                <form action="{{ route("doctor.destroy",$doctors->id) }}"  method='POST'>
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    </tbody>
</table>
@endsection
