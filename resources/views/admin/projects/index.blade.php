@extends('layouts.app')

@section('content')

<div class="d-flex">
    @include('admin.partials.navbar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div class="d-flex">
            <h2>Projects</h2>

            <a class="mx-3 bg-primary text-white btn" href="{{route('admin.projects.create')}}">+</a>

        </div>

        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Team</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($projects as $project)
                    <tr>
                        <td>{{$project->id}}</td>
                        <td>{{$project->title}}</td>
                        <td>{{$project->team}}</td>
                        <td>{{$project->duration}}</td>
                        <td>{{$project->description}}</td>
                        <td>
                            <a class="p-1 my-1 btn btn-primary" href="{{route('admin.projects.show', $project->id)}}">Show</a>
                            <a class="p-1 my-1 btn btn-secondary" href="{{route('admin.projects.edit', $project->id)}}">Edit</a>
                            <a class="p-1 my-1 btn btn-danger" href="{{route('admin.projects.destroy', $project->id)}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </main>
</div>
@endsection