@extends('layout.master')

@section('title')
    task
@stop

@section('content')

    <div class="container p-5">
    <h1 class="text-center m-5">EVENT DETAILS</h1>
        <div class="row">
            <div class="col col-md-4 offset-md-4 shadow-lg ">
                <div class="content text-center p-3">
                    <div class="m-2 p-2 ">
                        <label>Name of Event:</label>
                        <h5><b>{{$event->event_name}}</b></h5>
                    </div>
                    <div class="m-2 p-2">
                        <label>Date of Event:</label>
                        <h5><b>{{$event->event_date}}</b></h5>
                    </div>
                    <div class="m-2 p-2">
                        <label>VENUE:</label>
                        <h5><b>{{$event->event_venue}}</b></h5>
                    </div>
                    <div class="m-2 p-2">
                        <label>Person in Charge:</label>
                        <h5><b>{{$event->event_in_charge}}</b></h5>
                    </div>

                    <a href="{{route('events.index')}}" class="m-3 btn btn-outline-info text-center text-dark border-light"><i class="fas fa-arrow-left"></i>BACK</a>
                </div>
            </div>
        </div>
    </div>
   

@stop
