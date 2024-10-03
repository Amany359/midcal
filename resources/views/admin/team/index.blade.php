@extends('admin.layouts.master')
@section('title')
Categories
@stop
@section('content')

<div class="container">
    <a href="{{ route('admin.dashboard.teams.create') }}" class="btn btn-success mb-3">Create New</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $team)
            <tr>
                <td>{{ $team->id }}</td>
                <td>{{ $team->name }}</td>
                <td>{{ $team->description }}</td>
                


            <td>
                @if(isset($team->image) && file_exists(public_path('topicImages/'.$team->image)))
                    <img src="{{ asset('topicImages/'.$team->image) }}" width="90" height="90" />
                @else
                    <img src="{{ asset('asset/assets/images/service-icon-01.png') }}" width="90" height="90" />
                @endif
            </td>
            <td>{{ $team->create_date }}</td>
            <td>
                <a href="{{ route('admin.dashboard.teams.edit', $team->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('admin.dashboard.teams.destroy', $team->id) }}" method="POST" style="display:inline;">
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
