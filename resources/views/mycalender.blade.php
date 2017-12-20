@extends('layouts.app')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

@section('content')

<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            MY Calender
        </div>
        <div class="panel-body" >
            <ul>
                @forelse($events as $event)
                    <li>{{ $event->title }}</li>
                @empty
                    <li>no event</li>
                @endforelse
            </ul>
        </div>
    </div>
</div>

@endsection
