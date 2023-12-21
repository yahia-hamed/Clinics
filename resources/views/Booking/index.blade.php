@extends('adminlte::page')
@section('content')
{{-- <form action="{{ route("booking.create") }}" >
    @csrf
    <button class="btn btn-primary">Create</button>
</form> --}}
<table class="table" >
    <thead class="table-dark">
       <tr>
        <th scope="col">ID</th>
        <th scope="col" >Name</th>
        <th scope="col" >Emai</th>
        <th scope="col" >Phone</th>
        <th scope="col" >Doctor_Name</th>
        {{-- <th scope="col" >Update</th> --}}
        <th scope="col" >Delete</th>
       </tr>
    </thead>
    <tbody>
        @foreach ($bookings as $booking)
        <tr>
            <td scope="col">{{ $booking->id }}</td>
            <td scope="col">{{ $booking->name }}</td>
            <td scope="col">{{ $booking->email }}</td>
            <td scope="col">{{ $booking->phone }}</td>
            <td scope="col">{{ $booking->doctor?->name}}</td>
            {{-- <td scope="col">
                <form action="{{ route('booking.update',$booking->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <button class="btn btn-primary">Update</button>
                </form>
               </td> --}}
            <td scope="col">
                <form action="{{ route("booking.destroy",$booking->id) }}"  method='POST'>
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $bookings->links() }}
@endsection
