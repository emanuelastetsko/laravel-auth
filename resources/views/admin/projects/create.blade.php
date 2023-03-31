@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <h1 class="my-3">New Project</h1>
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Name</label>
                <input type="text" class="form-control" name="title" id="title" maxlength="255" placeholder="Write the title of the project..." value="{{ old('name') }}" required>
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Description</label>
                <input type="text" class="form-control" name="slug" id="slug" placeholder="Write the slug..." value="{{ old('description') }}" required>
            </div>
            <div>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection