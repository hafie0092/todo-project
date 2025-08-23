@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Todo') }}</div>

                <div class="card-body">
                    <form action="" method="">
                        <div class="form-group">
                            <label> Title </label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label> Description </label>
                            <input type="text" name="description" class="form-control">
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection