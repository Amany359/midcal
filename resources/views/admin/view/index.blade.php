


{{--@extends('admin.layouts.master')
@section('title')
vie
@stop
@section('content')

<div class="container">
    <a href="{{ route('admin.dashboard.views.create') }}" class="btn btn-success mb-3">Create New </a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Language</th>
                <th>image</th>
                <th>Create_date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($views as $view)
            <tr>
                <td>{{ $view->id}}</td>
                <td>{{ $view->name}}</td>
                <td>{{ $view->language}}</td>
                  
                   
                
                   <td>
                    @if(isset($view->image) && file_exists(public_path('topicImages/'.$view->image)))
                        <img src="{{ asset('topicImages/'.$view->image) }}" width="90" height="90" />
                    @else
                        <img src="{{ asset('asset/assets/images/service-icon-01.png') }}" width="90" height="90" />
                    @endif
                </td>
                
                
                <td>{{ $view->create_date}}</td>
                    <a href="{{ route('admin.dashboard.views.edit', $view->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.dashboard.views.destroy', $view->id) }}" method="POST" style="display:inline;">
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

@endsection--}}


@extends('admin.layouts.master')
@section('title')
Categories
@stop
@section('content')

<div class="container">
    <a href="{{ route('admin.dashboard.views.create') }}" class="btn btn-success mb-3">Create New</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Language</th>
                <th>Image</th>
                <th>Create Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($veiwees as $view)
            <tr>
                <td>{{ $view->id }}</td>
                <td>{{ $view->name }}</td>
                <td>{{ $view->language }}</td>
                <td>
                    @if(isset($view->image) && file_exists(public_path('topicImages/'.$view->image)))
                        <img src="{{ asset('topicImages/'.$view->image) }}" width="90" height="90" />
                    @else
                        <img src="{{ asset('asset/assets/images/service-icon-01.png') }}" width="90" height="90" />
                    @endif
                </td>
                <td>{{ $view->create_date }}</td>
                <td>
                    <a href="{{ route('admin.dashboard.views.edit', $view->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.dashboard.views.destroy', $view->id) }}" method="POST" style="display:inline;">
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


