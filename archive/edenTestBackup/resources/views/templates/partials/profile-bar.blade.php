<nav class="navbar navbar-default navbar-static-top" id="profile-bar">
    <div class="container">
        
        <ul class="nav navbar-nav" id="profile-bar-list">
            <!-- Username -->
            <li><a href="{{ route('home') }}"><p>{{ Auth::user()->username }}</p></a></li>
            <li><a href="{{ route('home') }}">Timeline</a></li>
            <li><a href="{{ route('friends.index') }}">Friends</a></li>
    
            <!-- Profile -->
            <li><a href="user/{{ Auth::user()->username }}">My Profile</a></li>
            <li><a href="{{ route('profile.edit') }}">Update profile</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('auth.signout') }}">Sign out</a></li>
        </ul>
        
    </div>
</nav>