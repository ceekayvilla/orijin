<ul class="nav navbar-nav">
    <li class="active">
        <a href="#"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
    </li>

    <li class="menu-title">Accounts</li>
    <li class="menu-item-has-children dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
            <i class="menu-icon fa fa-users"></i>People
        </a>
            <ul class="sub-menu children dropdown-menu">
                <li><i class="fa fa-users"></i><a href="#">Accounts</a></li>
                <li><i class="fa fa-lock"></i><a href="#">Roles</a></li>
            </ul>
    </li>

    <li class="menu-item-has-children dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
            <i class="menu-icon fa fa-camera"></i>Videos
        </a>
            <ul class="sub-menu children dropdown-menu">
                <li><i class="fa  fa-video-camera"></i><a href="{{route('unpublished-videos')}}">New Videos</a></li>
                <li><i class="fa  fa-video-camera"></i><a href="{{route('published-videos')}}">Published Videos</a></li>
                <li><i class="fa  fa-video-camera"></i><a href="{{route('rejected-videos')}}">Rejected Videos</a></li>
            </ul>
    </li>

</ul>