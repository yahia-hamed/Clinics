@extends('adminlte::page')
@section('content')
{{-- <form action="{{ route("rate.create") }}" >
    @csrf
    <button class="btn btn-primary">Create</button>
</form> --}}
<table class="table" >
    <thead class="table-dark">
       <tr>
        <th scope="col">ID</th>
        <th scope="col">Doctor_name</th>
        <th scope="col" >Rate</th>
        <th scope="col" >Created_At</th>
       </tr>
    </thead>
    <tbody>
        @foreach ($rates as $rate)
        <tr>
            <td scope="col">{{ $rate->id }}</td>
            <td scope="col">{{ $rate->doctor->name }}</td>
            <td scope="col">{{ $rate->rate }}</td>
            <td scope="col">{{ $rate->created_at }}</td>
               {{-- <td scope="col">
                <form action="{{ route("rate.edit",$rate->id) }}" >
                     <button class="btn btn-warning">Update</button>
                 </form>
             </td> --}}
            {{-- <td scope="col">
                <form action="{{ route("rate.destroy",$rate->id) }}"  method='POST'>
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td> --}}
        </tr>
        @endforeach
    </tbody>
</table>
{{ $rates->links() }}
@endsection
