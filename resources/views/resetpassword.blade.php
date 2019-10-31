<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="bootstrap.min.css">
 <title>RESET PASSWORD</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="{{ asset('css/styles/resetpassword.css') }}"/>
 <link rel="icon" type="img/png" href="images/favicon.png">
 <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>

<body>
 <div class="container mx-auto text-center mt-5 form-container">
  <div>
   <img src="https://res.cloudinary.com/wpgroom-com/image/upload/v1571736654/wikiPoli5_8_yrgvwn.png" alt=""
    class="img-fluid">
  </div>

  <h1 class="display-4 heading">Choose a new password</h1>

  <form method="post" id="reset-form">
   <div class=" text-center forgot-message">

   </div>
   <div class="form-group mx-auto mt-3">
    <input type="text" name="resetpassword" id="resetpassword" class="form-control form-control-lg"
     placeholder="Enter your new password" required>
    <input type="text" name="confirmpassword" id="confirmpassword" class="mt-4 form-control form-control-lg"
     placeholder="Re-enter password" required>
    <input type="submit" value="Reset Password" class="btn-blue btn-lg btn-primary mt-3 btn-block">
   </div>
  </form>
 </div>
</body>

</html>