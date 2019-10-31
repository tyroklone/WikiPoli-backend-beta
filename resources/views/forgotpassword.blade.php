<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>FORGOT PASSWORD</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="{{ asset('css/styles/forgotpassword.css') }}"/>
 <link rel="icon" type="img/png" href="images/favicon.png">
 <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>

<body>
 <div class="container mx-auto text-center mt-5 form-container">

  <div>
   <img src="https://res.cloudinary.com/wpgroom-com/image/upload/v1571736654/wikiPoli5_8_yrgvwn.png" alt=""
    class="img-fluid">
  </div>

  <h1 class="display-4 heading">Forgot your Password?</h1>
  <p>Please enter the email address registered on your account.</p>

  <form method="post" id="forgot-form">
   <div class="form-group mx-auto mt-3">

    <input type="text" name="email" id="forgotemail" class="form-control form-control-lg"
     placeholder="Your Email Address" required>
    <input type="submit" name="submit" value="Submit" class="btn btn-lg btn-primary btn-blue btn-block mt-3">

   </div>
  </form>
 </div>
</body>


</html>
