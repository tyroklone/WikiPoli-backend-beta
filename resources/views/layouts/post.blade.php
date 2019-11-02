<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @yield('title')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('styles/draft-post.css')}}">
        <link rel="icon" type="img/png" href="{{asset('images/favicon.png')}}">
        <link rel="manifest" href="{{asset('js/manifest.json')}}" />
        <meta name="theme-color" content="#333" />
		<style>
			html
{
	box-sizing: border-box;	
}
body
{
	font-family: "Lato", segoe UI, sans-serif;
	overflow-x: hidden;
	scroll-behavior: smooth;
	padding: 0;
	margin: 0;
}
a, a:hover
{
	text-decoration: none;
	color: inherit;
}
header #nav-logout
{
	font-weight: bolder;
}
header .logo img 
{
  width: 120px;
}

header .navbar p 
{
  font-size: 2rem;
  color:  #6D9BF1;
}

header .menu a 
{
  font-size: 1.5rem;
  color:  #6D9BF1;
}

header .menu li 
{
  padding-left: 2.5rem;
}

header .fa-bars 
{
  color: #000000;
}
footer
{
    background-color: #6D9BF1;
    color: white;
    text-align: center;
    border-top: 1px solid black;
    padding: 1rem 3rem;
}
footer > #links-container
{
	display: flex;
	flex-direction: row;
	justify-content: space-around;
}
footer .border
{
	display: none;
}
footer > #links-container > section
{
	display: flex;
	flex-direction: column;
}
footer > #links-container > section > *
{
	margin: 0.3rem auto;
}
footer > #links-container > section > .links-title
{
	margin: 1rem auto;
	font-weight: bolder;
}
footer #social-links
{
	width: 80%;
	margin: 0 auto;
	display: flex;
	flex-direction: row;
	justify-content: space-around;
}
footer #copyright
{
	font-size: 14px;
}
.text-center
{
	text-align: center;
}
#editor-section
{
	margin-bottom: 4rem;
}
#editor-section #intro
{
	color: rgba(0, 0, 0, 0.7);
}
#editor-section #editor-wrapper
{
	background-color: rgb(200, 200, 200);
	width: 70%;
	margin: 2rem auto;
	padding: 1.5rem 0.5rem 0.5rem;
	border-radius: 5px;
	position: relative;
}
#editor-section #post-title
{
	margin: 0 auto;
	width: 100%;
	padding: 0.5rem;
	font-family: inherit;
	font-size: 18px;
	border-radius: 3px;
	border: none;

}
#editor-section #post-body
{
	margin: 0 auto;
	display: block;
	width: 100%;
	padding: 0;
	font-family: inherit;
	font-size: 18px;
	border-radius: 3px;
	border: none;
	outline: none;
	resize: none;
	background-color: white;
	height: 40vh;
	overflow-y: auto;
}
#editor-section #post-body blockquote
{
	padding: 0.1rem 1rem;
	border-left: 5px solid #6D9BF1;
}
#editor-section #post-body img
{
	height: 300px;
	display: block;
	margin: 1rem auto;
}
#editor-section #post-body li
{
	margin-left: 0;
	padding-left: 0.5rem;
}
#editor-section #editor-header
{
	background-color: rgb(245, 245, 245);
	margin: 0.5rem auto 0.2rem;
	padding: 0.5rem 1rem;
	font-family: inherit;
	font-size: 18px;
	border-radius: 3px;
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
}
#editor-section #editor-header .option-group
{
	margin-right: 3rem;
}
#editor-section #editor-header .option
{
	margin-right: 0.4rem;
	padding: 0.2rem 0.5rem;
	cursor: pointer;
	align-self: center;
	transition: 0.6s ease-out;
	position: relative;
	display: inline-block;
	border: none;
	outline: none;
	color: inherit;
	background-color: inherit;
}
#editor-section #editor-header .option:hover, #editor-section #editor-header .option:focus
{
	background-color: #ADCBFB;
}
#editor-section #editor-header .active-option, 
#editor-section #editor-header .active-option:hover
{
	background-color: #6D9BF1;
}
#editor-section #editor-header #img-upload-div
{
	display: inline-block;
	overflow: hidden;
	position: relative;
	align-self: center;
	cursor: pointer;
}
#editor-section #editor-header #img-upload-div input
{
	position: absolute;
	opacity: 0;
	z-index: 2;
	left: 0;
	top: 0;
	font-size: 100px;
}
#editor-section #btns-wrapper
{
	display: flex;
	flex-direction: row;
	width: 70%;
	justify-content: flex-end;
	margin: 1rem auto;
}
#editor-section #btns-wrapper button
{
	font-size: inherit;
	font-family: inherit;
	font-weight: bolder;
	border-radius: 4px;
	border: none;
	outline: none;
	padding: 0.5rem 1.1rem;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
	transition: 0.4s ease-out;
}
#editor-section #btns-wrapper button:hover
{
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.5);
}
#editor-section #btns-wrapper #save-draft
{
	color: #6D9BF1;
	background-color: white;
	border: 1px solid #6D9BF1;
	margin: 0 2rem;
}
#editor-section #btns-wrapper #create-post
{
	color: white;
	background-color: #6D9BF1;
	border: 1px solid #6D9BF1;
}

