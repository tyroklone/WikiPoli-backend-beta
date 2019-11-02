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
                @if(session()->has('login.content'))
                {!! session('login.content') !!} ,
                @endif
                {{Auth::user()->full_name}}
            </span>

            <img src="{{asset('images/profilepic.png')}}" height="30px">
        </div>
    </header>
    <h1 id="intro">Admin Dashboard</h1>
    <section >
        <div class="col-sm-12 col-md-8 offset-md-2">
            <h4 class="h4 text-center mb-4 mt-4">Politicians</h4>
            <div>
                <div class="">

                    <button class='btn btn-primary' data-toggle="modal" data-target="#add" style="height:40px!important;border-radius: 4px 4px "> <span class="fa fa-plus"> </span> Add A Politician</button>
                </div>
                <!-- The Modal -->
                <div class="modal" id="add">
                    <div class="modal-dialog modal-lg">

                        <form class="" method="Post" action="{{url('add-politician')}}" enctype="multipart/form-data">
                            @csrf  
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Add A Politician</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">

                                    <div class="form-group row">

                                        <div class="form-group col-md-4 " >
                                            <label for="first-name">First Name</label>
                                            <input type="text" class="form-control border border-primary" name="first_name">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="last-name">Last Name</label>
                                            <input type="text" class="form-control border border-primary " name="last_name">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="dob">Date of Birth</label>
                                            <input type="date" class="form-control border-primary" name="dob">

                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="biography">Biography</label>
                                            <textarea class="form-control border border-primary" name="biography" ></textarea>
                                        </div>




                                        <div class="col-md-4 " >
                                            <label for="Occupation">Occupation</label>
                                            <input type="text" class="form-control border border-primary" name="occupation">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="children">No. Of Children</label>
                                            <input type="text" class="form-control border border-primary " name="children">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="spouse">Spouse Name</label>
                                            <input type="text" class="form-control border border-primary " name="spouse">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="education">Education History</label>
                                            <textarea class="form-control border border-primary" name="education_history"></textarea>
                                        </div>


                                        <div class="col-md-4 " >
                                            <label for="education">Education</label>
                                            <input placeholder="separate with comma" type="text" class="form-control border border-right-0 border-primary " name="education">

                                        </div>




                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="career">Career History</label>
                                            <textarea class="form-control border border-primary " name="career"></textarea>
                                        </div>


                                        <div class="col-md-4">
                                            <label for="website">website</label>
                                            <input type="text" class="form-control border border-primary" placeholder="eg https:// or http" name="website">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="political">Political History</label>
                                            <textarea class="form-control border border-primary " name="political_history"></textarea>
                                        </div>

                                    </div>


                                    <div class="form-group col-md-12">
                                        <label>Politician Photo  (required)</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input border border-primary" name="file" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>

                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                        </form>
                    </div>
                </div>
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
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Date of Birth</th>
                            <th scope="col">Date Added</th>
                            <th scope="col">Education</th>
                            <th scope="col"> </th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse($politicians as $politician)
                        <tr class="py-2">

                            <td class="border-top border-bottom titles">{{ $loop->iteration }}</td>
                            <td class="border-top border-bottom titles">{{ $politician->first_name }}</td>
                            <td class="border-top border-bottom titles">{{ $politician->last_name }}</td>
                            <td class="border-top border-bottom titles">{{ date('F d, Y', strtotime($politician->dob)) }}</td>
                            <td class="border-top border-bottom">
                                {{ date('F d, Y', strtotime($politician->created_at)) }}
                            </td>
                            <td class="border-top border-bottom titles">{{$politician->education}}</td>


                            <td class="rounded-right border border-left-0">
                                <div class="dropdown dropleft">
                                    <a class="btn btn-white btn-sm " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                        <button class="dropdown-item text-success" data-toggle="modal" data-target="#myModal"><i class="fas fa-binoculars"></i> View</button>
                                        <button class="dropdown-item text-warning"  data-toggle="modal" data-target="#edit{{$politician->id}}" ><i class="fas fa-edit"></i> Edit</button>

                                        <form  class="deleted"   role="form" method="POST"
                                               action="{{url('delete-politician',['id'=>$politician->id])}}" >
                                            @csrf
                                            <button  class="dropdown-item text-danger noHover" type="submit"> <i class="fas fa-trash-alt"></i> Delete</button>
                                        </form>



                                    </div>
                                </div>
                            </td>
                        </tr>


                        <!-- The Modal -->
                    <div class="modal" id="edit{{$politician->id}}">
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

                        <h5 class="grey-text">No Politicians yet.</h5>

                        <img src="{{asset('images/nothing.png')}}" width="40px" height="40">
                    </div>

                    @endforelse
                    </tbody>
                </table>
                {{$politicians->appends($_GET)->links()}}

            </div>
        </div>



        </div>
    </section>
</main>
@endsection