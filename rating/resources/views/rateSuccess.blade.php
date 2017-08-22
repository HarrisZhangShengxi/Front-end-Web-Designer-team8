@extends('layouts.index2')

@section('content')
<head>
    <script src="/js/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            setTimeout(function(){
                location.href = "/teamList";
            }, 3000);
        });
    </script>
</head>
<body>

<div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                Rate
            </h3>
        </div>
        <div class="panel-body">
            <p class="m-b-0 m-t">Rate Success!</p>
        </div>
    </div>
</div>
</div>


</body>

@endsection