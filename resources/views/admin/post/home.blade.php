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
    <section id="main-options">
        <a href="{{url('admin/activities')}}">Recent Activities Overview
           <span style="color: red!important">({{number_format($recents)}})</span>
        </a>
        
        <a href="{{url('admin/posts')}}">Posts
            <span style="color: red!important">({{number_format($posts)}})</span>
        </a>
        <a href="{{url('admin/users')}}">Users
           <span style="color: red!important">({{number_format($users)}})</span>
        </a>
        @hasanyrole('SuperAdmin')
        <a href="{{url('admin/privileges')}}">Manage Privileges
        </a>
        @endhasanyrole
    </section>
</main>
@endsection