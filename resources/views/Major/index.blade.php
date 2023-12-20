@extends('adminlte::page')
@section('content')
<form action="{{ route("major.create") }}" >
    @csrf
    <button class="btn btn-primary">Create</button>
</form>
<table class="table" >
    <thead class="table-dark">
       <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col" >Update</th>
        <th scope="col" >Delete</th>
       </tr>
    </thead>
    <tbody>
        @foreach ($majors as $major)
        <tr>
            <td scope="col">{{ $major->id }}</td>
            <td scope="col">{{ $major->title }}</td>
               <td scope="col">
                <form action="{{ route("major.edit",$major->id) }}" >
                     <button class="btn btn-warning">Update</button>
                 </form>
             </td>
            <td scope="col">
                <form action="{{ route("major.destroy",$major->id) }}"  method='POST'>
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $majors->links() }}
@endsection
