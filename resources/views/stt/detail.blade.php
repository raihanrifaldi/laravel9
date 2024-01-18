@extends('layout.main')

@section('isi_content')

    <div class="content-header mb-5 mt-3">
        <div class="container-fluid">
            <div class="mb-2">
                <div class="col-sm-6">
                    <h1>
                        Details Data Page
                    </h1>
                </div>
            </div>
        </div>
        <div class="overlay toggle-menu"></div>
    </div>
    <div class="content m-3" align="center">
        <div class="container-fluid" style="justify-content:center; align-items:center">
            <div class="card" style="width:940px; background-color:#0B0F19;  border-radius:0.5cm"" align="center" >
                <div class="card-body">
                    <div class="card-title" align="left" >Detail</div>
                    {{-- <form action="/stt/{{$stt->id}}" method="POST"> --}}
                    <form >
                        {{-- <!--mengarahkan ke methodput saat diekse-->
                        @method('put')
                        <!-- form token -->
                        @csrf  --}}
                            <div class="form-group"align="left" >
                                <label for="event"  >Event Name</label>
                                <p type="text" class="form-control" align="left"  name="event" id="event" placeholder="Name of Event" style="background-color:rgb(26, 45, 60); style="border: 1px solid #3F4858"">{{$stt->event}}</p>
                            </div>
                            <div class="form-group"  align="left" >
                                <label for="time" >Time</label>
                                <p type="datetime-local" class="form-control" align="left"  name="time" id="time" placeholder="Time of Event" style="background-color:rgb(26, 45, 60)">{{$stt->time}}</p>
                            </div>
                            <div class="form-group" align="left" >
                                <label for="speech">Original Speech Result</label>
                                <textarea class="form-control" align="left" type="text-area" name="orignal" id="orignal" placeholder="Original Speech" style="min-height:150px; background-color:rgb(26, 45, 60)"> {{$stt->original}} </textarea>
                            </div>
                            <div class="form-group" align="left" >
                                <label for="speech">Edited Speech Result</label>
                                <textarea class="form-control" align="left" type="text-area" name="speech" id="speech" placeholder="Edited Speech" style="min-height:150px; background-color:rgb(26, 45, 60)"> {{$stt->speech}} </textarea>
                            </div>
                            
                            @if($user->level == 1)
                            <div class="form-group mt-5" style="text-align: center">
                                <a type="button" class="btn btn-light px-5 w-50 p-3" href="{{ url('stt/index') }}" style="background-color:#3F4858">Back</a>
                            </div>
                            @elseif($user->level == 2)
                            <div class="form-group mt-5" style="text-align: center">
                                <a type="button" class="btn btn-light px-5 w-50 p-3" href="{{ url('stt/indexforuser') }}" style="background-color:#3F4858">Back</a>
                            </div>
                            @endif()

                            
                        </form>
                </div>
            </div>
        </div>
    </div>

@endsection
