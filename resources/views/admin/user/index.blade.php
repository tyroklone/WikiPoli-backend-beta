@section('title')
<title>WikiPoli | Admin Dashboard</title>
@endsection
@extends('layouts.admin.app')
@section('content')

<main class="admin-main-general" id="admin-main">
    <header>
        <div class="icon-div">
            <img src="{{asset('images/house-icon.png')}}" height="30px">
            <span>Wiki</span><span class="blue-text">Poli</span>
        </div>
        <div id="user-div">
            <span id="name-plate">
                @if(session()->has('message.content'))
                {!! session('message.content') !!} ,
                @endif
                {{Auth::user()->full_name}}
            </span>

            <img src="{{asset('images/profilepic.png')}}" height="30px">
        </div>
    </header>
    <h1 id="intro">Admin Dashboard</h1>
    <section >
        <div class="col-sm-12 col-md-8 offset-md-2">
            <h4 class="h4 text-center mb-4 mt-4">Users</h4>
            <div>
                <div class="">
                    <form class="form-inline" method="GET" style="display: inline-block; margin-top: 10px;">
                        <select class="form-control" id="select-filter-user">
                            <option value="all" @if (Request()->filter) {{ 'selected' }} @endif >All</option>
                            <option value="blocked" @if (Request()->filter && Request()->filter == 'blocked') {{ 'selected' }} @endif>Blocked</option>
                            <option value="soft" @if (Request()->filter && Request()->filter == 'soft') {{ 'selected' }} @endif>Soft Deleted</option>

                        </select>
                    </form>
                </div>
                @if(session()->has('message.alert'))
                <div class="text-center">
                    <button class=" alert alert-{{ session('message.alert') }}"> 
                        {!! session('message.content') !!}
                    </button>
                </div>
                @endif
                <div class="table-responsive">
                    <table class="table project-table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Location</th>
                                <th scope="col">Date Joined</th>
                                <th scope="col">Status</th>
                                <th scope="col"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                            <tr class="py-2">

                                <td class="border-top border-bottom titles">{{ $loop->iteration }}</td>
                                <td class="border-top border-bottom titles">{{ $user->full_name }}</td>

                                <td class="border-top border-bottom titles">{{$user->email}}</td>
                                <td class="border-top border-bottom titles">{{$user->location}}</td>
                                <td class="border-top border-bottom">
                                    {{ date('F d, Y', strtotime($user->created_at)) }}
                                </td>

                                <td class="border-top border-bottom">

                                    <span class="alert @if($user->user_statuses->status == 'blocked') alert-danger @else alert-success @endif py-0 px-2 small m-0 pending">
                                        {{$user->user_statuses->status}}
                                    </span>

                                </td>
                                <td class="rounded-right border border-left-0">
                                    <div class="dropdown dropleft">
                                        <a class="btn btn-white btn-sm " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            @if (Request()->filter && Request()->filter == 'soft')
                                            <form  class="deleted"   role="form" method="POST"
                                                   action="{{url('delete-restore-user',['id'=>$user->id])}}" >
                                                @csrf
                                                <button  class="dropdown-item text-success noHover" type="submit"> <i class="fas fa-undo"></i> Restore</button>
                                            </form>

                                            @else
                                            <button class="dropdown-item text-success" data-toggle="modal" data-target="#myModal"><i class="fas fa-binoculars"></i> View</button>
                                            <button class="dropdown-item text-warning"  data-toggle="modal" data-target="#edit{{$user->id}}" ><i class="fas fa-edit"></i> Edit</button>

                                            <form  class="deleted"   role="form" method="POST"
                                                   action="{{url('delete-temporary-user',['id'=>$user->id])}}" >
                                                @csrf
                                                <button  class="dropdown-item text-danger noHover" type="submit"> <i class="fas fa-trash-alt"></i> Delete Temporary</button>
                                            </form>
                                            <form  class="deleted"   role="form" method="POST"
                                                   action="{{url('delete-permanently-user',['id'=>$user->id])}}" >
                                                @csrf
                                                <button  class="dropdown-item text-success noHover" type="submit"> <i class="fas fa-trash-alt"></i> Delete Permanently</button>
                                            </form>
                                            @if($user->hasanyrole('Admin'))
                                            <form  class="deleted"   role="form" method="POST"
                                                   action="{{url('remove-admin',['id'=>$user->id])}}" >
                                                @csrf
                                                <button  class="dropdown-item text-success noHover" type="submit"> <i class="fas fa-check-circle"></i> Remove Admin</button>
                                            </form>
                                            @elseif($user->hasanyrole('SuperAdmin'))
                                            <form  class="deleted"  role="form" method="POST"
                                                   action="{{url('remove-superadmin',['id'=>$user->id])}}" >
                                                @csrf
                                                <button  class="dropdown-item text-danger noHover" type="submit"> <i class="fas fa-question-circle"></i> Remove SuperAdmin</button>
                                            </form>
                                            @else
                                             <form  class="deleted"  role="form" method="POST"
                                                   action="{{url('make-admin',['id'=>$user->id])}}" >
                                                @csrf
                                                <button  class="dropdown-item text-primary noHover" type="submit"> <i class="fas fa-user"></i> Make Admin</button>
                                             </form>
                                            
                                             <form  class="deleted"  role="form" method="POST"
                                                   action="{{url('make-superadmin',['id'=>$user->id])}}" >
                                                @csrf
                                                <button  class="dropdown-item text-success noHover" type="submit"> <i class="fas fa-users"></i> Make SuperAdmin</button>
                                             </form>
                                            @endif
                                            @endif

                                        </div>
                                    </div>
                                </td>
                            </tr>


                            <!-- The Modal -->
                        <div class="modal" id="edit{{$user->id}}">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Modal Heading</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        Modal body..
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="text-center ">
                            @if (Request()->filter && Request()->filter == 'soft')
                            <h5 class="grey-text">No Deleted Post yet.</h5>
                            @else
                            <h5 class="grey-text">No Post yet.</h5>
                            @endif
                            <img src="{{asset('images/nothing.png')}}" width="40px" height="40">
                        </div>

                        @endforelse
                        </tbody>
                    </table>
                    {{$users->appends($_GET)->links()}}
                </div>
            </div>



        </div>
    </section>
</main>
@endsection