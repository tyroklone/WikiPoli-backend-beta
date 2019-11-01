<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faq</title>
    <link rel="stylesheet" href="{{ asset('css/styles/faq.css') }}"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="icon" type="img/png" href="images/favicon.png">

  <style>
    

     .side-segment h3:after,.side-segment h2:after {
	background-color: #535a6b;
} 

 footer {
    background: rgba(33, 60, 220, 0.1);
    margin: auto;
    overflow: hidden;
    padding: 15px;
}
.footer_elements,
.footer_brand {
    display:  flex;
    flex-direction: column;
    padding-inline-start:  0px;
    align-items: center;
    margin: 0 0 0 0;
}
.footer_elements {
    width: auto;
}
.footer_elements li {
    font-weight:  bold;
    font-size: 18px;
    display: inline-block;
    padding:  5px;      
    width: fit-content;
}
.footer_elements li  a {
    text-decoration: none;
    color: black;
}
.footer_brand  img {
    height:  80px;
    width: 100px;
    vertical-align: middle;
}
@media screen  and (min-width: 600px){
    .footer_brand {
                        float: left;
    }
    .footer_brand {
                        left: 223px;
                        margin: 0 0 0 5vw ;
    }
    
    .footer_elements li { 
                        margin: 0 0 0 20px ;
    }
    .footer_elements{
                        margin:  15px 0 0 0;
                        /* line-height: 60px; */
                        /* vertical-align: middle;
                        flex-direction:  row;
                        padding-inline-start:  0px;
                        justify-content: flex-end;
    }
} 

 footer {
    background: rgba(33, 60, 220, 0.1);
    margin: auto;
    overflow: hidden;
    padding: 15px;
}
.footer_elements,
.footer_brand {
    display:  flex;
    flex-direction: column;
    padding-inline-start:  0px;
    align-items: center;
    margin: 0 0 0 0;
}
.footer_elements {
    width: auto;
}
.footer_elements li {
    font-weight:  bold;
    font-size: 18px;
    display: inline-block;
    padding:  5px;      
    width: fit-content;
}
.footer_elements li  a {
    text-decoration: none;
    color: black;
}
.footer_brand  img {
    height:  80px;
    width: 100px;
    vertical-align: middle; 

 } 
 @media screen  and (min-width: 600px){
    .footer_brand {
                        float: left;
    }
    .footer_brand {
                        left: 223px;
                        margin: 0 0 0 5vw ;
    }
    .footer_elements li { 
                        margin: 0 0 0 20px ;
    }
    .footer_elements{
                        margin:  15px 0 0 0; */
                        /* line-height: 60px; */
                        /* vertical-align: middle;
                        flex-direction:  row;
                        padding-inline-start:  0px;
                        justify-content: flex-end;
    }
} 
  </style>
</head>

<body>
  <header>
        <nav class="navbar navbar-expand-lg navbar-custom bg-custom">
            <div class="container">
              <a href="index.html" class="logo"><img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png"alt="logo" class="img-fluid" width="150px;"></a>
              <button class="navbar-toggler float-right custom-toggler" type="button" data-toggle="collapse" data-target="#navbar9" style="color: #000000;">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="navbar-collapse collapse" id="navbar9">
                <ul class="navbar-nav ml-auto"> 
                  <li class="navbar-item mr-5">
                    <a href="signin.html" class="navbar-link" style="color: black;" id="logIn">Log In</a>
                  </li>
                  <li class="navbar-item mr-5">
                    <a href="signup.html" class="btn navbar-link" id="signUp" style="background-color: #0000FF;">Sign Up</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
      <section> 
          <div class="container"> 
<h2>Frequently Asked Questions</h2>
<br>
<br>
            <p>Login and Registration Issues</p>
<div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
            Why do I need to Sign Up/Log In?
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="card-body">
            You may not have to, however, in order to post messages you must sign up/log in. Also, registration gives you access to additional features not available to guest users such as private messaging the administrator, subscription to latest news on this site, etc. It only takes a few moments to register so it is recommended you do so.
          </div>
      </div>
    </div>
    <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
            What is WikiPoli?
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
            It is a special type of website designed to make contribution on everything politics easy. Many people are constantly improving WikiPOLIS, making thousands of edits every minute.
          </div>
      </div>
    </div>
    <div class="card">
        <div class="card-header">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
              I registered but cannot login!
          </a>
        </div>
        <div id="collapseThree" class="collapse" data-parent="#accordion">
          <div class="card-body">
              First, check your username and password. If they are correct, then one of two things may have happened. If you were sent an email, follow the instructions. If you did not receive an email, you may have provided an incorrect email address or the email may have been picked up by a spam filer. If you are sure the email address you provided is correct, try contacting an administrator.
            </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
            I’ve lost my password!
          </a>
        </div>
        <div id="collapseFour" class="collapse" data-parent="#accordion">
          <div class="card-body">
            Don’t panic! While your password cannot be retrieved, it can easily be reset. Visit the login page and click <em>I forgot my password</em>. Follow the instructions and you should be able to log in again shortly.<br />However, if you are not able to reset your password, contact a board administrator.
        </div>
        </div>
      </div>
    </div>
  </div>
      </section>
      <br>
      <br>
      <section>
  <div class="container">
            <p>Posting Issues</p>

    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
            How do I create a new topic or post a reply?
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="card-body">
            To post a new topic in a forum, click "New Topic". To post a reply to a topic, click "Post Reply". You may need to register before you can post a message. A list of your permissions in each forum is available at the bottom of the forum and topic screens. Example: You can post new topics.     </div>
        </div>
      </div>
    </div>
  </section>
  <br>
  <br>
<section>
  <div class="container">
            <p>Others</p>
      <div class="card">
        <div class="card-header">
          <a class="card-link" data-toggle="collapse" href="#collapseOne">
            Who do you think is the richest Nigerian politician alive?
          </a>
        </div>
        <div id="collapseOne" class="collapse show" data-parent="#accordion">
          <div class="card-body">
            I had an argument with a friend recently about some of the richest Nigerian politicians alive, so I am bringing the question here for you guys to give your opinions and help us settle it once and for all.
      </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
            Who is your best Nigerian governor so far in 2019?
        </a>
        </div>
        <div id="collapseTwo" class="collapse" data-parent="#accordion">
          <div class="card-body">
            Which governor do you think has performed so well this year and deserved the best governor in Nigeria for the year 2019?
        </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
            How much does a local government councillor earn in Nigeria?
          </a>
        </div>
        <div id="collapseThree" class="collapse" data-parent="#accordion">
          <div class="card-body">
            It seems like the local government Councillor is a very lucrative position to hold in Nigeria. I have seen people fighting and doing all sorts of things just to get the position. So, I’m tempted to ask. Like how much 
        </div>
        </div>
      </div>
    </div>
</div>
</section>
<br>
<br>

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

</body>

</html>

