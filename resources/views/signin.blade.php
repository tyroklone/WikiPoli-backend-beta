<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WikiPoli | Sign In</title>
    <link rel="shortcut icon" type="image/png" href="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/56f496c8ed.js" crossorigin="anonymous"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta name="google-signin-client_id" content="1068946914665-71onhsr4ncro5ajdgaouccneam74ifcv.apps.googleusercontent.com">
    <script src="./js/googleauth.js"></script>

    <link rel="stylesheet" href="{{ asset('css/styles/signin.css') }}"/>
    <link rel="icon" type="img/png" href="images/favicon.png">

    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Lato';
            box-sizing: border-box;
            text-align: center;
        }

        .container {
            display: table;
            width: 100%;
            height: 100%;
            min-height: 100%;
        }

        .container-inner {
            display: table-cell;
            vertical-align: top;
        }

        .cover-container {
            margin-right: auto;
            margin-left: auto;
        }

        .inner {
            padding: 2rem;
        }

        .forg {
            text-align: right;
            margin: 8px 25px 5px 0;
            text-decoration: none;
        }

        .forg a {
        color: #6D9BF1 !important;
        }

        .forg p a:hover {
            color: red !important;
            text-decoration: none;
        }
        .text-center {
            margin-top: 12px;
        }
        .text-center a:hover {
            color: red !important;
            text-decoration: none;
        }

        .btn-block {
            background-color: #6D9BF1 !important;
        }

        .form-control,
        .btn-block {
            width: 80%;
            margin-left: 12%;
            margin-bottom: 2rem;
            height: 50px;
        }

        .login_form h2{
            font-size: 2.25rem;
            margin-left: 25px;
            margin-bottom: 20px;
            font-weight: 700;
        }
        .cover {
            padding: 0 1.5rem;
        }

        .cover .btn-lg {
            padding: .7rem 1.rem;
            font-weight: 500;
        }

        @media (min-width: 40em) {
            .container-inner {
                vertical-align: middle;
            }

            .cover-container {
                width: 100%;
            }
        }

        @media (min-width: 62em) {
            .cover-container {
                width: 42rem;
            }
        }


    </style>
</head>

<body>

     <div class="container">

         <div class="container-inner">

             <div class="cover-container">

                 <div class="inner cover">
                     <h1 class="cover-heading"><a href="index.html"><img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png"></a></h1>
                     
                        <form id="login-form" class="login_form" action="#" method="post">
                            <h2 class="form-signin-heading">Log In to Your WikiPoli Account</h2>
                            
                            <div class="form-group">
                            <label for="email" class="sr-only">Email address</label>
                                <input type="email" id="inputEmail" class="form-control" placeholder=" Your Email Address" required
                                    autofocus>
                            </div>
                            
                            <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                                <input type="password" id="inputPassword" class="form-control" placeholder="Your Password" minlength="5" required>
                            </div>

                            <button class="btn btn-lg btn-primary btn-block" type="submit" >Log In</button>
                            <!-- <button class="btn btn-lg btn-primary btn-block btn-google" type="submit" ><i class="fab fa-google"></i> Log In with Google</button> -->
                            <div class="g-signin2" data-onsuccess="onSignIn"></div>
                                    <div class="forg">
                                        <p class="forg"><a href="forgotpassword.html">Forgot Password?</a></p>
                                    </div>
                                <div id="eresult"></div>

                                <p class="text-center">
                                    Don't have an account? <a href="signup.html"> Sign up</a>
                                </p>

                     </form>

                 </div>

             </div>

         </div>

    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/scripts/login.js') }}"></script>
</body>

</html>