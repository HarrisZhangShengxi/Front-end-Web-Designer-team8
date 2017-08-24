@extends('layouts.index')

@section('content')

    <div id="content">
        <!-- Mission Statement -->
        <div class="mission text-center block block-pd-sm block-bg-noise">
            <div class="container">
                <h2 class="text-shadow-white">
                    Teams:
                </h2>
            </div>
        </div>

        <div class="showcase block block-border-bottom-grey">
            <div class="container">
                <h4>
                    @foreach($teamlist as $item)
                        <a href="/teamDetail?id={{$item->player_id}}">
                            {{$item->name}}
                        </a><br>
                    @endforeach
                </h4>
            </div>
        </div>
    </div>

@endsection