@extends('layouts.app')

@section('content')

    <h3>Search</h3>

    <form method="GET" action="/searching">
        {{ csrf_field() }}
            <span>
            {{-- 这里的name的取名通常和数据库表的字段名一样 --}}
                <input type='text' name="text" class="form-control">
            </span>
            <input type="radio" name="option" value="Player" checked/>Player<input type="radio" name="option" value="Team" />Team

            <button type="submit" class="btn btn-primary">Search</button>
    </form>

    {{--@foreach($player as $item)--}}
        {{--<table>--}}
            {{--<col width="200">--}}
            {{--<tr>--}}
                {{--<td>--}}
                    {{--{{$item->name}}--}}
                {{--</td>--}}
            {{--</tr>--}}
        {{--</table>--}}
    {{--@endforeach--}}

@endsection