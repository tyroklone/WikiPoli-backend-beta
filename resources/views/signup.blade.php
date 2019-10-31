<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <script src="https://kit.fontawesome.com/e6f37f5b27.js"></script>
  <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="{{ asset('css/styles/sign.css') }}"/>
  <link rel="stylesheet"
    href="https://cdn.rawgit.com/mfd/09b70eb47474836f25a21660282ce0fd/raw/e06a670afcb2b861ed2ac4a1ef752d062ef6b46b/Gilroy.css" />
    <link rel="icon" type="img/png" href="images/favicon.png">
  <title>WikiPoli | Signup</title>
</head>

<body>
  <main class="row register_container d-flex justify-content-center">
<!--
    <section class="aside_img_box col-12 col-lg-6 my-5">

    </section>
-->
    <section class="aside_content d-flex flex-column align-items-center">
      <div>
        <a href="index.html"><img src="https://res.cloudinary.com/wpgroom-com/image/upload/v1571736654/wikiPoli5_8_yrgvwn.png" alt="" /></a>
      </div>
      <div>
        <h2>Create an account</h2>
      </div>
      <div>
        <form id="signup-form" class="signup_form" action="">
          <p></p>
          <div class="form-group">
            <input id="name" name="name" type="text" placeholder="Full Name" required class="form-control" />
          </div>

          <div class="form-group">
            <input id="desc" name="desc" type="text" placeholder="Short Description" required class="form-control" />
          </div>

          <div class="form-group">
            <input id="location" name="location" type="text" placeholder="Location" required class="form-control" />
          </div>
<!--  
          <div class="form-group">
            <input id="username" name="username" type="text" placeholder="Username" required class="form-control" />
          </div>  -->

          <div class="form-group">
            <input id="email" name="email" type="email" placeholder="Email" required class="form-control" />
          </div>

          <div class="form-group">
            <input id="password" name="password" minlength="5" type="password" placeholder="Password" required class="form-control" />
          </div>

          <div class="form-group">
            <input id="confirmPassword" name="confirmPassword" type="password" placeholder="Confirm Password" required minlength="5"
              class="form-control" />
          </div>
          <div class="form-group">
            <div class="err-msg">Email already exists!</div>
          </div>

          <input type="submit" id="submit-button" name="sign-up" value="Sign Up" class="btn signup-submit my-4" />
        </form>
        <p class="text-center">
          Already have an account? <a href="signin.html">Login</a>
        </p>
      </div>
    </section>
  </main>
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- <script src="https://cdn.auth0.com/js/auth0-spa-js/1.2/auth0-spa-js.production.js"></script> -->
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
  <script type="text/javascript" src="{{ asset('js/scripts/signup.js') }}"></script>"
</body>

</html>

