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
    <div class="main-content">
        <div class="top-bar">
            <h2 id="activity-intro">Activities</h2>
            <form>
                <div class="search">
                    <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                                <!-- <span class="input-group-text" id="addon-wrapping">
                                        <i class="fa fa-search"></i>
                                </span> -->
                        </div>

                        <div class="input-icons"> 
                            <i class="fa fa-search icon"> 
                            </i> 
                            <input class="input-field" 
                                   type="text"  name="q" value="{{request('q')}} "> 

                            <button type="submit" class="btn search-btn">Search</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="most-recent-activity">
            <p>Most Recent Activity</p>

            @forelse($recents as $recent)
            <div class="container-activity">
                <div class="activity child">
                    <p>Posted by: {{$recent->user->full_name}}</p>
                    @if($recent->status == false)
                    <form  class="deleted"   role="form" method="POST"
                           action="{{url('approve-post',['id'=>$recent->id])}}" >
                        @csrf
                        <button type="submit" class="activity-cta">Publish +</button>
                    </form>
                    @else
                     <form  class="deleted"   role="form" method="POST"
                           action="{{url('unapprove-post',['id'=>$recent->id])}}" >
                        @csrf
                        <button type="submit" class="activity-cta">Unpublish -</button>
                      </form>
                    @endif
                </div>

                <div class="activity child">
                    @if($recent->status == false)
                    <p>Status:<span class="text-danger"> Wating Approval</span></p>
                    @else
                    <p>Status: <span class="text-success">Approved</span></p>
                    @endif
                    <button class="activity-cta">View full post +</button>
                </div>
                <div class="activity child">
                    <p>Date: {{date('d/m/Y', strtotime($recent->created_at))}}</p>
                    <button class=" activity-cta">Edit +</button>
                </div>
            </div>

            @empty
            <div class="text-center ">

                <h5 class="grey-text">No Recent Activity.</h5>

                <img src="{{asset('images/nothing.png')}}" width="40px" height="40">
            </div>

            @endforelse

            {{$recents->appends($_GET)->links()}}
        </div>

    </div>
</main>
@endsection