<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'MyPortfolio') }}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}"
                       aria-current="{{ Request::is('/') ? 'page' : '' }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('projects*') ? 'active' : '' }}" href="{{ url('/projects') }}"
                       aria-current="{{ Request::is('projects*') ? 'page' : '' }}">Projects</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('skills*') ? 'active' : '' }}" href="{{ url('/skills') }}"
                       aria-current="{{ Request::is('skills*') ? 'page' : '' }}">Skills</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('experience*') ? 'active' : '' }}" href="{{ url('/experience') }}"
                       aria-current="{{ Request::is('experience*') ? 'page' : '' }}">Experience</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about*') ? 'active' : '' }}" href="{{ url('/about') }}"
                       aria-current="{{ Request::is('about*') ? 'page' : '' }}">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contacts*') ? 'active' : '' }}" href="{{ url('/contacts') }}"
                       aria-current="{{ Request::is('contacts*') ? 'page' : '' }}">Contacts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>