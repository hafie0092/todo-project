@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    {{ __('Todos Index') }}
                    <a href="{{ route('todos:create') }}" class="btn btn-primary btn-sm">Create New Todo</a>
                </div>

                <div class="card-body">
                    @if($todos->count() > 0)
                        <div class="list-group">
                            @foreach($todos as $todo)
                                <div class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <h5 class="mb-1">{{ $todo->title }}</h5>
                                        <p class="mb-1">{{ $todo->description }}</p>
                                        <small class="text-muted">Created: {{ $todo->created_at->format('M d, Y H:i') }}</small>
                                    </div>
                                    <div class="ms-3">
                                        <a href="{{ route('todos:show', $todo) }}" class="btn btn-secondary">Show</a>
                                        <a href="{{ route('todos:edit', $todo) }}" class="btn btn-secondary">Edit</a>
                                        <a onclick="return confirm('Are you sure you want to delete this todo?')" href="{{ route('todos:destroy', $todo) }}" class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-center text-muted">No todos found. Create your first todo!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
