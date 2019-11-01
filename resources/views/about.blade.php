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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/styles/about.css') }}"/>
  <link rel="icon" type="img/png" href="images/favicon.png">
  <title>About Us</title>
</head>
<style type="text/css">
  #footer{
             background: #6D9BF1 !important;
  }
  .social-links h3 {
  font-size: 1rem;
  line-height: 1.5;
}

* {
 margin: 0;
 padding: 0;
 box-sizing: border-box;
}
body {
 font-family: 'Lato', sans-serif;
}
p, span {
 flood-color: #000;
}

p {
font-size: 18px;
}

.logo img {
 width: 90px;
}
.nav-link {
 color: black !important;
 padding-bottom: 5px;
}
.nav-link:hover{
   background-color: #6D9BF1;
   color: #fff !important;
}
.nav-item.active .nav-link {
 border-bottom: 3px solid #6D9BF1;
 padding-bottom: 2px;
}
.menu a {
 color: #213DCD;
}

.menu li {
 padding-left: 2.5rem;
}

.fa-bars {
 color: #000000;
}
.logout {
 background-color: #6D9BF1;
 border: none;
 box-shadow: none;
 color: #ffffff;
 padding: 5px 15px;
 margin-top: .2rem;
 width: 100px;
}
.jumbotron
{
 background-color: #6D9BF1;
 color: #fff;
 border-radius: 0;
}
.jumbotron hr
{
 border-top: 2px solid #fff;
 width: 60%;
 margin-top: .8rem;
 margin-bottom: .3rem;
}
.jumbotron .lead {
 font-size: 2.5rem;
 word-spacing: 1.5rem;
}
.jumbotron .small {
 font-size: 1.9rem;
}
hr {
   margin-inline-start: auto;
   margin-inline-end: auto;
}
.img-fluid.euro {
   width: 100%;
   height: auto;
}
.btn-primary
{
 background: #6D9BF1;
 border: unset;
 border-radius: 0;
 padding: 5px 20px;
 font-weight: 500;
 color: #fff;
}
.btn-primary:hover
{
 background-color: #59ac59;
 border: 1px solid #59ac59;
}

.card.Mission {
 position: relative;
 font-size: 1.1rem;
 margin-top: 5%;
 border-radius: 0;
 min-height: 10vw;
}

.card.event {
 min-height: 26.5vw;
 padding-top: 5%;
 line-height: 200%;
 display: block;
 align-items: flex-end;
 background-color: #fff;
 background-clip: border-box;
 border: 1px solid rgba(0,0,0,.125);
 border-radius: unset;
}
.lead.text-left {
 padding: 1rem;
}
.aboutimg .col-2
{
 position: relative;
 width: 100%;
 padding-right: 0;
 padding-left: 0;
 flex: 0 0 20%;
 max-width: 20%;
 float: left;
}
.aboutimg .col-2 img
{
 width: 100%;
 height: 100%;
}
#footer {
 background-color: #213DCD; 
 margin-top: 5%; 
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
.subFooter {
 position: relative;
   background-color: #000000;
   top: -10px;
   height: 1.5px;
}

/* Responsive styling */
@media screen and (max-width: 992px) {
   .jumbotron .lead {
   font-size: 1.7rem;
   word-spacing: 1rem;
 }
 .jumbotron .small {
   font-size: 1.3rem;
 }
 .h2, h2 {
   font-size: 1.5rem;
 }

.order-1 {
 order: 2;
}
.order-2 {
 order: 1;
}
.card.Mission {
   position: relative;
   font-size: .8rem;
   margin-top: 0%;
   min-height: 5vw;
}
.card-title {
   margin-bottom: 0;
}

p {
 margin-bottom: .8vh;
}
.btn-primary {
   font-size: .8rem;
   padding: 5px 12px;
}
.display-4 {
   font-size: 2.5rem;
}
.card.event {
   min-height: 26vw;
   padding-top: 1%;
   line-height: 160%;
 
}
.pb-5, .py-5 {
   padding-bottom: 2rem!important;
}
.lead.text-left {
   padding-top: 0;
}
.lead {
   font-size: 1.15rem;
   padding-top: 0;
}
@media screen and (max-width: 991px) {
     .menu li {
       padding-left: unset;
   }
     .nav-link {
       width: fit-content;
       padding-right: .3rem !important;
   }
 }

}

@media screen and (max-width: 767px) {
   .jumbotron .lead {
   font-size: 1.17rem;
   word-spacing: .8rem;
 }
 .jumbotron .small {
   font-size: 1rem;
 }
 .h2, h2 {
   font-size: 1.3rem;
   padding: 35px 0 0;
 }
  p {
   font-size: 1rem;
}
.card.Mission {
   position: relative;
   margin-left: unset;
}

.btn-primary {
   font-size: 1rem;
   padding: 3px 10px;
}
.display-4 {
   font-size: 2rem;
}
.card.event {
   min-height: 22vw;
   padding-top: 1%;
   line-height: 160%;
}
.pb-5, .py-5 {
   padding-bottom: 2rem!important;
}
.pt-5, .py-5 {
   padding-top: 2rem!important;
}
.lead.text-left {
   padding-top: 0;
}
.lead {
   font-size: 1rem;
   padding-top: 0;
}
#footer {
     padding-top: 10px;
     height: 450px;
     width: 100%;
  }

}

@media screen and (max-width: 576px) {
   .jumbotron .lead {
   font-size: 1.1rem;
   word-spacing: .1rem;
 }
 .jumbotron .small {
   font-size: .8rem;
 }
 .menu a, .logout {
   font-size: .8rem;
}


}

