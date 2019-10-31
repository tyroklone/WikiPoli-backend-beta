<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>WIKIPOLI - {{ $post->title }}</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/styles/readmore.css') }}"/>

    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="{{ URL::current() }}">
    <meta name="twitter:creator" content="">
    <meta name="twitter:title" content="{{ $post->title }}">
    <meta name="twitter:description" content="{{ $post->body }}">
    <meta name="twitter:image" content="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png">

    <!-- Facebook & Whatsapp -->
    <meta property="og:title" content="{{ $post->title }}">
    <meta property="og:url" content="{{ URL::current() }}">
    <meta property="og:description" content="{{ $post->body }}">
    <meta property="og:image" content="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png">
    <meta property="og:image:secure_url" content="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="200">
    <meta property="og:image:alt" content="site-logo">
    <meta property="og:type" content="website">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <span id="logo">
          <a href=""><img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png" alt="wikipoli-site-logo" width="100"/></a>
        </span>
      </div>
      {{-- Check if user is logged in --}}
      @if(!Auth::guest())

      <div class="col-md-6">
        <ul class="firstnav">
          <li>
            <a href="{{ route('logout') }}" id="btn" class="btn btn-sm btn-primary"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
          <li>
            <a href=""><i class="fa fa-user"></i>&nbsp;{{ Auth::user()->username }}</a>
          </li>
          <li>
            <a href="">Settings</a></li>
          <li>
            <a href="" style="color: red;"><span>3</span><i class="fa fa-bell-o"></i></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7">
      </div>
      <div class="col-md-5">
        <div class="input-group mb-3" style="text-align-last: inherit;">
          <input type="text" class="form-control" id="input" placeholder="Enter Politicial Name"/>
          <div class="input-group-append">
            <span class="input-group-text">Search</span>
          </div>
        </div>
      </div>
    </div>
    @else 
    <div class="col-md-7">
    </div>
    <div class="col-md-5">
      <div class="input-group mb-3" style="text-align-last: inherit;">
        <input type="text" class="form-control" id="input" placeholder="Enter Politicial Name"/>
        <div class="input-group-append">
          <span class="input-group-text">Search</span>
        </div>
      </div>
    </div>
    @endif    
      <br />
      <br />
    <div class="row">
      <div class="col-md-12" id="content">
        <!-- post content here -->
        <div class="post">
          <h1>{{ $post->title }}</h1>
          <p style="text-align: justify; display: block;">
            {{ $post->body }}
          </p>
          {{-- <div class="icons">
              <!-- twitter share link -->
              <a href='http://www.twitter.com/intent/tweet?url={{ URL::current() }}&text={{ $post->title }}' target='_blank'><img src='https://res.cloudinary.com/siyfa/image/upload/v1571761066/a4zha34vheoeyzypvpqu.png' style='width: 25px;'></a>
              
              <!-- facebook share link -->
              <a href='https://www.facebook.com/sharer/sharer.php?u={{ URL::current() }}' target='_blank'><img src='https://res.cloudinary.com/siyfa/image/upload/v1571761008/bzosk4pcqvpldu59bo0w.png' style='width: 25px;'></a>
          </div> --}}
        </div>
      </div>
    </div>

    {{-- display comments here --}}
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h3><span class="glyphicons glyphicons-comment"></span>Comment</h3>
        {{-- loop --}}
          <div class="comment">
            <div class="row">
              {{-- @comments(['model' => $post]) --}}
            </div>
          </div>
      </div>
    </div>      

    <div class="row">
          <!-- Comment System -->
          <div class="col-md-9 mt-5">
            {{-- check if user is logged in --}}

            @if(!Auth::guest())
              <div class="comment-form" id="comment-form">
                {{-- Form --}}
                <form method="POST" action="{{ url('/comments/'.$post->id) }}">
                  @csrf

                  <div class="form-group row">
                    <label for="comment" class="col-form-label text-md-right">{{ __('Comment') }}</label>

                    <textarea id="comment" class="form-control @error('comment') is-invalid @enderror" name="comment" placeholder="Comment" value="{{ old('comment') }}" required autocomplete="comment"></textarea>

                    @error('comment')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <input type="hidden" name="user" value="{{ Auth::user()->username }}">
                  <input type="hidden" name="post_id" value="{{ $post->post_id }}">

                  <div class="form-group row mb-0">
                    <div class="">
                      <button type="submit" class="btn btn-info">
                        {{ __('Add Comment') }}
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            @else
              <div class="alert alert-danger"><h4>Comments disabled! Please Sign In to comment on this post</h4></div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
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
  <script async src="https://static.addtoany.com/menu/page.js"></script>
</body>
</html>