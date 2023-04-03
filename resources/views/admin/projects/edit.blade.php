@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <h1 class="my-3">Update Project</h1>
        <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Title</label>
                <input type="text" class="form-control" name="name" value="{{ old('name', $project->name) }}" id="name" required maxlength="100" placeholder="Write the name of the project...">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" name="description" id="description" value="{{ old('description', $project->description) }}" required maxlength="100" placeholder="Write the description...">
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Image</label>
                <input type="file" class="form-control" name="img" id="img" value="{{ old('img') }}">
            </div>

            <div>
                <button type="submit" class="btn btn-success mb-2">Update</button>
            </div>

        </form>

        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')

            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Delete comic </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">Are you sure to DELETE this project?</div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, come back</button>
                            <button type="submit" class="btn btn-danger">Yes, delete the project</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection