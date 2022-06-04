@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit user</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label class="label">Name:</label>
            <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <label class="label">email:</label>
            <input type="text" name="email" value="{{ $user->email }}" class="form-control" placeholder="email">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
@endsection
