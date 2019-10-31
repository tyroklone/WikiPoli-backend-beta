<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        @yield('title')
        <link rel="stylesheet" href="styles/main.css" />
        <!-- bootstrap -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
            />
        <link rel="icon" type="img/png" href="{{ asset('images/favicon.png') }}">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <span id="logo"
                          ><a href=""
                        ><img
                                src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png"
                                alt=""
                                width="100"/></a
                        ></span>
                </div>
                <div class="col-md-6">
                    <ul class="firstnav">
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline-block;">
                                @csrf

                                <button type="submit" id="btn" class="btn btn-sm btn-primary">LogOut</button>


                            </form>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-user"></i>&nbsp;{{Auth::user()->full_name}}</a>
                        </li>
                        <li><a href="">Settings</a></li>
                        <li>
                            <a href="" style="color: red;"
                               ><span>3</span><i class="fa fa-bell-o"></i
                                ></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <a href="" id="create"><i class="fa fa-user"></i>&nbsp;{{Auth::user()->full_name}}</a>
                </div>
                <div class="col-md-5">
                    <div class="input-group mb-3" style="text-align-last: inherit;">
                        <a href="{{url('create-post')}}" id="create">Create a post <i class="fa fa-plus"></i></a
                        >&nbsp;&nbsp;&nbsp;&nbsp;
                        <input
                            type="text"
                            class="form-control"
                            id="input"
                            placeholder="Enter Politicial Name"
                            />
                        <div class="input-group-append">
                            <span class="input-group-text">Search</span>
                        </div>
                    </div>

                </div>
            </div>
            @yield('content')



            <div id="footer">
                <div class="container" >
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

                        <div class="col-md-4 col-sm-12 text-center">
                            <h3 style="font-size:17px; padding-top: 14px;">Connect With Us</h3>
                            <div class="social-link">
                                <ul>
                                    <li><a href="facebook.com"><span class="fa fa-facebook"></span></a> </li>
                                    <li><a href="twitter.com"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="instagram.com"><span class="fa fa-instagram"></span></a> </li>
                                </ul>                                   
                                <p>contact@wikipoli.gq</p>
                            </div> 
                        </div>
                        <div class="col-lg-12 copyright text-center">
                            <p>&copy; 2019 Wikipoli - All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>