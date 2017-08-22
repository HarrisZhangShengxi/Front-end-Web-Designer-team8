@extends('layouts.index')

@section('content')
    <thead>
    <tr>
        <td>Team</td>
    </tr>
    </thead>
    <tbody>
    @foreach($teamlist as $item)
        <table>
            <col width="200">
        <tr>
            <td>
                <a href="/teamDetail?id={{$item->team_id}}">
                    {{$item->name}}
                </a>
            </td>
        </tr>
        </table>
    @endforeach
    </tbody>
@endsection