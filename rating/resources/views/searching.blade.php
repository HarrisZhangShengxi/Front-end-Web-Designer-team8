@extends('layouts.index')

@section('content')
    <div id="content">
        <!-- Mission Statement -->
        <div class="mission text-center block block-pd-sm block-bg-noise">
            <div class="container">
                <h2 class="text-shadow-white">
                    Searching
                </h2>
            </div>
        </div>
    </div>

    <form method="GET" action="/searching">
        {{ csrf_field() }}
        <div>
            <span>
            {{-- 这里的name的取名通常和数据库表的字段名一样 --}}
                <input type='text' name="text" placeholder="First/Last Name" class="form-control">
            </span>
            <h4 align="center">
                <input type="radio" name="option" value="Player" checked/>Player
                <input type="radio" name="option" value="Team" />Team
            </h4>
        </div>
        <div id="ad">
            <h4 align="center">
                <input type="radio" name="advance" value=1 />Best Rate
                <input type="radio" name="advance" value=2 />Latest Date
            </h4>
        </div>
        <div align="center">
            <button type="submit" class="btn btn-more btn-lg"> <i class="fa fa-search"></i>
                Search</button>
        </div>
    </form>
    <br>

@endsection