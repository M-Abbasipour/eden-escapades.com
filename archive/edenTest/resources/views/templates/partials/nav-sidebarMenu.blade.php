<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"><a href="{{ route('dashboard.index') }}"><span><h2>{{ Auth::user()->username }}</h2></span></a></li>
            <li><a href="{{ route('dashboard.index') }}">DASHBOARD</a></li>
            
            <!-- ***PROFILE*** -->
            <li>
            <a href="/user/{{Auth::user()->username}}">PROFILE</a>
            </li>
            
            <!-- ***FRIENDS*** -->
            <li>
            <a href="{{ route('friends.index') }}">FRIENDS</a>
            </li>
            
            <!-- ***MESSAGES*** -->
            <li>
            <a href="">MESSAGES</a>
            </li>
            
            <!-- ***MATCHES*** -->
            <li>
            <a href="">MATCHES</a>
            </li>
            
            <!-- ***ME*** -->
            <li>
                <a href="#me-submenu" data-toggle="collapse">ME...</a>
                <ul id="me-submenu" class="collapse">
                    <li><a href="">Adverts</a></li>
                    <li><a href="">Groups</a></li>
                    <li><a href="">Timeline</a></li>
                    <li><a href="">Gallery</a></li>
                    <li><a href="">Account</a></li>
                    <li><a href="">Verifications</a></li>
                    <li><a href="">Notes</a></li>
                    <li><a href="">Meet Today</a></li>
                </ul>
            </li>

            <!-- ***SEARCH*** -->
            <li><a href="">SEARCH</a></li>
            
            <!-- ***LATEST*** -->
            <li>
                <a href="#latest-submenu" data-toggle="collapse">LATEST...</a>
                <ul id="latest-submenu" class="collapse">
                     <li><a href="/user/{{Auth::user()->username}}">Who's Looked At Me</a></li>
                    <li><a href="">Latest Verifications</a></li>
                    <li><a href="">Friends Updates</a></li>
                    <li><a href="">Friends Photos</a></li>
                    <li><a href="">Latest Photos</a></li>
                    <li><a href="">Featured Users</a></li>
                </ul>
            </li>
            
            <!-- ***STORE*** -->
            <li>
                <a href="#store-submenu" data-toggle="collapse">EDEN STORE...</a>
                <ul id="store-submenu" class="collapse">
                    <li><a href="">Refer A Friend</a></li>
                    <li><a href="">Upgrade Your Account</a></li>
                    <li><a href="">Special Offers</a></li>
                </ul>
            </li>
            
            <!-- ***FEATURES*** -->
            <li>
                <a href="#features-submenu" data-toggle="collapse">FEATURES...</a>
                <ul id="features-submenu" class="collapse">
                    <li><a href="">Stories</a></li>
                    <li><a href="">Meets &amp; Events</a></li>
                    <li><a href="">Timeline</a></li>
                    <li><a href="">Video Chat</a></li>
                    <li><a href="">Chatrooms</a></li>
                    <li><a href="">Forum</a></li>
                </ul>
            </li>
            
            <!-- ***HELP & SUPPORT*** -->
            <li>
                <a href="#help-submenu" data-toggle="collapse">HELP &amp; SUPPORT...</a>
                <ul id="help-submenu" class="collapse">
                    <li><a href="">E-safety</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Support</a></li>
                    <li><a href="">Terminology</a></li>
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Terms and Conditions</a></li>
                </ul>
            </li>
            
<!--
            <li><a href="{{ route('home') }}">Timeline</a></li>
            <li><a href="{{ route('friends.index') }}">Friends</a></li>
            <li><a href="/user/{{Auth::user()->username}}">My Profile</a></li>
            <li><a href="{{ route('profile.edit') }}">Update profile</a></li>
            <li>
            <form class="navbar-form navbar-left" role="search" action="{{ route('search.results') }}">
                <div class="input-group">
                    <input type="text" name="query"  class="form-control" placeholder="Search for a user">
                    <span aria-hidden="true" class="input-group-addon">
                        <span class="glyphicon glyphicon-search">
                        </span>
                    </span>
                </div>
                 /input-group 
            </form>
            </li>
-->
     
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->
