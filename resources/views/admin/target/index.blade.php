


@extends('admin.layouts.master')
@section('title')
Target  
@stop
@section('content')

<div class="container">
    <a href="{{ route('admin.dashboard.targets.create') }}" class="btn btn-success mb-3">Create New </a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($targets as $target)
            <tr>
                <td>{{ $target->id}}</td>
                <td>{{ $target->name}}</td>
                <td>{{ $target->description}}</td>
                <td>
                    <a href="{{ route('admin.dashboard.targets.edit', $target->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.dashboard.targets.destroy', $target->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

