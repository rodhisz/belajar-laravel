@extends('template')
@section('content')

<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand">Crud</a>
        <form class="d-flex">
            <a href="{{route('note.create')}}" class="btn btn-success" type="submit">Create</a>
        </form>
    </div>
</nav>

@if($massage = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{$massage}}
    </div>
@endif


<table class="table table-bordered container">
    <tr>
        <th width="30px" class="text-center">No</th>
        <th>Title</th>
        <th width="270px" class="text-center">Action</th>
    </tr>
    @foreach ($notes as $note)
    <tr>
        <td width="30px" class="text-center">{{$i++}}</td>
        <td>{{$note->note}}</td>
        <td width="270px" class="text-center">
            <form action="{{route('note.destroy', $note->id)}}" method="POST">
                <a href="{{route('note.show', $note->id)}}" class="btn btn-outline-success" type="add">Show</a>
                <a href="{{route('note.edit', $note->id)}}" class="btn btn-outline-warning" type="add">Edit</a>
                @csrf
                @method('DELETE')
                <button type="sudmit" class="btn btn-danger" onclick="return confirm('Serius mau hapus data?') ">DELETE</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
