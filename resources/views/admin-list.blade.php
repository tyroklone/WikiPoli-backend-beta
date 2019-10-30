<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/styles/style.css') }}">
        <title>Admin-List</title>
        <style>

            body {
                font-family: 'Lato', sans-serif;
            }
            .side {
                background-color: rgb(188, 208, 245);
            }
            aside {
                height: 100vh;
            }
            .list {
                background-color: rgb(188, 208, 245);
                border: none;
                font-size: 17px;
            }
            .flex {
                display: flex;
            } 
            .done {
                position: relative;
                float: right !important;
            }
            .lead {
                text-decoration: none;
            }
            
        </style>
    </head>
    <body>

        <div class="container-fluid">
            <nav class="navbar navbar-expand-sm">
                <a class="navbar-brand" href="index.html"><img class="img-fluid" src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png"></a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <h5 class="h5">Hello, Super-Admin</h5>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary text-white ml-4" href="#" role="button">Log Out</a>
                        </li>
                </div>
            </nav>

            <!-- <div class="container-fluid col-sm-12 col-md-12 col-lg-4">
                <form class="form-inline searchForm">
                    <div class="form-group col-sm-8 col-md-12">
                        <input type="text" class="form-control" placeholder="Search Poilitician" aria-describedby="helpId">
                        <a class="btn btn-primary mt-2 col-sm-12 col-md-4 col-lg-4" href="#" role="button">Search</a>
                    </div>
                </form>
            </div> -->

            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 h-100 side">
                    <aside>
                        <div class="list-group w-100 text-center">
                            <a href="#" class="list-group-item list-group-item-action mt-4 list">Dashboard</a>
                            <a href="#" class="list-group-item list-group-item-action mt-4 active list">Admins</a>
                            <a href="#" class="list-group-item list-group-item-action mt-4 list">Activities</a>
                            <a href="#" class="list-group-item list-group-item-action mt-4 list">Add Post</a>
                            <a href="#" class="list-group-item list-group-item-action mt-4 list">Add Priviledges</a>
                            <a href="#" class="list-group-item list-group-item-action mt-4 list">Block & Unblock</a>
                            <a href="#" class="list-group-item list-group-item-action mt-4 list">Logout</a>
                        </div>
                    </aside>
                </div>

                <div class="col-sm-12 col-md-8 col-lg-9">
                    <h4 class="h4 text-center mb-4 mt-4">Admins</h4>
                        <div>
                            <ul class="list-group">
                                <li class="list-group-item">Adechi Chima<span class="float-right"><button type="button" class="btn btn-danger">Remove</button></span></li>
                                <li class="list-group-item ">Adechi Chima<span class="float-right"><button type="button" class="btn btn-danger">Remove</button></span></li>
                                <li class="list-group-item ">Adechi Chima<span class="float-right"><button type="button" class="btn btn-danger">Remove</button></span></li>
                                <li class="list-group-item ">Adechi Chima<span class="float-right"><button type="button" class="btn btn-danger">Remove</button></span></li>
                                <li class="list-group-item ">Adechi Chima<span class="float-right"><button type="button" class="btn btn-danger">Remove</button></span></li>
                                <li class="list-group-item ">Adechi Chima<span class="float-right"><button type="button" class="btn btn-danger">Remove</button></span></li>
                                <li class="list-group-item ">Adechi Chima<span class="float-right"><button type="button" class="btn btn-danger">Remove</button></span></li>
                                <li class="list-group-item ">Adechi Chima<span class="float-right"><button type="button" class="btn btn-danger">Remove</button></span></li>
                                <li class="list-group-item ">Adechi Chima<span class="float-right"><button type="button" class="btn btn-danger">Remove</button></span></li>
                                <li class="list-group-item ">Adechi Chima<span class="float-right"><button type="button" class="btn btn-danger">Remove</button></span></li>
                                <li class="list-group-item ">Adechi Chima<span class="float-right"><button type="button" class="btn btn-danger">Remove</button></span></li>
                                <li class="list-group-item ">Adechi Chima<span class="float-right"><button type="button" class="btn btn-danger">Remove</button></span></li>
                                <li class="list-group-item">Adechi Chima<span class="float-right"><button type="button" class="btn btn-danger">Remove</button></span></li>
                            </ul>
                        </div>

                        <div class="flex mt-4 mb-5">
                            <i class="fa fa-plus-circle pt-2" aria-hidden="true"></i><a href="#"><p class="lead ml-2">Add Admin</p></a> 
                            <a class="btn btn-success btn-lg done ml-auto" href="#" role="button">Done</a>
                        </div>
                        

                    </div>
                </div>


            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>