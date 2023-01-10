@extends('layouts.app')

@section('content')
<form action="{{route('admin.projects.store')}}" method="POST" class="mb-3 p-5">
    @csrf

    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" id="title" class="form-control" aria-describedby="helpId">

    <label for="team" class="form-label">Team</label>
    <input type="text" name="team" id="team" class="form-control" aria-describedby="helpId">

    <label for="duration" class="form-label">Duration</label>
    <input type="text" name="duration" id="duration" class="form-control" aria-describedby="helpId">

    <label for="description" class="form-label">Description</label>
    <input type="text" name="description" id="description" class="form-control" aria-describedby="helpId">

    <input type="submit">

</form>
@endsection