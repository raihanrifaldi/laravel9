@extends('layout.main')

@section('isi_content')

    <div class="content-header mb-5 mt-3">
        <div class="container-fluid">
            <div class="mb-2">
                <div class="col-sm-6">
                    <h1>
                        Insert Data Page
                    </h1>
                </div>
            </div>
        </div>
        <div class="overlay toggle-menu"></div>
    </div>
    <div class="content m-3" align="center">
        <div class="container-fluid" style="justify-content:center; align-items:center">
            <div class="card" style="width:800px; background-color:#0B0F19; border-radius:0.5cm" align="center" >
                <div class="card-body">
                    <div class="card-title" align="left">Input Form</div>
                    <form action="/sd/store" method="POST">
                        <!-- form token -->
                        @csrf 
                            <input type="text" class="form-control" name="usid" id="usid" placeholder="ID User" value="{{ $user->id }}" style="visibility: hidden; margin:0%; padding:0%; font-size:0%">
                            <div class="form-group" align="left">
                                <label for="event">Event Name</label>
                                <input type="text" class="form-control" align="left" name="event" id="event" placeholder="Name of Event" style="background-color:rgb(26, 45, 60)">
                            </div>
                            <div class="form-group" align="left">
                                <label for="time">Time</label>
                                <input type="datetime-local" class="form-control" align="left" name="time" id="time" placeholder="Time of Event" style="background-color:rgb(26, 45, 60)" >
                            </div>
                            {{-- <div class="form-group" align="left">
                                <label for="original">Original Speech Result</label>
                                <textarea class="form-control" align="left" type="text-area" name="original" id="original" placeholder="Original Speech" style="min-height:150px; visibility: hidden; margin:0%; padding:0%; height:1px"></textarea>
                            </div> --}}
                            {{-- <div class="form-group" align="left">
                                <label for="original">Original Speech Result</label>
                                <textarea class="form-control" align="left" type="text-area" name="original" id="original" placeholder="Original Speech" style="min-height:150px;"></textarea>
                            </div> --}}
                            <div class="form-group" align="left">
                                <label for="speech">Speech Result</label>
                                <textarea class="form-control" align="left" type="text-area" name="speech" id="speech" placeholder="Please Paste The Result Here" style="min-height:150px ; background-color:rgb(26, 45, 60)"></textarea>
                            </div>
                            <div class="form-group mt-5" style="text-align: center">
                                <button type="submit" class="btn btn-light px-5 w-50 p-3" name="submit" value="save" style="background-color:#3F4858;">Input</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

@endsection
