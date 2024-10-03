@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Edit Category
            </div>
            <div class="card-block">
                <form method="post" action="{{ route('admin.dashboard.categories.update', $category->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">الاسم</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="parent_id">القسم الرئيسي</label>
                        <select class="form-control" id="parent_id" name="parent_id">
                            <option value="">القسم الرئيسي</option>
                            @foreach($mincategories as $category)
                                <option value="{{ $category->id }}" {{ $category->parent_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">الوصف</label>
                        <textarea class="form-control" id="description" name="description">{{ $category->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                        
                        @if($category->image && file_exists(public_path('topicImages/' . $category->image)))
                            <div class="mt-2">
                                <img id="topic-image" width="160" height="160" class="img-account-profile rounded-circle mb-1" src="{{ asset('topicImages/' . $category->image) }}" alt="Current Image" />
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
        </div>
    </div>
</div>
@endsection
