
@section('title')
<title>WikiPoli | Login</title>
@endsection
@extends('layouts.login')

@section('content')

 <div class="container">

         <div class="container-inner">

             <div class="cover-container">

                 <div class="inner cover">
                     <h1 class="cover-heading"><a href="index.html"><img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png"></a></h1>
                     
                        <form id="login-form" class="login_form" action="{{ route('login') }}"  method="post">
                             @csrf
                            <h2 class="form-signin-heading">Log In to Your WikiPoli Account</h2>
                            
                            <div class="form-group">
                            <label for="email" class="sr-only">Email address</label>
                            <input type="email" name="email"  class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder=" Your Email Address" required
                                    autofocus>
                                  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password"  class="form-control  @error('password') is-invalid @enderror" name="password" placeholder="Your Password" minlength="5" required>
                             @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button class="btn btn-lg btn-primary btn-block" type="submit" >Log In</button>
                            <!-- <button class="btn btn-lg btn-primary btn-block btn-google" type="submit" ><i class="fab fa-google"></i> Log In with Google</button> -->
                            <div class="g-signin2" data-onsuccess="onSignIn"></div>
                                    <div class="forg">
                                        <p class="forg"><a href="{{ route('password.request') }}">Forgot Password?</a></p>
                                    </div>
                                <div id="eresult"></div>

                                <p class="text-center">
                                    Don't have an account? <a href="{{ route('register') }}"> Sign up</a>
                                </p>

                     </form>

                 </div>

             </div>

         </div>

    </div>

@endsection
