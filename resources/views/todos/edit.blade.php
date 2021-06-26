@extends('layouts.master')

@section('content')
<h1>Edit ToDo</h1>
<form action="{{route('todos.update', $todo->id)}}" method="POST">
    @csrf
    @method('PATCH')
    <div>
        <div class="row mt-4">
            <div class="col-sm-8">
                <input type="text" class="form-control" name="body" value="{{$todo->body}}">        
            </div>
            <div class="col-sm-2"><button type="submit" class="btn blue-green-button">Edit</button></div>
        </div>
    </div>
</form>
@endsection