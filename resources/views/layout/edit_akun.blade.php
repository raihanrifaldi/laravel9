@extends('layout.main')

@section('isi_content')

    <div class="content-header mb-5 mt-3">
        <div class="container-fluid">
            <div class="mb-2">
                <div class="col-sm-6">
                    <h1>
                        Edit Account Page
                    </h1>
                </div>
            </div>
        </div>
        <div class="overlay toggle-menu"></div>
    </div>
    <div class="content m-3" align="center">
        <div class="col-lg-12">
            <div class="card" style="width:1050px; background-color:#0B0F19;  border-radius:0.5cm">
                <div class="card-body">
                    
                        
                        <div class="user_detail"> 
                            <form action="/akun/{{$akun->id}}" method="POST" enctype="multipart/form-data">

                                <div class="flexing" style="margin-top:0px">

                                    <div class="profile_image" align="left">

                                        <label style="margin-left:40px;" for="profile_image"> Profile Image</label>
                                            
                                            <input style="margin-bottom:20px; margin-left:40px; background-color:rgb(26, 45, 60)" class="form-control   @error('profile_image')
                                            is-invalid
                                            @enderror" type="file" name="profile_image" id="profile_image" placeholder="Profile Image" accept="image/*">
            
                                            @error('profile_image')
                                            <div>
                                                {{ $message }}
                                            </div>
                                            @enderror
            
                                        @if($akun->profile_image)
                                        <span class="user-profile-detail"><img src="{{ asset('storage/'.$akun->profile_image) }}"></span>
                                        @else
                                        <span style="margin-left:40px;" >Belum ada Foto</span>
                                        @endif
                                    </div>
                                    <div class="user_detail" align="left"> 

                                        <!--mengarahkan ke methodput saat diekse-->
                                        @method('put')
                                        <!-- form token -->
                                        @csrf 
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" style="background-color:rgb(26, 45, 60)" value="{{$akun->name}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">E-mail</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" style="background-color:rgb(26, 45, 60)" value="{{$akun->email}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input class="form-control" type="text" name="username" id="username" placeholder="Username" style="background-color:rgb(26, 45, 60)"  value="{{$akun->username}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input class="form-control" type="password" name="password" id="password" placeholder="Password" style="background-color:rgb(26, 45, 60)"  value="{{$akun->password}}">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="level">Level</label> --}}
                                            <input class="form-control" type="text" name="level" id="level" placeholder="Level" value="{{$akun->level}}" style="visibility: hidden; margin:0%; padding:0%">
                                        {{-- </div> --}}
                                        
                                        {{-- <div class="form-group mt-5" style="text-align: center">
                                            <button type="submit" class="btn btn-light px-5 w-50 p-3" name="submit" value="save">Update</button>
                                        </div> --}}
                                        <div class="form-group flexing-button" style="text-align: center">
                                            <a type="button" class="btn btn-light px-5 w-50 p-3" href="{{ url('/akun/index') }}" style="background-color:#3F4858">Back</a>
                                            <button type="submit" class="btn btn-light px-5 w-50 p-3" name="submit" value="save" style="background-color:#3F4858">Update</button>
                                        </div>

                                    </div>
                                </div> 
                            </form>
                        </div>
                        
                    
                </div>
            </div>
        </div>
    </div>

@endsection
