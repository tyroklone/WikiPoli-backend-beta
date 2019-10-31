<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Dashboard | Activities</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/styles/admin-dashboard-sidebar.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/styles/dashboard-activities.css') }}"/>
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
	<link rel="icon" type="img/png" href="images/favicon.png">
</head>

<body>

	<div class="dashboard-container">
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
			<a href="admin-dashboard-general.html" class="sidebar-links">Dashboard</a>
			<a href="dashboard-activity.html" class="sidebar-links sidebar-active-link">Activities</a>
			<a href="postpage1.html" class="sidebar-links">Posts</a>
			<a href="" class="sidebar-links">Users</a>
			<a href="admin-privileges.html" class="sidebar-links">Manage Privileges</a>
			<a href="" class="sidebar-links" id="logout">Logout</a>
		</section>
		<main class="admin-main-general">
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

			<div class="main-content">
				<div class="top-bar">
					<h2 id="activity-intro">Activities</h2>
					<div class="search">
						<div class="input-group flex-nowrap">
							<div class="input-group-prepend">
								<!-- <span class="input-group-text" id="addon-wrapping">
									<i class="fa fa-search"></i>
								</span> -->
							</div>
							<div class="input-icons"> 
								<i class="fa fa-search icon"> 
							  </i> 
								<input class="input-field" 
									   type="text" id="search-ish"> 
							
							<button class="btn search-btn">Search</button>
							</div>
						</div>
					</div>
				</div>
				<div class="most-recent-activity">
					<p>Most Recent Activity</p>

					<!-- First container -->
					<div class="container-activity">
						<div class="activity child">
							<p>Posted by: John Doe</p>
							<button class="activity-cta">Publish +</button>
						</div>
						<div class="activity child">
							<p>Category: Politicain</p>
							<button class="activity-cta">Disapprove +</button>
						</div>
						<div class="activity child">
							<p>Status: Wating Approval</p>
							<button class="activity-cta">View full post +</button>
						</div>
						<div class="activity child">
							<p>Date: 22 / 10 / 2019</p>
							<button class=" activity-cta">Edit +</button>
						</div>
					</div>

					<!-- Second container -->
					<div class="container-activity container-activity-2">
						<div class="activity child">
							<p>Posted by: John Doe</p>
							<button class=" activity-cta">Publish +</button>
						</div>
						<div class="activity child">
							<p>Category: Politicain</p>
							<button class=" activity-cta">Disapprove +</button>
						</div>
						<div class="activity child">
							<p>Status: Wating Approval</p>
							<button class=" activity-cta">View full post +</button>
						</div>
						<div class="activity child">
							<p>Date: 22 / 10 / 2019</p>
							<button class=" activity-cta">Edit +</button>
						</div>
					</div>
				</div>

			</div>
		</main>
	</div>


	<!-- Add posts modal -->
	<div class="modal fade" id="showPostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center" id="exampleModalCenterTitle">Add a post</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<input type="text" name="title" placeholder="Enter post title">
					<textarea style="width: 100%" name="addPost" id="post-content" placeholder="Enter something..."cols="30" rows="10"></textarea>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="button" id="add-post-button" class="btn btn-primary">Add Post</button>
				</div>
			</div>
		</div>
	</div>





	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!--script type="text/javascript" src="scripts/dashboard-activity.js"></script-->
</body>

</html>


<script src="{{ asset('js/scripts/admin-sidebar-general.js') }}"></script>