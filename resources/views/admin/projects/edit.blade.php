@extends('layouts.app')

@section('content')


<div class="d-flex">
    @include('admin.partials.navbar')

    <div class="col">
        <h1 class="ms-5">Edit project "{{$project->title}}"</h1>
        <form action="{{route('admin.projects.update', $project->id)}}" method="post" class="mb-3 p-5">
            @csrf
            @include('admin.partials.error')


            @method('PUT')

            <label for="title" class="form-label">Title</label>
            <small class="form-text text-muted ms-2">Required - Max 255 characters</small>
            <input value="{{old('title', $project->title)}}" type="text" name="title" id="title" class="form-control mb-3  @error('title') is-invalid @enderror" aria-describedby="helpId">
            @error('title')<div class="alert alert-danger">{{ $message }}</div>@enderror


            <label for="team" class="form-label">Team</label>
            <small class="form-text text-muted ms-2">Max 255 characters</small>
            <input value="{{old('team', $project->team)}}" type="text" name="team" id="team" class="form-control mb-3  @error('team') is-invalid @enderror" aria-describedby="helpId">
            @error('team')<div class="alert alert-danger">{{ $message }}</div>@enderror


            <label for="duration" class="form-label">Duration</label>
            <small class="form-text text-muted ms-2">Max 255 characters</small>
            <input value="{{old('duration', $project->duration)}}" type="text" name="duration" id="duration" class="form-control mb-3  @error('duration') is-invalid @enderror" aria-describedby="helpId">
            @error('duration')<div class="alert alert-danger">{{ $message }}</div>@enderror


            <label for="description" class="form-label">Description</label>
            <input value="{{old('description', $project->description)}}" type="text" name="description" id="description" class="form-control mb-3 " aria-describedby="helpId">


            <input class="btn btn-primary mt-2" type="submit">

        </form>
    </div>
</div>
@endsection