<nav class="navbar navbar-expand-lg navbar-custom bg-custom">
    <div class="container">
        <a href="index.html" class="logo"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571745363/u0zhq4fwslfr4u5lx5qt.png" alt="logo" class="img-fluid" width="150px;"></a>
        <button class="navbar-toggler float-right custom-toggler" type="button" data-toggle="collapse" data-target="#navbar9" style="color: #000000;">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar9">
            <ul id="main-navbar" class="navbar-nav ml-auto"> 
                 @Auth
                  <li class="navbar-item mr-5">
                    <a href="{{url('home')}}" class="navbar-link" style="color: black;" id="logIn">{{Auth::user()->full_name}}</a>
                </li>
               
                 @else
                <li class="navbar-item mr-5">
                    <a href="{{route('login')}}" class="navbar-link" style="color: black;" id="logIn">Log In</a>
                </li>
                <li class="navbar-item mr-5">
                    <a href="{{route('register')}}" class="btn navbar-link" id="signUp" style="background-color: #6d9bf1;">Sign Up</a>
                </li>
                 @endAuth
            </ul>
        </div>
    </div>
</nav>

<!--h1 id="posts-intro">All Posts</h1-->
<div class="search">
  
   <a href="{{url('create-post')}}"> <button  id="create-post">New Post</button></a>
  
    <form action="action_page.php">
        <input type="text" name="search" placeholder="Search Politician's name" class="justify-content-right">
        <input type="submit" name="Submit" value="Search">
    </form>
</div>
