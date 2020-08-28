<ul class="navbar-nav mr-auto ">

    <li class="nav-item active">
        <a href="{{route('home')}}" class="hoverlink" data-hover-label="Talk To Nigeria">
            <span class="hoverlink__label">Talk To Nigeria</span>
        </a>
    </li>
@if(!auth()->guest())
    <li class="nav-item">
        <a href="fans-uploads.html" class="hoverlink" data-hover-label="My Uploads">
            <span class="hoverlink__label">My Uploads</span>
        </a>
    </li>
    @endif

    <li class="nav-item">
        <a href="{{route('our-roots')}}" class="hoverlink" data-hover-label="Our Roots">
            <span class="hoverlink__label">Our Roots</span>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{route('buy-online')}}" class="hoverlink" data-hover-label="By Online">
            <span class="hoverlink__label">Buy Online</span>
        </a>
    </li>

    <li class="nav-item">
         <a href="events.html" class="hoverlink" data-hover-label="Events">
            <span class="hoverlink__label">Events</span>
         </a>
    </li>

</ul>

<div class="top-sign">
    @if(auth()->guest())        
        <a href="{{route('login')}}">Sign In</a>
        <a href="{{route('register')}}">Sign Up</a>
    @else
        <a href="{{route('logout')}}">Logout</a>
    @endif
</div>