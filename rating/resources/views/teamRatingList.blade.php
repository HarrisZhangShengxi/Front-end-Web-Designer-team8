@extends('layouts.app')

@section('content')
        <h1>{{$trd[0]->name}}</h1>
    @foreach($trd as $item)
        <table>
            <col width="200">
            <tr>
                <td>
                    Attack:{{$item->attack}}       Defence:{{$item->defence}}
                    Team Play:{{$item->team_play}} Discipline:{{$item->discipline}}
                    Comment:
                        {{$item->comment}}
                    Date:{{$item->created_at}}
                </td>
            </tr>
        </table>
    @endforeach
@endsection