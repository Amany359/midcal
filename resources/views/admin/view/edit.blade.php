@extends('admin.layouts.master')

@section('content')
<div class="container">
    <h1>Edit veiwee</h1>
    <form action="{{ route('admin.dashboard.views.edit', $veiwee->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $veiwee->name) }}">
        </div>
        
        <div class="form-group">
            <label for="language">Language</label>
            <input type="text" name="language" class="form-control" id="language" value="{{ old('language', $veiwee->language) }}">
        </div>
        
        


        <div class="mb-3">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
            
            @if($veiwee->image && file_exists(public_path('topicImages/' . $veiwee->image)))
                <div class="mt-2">
                    <img id="topic-image" width="160" height="160" class="img-account-profile rounded-circle mb-1" src="{{ asset('topicImages/' . $veiwee->image) }}" alt="Current Image" />
                    <p>Current Image</p>
                </div>
            @else
                <div class="mt-2">
                    <img id="topic-image" width="160" height="160" class="img-account-profile rounded-circle mb-1" src="{{ asset('asset/assets/images/service-icon-01.png') }}" alt="Default Image" />
                    <p>No image uploaded</p>
                </div>
            @endif
        </div>
        
        <div class="form-group">
            <label for="create_date">Create Date</label>
            <input type="text" name="create_date" class="form-control" id="create_date" value="{{ old('create_date', $veiwee->create_date) }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
