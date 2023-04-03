@extends('layouts.admin')

 @section('content')
 <div class="container-fluid mt-4">
     <div class="row justify-content-center">
        <h1 class="my-3">
            Single Project
        </h1>
        <div class="project">
            <div class="card text-center">
                <div class="card-header">{{ $project->name }}</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $project->name }}</h5>
                    <p class="card-text">
                        {{ $project->description }}
                    </p>
                </div>
                @if ($project->img)
                    <div>
                        <img src="{{ asset( 'storage/' . $project->img )}}" alt="Image" class="my-img-small">
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection