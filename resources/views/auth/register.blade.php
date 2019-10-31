
@section('title')
<title>WikiPoli | Register</title>
@endsection
@extends('layouts.register')

@section('content')
<main class="row register_container d-flex justify-content-center">
    <!--
        <section class="aside_img_box col-12 col-lg-6 my-5">
    
        </section>
    -->
    <section class="aside_content d-flex flex-column align-items-center">
        <div>
            <a href="{{'/'}}"><img src="https://res.cloudinary.com/wpgroom-com/image/upload/v1571736654/wikiPoli5_8_yrgvwn.png" alt="" /></a>
        </div>
        <div>
            <h2>Create an account</h2>
        </div>
        <div>
            <form  action="{{route('register')}}" method="POST"  class="signup_form">
                @csrf
                <p></p>
                <div class="form-group">
                    <input  name="full_name" type="text" placeholder="Full Name" value="{{ old('full_name') }}" required class="form-control @error('full_name') is-invalid @enderror" />

                    @error('full_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input  name="description" value="{{ old('description') }}"  type="text" placeholder="Short Description" required class="form-control @error('description') is-invalid @enderror" />
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input  name="location" value="{{ old('location') }}" type="text" placeholder="Location" required class="form-control @error('location') is-invalid @enderror" />

                    @error('location')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <!--  
                          <div class="form-group">
                            <input id="username" name="username" type="text" placeholder="Username" required class="form-control" />
                          </div>  -->

                <div class="form-group">
                    <input  name="email" type="email" value="{{ old('email') }}" placeholder="Email" required class="form-control @error('email') is-invalid @enderror" />

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input  name="password" minlength="5" type="password" placeholder="Password" required class="form-control @error('password') is-invalid @enderror" />

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input  name="password_confirmation" type="password" placeholder="Confirm Password" required minlength="5"
                           class="form-control" />


                </div>
                <div class="form-group">
                    <div class="err-msg">Email already exists!</div>
                </div>

               <input type="submit" id="submit-button" name="sign-up" value="Sign Up" class="btn signup-submit my-4" />
            </form>
            <p class="text-center">
                Already have an account? <a href="{{route('login')}}">Login</a>
            </p>
        </div>
    </section>
</main>

@endsection
