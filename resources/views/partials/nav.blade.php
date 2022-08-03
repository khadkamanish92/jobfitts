<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('homepage') }}"><img width="60px" height="50px"
                src="{{ $data['logo'] }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('homepage') }}" class="nav-link">Home</a></li>
                @guest
                    <li class="nav-item"><a href="{{ route('jobs') }}" class="nav-link">Jobs</a></li>
                @endguest
                @candidate
                <li class="nav-item"><a href="{{ route('jobs') }}" class="nav-link">Jobs</a></li>
                @endcandidate
                @customer
                    <li class="nav-item"><a href="{{ route('my-jobs') }}" class="nav-link">My Jobs</a></li>
                @endcustomer
                <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>

                @guest
                    <li class="nav-item cta mr-md-1"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                    <li class="nav-item cta cta-colored"><a href="{{ route('register') }}" class="nav-link">Register</a>
                    </li>
                @endguest

                @candidate
                <li class=" nav-item">
                    <a href="{{ route('profile') }}" class="nav-link ">Profile</a>
                </li>
                <li class="nav-item cta mr-md-1"><a href="{{ route('jobs') }}" class="nav-link">Find a Job</a></li>
                @endcandidate

                @customer
                    <li class="nav-item">
                        <a href="{{ route('profile') }}" class="nav-link ">Profile</a>
                    </li>
                    <li class="nav-item cta cta-colored"><a href="{{ route('jobs.post') }}" class="nav-link">Post a Job</a>
                    </li>
                @endcustomer
                @auth
                    <li class="nav-item cta cta-colored">
                        <form class="nav-link" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
