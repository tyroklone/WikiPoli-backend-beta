<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WikiPoli | User Profile Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg=="
        crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png"
        href="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw=="
        crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <style>
        body {
            padding-top: 70px;
        }

        .othertop {
            margin-top: 10px;
        }

        .img-logo {
            margin-left: 35%;
        }

        a.btn.btn-success {
            background-color: #6D9BF1 !important;
            border-color: #6D9BF1 !important;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-10 ">
                <form class="form-horizontal">
                    <h1 class="cover-heading"><a href="index.html"><img class="img-logo"
                                src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png"></a>
                    </h1>

                    <fieldset>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Name (Full name)">Name (Full name)</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user">
                                        </i>
                                    </div>
                                    <input id="Name (Full name)" name="Name (Full name)" type="text"
                                        placeholder="Name (Full name)" class="form-control input-md">
                                </div>


                            </div>


                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Upload photo">Upload photo</label>
                            <div class="col-md-4">
                                <input id="Upload photo" name="Upload photo" class="input-file" type="file">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Email Address">Email Address</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope-o"></i>

                                    </div>
                                    <input id="Email Address" name="Email Address" type="text"
                                        placeholder="Email Address" class="form-control input-md">

                                </div>

                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Overview (max 200 words)">Short Description (Max
                                100 words)</label>
                            <div class="col-md-4">
                                <textarea class="form-control" rows="10" id="Overview (max 200 words)"
                                    name="Overview (max 200 words)">Short Description</textarea>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span>
                                    Submit</a>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>


        </div>
    </div>
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>


</body>

</html>