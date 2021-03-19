@extends('layout.master')

@section('title')
    add page
@stop

@section('content')

    <div class="container">
        <div class="col-md-8 offset-md-2 shadow p-5 mt-5">
         <H3 class="mb-5 text-center">ADD EVENT</H3>
            <form action="{{route('events.store')}}" method="POST">
                @csrf
                
                <div class="form-group">
                    EVENT:<input type="text" class="form-control mb-5 shadow" name="event_name" placeholder="ENTER EVENT NAME" required>
                    DATE:<input type="date" class="form-control mb-5 shadow" name="event_date" placeholder="ENTER EVENT DATE" required>
                    PLACE:<input type="text" class="form-control mb-5 shadow" name="event_venue" placeholder="ENTER EVENT PLACE" list="venuelist" required>
                            <datalist id="venuelist">
                                <option class="text-success" value="GYM">GYM</option>
                                <option class="text-success" value="Chapel">Chapel</option>
                                <option class="text-success" value="AVR">AVR</option>
                                <option class="text-success" value="AUDI.">AUDI.</option>
                            </datalist>
                    IN-CHARGE:<input type="text" class="form-control mb-5 shadow" name="event_charge" placeholder="ENTER EVENT IN CHARGE" required>
                   <center>
                   <a href="{{route('events.index')}}" class="mt-2 btn btn-info text-center"><i class="fas fa-arrow-left"></i>    BACK</a>
                   <input type="submit" value="ADD EVENT" class="mt-2 btn btn-info text-center">
                   </center> 
                </div>
            </form>
        </div>
    </div>

@stop

