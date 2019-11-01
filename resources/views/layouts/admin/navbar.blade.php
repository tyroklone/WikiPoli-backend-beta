<input type="checkbox" id="mobile-bars-check" />
<label for="mobile-bars-check" id="mobile-bars">
    <div class="stix" id="stik1"></div>
    <div class="stix" id="stik2"></div>
    <div class="stix" id="stik3"></div>
</label>
<section id="admin-sidebar-general">
    <div class="icon-div">
        <img src="{{asset('images/house-icon.png')}}" height="30px">
        <span>Wiki</span><span class="blue-text">Poli</span>
    </div>
    <a href="{{url('admin/home')}}" class="sidebar-links @if(request()->path() == 'admin/home') sidebar-active-link @endif">Dashboard</a>
    <a href="{{url('admin/activities')}}" class="sidebar-links @if(request()->path() == 'admin/activities') sidebar-active-link @endif">Activities</a>
    <a href="{{url('admin/posts')}}" class="sidebar-links @if(request()->path() == 'admin/posts') sidebar-active-link @endif">Posts</a>
   {{-- <a href="{{url('admin/approve-posts')}}" class="sidebar-links @if(request()->path() == 'admin/approve-posts') sidebar-active-link @endif">Approve Posts</a>--}}
    <a href="{{url('admin/users')}}" class="sidebar-links @if(request()->path() == 'admin/users') sidebar-active-link @endif">Users</a>
    @hasanyrole('SuperAdmin')
    <a href="{{url('admin/all-admins')}}" class="sidebar-links @if(request()->path() == 'admin/all-admins') sidebar-active-link @endif">Admins</a>
    @endhasanyrole
    <a href="{{url('admin/privileges')}}" class="sidebar-links @if(request()->path() == 'admin/privileges') sidebar-active-link @endif">Manage Privileges</a>
    <a class="sidebar-links" href="{{ route('logout') }}"
       onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
        Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

</section>
