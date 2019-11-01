
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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles/postpage1.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/styles/index.css') }}"/>
	<link rel="icon" type="img/png" href="images/favicon.png">
	<title>Posts</title>

	<style>
        #footer {
            background: #6D9BF1 !important;
            /* margin-top: 9% ; */
            margin-top: 8%;
            padding-top: 10px;
            /* height: 300px; */
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
	<nav class="navbar navbar-expand-lg navbar-custom bg-custom">
		<div class="container">
			<a href="index.html" class="logo"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571745363/u0zhq4fwslfr4u5lx5qt.png" alt="logo" class="img-fluid" width="150px;"></a>
			<button class="navbar-toggler float-right custom-toggler" type="button" data-toggle="collapse" data-target="#navbar9" style="color: #000000;">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="navbar-collapse collapse" id="navbar9">
				<ul id="main-navbar" class="navbar-nav ml-auto"> 
					<li class="navbar-item mr-5">
						<a href="signin.html" class="navbar-link" style="color: black;" id="logIn">Log In</a>
					</li>
					<li class="navbar-item mr-5">
						<a href="signup.html" class="btn navbar-link" id="signUp" style="background-color: #6d9bf1;">Sign Up</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
	<!--h1 id="posts-intro">All Posts</h1-->
	<div class="search">
		<button onclick="location.href='./postpag1visitor.html'" id="create-post" class="btn btn-sm btn-xs-xs">Recent Posts</button>
		<form action="action_page.php">
			<input type="text" name="search" placeholder="Search Politician's name" class="justify-content-right mr-auto">
			<input type="submit" name="Submit" value="Search">
		</form>
	</div>

	<div class="container main">
		<div class="row">
			<div class="col-sm" id="post-1">
				<div class="post">
						<h4>ProfErons</h4>
						<p><strong>Felatoye Durotoye</strong>  is a Leadership Expert, Motivational Speaker . Lorem ipsumsit amet, consectetur adipiscing elsit amet, consectetur adipiscing elsit amet, consectetur adipiscing el  <a href="">Read More</a>
							</p>
					<!-- <div class="icon">
						<a href="" class="" aria-hideen="true"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571760606/zbjtlwqjffgwvyc9klvc.png" style="width: 25px;"></a>
						<a href=""><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761066/a4zha34vheoeyzypvpqu.png" style="width: 25px;"></a>
		                <a href=""><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761008/bzosk4pcqvpldu59bo0w.png" style="width: 25px;"></i></a>
		                <a href="" aria-hideen="true"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571760662/hq5ctfvhjv3r05bqdski.png" style="width: 25px;"></a>
					</div> -->
				</div>	
			</div>
			<div class="col-sm">
				<div class="post">
						<h4>Xyluz</h4>
						<p><strong>Buhari Jibril</strong>  is a Leadership Expert, Motivational Speaker . Lorem ipsumsit amet, consectetur adipiscing elsit amet, consectetur adipiscing elsit amet, consectetur adipiscing el  <a href="">Read More</a> 
						</p>
					<!-- <div class="icon">
						<a href="" class="" aria-hideen="true"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571760606/zbjtlwqjffgwvyc9klvc.png" style="width: 25px;"></a>
						<a href=""><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761066/a4zha34vheoeyzypvpqu.png" style="width: 25px;"></a>
		                <a href=""><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761008/bzosk4pcqvpldu59bo0w.png" style="width: 25px;"></i></a>
		                <a href="" aria-hideen="true"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571760662/hq5ctfvhjv3r05bqdski.png" style="width: 25px;"></a>
					</div> -->
				</div>
			</div>

		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm" id="post-1">
				<div class="post">
						<h4>theresand</h4>
						<p><strong>Sanwoolu</strong>  is a Leadership Expert, Motivational Speaker . Lorem ipsumsit amet, consectetur adipiscing elsit amet, consectetur adipiscing elsit amet, consectetur adipiscing el  <a href="">Read More</a> 
						</p>
					<!-- <div class="icon">
						<a href="" class="" aria-hideen="true"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571760606/zbjtlwqjffgwvyc9klvc.png" style="width: 25px;"></a>
						<a href=""><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761066/a4zha34vheoeyzypvpqu.png" style="width: 25px;"></a>
		                <a href=""><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761008/bzosk4pcqvpldu59bo0w.png" style="width: 25px;"></i></a>
		                <a href="" aria-hideen="true"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571760662/hq5ctfvhjv3r05bqdski.png" style="width: 25px;"></a>
					</div> -->
				</div>	
			</div>
			<div class="col-sm">
				<div class="post">
					<h4>Johnson</h4>
						<p><strong>Goodluck Jonathan</strong>  is a Leadership Expert, Motivational Speaker . Lorem ipsumsit amet, consectetur adipiscing elsit amet, consectetur adipiscing elsit amet, consectetur adipiscing el  <a href="">Read More</a> 
						</p>
						
					<!-- <div class="icon">
						<a href="" class="" aria-hideen="true"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571760606/zbjtlwqjffgwvyc9klvc.png" style="width: 25px;"></a>
						<a href=""><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761066/a4zha34vheoeyzypvpqu.png" style="width: 25px;"></a>
		                <a href=""><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761008/bzosk4pcqvpldu59bo0w.png" style="width: 25px;"></i></a>
		                <a href="" aria-hideen="true"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571760662/hq5ctfvhjv3r05bqdski.png" style="width: 25px;"></a>
					</div> -->
				</div>
			</div>
			
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm" id="post-1">
				<div class="post">
						<h4>goodwill</h4>
						<p><strong>Segun Obasanjo</strong>  is a Leadership Expert, Motivational Speaker . Lorem ipsumsit amet, consectetur adipiscing elsit amet, consectetur adipiscing elsit amet, consectetur adipiscing el  <a href="">Read More</a> 
						</p>
					<!-- <div class="icon">
						<a href="" class="" aria-hideen="true"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571760606/zbjtlwqjffgwvyc9klvc.png" style="width: 25px;"></a>
						<a href=""><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761066/a4zha34vheoeyzypvpqu.png" style="width: 25px;"></a>
		                <a href=""><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761008/bzosk4pcqvpldu59bo0w.png" style="width: 25px;"></i></a>
		                <a href="" aria-hideen="true"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571760662/hq5ctfvhjv3r05bqdski.png" style="width: 25px;"></a>
					</div> -->
				</div>	
			</div>
			<div class="col-sm">
				<div class="post">
						<h4>Chiagoziem</h4>
						<p><strong>Bola Tinubu</strong>  is a Leadership Expert, Motivational Speaker . Lorem ipsumsit amet, consectetur adipiscing elsit amet, consectetur adipiscing elsit amet, consectetur adipiscing el  <a href="">Read More</a> 
						</p>
							  
					<!-- <div class="icon">
						<a href="" class="" aria-hideen="true"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571760606/zbjtlwqjffgwvyc9klvc.png" style="width: 25px;"></a>
						<a href=""><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761066/a4zha34vheoeyzypvpqu.png" style="width: 25px;"></a>
		                <a href=""><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761008/bzosk4pcqvpldu59bo0w.png" style="width: 25px;"></i></a>
		                <a href="" aria-hideen="true"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571760662/hq5ctfvhjv3r05bqdski.png" style="width: 25px;"></a>
					</div> -->
				</div>
			</div>
			
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm" id="post-1">
				<div class="post">
						<h4>TomisinLalude</h4>
						<p><strong>Raji Fashola</strong>  is a Leadership Expert, Motivational Speaker . Lorem ipsumsit amet, consectetur adipiscing elsit amet, consectetur adipiscing elsit amet, consectetur adipiscing el  <a href="">Read More</a> 
							</p>
					<!-- <div class="icon">
						<a href="" class="" aria-hideen="true"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571760606/zbjtlwqjffgwvyc9klvc.png" style="width: 25px;"></a>
						<a href=""><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761066/a4zha34vheoeyzypvpqu.png" style="width: 25px;"></a>
		                <a href=""><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761008/bzosk4pcqvpldu59bo0w.png" style="width: 25px;"></i></a>
		                <a href="" aria-hideen="true"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571760662/hq5ctfvhjv3r05bqdski.png" style="width: 25px;"></a>
					</div> -->
				</div>	
			</div>
			<div class="col-sm">
				<div class="post">
						<h4>Thanos</h4>
						<p><strong>Bukola Saraki</strong>  is a Leadership Expert, Motivational Speaker . Lorem ipsumsit amet, consectetur adipiscing elsit amet, consectetur adipiscing elsit amet, consectetur adipiscing el  <a href="">Read More</a> 
						</p>
					<!-- <div class="icon">
						<a href="" class="" aria-hideen="true"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571760606/zbjtlwqjffgwvyc9klvc.png" style="width: 25px;"></a>
						<a href=""><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761066/a4zha34vheoeyzypvpqu.png" style="width: 25px;"></a>
		                <a href=""><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761008/bzosk4pcqvpldu59bo0w.png" style="width: 25px;"></i></a>
		                <a href="" aria-hideen="true"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571760662/hq5ctfvhjv3r05bqdski.png" style="width: 25px;"></a>
					</div> -->
				</div>
			</div>
			
		</div>
	</div>
	
	<div class="pagination">
		<ul class="pages">
			<li><img src="https://res.cloudinary.com/siyfa/image/upload/v1571762484/cezdbfynpv1dvjfopzy0.png" style="width: 10px; color: #333333;"></li>
			<li class="pageitem">
				<a href="postpage1.html" class="pagelink" style="color: #0000FF; font-size: 1.3em;">1</a>
			</li>
			<li class="pageitem">
				<a href="post-page-2.html" class="pagelink" style="color: #333333; font-size: 1.2em;">2</a>
			<li class="pageitem">
				<a href="post_page_3.html" class="pagelink" style="color: #333333; font-size: 1.2em;">3</a>
			</li>
			<li><img src="https://res.cloudinary.com/siyfa/image/upload/v1571762485/sk98ivrsx2v2ypqgrguh.png" style="width: 10px; color: #333333;"> </li>
		</ul>
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
								<li><a href="faq.css">FAQs</a></li>
								<li><a href="donation_page.html">Donations</a></li>
							</ul>
						</div>
	
						<div class="col-md-4 col-sm-12  text-center">
							<div class="text-center social-links">
								<h3>Connect With Us</h3>
								<a href="https//facebook.com"><span class="fa fa-facebook"></span></a>
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
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
			integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
			integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
		</script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
			integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
		</script>
		
	</body>
	
	</html>
	<script type="text/javascript" src= "{{ asset('js/scripts/postpage1.js') }}"></script>