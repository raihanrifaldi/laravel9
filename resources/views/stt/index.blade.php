@extends('layout.main')

@section('isi_content')

    <div class="content-header mb-5 mt-3">
        <div class="container-fluid">
            <div class="mb-2">
                <div class="col-sm-6">
                    <h1>
                        Speech Table Page
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content m-3" align="center">
        <div class="container-fluid">
            <div class="card" style="width:1050px; background-color:#0B0F19;  border-radius:0.5cm" align="left">
                
                <div class="card-body" style="padding:30px;"> 
                    @if($stt->count() > 0)   

                    <div class="col-12 col-sm-8 col-md-3" style="padding: 0%">
                        {{-- <form action="" method="GET">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="keyword" placeholder="keyword">
                                <button class="input-group-text btn btn-light">Search</button>
                            </div>
                        </form> --}}
               
                            <form class="search-bar" action="" method="GET" >
                                <div class="input-group mb-4">
                                    <input type="text" class="form-control" name="keyword" placeholder="Enter keywords" style="background-color:#3F4858; color:white">
                                    <button class="input-group-text btn btn-light" style="background-color:#3F4858; border-bottom-left-radius: 0%; border-top-left-radius: 0%;"><i class="icon-magnifier" ></i></button>
                                </div>
                            </form>
                    </div>
                    <!--Start Dashboard Content-->
                    <div class="content">


                    

                        @if ($user->level == 1)
                        <table class="table w-100" id="datable">
                            {{-- <table class="table-striped table-bordered table-sm" id="datable"> --}}
                            <tr>
                                <th>#</th>
                                {{-- <th>ID</th> --}}
                                <th>@sortablelink('usid','User ID')</th>
                                <th>@sortablelink('event','Event Name')</th>
                                <th>@sortablelink('time','Time')</th>
                                <th> </th>
                                <th>Action</th>
                                <th> </th>
                            </tr>
                 
                                <div style="visibility: hidden; margin:0px; padding:0px;">{{$no=1}}</div>
                   
                            @foreach($stt as $s)
                                <tr>
                                    <input type="hidden" class="delete_id" value="{{ $s->id }}">
                                    <td>{{$no++}}</td>
                                    {{-- <td>{{$s->id}}</td> --}}
                                    <td>{{$s->usid}}</td>
                                    <td>{{$s->event}}</td>
                                    <td>{{$s->time}}</td>
                                    {{-- <td>{{$s->speech}}</td> --}}
                                    <td>
                                        <i class="zmdi zmdi-info-outline" style="color:rgb(83, 240, 83)"></i>
                                        <a href="/stt/{{$s->id}}/detail" style="color:rgb(83, 240, 83)">Details</a>
                                    </td>
                                    <td>
                                        <i class="icon-note" style="color:yellow"></i>
                                        <a href="/stt/{{$s->id}}/edit" style="color:yellow">Edit</a>
                                    </td>
                                    <td>
                                        {{-- <form action="/stt/{{ $s->id }}" method="POST"> 
                                            @csrf
                                            @method('delete')
                                            <i class="zmdi zmdi-block-alt" style="color:rgb(255, 103, 103)"></i>
                                            <button class="btndelete" id="delete" type="submit" value="Delete" style="background: 0%; border:0px; padding:0%; color:rgb(255, 103, 103)">Delete</button>
                                        </form> --}}
                                        <i class="zmdi zmdi-block-alt" style="color:rgb(255, 103, 103)"></i>
                                        <a href="#" class="btndelete" type="button"style="background: 0%; border:0px; padding:0%; color:rgb(255, 103, 103)"
                                            data-toggle="modal"  data-target="#exampleModal">Delete </a>
                                    </td>
                                </tr>
                                {{-- {{$no++;}}                               --}}

                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" >
                                    <div class="modal-content" style="background-color:rgb(26, 45, 60); border-radius:0.5cm">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel" style="color:white">Confirmation to Delete Data </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="color:white">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body" style="color:white">
                                            Are you sure to delete this data?
                                        </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" style="background-color:grey; color:white" data-dismiss="modal">Cancel</button>
                                        {{-- <button type="button" class="btn" style="background-color:red; color:white"; color:white">Confirm</button> --}}
                                        <form action="/stt/{{ $s->id }}" method="POST"> 
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
                            <!-- Modal -->
                            

                        @elseif($user->level == 2)
                        <table class="table w-100" id="datable">
                            {{-- <table class="table-striped table-bordered table-sm" id="datable"> --}}
                            <tr>
                                <th>#</th>
                                {{-- <th>ID</th> --}}
                                {{-- <th>User ID</th> --}}
                                <th>@sortablelink('event','Event Name')</th>
                                <th>@sortablelink('time','Time')</th>
                                <th> </th>
                                <th>Action</th>
                                <th> </th>
                            </tr>
                 
                                <div style="visibility: hidden; margin:0px; padding:0px;">{{$no=1}}</div>
                   
                            @foreach($stt as $s)
                                <tr>

                                    <input type="hidden" class="delete_id" value="{{ $s->id }}">
                                    
                                    <td>{{$no++}}</td>
                                    {{-- <td>{{$s->id}}</td> --}}
                                    {{-- <td>{{$s->usid}}</td> --}}
                                    <td>{{$s->event}}</td>
                                    <td>{{$s->time}}</td>
                                    {{-- <td>{{$s->speech}}</td> --}}
                                    <td>
                                        <i class="zmdi zmdi-info-outline" style="color:rgb(83, 240, 83)"></i>
                                        <a href="/stt/{{$s->id}}/detail" style="color:rgb(83, 240, 83)">Details</a>
                                    </td>
                                    <td>
                                        <i class="icon-note" style="color:yellow"></i>
                                        <a href="/stt/{{$s->id}}/edit" style="color:yellow">Edit</a>
                                    </td>
                                    <td>
                                        {{-- <form action="/stt/{{ $s->id }}" method="POST"> 
                                            @csrf
                                            @method('delete')
                                            <i class="zmdi zmdi-block-alt" style="color:rgb(255, 103, 103)"></i>
                                            <button class="btndelete" id="delete" type="submit" value="Delete" style="background: 0%; border:0px; padding:0%; color:rgb(255, 103, 103)">Delete</button>
                                        </form> --}}
                                        <i class="zmdi zmdi-block-alt" style="color:rgb(255, 103, 103)"></i>
                                        <a href="#" class="btndelete" type="button"style="background: 0%; border:0px; padding:0%; color:rgb(255, 103, 103)"
                                            data-toggle="modal"  data-target="#exampleModal">Delete </a>
                                    </td>
                                </tr>
                                {{-- {{$no++;}}                               --}}

                                {{-- modal --}}
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" >
                                    <div class="modal-content" style="background-color:rgb(26, 45, 60); border-radius:0.5cm">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel" style="color:white">Confirmation to Delete Data </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="color:white">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body" style="color:white">
                                            Are you sure to delete this data?
                                        </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" style="background-color:grey; color:white" data-dismiss="modal">Cancel</button>
                                        {{-- <button type="button" class="btn" style="background-color:red; color:white"; color:white">Confirm</button> --}}
                                        <form action="/stt/{{ $s->id }}" method="POST"> 
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


                        @endif
                    
                    @else
                    <h4 align="center" class="my-5" style="color:rgba(255, 255, 255, 0.699)">No Data Yet</h4>
                    @endif
                        <div class="mt-3">
                            {{$stt->withQueryString()->links('pagination::bootstrap-5')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End container-fluid-->

    </div>

    <!-- Button trigger modal -->                            
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
        </div>
    </div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script>
    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.btndelete').click(function (e) {
            e.preventDefault();

            var deleteid = $(this).closest("tr").find('.delete_id').val();

            swal({
                    title: "Apakah anda yakin?",
                    text: "Setelah dihapus, Anda tidak dapat memulihkan data ini lagi!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {

                        var data = {
                            "_token": $('input[name=_token]').val(),
                            'id': deleteid,
                        };
                        $.ajax({
                            type: "DELETE",
                            url: '/stt/' + deleteid,
                            data: data,
                            success: function (response) {
                                swal(response.status, {
                                        icon: "success",
                                    })
                                    .then((result) => {
                                        location.reload();
                                    });
                            }
                        });
                    }
                });
        });

    });

</script>



    <!--End content-wrapper-->
@endsection