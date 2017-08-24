@extends('layouts.index')

@section('content')

    <div id="content">
        <!-- Mission Statement -->
        <div class="mission text-center block block-pd-sm block-bg-noise">
            <div class="container">
                <h2 class="text-shadow-white">
                    Players:
                </h2>
            </div>
        </div>

        <div class="showcase block block-border-bottom-grey">
            <div class="container">
                <h4>
                    @foreach($playerlist as $item)
                        <a href="/playerDetail?id={{$item->player_id}}">
                        {{$item->name}}
                        </a><br>
                    @endforeach
                </h4>
            </div>
        </div>
    </div>

@endsection