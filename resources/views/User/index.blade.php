@extends('adminlte::page')
@section('content')
<form action="{{ route("user.create") }}" >
    @csrf
    <button class="btn btn-primary">Create</button>
</form>
<table class="table" >
    <thead class="table-dark">
       <tr>
        <th scope="col">ID</th>
        <th scope="col" >Name</th>
        <th scope="col" >Email</th>
        <th scope="col" >Image</th>
        <th scope="col" >Show</th>
        <th scope="col" >Delete</th>
       </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td scope="col">{{ $user->id }}</td>
            <td scope="col">{{ $user->name }}</td>
            <td scope="col">{{ $user->email }}</td>
            <th><img src="{{ url("$user->image") }}" class="img-thumbnail" alt="" width="50"></th>
            <td scope="col">
                <form action="{{ route('user.show',$user->id) }}" >
                    <button class="btn btn-primary">Show</button>
                </form>
            </td>
            <td scope="col">
                <form action="{{ route("user.destroy",$user->id) }}"  method='POST'>
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $users->links() }}
@endsection
