<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Activities</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="img/png" href="images/favicon.png">
   
    
    <style>
        /* All externall CSS starts here */

@import url('https://fonts.googleapis.com/css?family=Lato&display=swap');

body{
    font-family: 'Lato', sans-serif;
    font-style: normal;
    font-weight: normal;
    font-size: 1.3em;
    line-height: 2.5rem;
    color: #000000;
    height: 100%;
    width: 100%;
    word-wrap: break-word;
}
.action_border{
display: flex;
    justify-content: space-between
}
aside, main{
    height: 100%;
}
p{
line-height: 2}
.sidebar_active{
background-color: #6D9BF1;
    padding: 5px 10px;
    text-align: center;
    position: relative;
    right: 26px;
}

.btn-primary{
    background-color: #6D9BF1 !important;
    color: white !important; 
    border-radius: 0;
    border: none;
}
 #sidebar{
    min-width: 250px;
    max-width: 250px;
    min-height: 100vh;
     margin-left:-195px;
     margin-bottom: -2400px; /* any large number will do */
  padding-bottom: 2400px;
 }
#sidebar.active {
    margin-left: 0;
}
.sidebar {
  
  position: relative;
  z-index: 999;
  
  
  background-color: rgba(109, 155, 241, 0.4);;
  overflow-x: ;
  transition: 0.5s;
  margin-right: 0!important;
}

.sidebar a {
  margin: 8px 8px 30px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #111;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

#sidebarCollapse {
    width: 60px;
    height: 40px;
    background: transparent;
    border: none;
    padding:10px;
    position: relative;
    left: 20px
    
}

#sidebarCollapse span {
    width: 80%;
    height: 3px;
    margin: 0 auto;
    display: block;
    background: #000;
    transition: all 0.4s cubic-bezier(0.810, -0.330, 0.345, 1.375);
}
#sidebarCollapse span:first-of-type,
    #sidebarCollapse span:nth-of-type(2),
    #sidebarCollapse span:last-of-type {
        transform: none;
        opacity: 1;
        margin: 5px auto;
    }

    /* Removing the vertical margin and make the first and last bars rotate again when the sidebar is open, hiding the second bar */
    #sidebarCollapse.active span {
        margin: 0 auto;
    }
    #sidebarCollapse.active span:first-of-type {
        transform: rotate(45deg) translate(2px, 2px);
    }
    #sidebarCollapse.active span:nth-of-type(2) {
        opacity: 0;
    }
    #sidebarCollapse.active span:last-of-type {
        transform: rotate(-45deg) translate(1px, -1px);
    }
.poli-recent{
    font-weight: 600;
    font-size:1.5rem;
}
.navbar-brand {
    margin-left: 5rem;
    width: 40px
}
.action_box{
    padding: 5rem 10rem;
    background-color: ;
}
.action_btn{
    width: 10rem;
    height:3rem;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    border: 0;
    font-family: Lato;
font-style: normal;
font-weight: bold;
font-size: 1.2rem;
}
.action_btn_reject{
    background: #6C1116;
}
.action_btn_approve{
    background: #23642D;
}
.action_btn_delete{
    background: #E81E1E;
}
.portfolio {
    background-color: rgba(33, 60, 220, 0.08);
    padding: 1rem 2rem;
    fill: solid;
    line-height: 28px;}
.img-fela{
    background-attachment: fixed !important;
    border-radius: 10px;
    width: 140%;
}
@media handheld, only screen and (max-width: 767px) {
    p{
        font-size: 12px
    }
    .headline .article{
        background-color: ;
}
    main{
        width: 90%!important;
    }
    #sidebarCollapse {
    width: 40px;
    height: 40px;
    
    padding: 1px;
}

#sidebarCollapse span {
    width: 60%;
    height: 3px;
    margin: 0 auto;
    padding-right: 0;
    
    }
    .img-fela{
width: 100%
    }
    #sidebarCollapse{
