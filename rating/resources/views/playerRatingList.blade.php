@extends('layouts.app')

@section('content')
        <h1>{{$prd[0]->name}}</h1>
    @foreach($prd as $item2)
                    ID:{{$item2->id}}
                    Skills:{{$item2->skills}}       Phyical:{{$item2->phyical}}
                    Attack:{{$item2->attack}}       Defence:{{$item2->defence}}
                    Weak Foot:{{$item2->weak_foot}} Team Play:{{$item2->team_play}}
                    Comment:
                        {{$item2->comment}}
                    Date:{{$item2->created_at}}
    @endforeach
@endsection