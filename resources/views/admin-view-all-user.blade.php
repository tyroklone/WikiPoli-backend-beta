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
    <link rel="stylesheet" href="{{ asset('css/styles/admin-dashboard-general.css') }}"/>
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="icon" type="img/png" href="images/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                    <img src="https://res.cloudinary.com/siyfa/image/upload/v1571745363/u0zhq4fwslfr4u5lx5qt.png" alt="logo" class="img-fluid" width="150px;">
				
			</div>
			<div id="user-div">
				<span id="name-plate">Hello, superadmin</span>
                <img src="images/profilepic.png" height="30px">
                <button class="btn search-btn" style="background-color: #6D9BF1;">Logout</button>
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
									   type="text" id="search-ish" placeholder="Enter Politician's Name "> 
							
							<button class="btn search-btn" style="background-color: #6D9BF1;">Search</button>
							</div>
						</div>
					</div>
                </div>
                <p style="padding-left: 20px;">Users</p>
				<div class="most-recent-activity">
                    <!-- First container -->
                    <div class="container">
                        <div class="row">
                                <div class="activity child col-sm-2">
                                        <p><img src="images/profilepic.png" height="30px;" style="float:left" alt="">Abdul chuks</p>
                                        <h6 style="font-weight:lighter;">joined Dec 2019</h6>
                                    </div>
                                    <div class="activity child col-sm-2">
                                        <p>12 Contributors</p>
                                    </div>
                                    <div class="activity child col-sm-2">
                                        <p>12 Posts</p>
                                    </div>
                                    <div class="activity child col-sm-3">
                                        <button class=" activity-cta">view user</button>
                                    </div>
                                    <div class="activity child col-sm-3">
                                            <button class=" activity-cta">Block</button>
                                        </div>    
                            </div>
                        </div>
                        <div class="container">
                                <div class="row">
                                        <div class="activity child col-sm-2">
                                                <p><img src="images/profilepic.png" height="30px;" style="float:left" alt="">Abdul chuks</p>
                                                <h6 style="font-weight:lighter;">joined Dec 2019</h6>
                                            </div>
                                            <div class="activity child col-sm-2">
                                                <p>12 Contributors</p>
                                            </div>
                                            <div class="activity child col-sm-2">
                                                <p>12 Posts</p>
                                            </div>
                                            <div class="activity child col-sm-3">
                                                <button class=" activity-cta">view user</button>
                                            </div>
                                            <div class="activity child col-sm-3">
                                                    <button class=" activity-cta">Block</button>
                                                </div>    
                                    </div>
                                </div>
                                <div class="container">
                                        <div class="row">
                                                <div class="activity child col-sm-2">
                                                        <p><img src="images/profilepic.png" height="30px;" style="float:left" alt="">Abdul chuks</p>
                                                        <h6 style="font-weight:lighter;">joined Dec 2019</h6>
                                                    </div>
                                                    <div class="activity child col-sm-2">
                                                        <p>12 Contributors</p>
                                                    </div>
                                                    <div class="activity child col-sm-2">
                                                        <p>12 Posts</p>
                                                    </div>
                                                    <div class="activity child col-sm-3">
                                                        <button class=" activity-cta">view user</button>
                                                    </div>
                                                    <div class="activity child col-sm-3">
                                                            <button class=" activity-cta">Block</button>
                                                        </div>    
                                            </div>
                                        </div>
                        <div style="text-align: center;">
                        <a href="">See All</a>
                        </div>
                    </div>
					
						
                <p style="padding-left: 20px;">Contributions</p>
                <div class="most-recent-activity">
                    <div class="container">
                        <div class="row">
                                <p class="col-sm-3" style="text-align: left;"><img src="images/profilepic.png" height="30px" alt=""> Abdul Chuks </p>
                                <p class=" col-sm-6" style="text-align:center;">fixed typgraphical error</p> 
                                <div class="col-sm-3" style="text-align-last: right;">22/ 10/ 19</div> 
                                    <p>Adetokunbo Oluela Durotoye (born in <a href="">ibadan, Oyo State</a> on the 12th May 1971) is a <a href="">business consultant, leadership</a> expert and motivational speaker. Fela is the president of the GEMSTONE Nation Builders Foundation, non-profit, non-governmental organization targeted at training youths towards <a href="">transformational leadership</a> and</p> 
                        </div>
                    </div>
                    <div class="container">
                            <div class="row">
                                    <p class="col-sm-3" style="text-align: left;"><img src="images/profilepic.png" height="30px" alt=""> Abdul Chuks </p>
                                    <p class=" col-sm-6" style="text-align:center;">edited Fela Durotoye Career</p> 
                                    <div class="col-sm-3" style="text-align-last: right;">22/ 10/ 19</div> 
                                        <p>Adetokunbo Oluela Durotoye (born in <a href="">ibadan, Oyo State</a> on the 12th May 1971) is a <a href="">business consultant, leadership</a> expert and motivational speaker. Fela is the president of the GEMSTONE Nation Builders Foundation, non-profit, non-governmental organization targeted at training youths towards <a href="">transformational leadership</a> and</p> 
                            </div>
                    </div>
                    <div class="container">
                            <div class="row">
                                    <p class="col-sm-3" style="text-align: left;"><img src="images/profilepic.png" height="30px" alt=""> Abdul Chuks </p>
                                    <p class=" col-sm-6" style="text-align:center;">edited Omoyele Sowore personal life</p> 
                                    <div class="col-sm-3" style="text-align-last: right;">22/ 10/ 19</div> 
                                        <p>Adetokunbo Oluela Durotoye (born in <a href="">ibadan, Oyo State</a> on the 12th May 1971) is a <a href="">business consultant, leadership</a> expert and motivational speaker. Fela is the president of the GEMSTONE Nation Builders Foundation, non-profit, non-governmental organization targeted at training youths towards <a href="">transformational leadership</a> and</p> 
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

<script src="{{ asset('js/scripts/admin-sidebar-general.js') }}"></script>