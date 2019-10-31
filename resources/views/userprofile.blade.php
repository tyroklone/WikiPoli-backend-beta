<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="img/png" href="images/favicon.png">
  <title>User</title>
 
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="{{ asset('css/styles/userprofile.css') }}"/>
</head>
<body>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
            </div>
            <h4 class="modal-title text-center followhead"></h4>
            <div class="modal-body" id="followResult">
              <!-- <h1><span id="result"></span></h1>
              <p id="comments"></p> -->
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
  <section>

     
  <div id="header">
     
    <div class="nav">
      <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top" id="navbar">
            
        <a class="ml-1" href="#"><img id="logo" src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png" alt="logo"></a>
              
                
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        
        <div class="collapse navbar-collapse mr-2" id="collapsibleNavbar">
          <ul class="navbar-nav navbar-nav ml-auto">

              <li class="nav-item pr-4">
                  <a class="nav-link odd" href="#"><span>3<i class="far fa-bell pl-1"></i></span></a>
                </li>
              
            
            <li class="nav-item pr-4">
              <a class="nav-link" href="#">Home</a>
            </li>
          
            <li class="nav-item pr-4">
              <a class="nav-link" href="#">Settings</a>
            </li>
          
            <li class="nav-item pr-5 bottom-border">
              <a class="nav-link" href="#"><span><i class="far fa-user pr-2"></i><span>John Doe</a>
            </li> 
            
            <li class="nav-item pr-4">
              <a class="nav-link mt-2" id="log-out" href="#">Log Out</a>
            </li>
          
          </ul>
        </div>  
      </nav>
    </div>
  </div>
