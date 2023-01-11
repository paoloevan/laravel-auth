@extends('layouts.app')

@section('content')

<div class="d-flex">
    @include('admin.partials.navbar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div class="d-flex mb-3">
            <h2>Projects</h2>

            <a class="bg-secondary text-white btn btn-sm p-1 ms-5" href="{{route('admin.projects.create')}}">
                <div>Add new project</div>
                <div>+</div>
            </a>

        </div>

        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">Actions</th>
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
                        <td>
                            <a class="p-1 my-1 btn btn-dark btn-sm" href="{{route('admin.projects.show', $project->id)}}">Show</a>
                            <a class="p-1 my-1 btn btn-secondary btn-sm" href="{{route('admin.projects.edit', $project->id)}}">Edit</a>


                            <!-- Modal trigger button -->
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete_project_{{$project->id}}">
                                Delete
                            </button>

                            <!-- Modal Body -->
                            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                            <div class="modal fade" id="delete_project_{{$project->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId_{{$project->id}}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitleId_{{$project->id}}">Delete {{$project->title}}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                            <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <input class="btn btn-danger btn-sm" type="submit" value="Delete">

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                        <td>{{$project->id}}</td>
                        <td>{{$project->title}}</td>
                        <td>{{$project->team}}</td>
                        <td>{{$project->duration}}</td>
                        <td>{{$project->description}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </main>
</div>
@endsection