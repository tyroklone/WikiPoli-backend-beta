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
    <div id="footer">
        <div class="donation" >
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
                                    <li><a href="">About</a></li>
                                    <li><a href="">Careers</a></li>
                                    <li><a href="">FAQs</a></li>
                                    <li><a href="">Donations</a></li>
                                </ul>
                        </div>

                        <div class="col-md-4 col-sm-12 text-center">
                                <h3 style="font-size:17px; padding-top: 14px;">Connect With Us</h3>
                                <div class="social-link">
                                   <ul>
                                        <li><a href="facebook.com"><span class="fa fa-facebook"></span></a> </li>
                                       <li><a href="twitter.com"><span class="fa fa-twitter"></span></a></li>
                                       <li><a href="instagram.com"><span class="fa fa-instagram"></span></a> </li>
                                    </ul>                                   
                                    <p>contact@wikipoli.gq</p>
                                </div> 
                        </div>
                        <div class="col-lg-12 copyright text-center">
                                <p>&copy; 2019 Wikipoli - All Rights Reserved</p>
                        </div>
                </div>
        </div>
    </div>

  


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