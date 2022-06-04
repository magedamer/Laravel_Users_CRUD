@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel CRUD Opeartion</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create New user</a>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($user as $key=>$value)
            <tr>
                <td>{{  $loop->index + 1 }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>
                    <a href="{{ route('users.edit',$value->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('users.show',$value->id) }}" class="btn btn-primary">Show</a>
                    <a href="#" class="btn btn-danger" onclick="document.getElementById('user-{{ $value->id }}').submit();">Delete</a>
                    <form action="{{ route('users.destroy', $value->id)}}" method="post" id="user-{{ $value->id }}">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
