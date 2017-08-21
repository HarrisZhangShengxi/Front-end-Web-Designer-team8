@extends('layouts.index')

@section('content')
    <thead>
    <tr>
        <td>Player</td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <p>Goalkeepers:</p>
    </tr>
    @foreach($glist as $item1)
        <table>
            <col width="200">
            <tr>
                <td>
                    <a href="/playerDetail?g_id={{$item1->gplayer_id}}">
                        {{$item1->name}}
                    </a>
                </td>
            </tr>
        </table>
    @endforeach
    <tr>
        <p>Defenders:</p>
    </tr>
    @foreach($dlist as $item2)
        <table>
            <col width="200">
            <tr>
                <td>
                    <a href="/playerDetail?d_id={{$item2->dplayer_id}}">
                        {{$item2->name}}
                    </a>
                </td>
            </tr>
        </table>
    @endforeach
    <tr>
        <p>Midfielders:</p>
    </tr>
    @foreach($mlist as $item3)
        <table>
            <col width="200">
            <tr>
                <td>
                    <a href="/playerDetail?m_id={{$item3->mplayer_id}}">
                        {{$item3->name}}
                    </a>
                </td>
            </tr>
        </table>
    @endforeach
    <tr>
        <p>Forwards:</p>
    </tr>
    @foreach($flist as $item4)
        <table>
            <col width="200">
            <tr>
                <td>
                    <a href="/playerDetail?f_id={{$item4->fplayer_id}}">
                        {{$item4->name}}
                    </a>
                </td>
            </tr>
        </table>
    @endforeach
    </tbody>
@endsection