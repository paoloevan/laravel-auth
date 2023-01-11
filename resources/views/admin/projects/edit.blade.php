@extends('layouts.app')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('admin.projects.update', $project->id)}}" method="post" class="mb-3 p-5">
    @csrf

    @method('PUT')

    <label for="title" class="form-label">Title</label>
    <input value="{{old('title', $project->title)}}" type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" aria-describedby="helpId">
    @error('title')<div class="alert alert-danger">{{ $message }}</div>@enderror


    <label for="team" class="form-label">Team</label>
    <input value="{{old('team', $project->team)}}" type="text" name="team" id="team" class="form-control @error('team') is-invalid @enderror" aria-describedby="helpId">
    @error('team')<div class="alert alert-danger">{{ $message }}</div>@enderror


    <label for="duration" class="form-label">Duration</label>
    <input value="{{old('duration', $project->duration)}}" type="text" name="duration" id="duration" class="form-control @error('duration') is-invalid @enderror" aria-describedby="helpId">
    @error('duration')<div class="alert alert-danger">{{ $message }}</div>@enderror


    <label for="description" class="form-label">Description</label>
    <input value="{{old('description', $project->description)}}" type="text" name="description" id="description" class="form-control" aria-describedby="helpId">


    <input class="btn btn-primary mt-2" type="submit">

</form>
@endsection