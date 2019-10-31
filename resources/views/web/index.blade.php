@section('title')
<title>WikiPoli | Welcome</title>
@endsection
@extends('layouts.guest')
@section('content')
<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="form-content">
            <h1 class="text-center"><strong>Get To Know Your Candidate</strong></h1>
            <form>
              <div class="input-group">
                <input type="text" placeholder="Enter Politician's Name" class="form-control">
                <div class="input-group-append">
                  <button type="button" class="button-search">Search</button>
                </div>
              </div>
            </form>
              <div class="col-lg-12">
                <p class="search-content">Search for Candidates in your election, get to know them. Contribute posts and add to existing posts.
                    <a href="{{route('login')}}"> Get Started</a>
                </p>
              </div>
          </div>
        </div>
      </div>
    </div>
 @endsection