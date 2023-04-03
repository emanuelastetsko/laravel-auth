@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <h1 class="my-3">New Project</h1>
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" maxlength="255" placeholder="Write the name of the project..." value="{{ old('name') }}" required> 
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Write the description..." value="{{ old('description') }}" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" name="image" id="image" value="{{ old('img') }}">
            </div>
            <div>
                <button type="submit" class="btn btn-success" enctype="multipart/form-data">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection