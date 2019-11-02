<!--https://adenikesalau.github.io/404-error-page/privacy-policy.html 
    
or https://adenikesalau.github.io/404-error-page/#  click on any of the links to see the 404 page effect-->

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles/404.css') }}"/>

        

        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="icon" type="img/png" href="images/favicon.png">

        <title> ERROR 404 </title>

        <style>
        body{
    font-family: 'Lato';
    font-style: normal;
    font-weight: normal;
}

.container{
    height: 100%;
    width: 100%;
}

.error-template{
    text-align: center;
    padding: 2%;
}

.error-action{
    margin: 10px;
}

.error-action .btn{
    margin-right: 15px;
}

.icon{
    width: 150px;
    height: 150px;
    margin-left: 5%;
}

.error-img{
    width: 700px;
    height: 300px;
}

.error-details{
    margin-bottom: 3%;
}

.button{
    background-color: #6D9BF1;
    border: 1px  #6D9BF1;
    padding: 1% 7%;
    cursor: pointer;
}

a {
    text-decoration: none;
    color: #ffebef;
    font-weight: normal;
}

@media screen and (max-width: 800px){
    .error-template{
        padding-top: 10%;
    }
    
    .icon{
        width: 25%;
        height: 25%;
        margin-left: 0px;
    }

    .error-img{
        width: 70%;
        height: 20%;
    }
}

@media screen and (max-width: 480px){
    .container{
        padding-top: 3%;
    }

    .error-img{
        padding-top: 20%;
    }
}

        </style>
    </head>
    
    <body>

        <div class="container">

            <!--WikiPOLI icon-->
            <img src="https://res.cloudinary.com/adenike/image/upload/v1571756162/wikiPoli5_9_ln1eyb.png" class="icon">

            <div class="error-template">
            
                <!--404 Image-->
                <img src="https://res.cloudinary.com/adenike/image/upload/v1571772931/a81a2177118189_1_lojch2.png" class="error-img">

                <!--Details of the page-->
                <div class="error-details">
                    THE PAGE YOU WERE LOOKING FOR DOESN'T EXIST!
                </div>

                <div class="error-action">

                    <!--link to take user to home page-->
                    
                    <a href="{{ url('/posts') }}" class="button">Back To Home</a>
                    
                </div>

            </div>
        </div> 

    </body>
</html>