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
    <link rel="stylesheet" href="styles/signin.css">
    <link rel="icon" type="img/png" href="images/favicon.png">
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
    <script type="text/javascript" src="scripts/login.js"></script>

</body>

</html>
