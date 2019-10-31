<!DOCTYPE html>
<html>
<head>
	<title>
		Dashboard | General
	</title>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/styles/admin-dashboard-general.css') }}">
	<link rel="stylesheet" type="text/css" href= "{{ asset('css/styles/admin-dashboard-sidebar.css') }}"/>
	<link rel="icon" type="img/png" href="images/favicon.png">
</head>
<body>
	<input type="checkbox" id="mobile-bars-check" />
    <label for="mobile-bars-check" id="mobile-bars">
        <div class="stix" id="stik1"></div>
        <div class="stix" id="stik2"></div>
        <div class="stix" id="stik3"></div>
    </label>
	<section id="admin-sidebar-general">
		<div class="icon-div">
			<img src="images/house-icon.png" height="30px">
			<span>Wiki</span><span class="blue-text">Poli</span>
		</div>
		<a href="admin-dashboard-general.html" class="sidebar-links sidebar-active-link">Dashboard</a>
		<a href="dashboard-activity.html" class="sidebar-links">Activities</a>
		<a href="postpage1.html" class="sidebar-links">Posts</a>
		<a href="" class="sidebar-links">Users</a>
		<a href="admin-privileges.html" class="sidebar-links">Manage Privileges</a>
		<a href="" class="sidebar-links" id="logout">Logout</a>
	</section>
	<main class="admin-main-general" id="admin-main">
		<header>
			<div class="icon-div">
				<img src="images/house-icon.png" height="30px">
				<span>Wiki</span><span class="blue-text">Poli</span>
			</div>
			<div id="user-div">
				<span id="name-plate">Hello, xyluz</span>
				<img src="images/profilepic.png" height="30px">
			</div>
		</header>
		<h1 id="intro">Admin Dashboard</h1>
		<section id="main-options">
			<a href="dashboard-activity.html">Recent Activities Overview</a>
			<a href="postpage1.html">Posts</a>
			<a href="">Users</a>
			<a href="admin-privileges.html">Manage Privileges</a>
		</section>
	</main>
	
    <script src= "{{ asset('js/scripts/admin-sidebar-general.js') }}"></script>
    
</body>
</html>