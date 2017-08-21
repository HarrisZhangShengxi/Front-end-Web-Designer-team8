@extends('layouts.index')

@section('content')

    <h3>Search</h3>

    <form method="POST" action="/search">
        {{ csrf_field() }}
        <div class="form-group">
            {{-- 这里的name的取名通常和数据库表的字段名一样 --}}
            <text name="content" class="form-control"></text>
        </div>

        <div class="form-group">
            <input type="radio" name="type" value="Player" class="radio" id="player" />
            <input type="radio" name="type" value="Team" class="radio" id="team" />
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

@endsection