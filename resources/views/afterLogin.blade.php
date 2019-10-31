<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/styles/afterLogin.css') }}"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src='https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/javascript/jquery.min.js'></script>
  <script src='https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/javascript/bootstrap.min.js'></script>
  <link rel="icon" type="img/png" href="images/favicon.png">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container"><a href="https://themes.getbootstrap.com" class="navbar-brand" href="/"><img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png" width="100"></a>
      <div class="d-flex ml-auto">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#globalNavbar" aria-controls="globalNavbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      </div>
      <div class="collapse navbar-collapse" id="globalNavbar">

        <ul class="navbar-nav mr-auto order-1"></ul>
        <ul class="navbar-nav d-lg-flex ml-2 order-3">
          <li class="nav-item p-3"><a class="nav-link notification" href="#"><span>3</span><i class="fas fa-bell"></i></a></li>
          <li class="nav-item p-3"><a class="nav-link" href="#"><i class=""></i><b>Home</b></a></li>
          <li class="nav-item p-3"><a class="nav-link" href="#"><i class=""></i><b>Settings</b></a></li>
          <li class="nav-item p-3"><a class="nav-link" href="#"><i class="fas fa-user"></i> &nbsp; <b>John Doe</b></a></li>
          <li class="nav-item p-3"><a class="btn btn-primary" href="#">Log Out</a></li>
        </ul>
        <!-- On Mobile Display -->
        <!-- <ul class="navbar-nav d-lg-none">
          <li class="nav-item-divider"></li>
          <li class="nav-item"><a class="nav-link" href="#">John Doe</a></li>
          <li class="nav-item"><a class="btn btn-primary" href="#">Log Out</a></li>
        </ul> -->
      </div>
    </div>
  </nav>
  <!-- Secondary Nav -->
  <div class="container">
    <div class="row p-3 class">
      <div class="col-md-7">
        <i class="fas fa-user"></i> &nbsp; <b>John Doe</b>
      </div>
      <div class="col-md-5">
        <div class="input-group mb-3">
          <span class="p-2">Create a post&nbsp;<i class="fas fa-plus"></i></span>
          <input type="text" class="form-control" placeholder=" Enter Politician's Name" aria-label="Recipient's username" aria-describedby="button-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button" id="button-addon2">Search</button>
          </div>
        </div>
      </div>
    </div>

    <section class="mb-3">
     <div class="section-title row">
      <div class="col-md-12">
       <h3 class="title">Recent featured politician</h3>
     </div>

   </div>

   <div class="section-content row">
    <div class="col-md-4">
      <p>Adetokunbo Olufela Durotoye (born in <span class="text">Ibadan, Oyo State</span> on the 12th May 1971) is a <span class="text">business consultant, leadership</span>expert and motivational speaker. Fela is the president of the GEMSTONE Nation Builders Foundation,  non- profit, non- governmental organization targeted at training youths towards <span class="text">transformational leadership</span> and</p>


    </div>
    <div class="col-md-4">
      <div class="picture">
        <img class="content-image" src="assets/img/durotoye.png">
      </div>
    </div>

    <div class="col-md-4">
        <p>
      He was the Nigerian Presidential Candidate of the <span class="text">Alliance for New Nigeria </span>party (ANN) for the 2019 Presidential elections.
      He was born to Lyiwola and Adeline Durotoye, both profesors at the University of Ife. After his parents moved to Obafemi Awolowo University, Ile- Ife, Fela attended the Staff Children’s School </p>
    </div>

    <div class="col-md-12">
    <p>
      He was the Nigerian Presidential Candidate of the <span class="text">Alliance for New Nigeria</span> party (ANN) for the 2019 Presidential elections.
    He was born to Lyiwola and Adeline Durotoye, both profesors at the University of Ife. After his parents moved to Obafemi Awolowo University, Ile- Ife, Fela attended the Staff Children’s School </p>

    <p>

      He was the Nigerian Presidential Candidate of the <span class="text">Alliance for New Nigeria</span> party (ANN) for the 2019 Presidential elections.
      He was born to Lyiwola and Adeline Durotoye, both profesors at the University of Ife. After his parents moved to Obafemi Awolowo University, Ile- Ife, Fela attended the Staff Children’s School ... <span class="read">Read more</span>
    </p>
  </div>
  </div>
  
</section>


<!--     <section class="mb-3">
     <div class="section-title row">
      <div class="col-md-12">
       <h3 class="title">Politician updates</h3>
     </div>

   </div>

   <div class="section-content row">
    <div class="col-md-12">
      <ul>
        <li><p>
Sowpre Omoyel, he was the Nigerian Presidential Candidate of the <span class="text">Alliance for New Nigeria </span>party (ANN) for the 2019 Presidential elections.
He was born to Lyiwola and Adeline Durotoye, both profesors at the University of Ife. After his parents moved to Obafemi Awolowo University, Ile- Ife, Fela attended the Staff Children’s School .</p>
        </li>

        <li><p>
Sowpre Omoyel, he was the Nigerian Presidential Candidate of the <span class="text">Alliance for New Nigeria </span>party (ANN) for the 2019 Presidential elections.
He was born to Lyiwola and Adeline Durotoye, both profesors at the University of Ife. After his parents moved to Obafemi Awolowo University, Ile- Ife, Fela attended the Staff Children’s School .</p></li>

<li><p>
  
Sowpre Omoyel, he was the Nigerian Presidential Candidate of the <span class="text">Alliance for New Nigeria </span>party (ANN) for the 2019 Presidential elections.
He was born to Lyiwola and Adeline Durotoye, both profesors at the University of Ife. After his parents moved to Obafemi Awolowo University, Ile- Ife, Fela attended the Staff Children’s School...</p>
<span class="read pull-right">See more</span>
</li>
      </ul>
    </div>
  </div>
</section>
</div>

<footer>
  <nav class="navbar navbar-expand-lg navbar-fair">
    <div class="container"><a href="https://themes.getbootstrap.com" class="navbar-brand" href="/"><img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png" width="100"></a>
      <div class="d-flex ml-auto">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#globalNavbar" aria-controls="globalNavbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      </div>
      <div class="collapsed d-none navbar-collapse" id="globalNavbar">

        <ul class="navbar-nav mr-auto order-1"></ul>
        <ul class="navbar-nav d-lg-flex ml-2 order-3">
          <li class="nav-item p-3"><a class="foot-nav-link" href="#">Privacy policy</a></li>
          <li class="nav-item p-3"><a class="foot-nav-link" href="#">About WikiPoli</a></li>
          <li class="nav-item p-3"><a class="foot-nav-link" href="#"> Contact WikiPoli</a></li>
        </ul>
      </div>
    </div>
  </nav>
</footer>

</body>
</html> -->
