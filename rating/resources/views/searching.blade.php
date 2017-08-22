@extends('layouts.index')

@section('content')

    <h3>Search</h3>

    <form method="GET" action="/searching">
        {{ csrf_field() }}
        <div>
            <span>
            {{-- 这里的name的取名通常和数据库表的字段名一样 --}}
                <input type='text' name="text" class="form-control">
            </span>
            <input type="radio" name="option" value="Player" checked/>Player<input type="radio" name="option" value="Team" />Team
        </div>
        <div id="ad" style="display: none">
            <input type="checkbox" name="advance" value="Rate" />Rate<input type="checkbox" name="advance" value="Date" />Date
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

@endsection