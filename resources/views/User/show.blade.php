@extends('adminlte::page')
@section('content')
<table class="table" >
    <thead class="table-dark">
        <th scope="col">ID</th>
        <th scope="col" > Name</th>
        <th scope="col" > Type</th>
        <th scope="col" > Email</th>
        <th scope="col" > Password</th>
        <th scope="col" > Phone</th>
        <th scope="col" > City</th>
        <th scope="col" > Image</th>
        <th scope="col" > Created_At</th>
        {{-- <th scope="col" > Update</th> --}}
        <th scope="col" > Delete</th>
    </thead>
    <tbody>
        <tr>
            <td>{{ $users->id  }}</td>
            <td>{{ $users->type}}</td>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->password }}</td>
            <td>{{ $users->phone }}</td>
            <td>{{ $users->city }}</td>
            <th><img src="{{ url("$users->image") }}" class="img-thumbnail" alt="" width="50"></th>
            <td>{{ $users->created_at }}</td>
            {{-- <td>
               <form action="{{ route("doctor.edit",$users->id) }}" >
                    <button class="btn btn-warning">Update</button>
                </form>
            </td> --}}
            <td scope="col">
                <form action="{{ route("doctor.destroy",$users->id) }}"  method='POST'>
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    </tbody>
</table>
@endsection