left:40px
    }
    #sidebar{
   
     margin-left:-210px;
     margin-bottom: -2700px; /* any large number will do */
  padding-bottom: 2700px;
 }
    .action_btn{
    width: 10rem;
    height:2rem;
    margin: 0 1em;
font-size: 1rem;
}
    .action_border{
display: flex;
    justify-content: center;}  
}
@media handheld, only screen and (min-width: 767px) {
    
}

    
    </style>
    
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top ">
            <a class="navbar-brand" href="#"><img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png" alt="wikipolilogo" width=110rem></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-5 pr-3 ">
                    <li class="nav-item active">
                        <a class="nav-link btn poli-quali" href="#">Hello, Super Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  btn btn-primary mx-auto" href="beforeLogin.html" style="width: 6em;">Log Out</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="d-flex justify-content-end mr-5">
            <form class="form-inline my-2">
                <div class="input-group ">
                    <input class="form-control" id="large-bttn" type="search" placeholder="Enter Politician's name" aria-label="Search">
                    <div class="input-group-append">
                        <button class="input-group-text btn btn-primary" id="search-space" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </header>
    <div class="content_box d-flex">
        <aside id="sidebar" class="sidebar d-flex align-items-start">
            <div class="mt-5">
                <a href="#">Dashboard</a>
                <a href="#">Admins</a>
                <a class="sidebar_active" href="#">Activities</a>
                <a href="#">Add Post</a>
                <a href="#">Add Privileges</a>
                <a href="#">Block/Unblock</a>
                <a href="#">Drafts</a>
                <a href="#">Log Out</a>
            </div>
            <div id="content">
                <button type="button" id="sidebarCollapse" class="navbar-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </aside>
        <main class="container">
          <section>
              <div>
                        <p class="poli-recent pb-5">Recent Activities</p>
                        </div> 
                        <div class="media">
                                <img src="https://res.cloudinary.com/samtech/image/upload/v1571830789/Fela-Durotoye.jpg" alt="" class="mr-3 mt-1 rounded-circle" style="width:30px; height: 30px;">
                                <div class="media-body">
                                 <p class="poli-quali">Posted by: Ayo Adele</p>
                                </div>
                        </div>
          </section>
           <section class="headline row mb-5">
            
                <div class="article col-md-4 col-12 col-sm-12 d-flex flex-column justify-content-between">
                   <div>
                    <h2 id="name-poli">ADETOKUNBO OLUFELA DUROTOYE</h2> 
        <p class="">May 12th, 1971 (Age 47) Ibadan,Oyo State Nigeria.</p>
        </div>
        <p id="" class="pb-">Adetoknbo Olufela (originally Oluwafeolami) Durotoye was born in Ibadan,
                  Oyo State on May 12, 1971 to Layiwola and Adeline Durotoye,both professors at the University of Ibadan.                                   
                  Fela  is a business consultant, leadership expert, and motivational speaker. Fela Durotoye is a NATION BUILDER &amp; the Chief 
                  Executive Officer of the GEMSTONE GROUP, a Leadership Development Institution aimed at raising leaders of 
                  excellence and exemplary values who would be committed to building Nigeria.</p>
                </div>
                <div class="article portfolio col-md-4 col-12 col-sm-12  d-flex flex-column justify-content-around">
                    <h3 class="poli-quali">Education</h3>                              
        <p class="">Moremi High School<br>Obafemi Awolowo University<br>Harvard University</p> 
        <br>                             
        <h3 class="poli-quali">Occupation</h3>
        <p class="text-wrap">Leadership Expert,Motivational Speaker</p>
        <br>                                
        <h3 class="poli-quali">Spouse</h3>                                    
        <p>Tara-Fela Durotoye</p>
        <br>                                    
        <h3 class="poli-quali">Children</h3>
        <p>3 (Mobolurin, Demilade & Morolaoluwa)</p>
        <br>                                    
        <h3 class="poli-quali">Website</h3>                                    
        <p><a href="www.feladurotoye.net">www.feladurotoye.net</a></p>    
                </div>
                <div class=" article col-md-4 col-12 col-sm-12 d-flex flex-column">
                    <p class=""> GEMSTONE Nation Builders Foundation is a non-profit, non-governmental organization targeted at 
            training youths towards transformational leadership and social change. He was the Nigerian presidential candidate 
            of the Alliance for New Nigeria party (ANN) for the 2019 presidential elections. Fela Durotoye is considered one of
            Nigeria’s leading strategists and business consultants with expertise in Culture Transformation, Service Leadership,                                         
            Workforce Activation & Facilitating Strategic Retreats. Fela currently mentors over 15,000 leaders in business, enterprise, 
            education, religion and the professional services sectors on the platform of The Fela Durotoye Leadership Network.</p>
                </div>
            <section class="image-section"> 
        <div class="py-4" style="">                
        <img src="https://res.cloudinary.com/wpgroom-com/image/upload/v1572370789/Fela-Durotoye_1_hpgoxj.jpg" class="  img-fela " alt="Fela durutoye">            
    </div>    
