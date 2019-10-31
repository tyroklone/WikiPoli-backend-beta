<!DOCTYPE html>
<html lang="en">
<head>
	<title>user setting</title>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href= "{{ asset('css/styles/user_setting.css') }}"/>
	<link rel="icon" type="img/png" href="images/favicon.png">
</head>
<body>
	<div id="wrapper">
	    <header>
	    	<div id="headerLogoDiv">
		        <a id="headerLogo" href="#"><img alt="logo" src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png"></a>
		    </div>

		    <div id="burger" class="burgerToggle">
			    <div class="line1"></div>
			    <div class="line2"></div>
			    <div class="line3"></div>
		    </div>
		    <div id="nav" class="links">
			    <a class="navLinks alert" href="#">3<i class="fa fa-bell left alert"></i></a>
			    <a class="navLinks" href="#">Home</a>
			    <a id="target" class="navLinks" href="#">Settings</a>
			    <a class="navLinks" href="#"><i class="fa fa-user right"></i>John Doe</a>
			    <button id="headerButton" type="click">Log Out</button>
		    </div>
	    </header>
	    <form id="form">
		    <input id="formSearch" type="text" name="search" placeholder="Enter Politician's name">
		    <button id="formButton" type="click">Search</button>
	    </form>

	    <h3 id="focus">Settings</h3>
	    <div id="main">
	    	<div id="left">
	    		<div id="leftImgDiv">
	    		    <img id="img" src="https://res.cloudinary.com/mariamcodes/image/upload/v1571784300/tdeplbzwksdu1lysygbq.jpg" alt="my picture">
	    		</div>
		    	<p id="name">John Doe</p>
		    	<p class="transparent">Lagos, Nigeria</p>
		    	<p class="transparent">I am a lifestyle journalist par excellence. Politics is my game</p>
		    </div>
		    <div id="right">
		    	<div class="accountSettings">
			    	<h3>Account Settings</h3>
			    	<div id="accountSettingsContent">
			    		<div class="edits">
			    			<p>Change profile picture</p>
			    			<span><i id="different" class="fa fa-edit"></i></span>
			    		</div>
			    		<div class="edits">
			    			<p>Change location</p>
			    			<span>Lagos, Nigeria<i class="fa fa-edit"></i></span>
			    		</div>
			    		<div class="edits">
			    			<p>Edit bio</p>
			    			<span>Lifestyle journalist<i class="fa fa-edit"></i></span>
			    		</div>
			    		<div class="edits last">
			    			<p>Change password</p>
			    			<span>XXXXXXXXXX<i class="fa fa-edit"></i></span>
			    		</div>
			    	</div>
			    </div>
			    <div class="viewSettings">
			    	<h3>View Settings</h3>
			    	<div id="viewSettingsContent">
			    		<div class="edits">
			    			<div  id="odd" class="rightInnerWrapper">
				                <h4>Font Size</h4>
				                <p>Adjust font size for better readability</p>
				            </div>
				            <select>
                                <option value="Regular">Regular</option>
                                <option value="Large">Large</option>
                                <option value="Medium">Medium</option>
                                <option value="Small">Small</option>
                            </select>
				            <!--<button type="click">Regular<i class="fa fa-angle-down"></i></button>-->
			    		</div>
			    	</div>
			    </div>

			    <div class="notificationSettings">
			    	<h3>Notification Settings</h3>
			    	<div id="notificationSettingsContent">
			    		<div class="edit">
			    			<p>If someone likes a post I contributed to</p>
			    			<span class="toggle"><i onclick="toggleOn(this)" class="fa fa-toggle-on"></i><i onclick="toggleOff(this)" class="fa fa-toggle-off"></i></span>
			    		</div>
			    		<div class="edit">
			    			<p>if someone comments on post I contributed to</p>
			    			<span class="toggle"><i onclick="toggleOn(this)" class="fa fa-toggle-on"></i><i onclick="toggleOff(this)" class="fa fa-toggle-off"></i></span>
			    		</div>
			    		<div class="edit">
			    			<p>If someone comments on my post</p>
			    			<span class="toggle"><i onclick="toggleOn(this)" class="fa fa-toggle-on"></i><i onclick="toggleOff(this)" class="fa fa-toggle-off"></i></span>
			    		</div>
			    		<div class="edit">
			    			<p>If someone likes my post</p>
			    			<span class="toggle"><i onclick="toggleOn(this)" class="fa fa-toggle-on"></i><i onclick="toggleOff(this)" class="fa fa-toggle-off"></i></span>
			    		</div>
			    		<div class="edit last">
			    			<p>Recent post on politician</p>
			    			<span class="toggle"><i onclick="toggleOn(this)" class="fa fa-toggle-on"></i><i onclick="toggleOff(this)" class="fa fa-toggle-off"></i></span>
			    		</div>
			    	</div>
			    </div>
			    <div class="doneButton">
			    	<button type="click">Done</button>			    	
			    </div>
			    <div class="deleteMyAccount">
			    	<button type="click">Delete my account</button>
			    </div>
			    <!--<div class="rightOutterWrapper">
			    	<div class="rightInnerWrapper">
				        <h4>Font Size</h4>
				        <p>Adjust font size for better readability</p>
				    </div>
				    <button type="click">Regular</button>
			    </div>-->
		    </div>
	    </div>
	    <footer id="footer">
	    	<h3>Developed By HNG 6 Interns</h3>
	    	<h5>2019 WikiPoli.All Rights Reserved</h5>
	    </footer>
	</div>

	<script type="text/javascript" src="{{ asset('js/scripts/user_setting.js') }}" ></script>
</html>
