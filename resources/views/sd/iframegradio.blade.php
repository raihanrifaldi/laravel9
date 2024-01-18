@extends('layout.main')

@section('isi_content')

<div class="content-header mb-5 mt-3">
    <div class="container-fluid">
        <div class="mb-2">
            <div class="col-sm-8">
                <h1>
                    Speaker Diarization Application
                </h1>
            </div>
        </div>
    </div>
    
</div>

<div class="content m-3" align="center" style="background-color:rgba(0,0,0,0)">
    <div class="container-fluid" style="justify-content:center; align-items:center; background-color:rgba(0,0,0,0)">
        <div class="" style="width:940px; background-color:rgba(0,0,0,0)" align="center" >
            <div class="" >

                <iframe src="http://127.0.0.1:7860?transparent=1" allow="camera;microphone;clipboard-read; clipboard-write" style="width:800px; height:800px; border:0px; border-radius:2%;"></iframe>

            </div>
        </div>
    </div>
</div>


@endsection