</section>
<section class="education mb-5">        
    <div class="container">            
    <article>                
    <header style="font-weight: 700; font-size: 20px"> Education </header>
    <hr>                
<section>                    
<p class="text-wrap">Fela attended the Staff Children's School (1974–1981) and graduated to Moremi High School (1981–1986).Durotoye
           proceeded to earn his Bachelor of Science Degree in Computer Science with Economics, as well as a Master's Degree in 
           Business Administration (M.B.A) at Obafemi Awolowo University, Ile-Ife. He is an alumnus of John F. Kennedy School of 
           Government Executive Education program of Harvard University. Fela Durotoye attended the High Impact Leadership for a better
           society program at the Yale University, he is also a certified leadership coach of the John Maxwell team. In 2015, Fela completed 
           the executive seminar program on strategy, innovation and governance at the Lagos Business school. This was followed by the 
           supernumerary police training program at the Nigerian Police training college, Ikeja where he received the Distinguished Student 
           award at his graduation and passing out parade.</p>
</section> 
</article>        
</div>    
</section>
<section class="career mb-5">        
    <div class="container">           
        <article>                
        <header style="font-weight: 700; font-size: 20px">Career</header>                
        <hr>                
        <section>                    
        <p class="text-wrap">Fela Durotoye was a financial analyst at Ventures & Trusts Limited in 1992. He was the head of customer        
             service department at Phillips Consulting Limited in 1998. Fela went on to start V.I.P Consulting Limited in year 2000 
             which soon became notable in customer and human management in Nigeria. The firm was restructured and switched from a 
             consulting firm to a social enterprise called Visible Impact Limited. This transformation or re-branding of the company 
             added to its existing consulting group, four other divisional groups comprising the Project Management group, the Multimedia group
            as well as the investment Management and Foundation groups to the new Visible Impact corporate structure. Fela has several clients 
            in the Banking and Investment sector, Oil and Gas sector, the telecommunications sector,the manufacturing and FMCG space as well as other multilateral and public sectors.</p>
        </section>            
    </article>        
</div>   
</section>
<section class="career">            
    <div class="container">                
        <article>                    
        <header style="font-weight: 700; font-size: 20px">Politics</header>
        <hr>                    
        <section>                        
        <p class="text-wrap poli-quali">On February 22, 2018, he made his intention to run for Presidency in the 2019 Nigerian general election under the                                 
            political party Alliance for New Nigeria. A coalition of 11 aspirants under the umbrella of the Presidential Aspirants Coming Together
            (PACT) unanimously elected Fela Durotoye as their consensus candidate. On Saturday, September 29, 2018, he emerged as the presidential
            candidate of the Alliance for New Nigeria (ANN) for the 2019 general elections. After several months                               
            he chose Khadijah Abdullahi-Iya as his running mate. She has been a successful social entrepreneur and would be his vice-President.</p>
        </section>                
    </article>
    <div class="d-flex justify-content-end">
    <p>29/ 10/ 2019</p>    
    </div>           
</div>    
</section>
               
           </section> 
           <section class="headline_banner"></section>
           <section class=" my-lg-5 action_box">
    <div class="action_border">
    <button class="action_btn action_btn_reject">Reject</button>
    <button class="action_btn action_btn_approve">Approve</button>
    <button class="action_btn action_btn_delete">Delete</button> 
</div>  
</section>
            
        </main>
    </div>
<!-- jQuery CDN - Slim version (=without AJAX) -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <!-- Popper.JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
 <!-- Bootstrap JS -->
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
 <script>
        $(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');
    });
});
</script>
</body>

</html>