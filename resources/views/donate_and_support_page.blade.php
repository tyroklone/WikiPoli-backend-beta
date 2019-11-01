<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"  maximum-scale=1, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Donations</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/styles/donation_page.css') }}"/>

  <style>
    * {
	margin: 0;
	padding: 0;
}

body {
	font-family: 'Lato', sans-serif;
}

.logo img {
	width: 120px;
}

.navbar p {
	font-size: 1.8rem;
	color: #6d9bf1;
}


.menu a {
	font-size: 1rem;
	color: #6d9bf1;
}

.menu li {
	padding-left: 2.5rem;
}

.fa-bars {
	color: #000000;
}

.button-signup {
	background-color: #6d9bf1;
	border: none;
	box-shadow: none;
	color: #ffffff;
	padding: 6px;
	font-size: 1rem;
	width: 150px;
	font-weight: bold;
	float: right;
	margin-left: 2.5rem;
}

h1 {
	margin-left: 23%;
	color: #213dcd;
	margin-bottom: 50px;
}

#footer {
	background-color: #6d9bf1;
	margin-top: 15%;
	width: 100%;
}

.links {
	padding-top: 20px;
}

.quick-links li {
	list-style-type: none;
	padding-top: 10px;
}

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
	letter-spacing: 120px;
	padding-left: 2%;
}

#main > p {
	padding-top: 20px;
	color: #6d9bf1;
	font-size: 15px;
	text-align: ju;
}
#main > p {
	padding-top: 20px;
	color: #6d9bf1;
	font-size: 20px;
}

#footer p {
	color: #ffffff;
	font-size: 12px;
}

#footer h3 {
	color: #fff;
}

#showcase {
	background-image: url(https://res.cloudinary.com/ufonumo/image/upload/v1571835995/photo-1531206715517-5c0ba140b2b8_l0vc2u.jpg);
	min-height: 100px;
	margin-bottom: 100px;
	text-align: center;
	background-position: center;
	background-repeat: no-repeat;
	padding-bottom: 6%;
	background-size: 100%;
}
.contain h1 {
	font-size: 60px;
	line-height: 2em;
	padding-top: 100px;
	text-align: center;
	font-family: Lato;
	font-style: normal;
	font-weight: bold;
	padding-right: 20%;
	color: #ffffff;
	letter-spacing: 10px;
}

#main {
	float: left;
	width: 45%;
	padding: 0 90px;
	box-sizing: border-box;
	background: white;
	color: #6d9bf1;
	font-size: 23px;
	margin-top: 0%;
}

/* the donation form */


h3 {
	font-family: Lato;
	font-style: normal;
	font-weight: bold;
	font-size: 35px;
	color: #000000;
}


.label {
		font-size: 1rem;
		font-weight: bold;
}

a,
a:hover {
  color: white;
  text-align: center;
}
 
a:hover {
  text-decoration: none;
  color: #213dcd;
 

}
 
.block {
  padding-top: 2%;
  background: #6d9bf1;
  margin-bottom: 35px;
}

.label-other{
	color: rgb(136, 133, 133) !important;
	box-sizing: border-box !important;
	border-radius: 2px  !important;
	font-size: 1rem;
	font-weight: bold;
	
}

.label-other:hover{
	text-decoration: none;
    color: #213dcd !important;
}
 
.card {
	padding-top: 2% !important;
}


div img {
	padding-top: 40% !important;
}


.social-link ul {
	list-style-type: none;
}

.social-link li {
	display: inline-block;
	padding-left: 20px;
	text-align: center;
}
.social-link span {
	color: #fff;
}




/* Responsive styling */
@media screen and (min-width: 600px){
	h1 {
		font-size: 30px;
	}
	#footer {
		/* margin-top: 100px;
		padding-top: 100px;
		height: 100px;
		width: 100%; */
	}
	.social-links a span {
		letter-spacing: 120px;
	}
}


@media screen and (max-width: 600px) {
	h1 {
		font-size: 30px;
	}
	#footer {
		margin-top: 100px;
		padding-top: 100px;
		height: 600px;
		width: 100%;
	}
	.social-links a span {
		letter-spacing: 120px;
	}



	#main {
		width: 100%;
		float: none;
		font-size: 15px;
	}
	

	#showcase {
		background-image: url(https://res.cloudinary.com/ufonumo/image/upload/v1571835995/photo-1531206715517-5c0ba140b2b8_l0vc2u.jpg);
		min-height: 100px;
		margin-bottom: 20px;
		text-align: center;
		padding-top: 20%;
		background-position: center;
		background-repeat: no-repeat;
		padding-bottom: 4%;
		background-size: 100%;
	}
	.contain h1 {
		font-size: 28px;
		line-height: 1em;
		padding-top: 100px;
		text-align: center;
	}

	h3 {
		font-family: Lato;
		font-style: normal;
		font-weight: bold;
		font-size: 20px;
		color: #000000;
	}

	

}

