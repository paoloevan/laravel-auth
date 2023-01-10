@extends('layouts.app')

@section('content')
<form action="{{route('admin.projects.update', $project->id)}}" method="post" class="mb-3 p-5">
    @csrf

    @method('PUT')

    <label for="title" class="form-label">Title</label>
    <input value="{{$project->title}}" type="text" name="title" id="title" class="form-control" aria-describedby="helpId">

    <label for="team" class="form-label">Team</label>
    <input value="{{$project->team}}" type="text" name="team" id="team" class="form-control" aria-describedby="helpId">

    <label for="duration" class="form-label">Duration</label>
    <input value="{{$project->duration}}" type="text" name="duration" id="duration" class="form-control" aria-describedby="helpId">

    <label for="description" class="form-label">Description</label>
    <input value="{{$project->description}}" type="text" name="description" id="description" class="form-control" aria-describedby="helpId">

    <input type="submit">

</form>
@endsection