@extends('layouts.app')

@section('content')

    <h3>Search</h3>

    <form method="POST" action="/search">
        {{ csrf_field() }}
        <div class="form-group">
            {{-- 这里的name的取名通常和数据库表的字段名一样 --}}
            <input type="text" name="content" class="form-control">
        </div>

        <div class="form-group">
            <input type="radio" name="option" value="Player" checked/>Player<input type="radio" name="option" value="Team" />Team
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
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