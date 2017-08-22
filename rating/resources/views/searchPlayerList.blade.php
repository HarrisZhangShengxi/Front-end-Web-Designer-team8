@extends('layouts.app')

@section('content')

    @foreach($player as $item)
        <table>
            <col width="200">
            <tr>
                <td>
                    <a href="/playerDetail?id={{$item->player_id}}">
                        {{$item->name}}
                    </a>
                </td>
            </tr>
        </table>
    @endforeach
@endsection