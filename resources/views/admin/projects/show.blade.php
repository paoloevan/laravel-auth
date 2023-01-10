@extends('layouts.app')

@section('content')
<ul>
    <li>{{$project->title}}</li>
    <li>{{$project->team}}</li>
    <li>{{$project->description}}</li>
    <li>{{$project->duration}}</li>


</ul>
@endsection