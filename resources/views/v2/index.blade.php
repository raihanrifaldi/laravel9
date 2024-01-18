@extends('layout.main')

@section('isi_content')

<div class="content-header mb-5 mt-3">
  <div class="container-fluid">
      <div class="mb-2">
          <div class="col-sm-6">
              <h1>
                  Halaman Application V2
              </h1>
          </div>
      </div>
  </div>
</div>

<div class="content m-3">
  <div class="container-fluid" style="justify-content:center; align-items:center">
      <div class="card" style="width: 100%; justify-content:center; align-items:center">
          <div class="card-body pb-5 w-100" style="margin-left:20%">
              <p class="Rest mt-4 ">Language</p>
              <div class="top">
                  <div class="options w-80">
                  <div class="headd">
                      <select name="input-language" id="language" class="btn-light p-2" style="border-radius:5px; width:80%" onclick="click()"></select>
                  </div>
                  </div>
                  <button class="btn talking btn-light px-5 mt-3" style="width:80%">
                  <div class="icon">
                      <ion-icon name="mic-outline" style=" margin-left:0px;"></ion-icon>
                      <img src="bars.svg" alt="" class="bars" />
                  </div>
                  <p>Start Talking</p>
                  </button>
              </div>
              <div class="bot">
                  <p class="Rest mt-3" >Result</p>
                  <div class="result mt-3" style="padding: 10px; border: 2px solid white; border-radius: 5px; width:80%" spellcheck="false" placeholder="Text will be shown here" style="margin-bottom: 50px">
                  <p class="interim"></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection
        
   
