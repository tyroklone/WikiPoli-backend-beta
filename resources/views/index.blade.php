<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>WikiPoli | Welcome</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/styles/index.css') }}"/>
  <link rel="icon" type="img/png" href="images/favicon.png">
  <link rel="manifest" href="js/manifest.json" />
 <meta name="theme-color" content="#333" />
</head>
<body>
  <div id="wrapper">
    <div class="container">
      <nav class="navbar navbar-expand-lg">

        <a href="index.html" class="navbar-brand logo">

          <img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png" alt="WikiPoli Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav navbar-nav ml-auto menu">
            <li class="nav-item active">
              <a class="nav-link " href="postpage1.html"><strong>Posts</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signin.html"><strong>Login</strong></a>
            </li>
          </ul>
            <a href="signup.html" class="button-signup">Sign Up</a>
        </div>
      </nav>
    </div>

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
                <p class="search-content">Search for Candidates in your election, get to know them. Contribute posts and add to existing posts.<a href="signin.html"> Get Started</a>
                </p>
              </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <footer>
      <div id="footer">
        <div class="container">
          <div class="row links">
            <div class="col-lg-6 text-center">
              <ul class="quick-links">
                <li>Support</li>
                <li><a href="contact.html">Contact Us</a></li>

                <li><a href="Terms-of-use.html">Terms of Use</a></li>
                <li><a href="privacypolicy.html">Privacy Policy</a></li>

                <li><a href="">Donations</a></li>
              </ul>
            </div>
            <div class="col-lg-6 text-center">
              <ul class="quick-links">
                <li>Company</li>
                <li><a href="">About</a></li>
                <li><a href="">Careers</a></li>
                <li><a href="">Tour</a></li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 text-center social-links">
              <a href="facebook.com"><span class="fa fa-facebook"></span></a>
              <a href="twitter.com"><span class="fa fa-twitter"></span></a>
              <a href="instagram.com"><span class="fa fa-instagram"></span></a>
              <a href="pintrest.com"><span class="fa fa-pinterest"></span></a>
              <a href="linkedin.com"><span class="fa fa-linkedin"></span></a>
            </div>
            <div class="col-lg-12 copyright text-center">
              <p>&copy; 2019 Wikipoli - All Rights Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer> -->
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="{{ asset('js/scripts/index.js') }}"></script>
  <script src="{{ asset('js/scripts/app.js') }}"></script>
</body>
</html>
