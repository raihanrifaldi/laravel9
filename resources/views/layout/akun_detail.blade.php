@extends('layout.main')

@section('isi_content')

    <div class="content-header mb-5 mt-3">
        <div class="container-fluid">
            <div class="mb-2">
                <div class="col-sm-6">
                    <h1>
                        Details Account Page
                    </h1>
                </div>
            </div>
        </div>
        <div class="overlay toggle-menu"></div>
    </div>
    <div class="content m-3" align="center">
        <div class="col-lg-12">
            <div class="card" style="width:1050px; background-color:#0B0F19;  border-radius:0.5cm" >
                <div class="card-body">
                    {{-- <form action="/stt/{{$stt->id}}" method="POST"> --}}
                    
                        {{-- <!--mengarahkan ke methodput saat diekse-->
                        @method('put')
                        <!-- form token -->
                        @csrf  --}}
                        <div class="flexing" style="margin-top:0px">
                            <div class="profile_image" style="margin-top:50px">
                                <span class="user-profile-detail"><img src="{{ asset('storage/'.$user->profile_image) }}"></span>
                            </div>
                            <div class="user_detail">
                                <form >
                                    <div class="form-group" align="left">
                                        <label for="name">Name</label>
                                        <p type="text" class="form-control" name="name" id="name" placeholder="Name" style="background-color:rgb(26, 45, 60)">{{$akun->name}}</p>
                                    </div>
                                    <div class="form-group" align="left">
                                        <label for="email">E-mail</label>
                                        <p type="email" class="form-control" name="email" id="email" placeholder="E-mail" style="background-color:rgb(26, 45, 60)">{{$akun->email}}</p>
                                    </div>
                                    <div class="form-group" align="left">
                                        <label for="username">Username</label>
                                        <p class="form-control" type="text" name="username" id="username" placeholder="Username" style="background-color:rgb(26, 45, 60)"> {{$akun->username}} </textarea>
                                    </div>
                                    <div class="form-group" align="left">
                                        <label for="level">User Level</label>
                                        <p class="form-control" type="text" name="level" id="level" placeholder="Level" style="background-color:rgb(26, 45, 60)"> {{$akun->level}} </textarea>
                                    </div>
                                    <div class="form-group flexing-button" style="text-align: center">
                                        <a type="button" class="btn btn-light px-5 w-50 p-3" href="{{ url('/') }}" style="background-color:#3F4858">Back</a>
                                        <a type="button" class="btn btn-light px-5 w-50 p-3" href="/layout/{{$akun->id}}/edit" style="background-color:#3F4858">Edit</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                </div>
            </div>
        </div>
    </div>

@endsection
