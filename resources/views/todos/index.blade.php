@extends('layouts.master')

@section('content')
    
    <h1>ToDo List</h1>
    <form action="{{route('todos.store')}}" method="POST">
        @csrf
        <div>
            <div class="row mt-4">
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="body" placeholder="Add ToDo">        
                </div>
                <div class="col-sm-2"><button type="submit" class="btn blue-green-button">Add</button></div>
            </div>
        </div>
    </form>
    <div class="mt-4">
        @foreach ($todos as $todo)
        <div class="card mt-2 blue-green-card">
            <div class="row">
                <div class="col-8">
                    <div class="card-body">{{$todo->body}}</div>
                </div>
                <div class="col-4 position-relative">
                    <div class="row position-absolute top-50 start-50 translate-middle">
                        <div class="col-6">
                            <form action="{{route('todos.edit',$todo->id)}}" method="POST">
                                @csrf
                                @method('GET')
                                <button type="submit" class="btn blue-green-button">Edit</button>
                            </form>
                        </div>
                        <div class="col-6">
                            <form action="{{route('todos.destroy', $todo->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-secondary">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
@endsection