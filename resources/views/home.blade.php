@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="{{ url('homepage') }}">You are logged in!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{--<script type="text/javascript">--}}
    {{--setTimeout(window.location.href='{{ url('homepage') }}',500);--}}
{{--</script>--}}
