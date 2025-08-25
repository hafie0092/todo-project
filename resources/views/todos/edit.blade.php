@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Todo') }}</div>

                <div class="card-body"> 
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label> Title </label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $todo->title }}">
                        </div>
                        <div class="form-group mb-3">
                            <label> Description </label>
                            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ $todo->description }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update Todo</button>
                            <a href="{{ route('todos:index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>