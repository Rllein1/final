@extends('layout.master')

@section('title')
    home
    {{$num=0}}
@stop

@section('content')

    <div class="container mt-5 ">
        <div class="col">
            <h1 class="text-center"><b >SCHOOL EVENTS</b></h1><br>
            <center><a href="{{route('events.create')}}" class="btn btn-success"><i class="fas fa-folder-plus"></i> <span>Add New Event</span></a></center>
            <div class="container row m-5 p-3">
                @foreach($events as $event)
                    <!------EVENT BOX ------->
                    <div  class="col-md-3 m-4 ">
                        <div class="shadow">
                            <div class="modal-header bg-info">
                                <i class="fas fa-calendar-day"></i>
                                <!--DELETE BTN-->
                                <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#exampleModal{{$event->id}}"></button>
                                <!--MODAL DELETE-->
                                <div class="modal fade" id="exampleModal{{$event->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <i class="far fa-trash-alt" style="font-size:40px"></i>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                           <b> YOU WANT TO DELETE THIS EVENT?</b>
                                        </div>
                                        <div class="modal-footer">
                                            <form method="POST" action="{{route('events.destroy',$event->id)}}"  >
                                            @method('DELETE')
                                            @csrf
                                                <button type="submit"> Delete</button>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body text-center">
                                <b>{{$event->event_name}}</b>
                            </div>
                            <div  class="p-3">
                            <center>
                                <a class="fw-bold text-success m-3" href="{{route('events.edit',$event->id)}}"><i class="far fa-edit success"></i></a>
                                <a class="fw-bold text-info m-3  " href="{{route('events.show',$event->id)}}" ><i class="far fa-eye"></i></a>
                            </center>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        
        </div>
    </div>




@stop
 
