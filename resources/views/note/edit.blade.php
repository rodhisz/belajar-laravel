@extends('template')
@section('content')


<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand">CRUD</a>
        <form class="d-flex">
            <a href="{{route('note.index')}}" class="btn btn-success" type="submit">Back</a>
        </form>
    </div>
</nav>

<div class="container">
    <h1>Edit Post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>


<form class="container" action="{{ route('note.update', $note->id) }}" method="POST">
    @csrf
    @method('PUT')
        <div class="mb-3">
        <label for="Note" class="form-label">Note</label>
        <input name="note" type="text" value="{{$note->note}}" class="form-control" id="Note">
        </div>
    <div class="mb-3">
        <label for="Content" class="form-label">Content</label>
        {{-- <input type="text-area" class="form-control" id="Content"> --}}
        <textarea name="content" id="Content" class="form-control">{{$note->content}}</textarea>
        </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>


@endsection
