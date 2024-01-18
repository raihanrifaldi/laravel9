@extends('layout.main')

@section('isi_content')

    <div class="content-header mb-5 mt-3">
        <div class="container-fluid">
            <div class="mb-2">
                <div class="col-sm-6">
                    <h1>
                        Halaman Speech Table
                    </h1>
                </div>
            </div>
        </div>
        <div class="overlay toggle-menu"></div>
    </div>

    <div class="content m-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Input Form</div>
                        <form action="/stt/store" method="POST">
                            @csrf 
                            <div class="form-group" style="visibility: hidden">
                                <input type="text" class="form-control" name="usid" id="usid" placeholder="ID User" value="{{ $user->id }} " style="visibility: hidden">
                            </div>
                            <div class="form-group">
                                <label for="event">Event Name</label>
                                <input type="text" class="form-control" name="event" id="event" placeholder="Name of Event">
                            </div>
                            <div class="form-group">
                                <label for="time">Time</label>
                                <input type="datetime-local" class="form-control" name="time" id="time" placeholder="Time of Event" style="color:white">
                            </div>
                            <div class="form-group">
                                <label for="speech">Speech Result</label>
                                <textarea class="form-control" type="text-area" name="speech" id="speechs" placeholder="Speechs"></textarea>
                            </div>
                            <div class="form-group mt-5" style="text-align: center">
                                <button type="submit" class="btn btn-light px-5 w-50 p-3" name="submit" value="save">Save</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

    
@endsection
