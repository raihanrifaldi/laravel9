@extends('layout.main')

@section('isi_content')

    <div class="content-header mb-5 mt-3">
        <div class="container-fluid">
            <div class="mb-2">
                <div class="col-sm-6">
                    <h1>
                        Account Table Page
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content m-3" align="center">
        <div class="container-fluid">
            <div class="card" style="width:1150px; background-color:#0B0F19;  border-radius:0.5cm" align="left">
                
                <div class="card-body" style="padding:30px">    

                    <div class="col-12 col-sm-8 col-md-3" style="padding: 0%">
                        {{-- <form action="" method="GET">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="keyword" placeholder="keyword">
                                <button class="input-group-text btn btn-light">Search</button>
                            </div>
                        </form> --}}
               
                            <form class="search-bar" action="" method="GET">
                                <div class="input-group mb-4">
                                    <input type="text" class="form-control" name="keyword" placeholder="Enter keywords" style="background-color:#3F4858; color:white">
                                    <button class="input-group-text btn btn-light" style="background-color:#3F4858; border-bottom-left-radius: 0%; border-top-left-radius: 0%;"><i class="icon-magnifier"></i></button>
                                </div>
                            </form>
                    </div>
                    <!--Start Dashboard Content-->
                    <div class="content">

                        <table class="table w-100" id="datable">
                            {{-- <table class="table-striped table-bordered table-sm" id="datable"> --}}
                            <tr>
                                <th>@sortablelink('id','ID')</th>
                                {{-- <th>Profile Image</th> --}}
                                <th>Photo</th>
                                <th>@sortablelink('name','Name')</th>
                                <th>@sortablelink('email','E-mail')</th>
                                {{-- <th>Username</th> --}}
                                <th>@sortablelink('level','Level')</th>
                                <th> </th>
                                <th>Action</th>
                                <th> </th>
                            </tr>
                            {{-- {{$no=1;}} --}}
                            
                            @foreach($akun as $a)
                                <tr>
                                    <td>{{$a->id}}</td>
                                    {{-- <td><span class="user-profile-index"><img src="{{ asset('storage/'.$a->profile_image) }}"></span></td> --}}
                                    <td><img src="{{ asset('storage/'.$a->profile_image) }}" class="product-img" alt="user avatar" style="border-radius:50%; width:50px; height:50px"></td>
                                    <td>{{$a->name}}</td>
                                    <td>{{$a->email}}</td>
                                    {{-- <td>{{$a->username}}</td> --}}
                                    <td>{{$a->level}}</td>
                                    {{-- <td>{{$s->speech}}</td> --}}
                                    <td>
                                        <i class="zmdi zmdi-info-outline" style="color:rgb(83, 240, 83)"></i>
                                        <a href="/akun/{{$a->id}}/detail" style="color:rgb(83, 240, 83)">Detail</a>
                                    </td>
                                    <td>
                                        <i class="icon-note" style="color:yellow"></i>
                                        <a href="/akun/{{$a->id}}/edit" style="color:yellow">Edit</a>
                                    </td>
                                    <td>
                                        <i class="zmdi zmdi-block-alt" style="color:rgb(255, 103, 103)"></i>
                                        <a href="#" class="btndelete" type="button"style="background: 0%; border:0px; padding:0%; color:rgb(255, 103, 103)"
                                            data-toggle="modal"  data-target="#exampleModal">Delete </a>
                                    </td>
                                </tr>
                                {{-- {{$no++;}} --}}

                                {{-- modal --}}
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" >
                                    <div class="modal-content" style="background-color:white">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel" style="color:black">Confirmation to Delete User </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="color:black">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body" style="color:black">
                                            Are you sure to delete this user?
                                        </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" style="background-color:grey; color:white" data-dismiss="modal">Cancel</button>
                                        {{-- <button type="button" class="btn" style="background-color:red; color:white"; color:white">Confirm</button> --}}
                                        <form action="/akun/{{$a->id}}" method="POST"> 
                                            @csrf
                                            @method('delete')
                                            <button class="btn btndelete" id="delete" type="submit" value="Delete" style="background-color:red; color:white">Confirm</button>
                                        </form>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                            @endforeach
                        </table>
                        <div class="mt-3">
                            {{$akun->withQueryString()->links('pagination::bootstrap-5')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End container-fluid-->

    </div>
    <!--End content-wrapper-->
@endsection