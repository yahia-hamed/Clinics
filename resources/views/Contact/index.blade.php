@extends('adminlte::page')
@section('content')
{{-- <form action="{{ route("doctor.create") }}" >
    @csrf
    <button class="btn btn-primary">Create</button>
</form> --}}
<table class="table" >
    <thead class="table-dark">
       <tr>
        <th scope="col">ID</th>
        <th scope="col" > Name</th>
        <th scope="col" > Email</th>
        <th scope="col" > Phone</th>
        <th scope="col" > Subject</th>
        <th scope="col" > Message</th>
       </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
        <tr>
            <td scope="col">{{ $contact->id }}</td>
            <td scope="col">{{ $contact->name }}</td>
            <td scope="col">{{ $contact->email }}</td>
            <td scope="col">{{ $contact->phone }}</td>
            <td scope="col">{{ $contact->subject }}</td>
            <td scope="col">{{ $contact->message }}</td>
            {{-- <td scope="col">
                <form action="{{ route('contact.show',$contact->id) }}">
                    <button class="btn btn-primary">Show</button>
                </form>
               </td>
            <td scope="col">
                <form action="{{ route("contact.destroy",$contact->id) }}"  method='POST'>
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td> --}}
        </tr>
        @endforeach
    </tbody>
</table>
{{ $contacts->links() }}
@endsection
