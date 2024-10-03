@extends('admin.layouts.master')

@section('content')
<div class="container">
    <h1>Edit Team</h1>
    <form action="{{ route('admin.dashboard.teams.update', $team->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $team->name) }}">
        </div>
        
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" id="description" value="{{ old('description', $team->description) }}">
        </div>
        
        <div class="mb-3">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
            
            @if($team->image && file_exists(public_path('topicImages/' . $team->image)))
                <div class="mt-2">
                    <img id="topic-image" width="160" height="160" class="img-account-profile rounded-circle mb-1" src="{{ asset('topicImages/' . $team->image) }}" alt="Current Image" />
                    <p>Current Image</p>
                </div>
            @else
                <div class="mt-2">
                    <img id="topic-image" width="160" height="160" class="img-account-profile rounded-circle mb-1" src="{{ asset('asset/assets/images/service-icon-01.png') }}" alt="Default Image" />
                    <p>No image uploaded</p>
                </div>
            @endif
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
