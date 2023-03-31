@extends('layouts.app2')

@section('navbar')
@if ($role_name == 'Admin')
    @include('inc.navbar')

@elseif ($role_name == 'Project Manager')
    @include('inc.navprojectmanager')

@elseif ($role_name == 'Product Owner')
    @include('inc.navproductowner')

@elseif ($role_name == 'Scrum Master')
    @include('inc.navscrummaster')

@elseif ($role_name == 'Developer')
    @include('inc.navdeveloper')
@endif
@endsection

@section('content')

<br><br><br>
<form action="{{route('teams.update', $team)}}" method="post">
        @csrf
        
 Team Name :<input type="text" name="team_name" style="margin-left:2.5em" value="{{$team->team_name}}">
<br><br><br>
 
        <button type="submit" method="post">Update</button>
        <button type="submit"><a href="{{route('team.index')}}">Cancel</a></button>
        
</form>
    
    <br><br><br>
@endsection

    