</section>

 <main class="main-section container-fluid ">
  <section class="intro-section ">
      <div class="intro-section__form mt-5 pt-5 mr-2">
      <form class="form-inline float-right pt-4">
      
        <label for="email"></label>
       
        <input type="text" name="value" id="value" class=" " placeholder="Enter Politician's name">

        <button type="submit" class=" submit" value="submit">Search</button> 
    </form>
   </div>
  
   <div class="intro-section__name float-left mt-5 pt-2">
     <p class="john-doe">John Doe</p>
   </div>
          <div class="banner-image mt-5 pt-5">
           <img class="img-fluid mt-5" src="https://res.cloudinary.com/nkechi-christabel/image/upload/ar_16:9,c_fill,e_sharpen,g_auto,h_700,w_1900/v1571932477/iq3kkzskgnpkpdafppi7.jpg" alt="Fela Durotoye">
          </div>          
        </section>
        </main>
        <!--Nkechi's work ends here-->

        <main class="container">
            <div class="row">
                <div class="aside col-12 col-sm-4 col-md-4 col-lg-4 py-15">
                    <h2>John Doe</h2>
                    <p>I am a Lifestyle journalist par excellence, politics is my game. <br> <b><i class="fas fa-map-marker-alt"></i> Lagos, Nigeria</b> </p>
    
                    <p><i class="far fa-calendar-alt"></i> Joined February, 2008</p>
                    <p class="contrib"><b>50 Contributions &nbsp; 20 Posts &nbsp; 20 Favourites</b></p>

                    <!-- FOR THE FOLLOW AND UNFOLLOW FEATURES -->
                    <div class="followDiv">

                      <span 
                        onclick="showFollowers()"
                        id="followers" 
                        class="badge badge-primary float-left" 
                        data-toggle="modal" 
                        data-target="#myModal"
                        >
                        14+ follower
                      </span>

                      <span 
                        onclick="showFollowing()"
                        id="following" 
                        class="badge badge-primary float-right" 
                        data-toggle="modal" 
                        data-target="#myModal"
                      >
                        22+ following
                      </span>
                    </div>
                    
                    <div class="images">
                        
                          <img src="https://res.cloudinary.com/nkechi-christabel/image/upload/c_scale,h_190,w_281/v1571752819/yrwoswyydymwlcjraa1d.jpg" alt="...">
                          
                          <img src="https://res.cloudinary.com/nkechi-christabel/image/upload/c_scale,h_190,w_281/v1571752819/yrwoswyydymwlcjraa1d.jpg" alt="...">
                          
                          <img class="last" src="https://res.cloudinary.com/nkechi-christabel/image/upload/c_scale,h_190,w_281/v1571752819/yrwoswyydymwlcjraa1d.jpg" alt="...">
                          
                    </div>
                    <div class="images marg">
                        
                            <img src="https://res.cloudinary.com/nkechi-christabel/image/upload/c_scale,h_190,w_281/v1571752819/yrwoswyydymwlcjraa1d.jpg" alt="...">
                            
                            <img src="https://res.cloudinary.com/nkechi-christabel/image/upload/c_scale,h_190,w_281/v1571752819/yrwoswyydymwlcjraa1d.jpg" alt="...">
                            
                            <img class="last" src="https://res.cloudinary.com/nkechi-christabel/image/upload/c_scale,h_190,w_281/v1571752819/yrwoswyydymwlcjraa1d.jpg" alt="...">
                            
                      </div>
                      <div class="images marg">
                        
                            <img src="https://res.cloudinary.com/nkechi-christabel/image/upload/c_scale,h_190,w_281/v1571752819/yrwoswyydymwlcjraa1d.jpg" alt="...">
                            
                            <img src="https://res.cloudinary.com/nkechi-christabel/image/upload/c_scale,h_190,w_281/v1571752819/yrwoswyydymwlcjraa1d.jpg" alt="...">
                            
                            <img class="last" src="https://res.cloudinary.com/nkechi-christabel/image/upload/c_scale,h_190,w_281/v1571752819/yrwoswyydymwlcjraa1d.jpg" alt="...">

                           
                          <div class="mt-5 mb-2">
  <a href=""><button type="submit" class="create-post" value="submit">Create post</button> </a>
                                </div>
                            
                      </div>
                
                </div>
                <!-- TechieNg Work continues on footer -->
    
                <!-- Theresande's work starts -->
                <div class="col-12 col-sm-8 col-md-8 col-lg-8 py-5">
                  <p>
                     <b>Contributions</b> &emsp; &emsp;  <b><a href="#">Posts</a></b> &emsp;&emsp;<b>Favourites</b>
                  </p>
                  <hr>
                  <div class="col-3 col-sm-2 col-md-2 col-lg-2 mt-3">
                    <img class="image" src="https://res.cloudinary.com/lissacinta/image/upload/v1571955638/image2_gvpo75.png" alt="">
                  </div>
                  <div class="aside_content col-9 col-sm-10 col-md-10 col-lg-10 ml-auto">    

                  <p><b>John Doe</b></p>
                  <p class="right"><b>October 21 2019</b></p>
                      <div class="Fela-posts">
                      
                        <p>He was the Nigerian Presidential Candidate of the Alliance for New Nigeria party 
                          (ANN) for the 2019 Presidential elections. He was born to Lyiwola and Adeline Durotoye,
                          both profesors at the University... <br><a href="">Read More</a></p>
                      </div>
                      <div class="img-container Fela-posts mb-5">
              
                          
                              <img class="image"  src="https://res.cloudinary.com/nkechi-christabel/image/upload/c_scale,h_190,w_281/v1571752819/yrwoswyydymwlcjraa1d.jpg" alt="Fela Durotoye">
                              <div class="img__text pl-5 pt-4" style="display: inline;">Fela Durotoye</div>                          
                             
                      </div>
                        <section class="">        
                                   
                              <div class="col">                
                              <p class="interactives">                      
                              <i class="far fa-heart mr-auto"></i> <b>2.1K</b></p>
                               </div>            
                          <div class="social-media">                
                                                
                                  <div class="row">                                     
                                      <div class="ml-auto"> 
                                        <p class="interactives ml-auto"><b> See comments (50+)</b></p>    
                                        <p style="text-align: right;">                    
                                          <span class="fa-stack">
                                            <i class="fa fa-circle fa-stack-2x icon-background"></i>
                                            <i class="fas fa-share-alt fa-stack-1x" style="color: #fff;"></i>
                                          </span>
                                        </p>                        
                                      </div>                    
                                  </div>               
                              </div>                   
                  
                          </section>
                      
                      </div>
  ​                <div class="col-3 col-sm-2 col-md-2 col-lg-2 mt-3">
                    <img class="mt-3 image" src="https://res.cloudinary.com/lissacinta/image/upload/v1571955638/image2_gvpo75.png" alt="">
                  </div>
                  <div class="aside_content col-9 col-sm-10 col-md-10 col-lg-10 ml-auto">    

                    <p><b>John Doe</b></p>
                    <p class="right"><b>October 21 2019</b></p>
                      <div class="Fela-posts">
                      
                        <p>He was the Nigerian Presidential Candidate of the Alliance for New Nigeria party 
                          (ANN) for the 2019 Presidential elections. He was born to Lyiwola and Adeline Durotoye,
                          both profesors at the University... <br><a href="">Read More</a></p>
                      </div>
                      <div class="img-container Fela-posts mb-5">
                        
                              <img class="image"  src="https://res.cloudinary.com/nkechi-christabel/image/upload/c_scale,h_190,w_281/v1571752819/yrwoswyydymwlcjraa1d.jpg" alt="Fela Durotoye">
                          
                              <div class="img__text pl-5 pt-2" style="display: inline;">Fela Durotoye</div>
                      </div>
                        <section class="">        
                                   
                              <div class="col">                
                              <p class="interactives">                      
                              <i class="far fa-heart mr-auto"></i> <b>2.1K</b></p>
                               </div>            
                          <div class="social-media">                
                                                
                                  <div class="row">                                     
                                      <div class="ml-auto"> 
                                        <p class="interactives ml-auto"><b> See comments (50+)</b></p>                        
                                        <p style="text-align: right;">                    
                                          <span class="fa-stack">
                                            <i class="fa fa-circle fa-stack-2x icon-background"></i>
                                            <i class="fas fa-share-alt fa-stack-1x" style="color: #fff;"></i>
                                          </span>
                                        </p>                    
                                      </div>                    
                                  </div>               
                              </div>                   
                  
                          </section>
                      
                      </div>
  
        </main>
    <!-- TechieNg's starts -->
    
     
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
                  <li><a href="">About</a></li>
                  <li><a href="">Careers</a></li>
                  <li><a href="">FAQs</a></li>
                  <li><a href="">Donations</a></li>
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
      <script src="{{ asset('js/scripts/follow_unfollowscript.js') }}"></script>
      </body>
      </html>