/* Responsiveness for  Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
	h1 {
		font-size: 30px;
	}
	#footer {
		width: 100%;
		padding-top: 3%;
	}
	.social-links a span {
		text-align: center;
		letter-spacing: 100px;
	}

	.menu a {
		font-size: 1rem;
		color: #6d9bf1;
		
	}
	
	.menu li {
		padding-left: 2.5rem;
		
	}

}

@media only screen and (max-width: 768px) {
	h1 {
		font-size: 30px;
	}
	#footer {
		margin-top: 100px;
		padding-top: 70px;
		height: 600px;
		width: 100%;
	}
	.social-links a span {
		text-align: center;
		letter-spacing: 150px;
	}

	.button-signup {

	}

	.menu a {
		font-size: 1rem;
		color: #6d9bf1;
	}
	
	.menu li {
		padding-left: 2.5rem;
	}

}	
  </style>
</head>
<body>
    <!-- Navbar -->
 
  
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <a href="#" class="navbar-brand logo">
          <img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png" alt="WikiPoli Logo">
        </a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button> 
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto ">
            <!-- <li class="nav-item active">
              <a class="nav-link " href="#"><strong>Post</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><strong>Login</strong></a>
            </li> -->
          </ul>
        
            <button type="submit" class="button-signup">POSTS</button>
        </div>
      </nav>
    </div>


   <!-- sections -->
  <div class="container-fluid">

      <section id="showcase">
          <div class="contain"> 
              <h1>MAKE A DONATION</h1>
          </div>
      </section>
  
      
      <div class="content">
          <section id="main">
              <h3>Where your donation goes</h3>
              <p>Servers, bandwidth, maintenance, development. Donate to support a wide variety of projects,
               making your donation a great investment in a highly-efficient not-for-profit organization.
                Wikipoli is one of the top 10 websites in the world, and it runs on a fraction of what other top websites spend.</p>
          </section>
      </div>
  
  
      <div class="merger" >

          <div class="card text-primary border-primary" style="max-width: 45rem;">
              <div class="card-body">
                  <div class="row"  ">
                      <div class="col-12 col-md-6 col-xl-4">
                          <a class="d-flex flex-column align-items-center justify-content-between p-3 block" href="">
                              <div class="label">N100</div>             
                          </a>
                      </div>
                      <div class="col-12 col-md-6 col-xl-4">
                          <a class="d-flex flex-column align-items-center justify-content-between p-3 block" href="">
                              <div class="label">N200</div>
                          </a>
                      </div>
                      <div class="col-12 col-md-6 col-xl-4">
                        <a class="d-flex flex-column align-items-center justify-content-between p-3 block" href="">
                          <div class="label">N400</div>
                          
                        </a>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12 col-md-6 col-xl-4">
                          <a class="d-flex flex-column align-items-center justify-content-between p-3 block" href="">
                              <div class="label">N500</div>
                          </a>
                      </div>
                      <div class="col-12 col-md-6 col-xl-4">
                          <a class="d-flex flex-column align-items-center justify-content-between p-3 block" href="">
                              <div class="label">N1000</div>
                            </a>
                      </div>
                      <div class="col-12 col-md-6 col-xl-4">
                          <a class="d-flex flex-column align-items-center justify-content-between p-3 block" style="background-color: white; border: 1px solid #6d9bf1 !important; " href="">
                              <div class="label-other" >Other</div>
                          </a>
                      </div>
                  </div>
            
                  
                        <div class="row align-items-center justify-content-center">
                          <div class="col-10">
                              <button type="button" class="btn btn-dark btn-block" onClick="payWithRave()"> DONATE NOW </button>
                              <script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
                          </div>
            
                          <div class="row align-items-center justify-content-center">
                              <div class="col-12 col-md-6 col-md-10">
                                  <img src="https://res.cloudinary.com/ufonumo/image/upload/v1571836080/flwbadge-2_nusn0d.png" class="img" alt="">
                              </div>
                          </div>      
                        </div>
              </div>
          </div>           
          
      </div>
      
        
  </div>  
    
    <!-- Footer -->
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

  


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>


  <!-- the flutterwave api integration -->
  <script>
    const API_publicKey = "FLWPUBK_TEST-2c7dd09d63d44deae5cbf3e9728aa289-X";

    function payWithRave() {
        var x = getpaidSetup({
            PBFPubKey: API_publicKey,
            customer_email: "user@example.com",
            amount: 2000,
            customer_phone: "234099940409",
            currency: "NGN",
            txref: "rave-123456",
            meta: [{
                metaname: "flightID",
                metavalue: "AP1234"
            }],
            onclose: function() {},
            callback: function(response) {
                var txref = response.tx.txRef; // collect txRef returned and pass to a server page to complete status check.
                console.log("This is the response returned after a charge", response);
                if (
                    response.tx.chargeResponseCode == "00" ||
                    response.tx.chargeResponseCode == "0"
                ) {
                    // redirect to a success page
                } else {
                    // redirect to a failure page.
                }

                x.close(); // use this to close the modal immediately after payment.
            }
        });
    }
  </script>
</body>
</html>