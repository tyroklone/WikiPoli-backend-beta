
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>WikiPoli | Welcome</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Styles -->
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Lato', sans-serif;
}

.logo img {
  width: 120px;
}

.navbar p {
  font-size: 2rem;
  color:  #6D9BF1;
}

.menu a {
  font-size: 1.5rem;
  color:  #6D9BF1;
}

.menu li {
  padding-left: 2.5rem;
}

.fa-bars {
  color: #000000;
}

.button-signup {
  background-color:  #6D9BF1;
  border: none;
  box-shadow: none;
  color: #ffffff;
  padding: 6px;
  font-size: 1.5rem;
  text-align: center;
  width: 150px;
  margin-left: 2.5rem;
}

.button-signup:hover {
  color: white;
  text-decoration: none;
  background: rgb(24, 24, 133);
}

.button-search {
  background-color:  #6D9BF1;
  border: none;
  box-shadow: none;
  color: #ffffff;
  font-size: 2rem;
  padding: 1px;
  width: 150px;
}

.button-search:hover {
  background: rgb(24, 24, 133);
}

.form-content {
  width: 80%;
  margin-top: 15%;
}

.input-group {
  width: 80%;
  margin-left: 23%;
}

.form-control {
  height: 50px;
  padding: 15px;
  border-radius: 0;
  border: 1px solid  #6D9BF1;
}

h1 {
  margin-left: 23%;
  color:  #6D9BF1;
  margin-bottom: 50px;
}

.search-content {
  font-size: 1.2rem;
  margin-left: 23%;
  color: #676871;
  padding-top: 20px;
  font-weight: bold;
}

.search-content a {
 font-weight: bold;
 color:  #6D9BF1;
}


#footer {
  background-color:  #6D9BF1; 
  margin-top: 32%;  /* YOU CAN PULL THIS OUT WHEN YOU IMPLEMENT YOUR PAGE.*/
  padding-top: 10px;
  /* height: 300px; */
  width: 100%;
}

.links {
  padding-top: 5px;
}

.social-links h3,
.quick-links li {
  list-style-type: none;
  padding-top: 5px;
}

.social-links h3,
.quick-links li:first-child {
  color: #ffffff;
  padding-bottom: 10px;
  font-weight: bold;
}

.quick-links li a {
  color: #ffffff;
  text-decoration: none;
}

.social-links a span {
  color: #ffffff;
  letter-spacing: 20px;
}

.social-links p,
.copyright p {
  padding-top: 10px;
  color: #ffffff;
  font-size: 12px; 
}

.line{
  display: none;
}

/* Responsive styling */
@media screen and (max-width: 768px) {
    h1 {
      font-size: 30px;
    }
    #footer {
      padding-top: 10px;
      height: 450px;
      width: 100%;
   }
}

@media screen and (max-width: 768px) {
    .input-group {
      width: 100%;
      margin-left: 12%;
  }
    .form-control {
      height: 50px;
      padding: 20px;
      border-radius: 0;
      border: 1px solid  #6D9BF1;
  }
    .button-search {
      background-color:  #6D9BF1;
      border: none;
      box-shadow: none;
      color: #ffffff;
      font-size: 1.2rem;
      padding: 1px;
      width: 80px;
  }
    .search-content {
      font-size: 1rem;
      width: 100%;
      margin-left: 13%;
      color: #676871;
      padding-top: 20px;
      font-weight: bold;
  }
}

@media screen and (max-width: 375px) {
  .input-group {
    width: 120%;
    margin-left: 4%;
  }

  .search-content {
    font-size: 1rem;
    width: 120%;
    margin-left: 8%;
    color: #676871;
    padding-top: 20px;
    font-weight: bold;
  }

  .line{
    display: block;
    margin: 0 auto;
    padding: 0;
    height: 0px;
    border: 1px solid #ffffff;
    width: 25%;
    background: #000;
  }
}
  </style>

  
  <link rel="icon" type="img/png" href="images/favicon.png">
  <link rel="manifest" href="js/manifest.json" />
 <meta name="theme-color" content="#333" />
</head>
<body>
  <div id="wrapper">
    <div class="container">
      <nav class="navbar navbar-expand-lg">

        <a href="{{ url('/') }}" class="navbar-brand logo">

          <img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png" alt="WikiPoli Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        @if (Route::has('login'))
          <ul class="nav navbar-nav ml-auto menu">
          
            <li class="nav-item active">
              <a class="nav-link " href="{{ url('/post') }}"><strong>Posts</strong></a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}"><strong>Login</strong></a>
            </li>
          </ul>
          @if (Route::has('register'))
            <a href="{{ route('register') }}" class="button-signup">Sign Up</a>
          @endif
          @endauth
        
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
                <p class="search-content">Search for Candidates in your election, get to know them. Contribute posts and add to existing posts.<a href="{{ route('register') }}"> Get Started</a>
                </p>
              </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="scripts/index.js"></script>
  <script src="js/app.js"></script>
</body>
</html>

