<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Hermanto's blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($active === "home" ) ? 'active':''}}" href="/">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "post" ) ? 'active':''}}" href="/post">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "categories" ) ? 'active':''}}" href="/categories">Categories</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link {{ ($active === "about" ) ? 'active':''}}" href="/about">About</a>
        </li> 
      </ul>

      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </li>
        @else
          <li class="nav-item">
              <a href="/login" class="nav-link {{ ($active === "login" ) ? 'active':''}}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
      </ul>
        @endauth
      
    </div>
  </nav>