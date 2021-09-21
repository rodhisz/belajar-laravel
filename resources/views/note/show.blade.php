@extends('template')
@section('content')

<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand">Crud</a>
        <a href="{{route('note.index')}}" class="btn btn-warning">Back</a>
    </div>
</nav>

<table class="container table table-bordered">
    <tr>
        <th width="30px" class="text-center">Id</th>
        <th>Title</th>
        <th>Content</th>
    </tr>

    <tr>
        <td width="30px" class="text-center">{{$note->id}}</td>
        <td>{{$note->note}}</td>
        <td>{{$note->content}}</td>
    </tr>
</table>

@endsection
