<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/styles/style.css') }}"/>
<title>Title</title>
<style>
    /* * {
        padding: 0;
        margin: 0;
    } */
    body {
        font-family: 'Lato', sans-serif;
        overflow: inherit;
    }
    .navimg {
        margin-top: -0.4em;
        margin-left: -1em;
        height: 150px;
        width: 190px;
    }
    .jumbotron {
        margin-top: -2em;
        height: 20em;
        width: 100%;
        background: url("https://res.cloudinary.com/ufonumo/image/upload/v1571835995/photo-1531206715517-5c0ba140b2b8_l0vc2u.jpg");
    }
    .navbar-toggler {
        margin-top: -2em;
    }
    .fa {
        font-size: 2em;
    }

    .don {
        margin-top: 2em;
    }

    @media only screen and (max-width: 425px) {
        .navbtn {
            display: none;
        }
        .don {
            margin-top: 3em;
        }
    }

    .list {
        list-style-type: none;
    }
</style>
</head>
<body>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-light">
            <a class="navbar-brand" href="#">
                <img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png" class="img-fluid navimg">
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0 p-4">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-user-circle d-flex" aria-hidden="true"><h5 class="h3 pl-2">Willie Walters</h5></i>
                        </a>
                    </li>
                    <li class="nav-item ml-5 d-flex justify-content-center">
                        <a class="nav-link btn btn-primary btn-block btn-lg text-white navbtn" href="#" role="button">Posts</a>
                    </li>
            </div>
        </nav>

        <div class="jumbotron col-sm-12 col-md-12 col-lg-12">
            <h2 class="h2 text-white text-center don">Make A Donation</h2>
        </div>

        <div class="container mb-5">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h3 class="h3 mb-3 text-dark mt-5">Where Your Donation Goes</h3>
                    <p class="text-primary">Servers, bandwidth, maintenance, development. Donate to support a wide variety of projects,
                            making your donation a great investment in a highly-efficient not-for-profit organization.
                            <br>
                             Wikipoli is one of the top 10 websites in the world, and it runs on a fraction of what other top websites spend.
                    </p>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-5 align-middle">
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-primary m-3" href="#" role="button">N100</a>
                        <a  class="btn btn-primary m-3" href="#" role="button">N200</a>
                        <a  class="btn btn-primary m-3" href="#" role="button">N400</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a  class="btn btn-primary m-3" href="#" role="button">N500</a>
                        <a  class="btn btn-primary m-3" href="#" role="button">N1000</a>
                        <a  class="btn btn-light m-3" href="#" role="button">Other</a>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button  type="button" class="btn btn-dark col-sm-6 col-md-10 col-lg-9 mt-3" onClick="payWithRave()">DONATE NOW</button>
                    </div>
                </div>
            </div>
        </div>

        <footer class="container-fluid bg-primary mt-5">
            <div class="container">
                <div class="row">
                    <div class="mt-5 col-sm-12 col-md-4 col-lg-4">
                        <h4 class="h4 text-center text-white mb-4">Legal</h4>
                        <li class="text-center list"><a href="Terms-of-use.html" class="text-white">Terms Of Use</a></li>
                        <li class="text-center list"><a href="privacypolicy.html" class="text-white">Privacy Policy</a> </li>  
                    </div>

                    <div class="mt-5 col-sm-12 col-md-4 col-lg-4">
                        <h4 class="h4 text-center text-white mb-4">Company</h4>
                            <li class="text-center list"><a href="about.html" class="text-white">About</a></li>
                            <li class="text-center list"><a href="careers.html" class="text-white">Careers</a></li>
                            <li class="text-center list"><a href="FAQ.html" class="text-white">FAQs</a></li>
                            <li class="text-center list"><a href="my--don.html" class="text-white">Donations</a></li>
                    </div>

                    <div class="mt-5 col-sm-12 col-md-4 col-lg-4">
                        <h4 class="h4 text-center text-white mb-4">Connect With Us</h4>
                        <div class="d-flex justify-content-center">
                            <a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                        <div class="text-center">
                            <a href="#" class="text-white"><i class="fa fa-envelope-o" aria-hidden="true"></i> contact@wikipoli.gq</a>
                        </div>
                    </div>
                </div>
                <p class="text-center text-white pb-3 mt-5 copy">&copy;2019 WikiPoli. All Rights Reserved</p>
            </div>
        </footer>
    </div>


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
<script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>