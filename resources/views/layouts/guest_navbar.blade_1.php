<div class="container">
    <nav class="navbar navbar-expand-lg">

        <a href="index.html" class="navbar-brand logo">

            <img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png" alt="WikiPoli Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav ml-auto menu">
                <li class="nav-item active">
                    <a class="nav-link " href="{{url('posts')}}"><strong>Posts</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}"><strong>Login</strong></a>
                </li>
            </ul>
            <a href="{{route('register')}}" class="button-signup">Sign Up</a>
        </div>
    </nav>
</div>