@media screen and (max-width: 400px) {
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
<body>  
  <div id="wrapper">
    <div class="container-fluid">
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
            <li class="nav-item">
              <a class="nav-link" href="index.html"><strong>Home</strong></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="about.html"><strong>About us</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user_setting.html"><strong>Settings</strong></a>
            </li>
            <li class="nav-item">
              <button type="submit" class="logout">Log Out</button>
          </li>
          </ul>
        </div>
      </nav>
    </div>

    <!--- Jumbotron -->
    <div class="container-fluid">
    <div class="row jumbotron text-center">
        <div class="col-xl-12">
            <p class="lead">ONE  DAY THIS NATION  WILL RISE  UP</p>
        </div>
        <hr>
        <div class="col-xl-12">
            <p class="small">Contrary to popular belief , Lorem ipsum dolor sit amet, consect </p>
        </div>
    </div>
    </div>
    <!--- Two Column Section -->
    <div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-6">
            <img src="https://res.cloudinary.com/ottyhaq/image/upload/v1571752797/images_5_1_nknfqs.png" class="img-fluid euro">
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center pb-3">WHO WE ARE</h2>
                    <p>Welcome to the platform were Lorem ipsum dolor sit amet, consectetur adipisifwcing elit, sed do eiusmod tempor </p> 
                </div>
                    <br>                   
                <div class="col-md-12">
                  <div class="card Mission">
                      <div class="card-body">
                          <span class="float-left card-title pl-5">Mission</span>              <span class="float-right card-title pr-5">Vision</span> <div></div>
                          <p class="float-left card-text">Lorem ipsum dolor sit amet, consectetur adipisifwcing elit, sed do eiusmod tempor incididunt ut labore et dLorem ip
                          </p>            
                        <a href="#" class="float-left btn btn-primary">Read more</a>
                      </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--- Event Section -->
    <div class="container-fluid">
    <div class="row welcome">
        <div class="col-12 pb-5 pt-5">
            <h1 class="display-4 text-center">Events</h1>
        </div>
        <hr>
    </div>
    </div>

    <!--- Two Column Section -->
    <div class="container-fluid">
    <div class="row padding">
        <div class="col-md-6 order-1">
          <div class="card event">
              <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisifwcing elit, sed do eiusmod tempor incididunt ut labore et dLorem ip Lorem ipsum dolor sit amet, consectetur adipisifwcing elit, sed do eiusmod tempor incididunt ut labore et dLorem ip
                  </p>
              </div>
           </div>
            <br>
        </div>
        <div class="col-md-6 order-2">
            <img src="https://res.cloudinary.com/franeldev/image/upload/v1571830441/samples/WikiPoli/aboutevent_su6mjc.png" class="img-fluid euro">
        </div>
    </div>
    </div>

    <!--- Service Section -->
    <div class="container-fluid">
    <div class="row welcome">
        <div class="col-12 pb-2 pt-5">
            <h1 class="display-4 text-center">Our Awesome Service</h1>
        </div>
        <div class="col-12">
            <p class="lead text-left">Lorem ipsum dolor sit amet, consectetur adipisifwcing elit, sed do eiusmod tempor incididunt ut labore et dLorem ip Lorem ipsum dolor sit amet, consectetur adipisifwcing elit, sed do eiusmod tempor incididunt ut labore et </p>
        </div>
    </div>
    </div>

    <div class="container-fluid">
    <div class="row aboutimg">
        <div class="col-2 aa">
            <img src="https://res.cloudinary.com/franeldev/image/upload/v1571830429/samples/WikiPoli/aboutelec_qnzz7j.png" class="img-fluid euro">
        </div>
        <div class="col-2 bb">
            <img src="https://res.cloudinary.com/franeldev/image/upload/v1571830430/samples/WikiPoli/abouthands_h8fita.png" class="img-fluid euro">
        </div>
        <div class="col-2 cc">
            <img src="https://res.cloudinary.com/franeldev/image/upload/v1571830432/samples/WikiPoli/abouttravel_zj7ik6.png" class="img-fluid euro">
        </div>
        <div class="col-2 dd">
            <img src="https://res.cloudinary.com/franeldev/image/upload/v1571830430/samples/WikiPoli/aboutelec2_vxpfpt.png" class="img-fluid euro">
        </div>
        <div class="col-2 ee">
            <img src="https://res.cloudinary.com/franeldev/image/upload/v1571830431/samples/WikiPoli/abouthands2_bjt2ku.png" class="img-fluid euro">
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
								<li><a href="{{ url('/Terms') }}">Terms of Use</a></li>
								<li><a href="{{ url('/PrivacyPolicy') }}">Privacy Policy</a></li>
							</ul>
						</div>
						<div class="col-md-4 col-sm-12  text-center">
							<ul class="quick-links">
								<li>Company</li>
								<li><a href="{{ url('/About') }}">About</a></li>
								<li><a href="{{ url('/Careers') }}">Careers</a></li>
								<li><a href="{{ url('/FAQs') }}">FAQs</a></li>
								<li><a href="{{ url('/Donation') }}">Donations</a></li>
							</ul>
						</div>
	
						<div class="col-md-4 col-sm-12  text-center">
							<div class="text-center social-links">
								<h3>Connect With Us</h3>
								<a href="facebook.com"><span class="fa fa-facebook"></span></a>
								<a href="twitter.com"><span class="fa fa-twitter"></span></a>
								<a href="instagram.com"><span class="fa fa-instagram"></span></a>
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
