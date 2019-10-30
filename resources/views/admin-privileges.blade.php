<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Privileges</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/styles/admin-privileges.css') }}"/>
    <link rel="stylesheet" type="text/css" href= "{{ asset('css/styles/admin-dashboard-sidebar.css') }}"/>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
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
        <a href="admin-dashboard-general.html" class="sidebar-links">Dashboard</a>
        <a href="dashboard-activity.html" class="sidebar-links">Activities</a>
        <a href="postpage1.html" class="sidebar-links">Posts</a>
        <a href="" class="sidebar-links">Users</a>
        <a href="admin-privileges.html" class="sidebar-links sidebar-active-link">Manage Privileges</a>
        <a href="" class="sidebar-links" id="logout">Logout</a>
      </section>
    
      
    <div class="admin-main-general">
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
        <form action="" method="post">
        <div class="forms">
                <h1 id="privilege-intro">Manage Privileges</h1>
                <form>
                  <section id="container-form">
                    <h2 id="privilege-edit">Edit Privilege</h2>
                    <div class="form-flex">
                      <div>
                        <label for="name" class="label">Username | Email </label>
                        <input type="text" name="email" id="user-email" class="input-field">
                      </div>
                      <div>
                        <label class="label">Status</label>
                        <select id="privilege1" class="input-field">
                                <option selected="selected" disabled="disabled">Select Status</option>
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                        </select>
                      </div>
                    </div>
                    <button type="button" class="bluebutton">UPDATE</button>
                  </section>
                </form>
                
                
                <button id="all-admins">View all Admins</button>
        </div>
    
    </div>
    </div>
    
</body>
</html>


<script src="{{ asset('js/scripts/admin-sidebar-general.js') }}"></script>