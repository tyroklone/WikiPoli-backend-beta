
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href= "{{ asset('css/postpage1.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/index.css') }}"/>
	<link rel="icon" type="img/png" href="{{asset('images/favicon.png')}}">
	
	<style>
        #footer {
            background: #6D9BF1 !important;
            /* margin-top: 9% ; */
            margin-top: 8%;
            padding-top: 10px;
            height: 300px;
            width: 100%;
        }

        .social-links h3 {
            font-size: 1rem;
            line-height: 1.5;
        }
        @media screen and (max-width: 768px) {
   
    #footer {
      margin-top: 100px;
      padding-top: 10px;
      height: 450px;
      width: 100%;
   }
}

    </style>
</head>
    <body>
             @include('layouts.postList_navbar')
            @yield('content')


      



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
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
		</script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
		</script>
	</body>
	
	</html>

	<script type="text/javascript" src="{{asset('scripts/postpage1.js')}}"></script>