#links-modal
{
	display: none;
	position: absolute;
	background-color: rgba(0, 59, 100, 0.8);
	border-top: 0.7rem solid rgb(0, 0, 0, 0.6);
	opacity: 0;
	height: 70%;
	width: 70%;
	left: 15%;
	top: 15%;
	color: white;
	z-index: 20;
	transition: 0.4s ease-out;
	flex-direction: column;
	justify-content: center;
	box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
	border-radius: 5px;
}
#links-modal > *
{
	align-self: center;
	display: flex;
	flex-direction: column;
	margin: 0.5rem auto;
}
#links-modal input
{
	width: 20rem;
	outline: none;
	border: none;
	font-size: inherit;
	font-family: inherit;
	padding: 0.2rem;
	border-radius: 3px;
}
#links-modal button
{
	border: none;
	outline: none;
	font-size: inherit;
	font-family: inherit;
	border-radius: 5px;
	padding: 0.3rem 2rem;
	margin: 1rem auto;
	transition: 0.4s ease-out;
}
#links-modal button:hover, #links-modal button:focus
{
	box-shadow: 0 0 15px rgba(0, 0, 0, 0.8);
}
#links-modal #modal-close
{
	position: absolute;
	top: -10%;
	left: 94%;
	font-size: 35px;
	padding: 0.2rem;
	cursor: pointer;
	transition: 0.4s ease-out;
}
#links-modal #modal-close:hover
{
	color: darkorange;
}


@media (max-width: 860px)
{
	header .menu
	{
		border-bottom: 1px solid rgba(0, 0, 0, 0.1);
		padding-bottom: 1rem;
	}
	header .menu a 
	{
	  font-size: 1rem;
	}
	#editor-section #intro
	{
		margin: 1rem auto;
		font-size: 27px;
	}
	#editor-section #editor-wrapper
	{
		width: 90%;
		padding: 1.5rem 0.5rem 0.5rem;
	}
	#editor-section #editor-header
	{
		margin: 0.5rem auto 0.2rem;
	}
	#editor-section #editor-header .option-group
	{
		margin-right: 0.5rem;
	}
	#editor-section #post-body, #editor-section #post-title, #editor-section #editor-header
	{
		font-size: 16px;
	}
	#editor-section #editor-header
	{
		padding: 0.2rem 0.5rem;
		font-family: inherit;
		font-size: 18px;
		border-radius: 3px;
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
	}
	#editor-section #btns-wrapper
	{
		width: 100%;
		justify-content: space-around;
		padding: 0 2rem 1rem;
	}
	#editor-section #btns-wrapper button
	{
		padding: 0.3rem 0.8rem;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		transition: 0.4s ease-out;
	}
	#editor-section #btns-wrapper #save-draft
	{
		margin: 0;
	}
	footer > #links-container
	{
		flex-direction: column;
		justify-content: space-around;
	}
	footer .border
	{
		display: block;
		width: 40%;
		border: 1px solid yellow;
		margin: 0.5rem auto;
	}
	footer > #links-container > section > *
	{
		margin: 0.2rem auto;
	}
	footer #social-links
	{
		width: 50%;
	}
	footer #copyright
	{
		margin: 1rem auto;
		font-size: 12px;
	}
	footer #email-contact
	{
		font-size: 13px;
	}

	#links-modal
	{
		width: 90%;
		left: 5%;
		font-size: 14px;
	}
	#links-modal input
	{
		width: 15rem;
	}
	#links-modal button
	{
		padding: 0.3rem 1.5rem;
	}
	#links-modal #modal-close
	{
		top: -10%;
		left: 91%;
	}
}

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
    </head>
    <body>
        @include('layouts.post_navbar')
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="{{asset('scripts/index.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
