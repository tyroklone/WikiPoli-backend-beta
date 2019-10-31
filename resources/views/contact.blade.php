<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/styles/contact.css') }}"/>
  <link rel="icon" type="img/png" href="images/favicon.png">
  <title>Contact Us</title>
  <style>
    #footer{
             background: #6D9BF1 !important;
  }
  .social-links h3 {
  font-size: 1rem;
  line-height: 1.5;
}
  </style>
</head>
<body>
  <div id="wrapper">
    <div class="container">
      <nav class="navbar navbar-expand-lg">

        <a href="index.html" class="navbar-brand logo">

          <img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png"
            alt="WikiPoli Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav navbar-nav ml-auto menu">
            <!-- Show post only if user is authenticated -->

            <!-- <li class="nav-item active">
              <a class="posts-nav-link " href="post-page-2.html"><strong>Posts</strong></a>
            </li> -->

            <!-- Show users name too if they're authenticated -->

            <!-- <li class="nav-item active">
             
              <a class="nav-link user-name-link" href="#"><strong>John Doe</strong></a>
            </li> -->

            <!-- Show login if user is not authenticated -->
            
            <li class="nav-item">
              <a class="posts-nav-link " href="postpage1.html"><strong>Posts</strong></a>
            </li>
          </ul>
          <!-- <button type="submit" class="button-signup">Posts</button> -->
        </div>
      </nav>
    </div>

    <div class="container mx-auto">
      <h1 class="text-center mt-3 mb-5 pb-3">Get in Touch</h1>
      <div class="main-body row">
        <div class="col-md-6 mb-5">
          <form class="mb-5"  id="main-form" action="https://formspree.io/eronmmer@gmail.com" method="POST">
           <div class="form-group">
              <input type="text" placeholder="Your name" class="form-control" required name="name">
           </div>
           <div class="form-group"><input class="form-control" placeholder="Your email address" type="email" required name="_replyto"></div>
            <div class="form-group">
              <textarea name="message" class="form-control" id="message" cols="30" placeholder="Enter you message" rows="10"></textarea>
            </div>
            <input class="btn btn-block send-email" type="submit" value="Send">
          </form>
        </div>
        <div mt-5 class="col-md-6 mx-auto text-center ">
            <div class="icons-row">
              <div class="secondrow-content mx-auto">
                <div class="email"> <a href="mailto:gmail@gmail.com"><i class="fas fa-2x fa-envelope-square"></i></a> wikipoli@gmail.com</div>
                <div class="phone"> <a href="tel:+2349999999999"><i class="fas fa-2x fa-phone"></i></a> +234 9999999999</div>
                <div class="location"> <a href="google.com"><i class="fas fa-2x fa-map-marker-alt"></i></a> 8th floor, HNG Towers</div>
              </div>
              <div class="social-icons">
                <a href="instagram.col-md-4"><i class="fab fa-2x fa-instagram"></i></a>
                <a href="facebook.com"><i class="fab fa-2x fa-facebook"></i></a>
               <a href="twitter.com"><i class="fab fa-2x fa-twitter"></i></a>
            
              </div>
            </div>
        </div>
      </div>
    </div>

    <footer>
      <div id="footer">
        <div class="container">
          <div class="row links">
            <div class="col-md-4 col-sm-12  text-center">
              <ul class="quick-links">
                <li>Legal</li>
                <li><a href="Terms-of-use.html">Terms of Use</a></li>
                <li><a href="privacypolicy.html">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="col-md-4 col-sm-12  text-center">
              <ul class="quick-links">
                <li>Company</li>
                <li><a href="about.html">About</a></li>
                <li><a href="careers.html">Careers</a></li>
                <li><a href="FAQ.html">FAQs</a></li>
                <li><a href="donation_page.html">Donations</a></li>
              </ul>
            </div>
    
            <div class="col-md-4 col-sm-12  text-center">
              <div class="text-center text-white social-links">
                <h3>Connect With Us</h3>
                <a href="facebook.com"><span class="fab fa-2x fa-facebook"></span></a>
                <a href="twitter.com"><span class="fab fa-2x fa-twitter"></span></a>
                <a href="instagram.com"><span class="fab fa-2x fa-instagram"></span></a>
                <p>contact@wikipoli.gq</p>
              </div>
            </div>
            <div class="col-lg-12 copyright text-center">
              <p>&copy; 2019 Wikipoli - All Rights Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>
</html>