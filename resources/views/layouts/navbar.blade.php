
<nav class="navbar navbar-expand-lg justify-content-center mt-3 mb-5 sticky-top">
    <div class="nav-pill">
        <div class="collapse navbar-collapse show" id="mainNavbar">
            <ul class="navbar-nav gap-4 px-4 py-2 bg-black rounded-pill shadow-lg">
                <li class="nav-item">
                    <a class="nav-link text-white {{ Request::is('home*') ? 'active' : '' }}" href="{{ url('/') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ Request::is('projects*') ? 'active' : '' }}" href="{{ url('/projects') }}">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ Request::is('skills*') ? 'active' : '' }}" href="{{ url('/skills') }}">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white  {{ Request::is('experience*') ? 'active' : '' }}" href="{{ url('/experience') }}">Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white  {{ Request::is('contact*') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>