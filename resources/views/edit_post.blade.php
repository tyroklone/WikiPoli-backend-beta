<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles/edit-page.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles/edit-post.css') }}"/>
    <link rel="icon" type="img/png" href="images/favicon.png">
</head>


<body>
<nav class="navbar navbar-expand-lg navbar-custom bg-custom">
    <div class="container">
        <a href="index.html" class="logo"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571745363/u0zhq4fwslfr4u5lx5qt.png" alt="logo" class="img-fluid" width="150px;"></a>
        <button class="navbar-toggler float-right custom-toggler" type="button" data-toggle="collapse" data-target="#navbar9" style="color: #000000;">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar9">
            <ul class="navbar-nav ml-auto">
                <li class="navbar-item mr-5">
                    <a href="#" class="navbar-link" style="color: black;" id="logIn">Home</a>
                </li>
                <li class="navbar-item mr-5">
                    <a href="#" class="btn navbar-link" id="signUp" style="background-color: #6D9BF1;">Posts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <h4 id="politic-head" style="padding-left: 1px;">Edit Post</h4>
    <form  action="">
        <div class="form-row">

            <div class="form-row col-md-6">
                <div class="form-group col-4 " >
                    <label for="first-name">First Name</label>
                    <input type="text" class="form-control border border-primary" id="firstname" placeholder="Adeola">
                </div>

                <div class="form-group col-4">
                    <label for="last-name">Last Name</label>
                    <input type="text" class="form-control border border-primary " id="lastname" placeholder="Adekoyejo">
                </div>

                <div class="form-group col-8">
                    <label for="dob">Date of Birth</label>
                    <input type="text" class="form-control border-primary" id="dob" placeholder="DD/MM/YYYY">

                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="biography">Biography</label>
                <textarea class="form-control border border-primary" name="" id="" rows="5" id="biography"></textarea>
            </div>

        </div>

        <div class="form-row">

            <div class="form-row col-md-6">
                <div class="form-group col-8 " >
                    <label for="Occupation">Occupation</label>
                    <input type="text" class="form-control border border-primary" id="Occupation" placeholder="Leadership">
                </div>

                <div class="form-group col-5">
                    <label for="children">No. Of Children</label>
                    <input type="text" class="form-control border border-primary " id="children" placeholder="3">
                </div>

                <div class="form-group col-8">
                    <label for="spouse">Spouse Name</label>
                    <input type="text" class="form-control border border-primary " id="spouse" placeholder="Michael">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="education">Education History</label>
                <textarea class="form-control border border-primary" name="" id="" rows="5" id="education"></textarea>
            </div>

        </div>

        <div class="form-row">

            <div class="form-row col-md-6">
                <div class="form-group col-8 " >
                    <label for="education">Education</label>

                    <div class="input-group-append">
                        <input type="text" class="form-control border border-primary col-9 " id="education" placeholder="OAU">
                        <span class="input-group-text" style="background-color: #6D9BF1; color: white;">+</span>
                        <span class=""></span>
                    </div>
                    <br>
                    <div class="input-group-append">
                        <input type="text" class="form-control border border-primary " id="education" placeholder="Havard University">
                        <span class="input-group-text" style="background-color: #6D9BF1; color: white;">+</span>
                        <span class=""><img src="https://res.cloudinary.com/upperli/image/upload/v1571829931/delete_1_1_cdrukf.png"> </span>
                    </div>
                    <br>
                    <div class="input-group-append">
                        <input type="text" class="form-control border border-primary " id="education" placeholder="Unilag">
                        <span class="input-group-text" style="background-color: #6D9BF1; color: white;">+</span>
                        <span class=""><img src="https://res.cloudinary.com/upperli/image/upload/v1571829931/delete_1_1_cdrukf.png"> </span>
                    </div>
                </div>




            </div>
            <div class="form-group col-md-6">
                <label for="career">Career History</label>
                <textarea class="form-control border border-primary " name="" id="" rows="5" id="career"></textarea>
            </div>

        </div>
        <div class="form-row">

            <div class="form-row col-md-6">
                <div class="form-group col-8">
                    <label for="website">Website</label>
                    <input type="text" class="form-control border border-primary" id="website" placeholder="www.adeola.com">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="political">Political History</label>
                <textarea class="form-control border border-primary " name="" id="" rows="5" id="political"></textarea>
            </div>

        </div>

        <div class="form-group col-md-12">
            <label for="posts">Post Description(This short description is what shows on the recent posts page)</label>
            <textarea class="form-control border border-primary" name="" id="" rows="5" id="political"></textarea>
        </div>

        <button type="submit" name="Post" id="edit">Edit</button>




    </form>
</div>
<div style="clear: both"></div>

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

                <span class="line"></span>

                <div class="col-md-4 col-sm-12  text-center">
                    <ul class="quick-links">
                        <li>Company</li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="careers.html">Careers</a></li>
                        <li><a href="FAQ.html">FAQs</a></li>
                        <li><a href="donation_page.html">Donations</a></li>
                    </ul>
                </div>

                <span class="line"></span>

                <div class="col-md-4 col-sm-12  text-center">
                    <div class="text-center social-links">
                        <h3>Connect With Us</h3>
                        <a href="facebook.com"><span class="fa fa-facebook pl-4"></span></a>
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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
 