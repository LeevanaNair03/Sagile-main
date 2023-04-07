@extends('layouts.app2')

@section('dashboard')

@foreach($projects as $p)
        <li>
            <a href="{{ route('projects.edit', [$p]) }}">
             {{ $p->proj_name }} 
            </a>
                     
        </li>
@endforeach
@endsection

@section('navbar')
    @include('inc.navbar')
@endsection


@section('content')

<br><br><br>
<form action="{{route('projects.update', $project)}}" method="post">
        @csrf
        
Project Title :<input type="text" name="proj_name" style="margin-left:2.5em" readonly value="{{$project->proj_name}}">
<br><br><br>
 Description :<input type="text" name="proj_desc" style="margin-left:2.6em"  value="{{$project->proj_desc}}">
 <br><br><br>
 Start Date :<input type="date" name="start_date" style="margin-left:2.6em" value="{{$project->start_date}}">
 <br><br><br>
 Completion Date :<input type="date" name="end_date" style="margin-left:2.6em" value="{{$project->end_date}}">
 <br><br><br>
    
        <button type="submit" method="post">Update</button>
        
        <button type="submit", formaction="{{route('projects.destroy', $project)}}", method="delete">Delete</button>
        </form>
    
    <br><br><br>
@endsection