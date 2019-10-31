<!DOCTYPE html>
<html>
<head>
	<title>Create Post</title>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="icon" type="img/png" href="images/favicon.png">
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles/draft-post.css') }}"/>
</head>
<body>

<header class="container-fluid">
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
              <a class="nav-link " href="index.html"><strong>Home</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="postpage1.html"><strong>Posts</strong></a>
            </li>
            <li class="nav-item">
            	<a class="nav-link" href="" id="nav-logout">Logout</a>
            </li>
          </ul>
            
        </div>
      </nav>
    </div>
</header>


<section id="editor-section">
	<h1 class="text-center" id="intro">Create Post</h1>
	<div id="editor-wrapper">
		<input type="text" name="title" id="post-title" placeholder="Post Title">
		<div id="editor">
			<div id="editor-header">
				<section class="option-group">
					<span class="option" title="Bolden text" id="bold"><strong>B</strong></span>
					<span class="option" title="Italicize text" id="italics"><em>I</em></span>
					<span class="option active-option" title="Underline text" id="underline">U</span>
				</section>
				<section class="option-group">
					<span class="option" title="Post link"><img src="images/link-icon.png" height="20px"></span>
					<span class="option" title="Add quotes"><img src="images/quotes-icon.jpg" height="20px"></span>
					<span class="option" title="Add image"><img src="images/image-icon.png" height="20px"></span>
				</section>
				<section class="option-group">
					<span class="option" title="Add bullet list item"><img src="images/bullet-list-icon.png" height="20px"></span>
					<span class="option" title="Add numbered list item"><img src="images/numbered-list-icon.png" height="20px"></span>
					<span class="option" title="Add horizontal divider"><img src="images/hr-icon.png" height="20px"></span>
					<span class="option" title="Add heading/sub-heading"><img src="images/heading-icon.png" height="20px"></span>
				</section>
				<section class="option-group">
					<span class="option" title="Undo recent changes"><img src="images/undo-icon.png" height="20px"></span>
					<span class="option" title="Redo recent changes"><img src="images/redo-icon.png" height="20px"></span>
				</section>
			</div>
			<textarea id="post-body" placeholder="Write a post. . ."></textarea>
		</div>
	</div>
	<div id="btns-wrapper">
		<button id="save-draft">Save as Draft</button>
		<button id="create-post">Create Post</button>
	</div>
</section>

<footer>
	<div id="links-container">
		<section id="legal-links">
	    	<span class="links-title">Legal</span>
	    	<a href="Terms-of-use.html">Terms of Use</a>
	    	<a href="privacypolicy.html">Privacy Policy</a>
	    </section>
	    <div class="border"></div>
	    <section id="company-links">
	    	<span class="links-title">Company</span>
	    	<a href="about.html">About</a>
	    	<a href="careers.html">Careers</a>
	    	<a href="FAQ.html">FAQs</a>
	    	<a href="donation_page.html">Donations</a>
	    </section>
	    <div class="border"></div>
	    <section id="connect-links">
	    	<span class="links-title">Connect With Us</span>
	    	<section id="social-links">
	    		<a href=""><span class="fa fa-facebook"></span></a>
	            <a href=""><span class="fa fa-twitter"></span></a>
	            <a href=""><span class="fa fa-instagram"></span></a>
	    	</section>
	    	<a id="email-contact" href="mailto:contact@wikipoli.gq">contact@wikipoli.gq</a>
	    </section>
	</div>
	<p id="copyright">&copy 2019 WikiPoli - All rights reserved</p>
</footer>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('js/scripts/draft-post.js') }}"></script>