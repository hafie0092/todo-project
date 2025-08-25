@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    {{ __('Todo Details') }}
                    <div>
                        <a href="{{ route('todos:index') }}" class="btn btn-secondary btn-sm">Back to List</a>
                        <a href="{{ route('todos:create') }}" class="btn btn-primary btn-sm">Create New</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="mb-3">{{ $todo->title }}</h4>
                            
                            <div class="mb-4">
                                <strong>Description:</strong>
                                <p class="mt-2">{{ $todo->description }}</p>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <strong>Created:</strong>
                                    <p class="text-muted">{{ $todo->created_at->format('F d, Y \a\t g:i A') }}</p>
                                </div>
                                <div class="col-md-6">
                                    <strong>Last Updated:</strong>
                                    <p class="text-muted">{{ $todo->updated_at->format('F d, Y \a\t g:i A') }}</p>
                                </div>
                            </div>

                            <div class="mt-4">
                                <a href="{{ route('todos:index') }}" class="btn btn-secondary">Back to Todos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection