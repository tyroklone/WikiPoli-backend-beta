<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles/footer.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/styles/careers.css') }}"/>
    <link rel="icon" type="img/png" href="images/favicon.png">
    <title>Careers </title>
    <style>

footer {
    background: rgba(33, 60, 220, 0.1);
}



.footer-list li  a {
    text-decoration: none;
    color: black;
    text-align: center;
}

.footer-list li{
   margin: 15px;
    
}

.footer-list {
    list-style: none;
    text-align: center;
    font-weight: bold;
    display: flex;
    height: 100%;
    justify-content: space-evenly;
    align-items: center;
    position: absolute;
    right: 5%;
    
}

.footer_brand img{
    height: 15vh;
}



/* media queries */
@media screen and (max-width: 768px){
    .footer-list li {
        font-weight:  bold;
        font-size: 13px;       
    }
    
}

@media (min-width: 320px) and (max-width: 767px) {
    footer {
        height: 200px;
    }

    .footer-list{
        display: flex;
        flex-direction: column;
        right: 25%;
        transform: translate(-20%, 0%);
        height: auto;
        text-align: center;       
    }

    .footer-nav{
        width: 100%;
        
    }

    .footer-list li{
        margin: 10px 0px;
         
     }
}

        .join-team{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    padding: 30px;
    background-color: #6D9BF1;
    color: white;

}
.join-team h2{
    font-family: 'Lato', sans-serif;
    font-style: normal;
    font-weight: normal;
    font-size: 50px;
    line-height: 60px;
    letter-spacing: -0.05em;
}
.join-team p{
    margin-top: 50px;

    font-family: 'Lato', sans-serif;
    font-style: normal;
    font-weight: normal;
    font-size: 28px;
    line-height: 34px;
    text-align: center;
}

main{
    margin-top: 30px;
    width: 100%;
}
main .container{
    
}
.join-us{
    font-family: 'Lato', sans-serif;
    font-style: normal;
    font-weight: normal;
    font-size: 20px;
    line-height: 24px;
    margin-bottom: 30px;
}
.benefits{
    margin: 50px 0;
}
.benefit-item{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
} 
.benefit-item-icon{
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #6D9BF1;
    width: 125px;
    height: 125px;
    border-radius: 100%;
}
.benefit-item p{
    margin-top: 15px;

    font-family: 'Lato', sans-serif;
    font-style: normal;
    font-weight: bold;
    font-size: 20px;
}
.jobs{
    margin: 50px 0;
}
.jobs h2{
    font-family: 'Lato', sans-serif;
    font-style: normal;
    font-weight: normal;
    font-size: 50px;
}
.jobs p{
    margin-top: 20px;
    margin-bottom: 50px;
    font-family: 'Lato', sans-serif;
    font-style: normal;
    font-weight: 300;
    font-size: 30px;
}
.apply-here{
    margin-top: 100px;
}
hr{
    width: 80%;
}
.no-display{
    display: none;
}
#footer{
    background: #6D9BF1 !important;
}
.social-links h3 {
font-size: 1rem;
line-height: 1.5;
}
    </style>
</head>

<body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-custom bg-custom">
        <div class="container">
            <a href="index.html" class="logo"><img
                    src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png"
                    alt="logo" class="img-fluid" width="150px;"></a>
            <button class="navbar-toggler float-right custom-toggler" type="button" data-toggle="collapse"
                data-target="#navbar9" style="color: #213dcd;">
                <span class=" show-nav navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar9">
                <ul class="navbar-nav ml-auto">
                    , <li class="navbar-item mr-5">
                        <a href="index.html" class="btn navbar-link" id="signUp">Home</a>
                    </li>
                    <li class="navbar-item mr-5">
                        <a href="about.html" class="btn navbar-link" id="signUp">About Us</a>
                    </li>
                    <li class="navbar-item mr-5">
                        <a href="contact.html" class="btn navbar-link" id="signUp">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="join-team w-100">
        <h2>Join Our Team</h2>
        <p> We are looking for talents to help build our platform and <br> improve the electoral system in Nigeria</p>
    </div>

    <main>
        <div class="container d-flex flex-column align-items-center">

            <div class="join-us row">
                <p>With our mission at WikiPoli to gather information on the political system in Nigeria, you can join
                    us in
                    <br>
                    making this happen. At WikiPoli, we recruit talented people and give them the space, resources and
                    <br>
                    support to do the best work of their lives. We hire the most capable people, treat them with genuine
                    <br>
                    respect and give them the means to succeed.</p>
            </div>
            <hr>

            <div class="benefits row">

                <div class="benefit-item col-md-4 mb-5 col-sm-6 col-xs">
                    <div class="benefit-item-icon"><img src="images/salary.png" alt="salary"></div>
                    <p>Good Salary</p>
                </div>
                <div class="benefit-item col-md-4 mb-5 col-sm-6 col-xs">
                    <div class="benefit-item-icon"><img src="images/food.png" alt="food"></div>
                    <p>Free Lunch</p>
                </div>
                <div class="benefit-item col-md-4 mb-5 col-sm-6 col-xs">
                    <div class="benefit-item-icon"><img src="images/thinker.png" alt="learning"></div>
                    <p>Learning and Development</p>
                </div>

                <div class="benefit-item col-md-4 mb-5 col-sm-6 col-xs">
                    <div class="benefit-item-icon"><img src="images/first-aid.png" alt="health"></div>
                    <p>Health Insurance</p>
                </div>
                <div class="benefit-item col-md-4 mb-5 col-sm-6 col-xs">
                    <div class="benefit-item-icon"><img src="images/car-loan.png" alt="car"></div>
                    <p>Car Loan</p>
                </div>
                <div class="benefit-item col-md-4 mb-5 col-sm-6 col-xs">
                    <div class="benefit-item-icon"><img src="images/multiple-users.png" alt="colleagues"></div>
                    <p>Work with amazing people</p>
                </div>

            </div>
            <hr>
            <div class="workspace-images row justify-content-between w-100">
                <img class="col-md-4 p-5 mb-5 col-sm-6 col-xs" src="images/workspace1.png" alt="workspace">
                <img class="col-md-4 p-5 mb-5 col-sm-6 col-xs" src="images/workspace2.png" alt="workspace2">
                <img class="col-md-4 p-5 mb-5 col-sm-6 col-xs" src="images/workspace3.png" alt="workspace3">
            </div>
            <hr>
            <div class="jobs d-flex flex-column align-items-center">
                <h2>Available Jobs</h2>
                <p class="">Sorry, we don't have any open positions at this moment</p>
                <div class="form-style no-display">
                    <form class="check d-flex flex-column align-items-center" action="#" method="post">
                        <h3>Apply Here</h3>
                        <ul class="form-style">
                            <li>
                                <label>Full Name <span class="required">*</span></label><input type="text" name="field1"
                                    class="field-divided" placeholder="First" /> <input type="text" name="field2"
                                    class="field-divided" placeholder="Last" />
                            </li>
                            <li>
                                <label>Email Address<span class="required">*</span></label>
                                <input type="email" name="field3" class="field-long" />
                            </li>
                            <li>
                                <label>Phone Number<span class="required">*</span></label>
                                <input type="tel" name="field4" class="field-long" />
                            </li>
                            <li>
                                <label for="cv"> <strong>Your CV</strong> <br> (.pdf .doc .docx .rtf | Max.: 10Mb)
                                </label>
                                <input name="field5" type="file"
                                    accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/rtf">
                            </li>
                            <li>
                                <label>Cover Letter/ Portfolio link? <span class="required">*</span></label>
                                <textarea name="field6" id="field6" class="field-long field-textarea"></textarea>
                            </li>
                            <li>
                                <input type="checkbox" required>
                                <span> I have read the <a href="privacypolicy.html" target="_blank">privacy policy</a>
                                    and
                                    hereby I
                                    give my consent to Wikipoli <br> to process and handle my personal data given in the
                                    application
                                    form <br> and in my CV for the purpose of preparing the recruitment process and/or
                                    future
                                    hiring
                                    process. </span>
                            </li>
                            <li>
                                <input type="submit" value="APPLY" />
                            </li>
                        </ul>
                    </form>
                </div>
            </div>


        </div>
    </main>
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