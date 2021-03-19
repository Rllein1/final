@extends('layout.master')

@section('title')
    edit page
@stop

@section('content')

<div class="container">
        <div class="col-md-8 offset-md-2 shadow p-5 mt-5">
         <H3 class="mb-5 text-center">Edit EVENT</H3>
            <form action="{{route('events.update', $event->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="event_name"></label>
                    EVENT:<input type="text" class="form-control mb-5 shadow" name="event_name" value="{{$event->event_name}}" required>
                    DATE:<input type="date" class="form-control mb-5 shadow" name="event_date" value="{{$event->event_date}}" required>
                    PLACE:<input type="text" class="form-control mb-5 shadow" name="event_venue" value="{{$event->event_venue}}" list="venuelist" required>
                            <datalist id="venuelist">
                                <option class="text-success" value="GYM">GYM</option>
                                <option class="text-success" value="Chapel">Chapel</option>
                                <option class="text-success" value="AVR">AVR</option>
                                <option class="text-success" value="AUDI.">AUDI.</option>
                            </datalist>
                    IN-CHARGE:<input type="text" class="form-control mb-5 shadow" name="event_charge" value="{{$event->event_in_charge}}" required>
                   <center>
                   <a href="{{route('events.index')}}" class="mt-2 btn btn-info text-center"><i class="fas fa-arrow-left"></i>BACK</a>
                   <input type="submit" value="UPDATE" class="mt-2 btn btn-info text-center">
                   </center> 
                </div>
            </form>
        </div>
    </div>
   

@stop
