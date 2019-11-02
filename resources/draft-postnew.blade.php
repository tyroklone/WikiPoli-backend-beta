<!DOCTYPE html>
<html>
<head>
	<title>Create Post</title>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="icon" type="img/png" href="images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.quilljs.com/1.3.6/quill.core.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles/draft-post.css') }}">
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
		<div>
			<div id="editor-header" class="ql-toolbar">
				<section class="option-group">
					<button class="option ql-bold" title="Bolden text (Ctrl + B)" id="bold"><strong>B</strong></button>
					<button class="option ql-italic" title="Italicize text (Ctrl + I)" id="italics"><em>I</em></button>
					<button class="option ql-underline" title="Underline text (Ctrl + U)" id="underline">U</button>
				</section>
				<section class="option-group">
					<button class="option ql-link" title="Post link (Ctrl + L)"><img src="images/link-icon.png" height="20px"></button>
					<button class="option ql-blockquote" title="Add blockquote (Ctrl + Q)"><img src="images/quotes-icon.jpg" height="20px"></button>
					<button class="option" title="Add image" id="img-upload-div">
						<input type="file" name="file" id="file-upload" value="" accept="image/*">
						<img src="images/image-icon.png" height="20px">
					</button>
				</section>
				<section class="option-group">
					<button class="option ql-list" value="bullet" title="Add bullet list item"><img src="images/bullet-list-icon.png" height="20px"></button>
					<button class="option ql-list" value="ordered" title="Add numbered list item"><img src="images/numbered-list-icon.png" height="20px"></button>
					<button class="option ql-align active-option" value="center" data-current="left" title="Change text alignment (Ctrl + E)"><img src="images/left-align-icon.png" height="20px"></button>
					<button class="option ql-header" title="Add heading/sub-heading (Ctrl + H)"><img src="images/heading-icon.png" height="20px"></button>
				</section>
				<section class="option-group">
					<button id="undo" class="option" title="Undo recent changes (Ctrl + Z)"><img src="images/undo-icon.png" height="20px"></button>
					<button id="redo" class="option" title="Redo undone changes (Ctrl + Y)"><img src="images/redo-icon.png" height="20px"></button>
				</section>
			</div>
			<div contenteditable="true" id="post-body" placeholder="Write a post. . ."></div>
		</div>
		<div id="links-modal">
			<div id="modal-close">x</div>
			<div>
				<label for="link-address">* Link address</label>
				<input type="text" id="link-address" name="address" placeholder="Link address" required>
			</div>

			<div>
				<label for="link-desc">Display text</label>
				<input type="text" id="link-desc" name="address" placeholder="Optional Display text">
			</div>

			<button id="modal-submit">Add link</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.0.3/purify.min.js" integrity="sha256-58eGKW6SunbeAY1RP9WEbg3nViB9o1qDnxV4yCITqx4=" crossorigin="anonymous"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script type="text/javascript" src="{{ asset('js/scripts/draft-post.js') }}"></script>
