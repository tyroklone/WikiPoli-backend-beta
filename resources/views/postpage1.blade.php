
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
    <link rel="stylesheet" type="text/css" href= "{{ asset('css/styles/postpage1.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/styles/index.css') }}"/>
	<link rel="icon" type="img/png" href="images/favicon.png">
	<title>WikiPoli | Posts</title>

	<style>

body,html{
  margin: 0;
  padding: 0;
  height: 100%;
  font-family: 'Lato';
  box-sizing: border-box; 
}
.logo{margin-left: -2%;}
.navbar-nav{margin-right: -6%;}
@media only screen and (max-width: 768){
.navbar-nav{margin-left: 4%;}
}
#signUp{
color: white;
padding: 8px 20px;
}
#logIn{
margin-top: 5px;
font-size: 1.5em;
}
.col-sm
{
  cursor: pointer;
  transition: 0.3s ease-out;
}
.col-sm:hover
{
  box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.2);
}
.custom-toggler .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0,0,0, 0.7)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
}

.custom-toggler.navbar-toggler {
  border-color: #000;
}
.search{
overflow: auto;
display: flex;
flex-direction: row;
justify-content: space-between;
margin-top: 10px;
padding: 0 100px;
}
.search > *
{
  align-self: center;
}
#posts-intro
{
  text-align: center;
  font-weight: lighter;
  display: block;
  font-size: 45px;
  margin: 1rem auto 2rem;
}
#create-post
{
  background-color: #6A9AD1;
  color: white;
  border: none;
  outline: none;
  padding: 0.5rem 2rem;
  font-size: 18px;
  transition: 0.4s ease-out;
}
#create-post:hover, .search input[type="submit"]:hover
{
  background-color: darkblue;
}
.search input[type="text"]{
padding: 6px 5px;
width: 250px;
}
.search input[type="submit"]
{
border: 0px;
background: none;
background-color: #6D9BF1;
color: #fff;
padding: 8px 20px;
border-top-right-radius;: 5px;
cursor:pointer;
margin-right: 5px;
transition: 0.4s ease-out;
}
@media only screen and (max-width : 780px)
{
  .search
  {
    display: flex;
    flex-direction: column-reverse;
    justify-content: space-between;
    width: 100%;
    height: 10rem;
  }
  .search form
  {
    width: 90vw;
  }
.search input[type="submit"]{margin-top: 5px; float: left; margin-left: 5%;}
.search input[type="text"]{
  width: 90%;
  margin-left: 5%;
}

}
.col-sm {
border: 1px solid #6A9AD1;
margin-top: 70px;
}
#post-1{
margin-right: 80px;
}
@media only screen and (max-width: 780px){
#post-1{
  margin-right: -80px;
}
}
@media only screen and (max-width: 780px){
.col-sm{
  border: none;
  margin-top: 30px;
  margin-left: -7%;
}

}
.post{
padding: 10px 10px 10px 60px;
}
.icon a{
padding-right: 7px;
}
.icon{padding-bottom: 30px;}
.pagination{
float: right;
margin-top: 50px;
margin-right: 80px;
}
.pages li{
display: inline;
padding-right: 20px;
}
.login-footer{
  background: #213CDC;
  list-style: none;
  display: flex;
  max-width: 100%;
  padding: 50px;
}
.footer-links{
  max-width: 608px;
  margin: 0 auto;
  margin-top: ;

}
.footer-links .right{
  max-width: 40%;
  float: right;

}
.footer-links .left{
  max-width: 40%;
  float: left;
}

.footer-links p{
  color: #fff;
  text-align: center;
}
.footer-links ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  flex-wrap: wrap;
}
.footer-links li{
  flex: 1 1 100%;
}
.footer-links .icon-area{
  flex: 1 1 20%;
}
.footer-links a{
  display: inline-block;
  width: 100%;
  text-align: center;
 transition: 6s;
  color:#fff;
  letter-spacing: 2px;
  text-decoration: none;
  padding: 20px 5px;
}
.footer-links a:hover{
  background: #fff;
  color:#213CDC;
}
@media all and (max-width:1000px){
  .footer-links ul{
      flex-wrap: wrap;
  }
  .footer-links li{
      flex: 1 1 100%;
  }
  .footer-links .icon-area{
      flex: 1 1 10%;
  }
}
@media all and (max-width:500px){
  .footer-links .left, .footer-links .right{
      float: none;
      max-width: 100%;
  }
  .footer-links li{
      flex-basis: 100%;
  }
}


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
	<nav class="navbar navbar-expand-lg navbar-custom bg-custom">
		<div class="container">
			<a href="{{ url('/') }}" class="logo"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571745363/u0zhq4fwslfr4u5lx5qt.png" alt="logo" class="img-fluid" width="150px;"></a>
			<button class="navbar-toggler float-right custom-toggler" type="button" data-toggle="collapse" data-target="#navbar9" style="color: #000000;">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="navbar-collapse collapse" id="navbar9">
				<ul id="main-navbar" class="navbar-nav ml-auto"> 
					<li class="navbar-item mr-5">
						<a href="{{ route('login') }}" class="navbar-link" style="color: black;" id="logIn">Log In</a>
					</li>
					<li class="navbar-item mr-5">
						<a href="{{ route('register') }}" class="btn navbar-link" id="signUp" style="background-color: #6d9bf1;">Sign Up</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
	<!--h1 id="posts-intro">All Posts</h1-->
	<div class="search">
		<button onclick="location.href='draft-post.html'" id="create-post">New Post</button>
		<form action="action_page.php">
			<input type="text" name="search" placeholder="Search Politician's name" class="justify-content-right">
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
	<script type="text/javascript" src="{{ asset('js/scripts/postpage1.js') }}"></script>