@extends('layouts.app')

@section('content')
    <h1>{{ $email }}</h1>

    <h2>Teams</h2>
    @foreach($TRating as $item)
        <p>{{$item->name}}</p>
        <p>Attack:{{$item->attack}}       Defence:{{$item->defence}}</p>
        <p>Team Play:{{$item->team_play}} Discipline:{{$item->discipline}}</p>
        <p>Comment:</p>
        <p>{{$item->comment}}</p>
        <p>Date:{{$item->created_at}}</p>
    @endforeach
    <h3>Players</h3>
    @foreach($PRating as $item1)
        <p>{{$item1->name}}</p>
        <p>Skills:{{$item1->skills}}      Phyical:{{$item1->phyical}}</p>
        <p>Attack:{{$item1->attack}}      Defence:{{$item1->defence}}</p>
        <p>Team Play:{{$item1->team_play}} Weak Foot:{{$item1->weak_foot}}</p>
        <p>Comment:</p>
        <p>{{$item1->comment}}</p>
        <p>Date:{{$item1->created_at}}</p>
    @endforeach
@endsection