@extends('layout.main')

@section('isi_content')

<div class="content-header mb-5 mt-3">
    <div class="container-fluid">
        <div class="mb-2">
            <div class="col-sm-8">
                <h1>
                    Speech to Text Application 
                </h1>
            </div>
        </div>
    </div>
</div>

 <!--start form input sidebar-->
 <section id="input">
   <div class="right-sidebar" style="background-color:rgb(26, 45, 60)">
    <div class="right-sidebar-content" style="padding: 10px">

        <p class="my-3" style="font-weight:bolder; font-size:30px;">Input Data</p>

        <form action="/stt/store" method="POST">
            @csrf 
            <div class="form-group" style="visibility: hidden; margin:0%; padding:0%">
                {{-- <label for="event">User</label> --}}
                <input type="text" class="form-control" name="usid" id="usid" placeholder="ID User" value="{{ $user->id }}">
            </div>
            <div class="form-group">
                <label for="event">Event Name</label>
                <input type="text" class="form-control" name="event" id="event" placeholder="Name of Event">
            </div>
            <div class="form-group" >
                <label for="time">Time</label>
                <input type="datetime-local" class="form-control" name="time" id="time" placeholder="Time of Event" style="color:white">
            </div>
            <div class="form-group">
                <label for="speech">Speech Result</label>
                <textarea class="form-control" type="text-area" name="speech" id="speechsr" placeholder="Speechs"></textarea>
            </div>

            <div class="form-group" style="visibility: hidden; margin:0%; padding:0%">
                {{-- <label for="original">Original</label> --}}
                <textarea class="form-control" type="text-area" name="original" id="speechs" placeholder="Speechs" style="visibility: hidden; margin:0%; padding:0%; height:1px"></textarea>
            </div>
            
            <div class="form-group mt-5" style="text-align: center">
                <button type="submit" class="btn btn-light px-5" name="submit" value="save">Input</button>
            </div>    
        </form>
        <button class="btn btn-light px-5 switchsave" style="margin-top: 120px; margin-right: 200px" name="back">Back</button>
      
     </div>
   </div>
  <!--end form input sidebar-->

<div class="content m-3" align="center" >
    <div class="container-fluid" style="justify-content:center; align-items:center;">
        <div class="card" style="width:1050px; background-color:rgba(0, 0, 0, 0);" align="center" >
            <div class="card-body pb-5 w-100" style="background-color:#0B0F19; border-radius:0.5cm">
                <p class="Rest mt-4 " style="margin-left:100px;" align="left" >Language</p>
                <div class="top">
                    <div class="options w-80">
                    <div class="headd">
                        <select name="input-language" id="language" class="btn-light p-2" style="border-radius:5px; width:80%; background-color:rgb(26, 45, 60)"></select>
                    </div>
                    </div>
                    <button class="btn record btn-light px-5 mt-3" style="width:80%; background-color:#3F4858">
                    <div class="icon">
                        <ion-icon name="mic-outline" style=" margin-left:0px; "></ion-icon>
                        <img src="bars.svg" alt="" class="bars" />
                    </div>
                    <p>Start Listening</p>
                    </button>
                </div>
                <p class="Rest mt-3" style="margin-left:480px" align="left">Aksi</p>
                <div class="bot">
                    <div class="buttons" align="left" >
                    <button class="btn clear btn-light px-5 w-25"  style="margin-left:100px; background-color:#3F4858">
                        <ion-icon name="trash-outline"></ion-icon>
                        <p>Clear</p>
                    </button>
                    <a type="button" class="btn save btn-light px-5 w-25 switchsave saveBtn" style="margin-left:300px; background-color:#3F4858" href="#input">
                        <ion-icon name="cloud-download-outline"></ion-icon>
                        <p>Save</p>
                    </a>
                    </div>
                    <p class="Rest mt-3" style="margin-left:76%">Result</p>
                    <div class="result mt-3" style="padding: 10px; border: 1px solid #3F4858; border-radius: 5px; width:80%; background-color:rgb(26, 45, 60); margin-bottom: 50px; min-height:50px" spellcheck="false" placeholder="Text will be shown here"  align="left">
                    <p class="interim" align="left"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection