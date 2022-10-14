  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/"> NBA teams</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item">
            @if (!auth()->check())
            <li>
              <a href="/login">Sign in</a>
            </li>
            <li>
              <a href="/register">Sign up</a>
            </li>
          @endif
          @if (auth()->check())
            <li class="nav-item active">
                <a class="nav-link" href="/news">News <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/teams">Teams <span class="sr-only">(current)</span></a>
            </li>
            <li>
                <strong> User: {{ auth()->user()->name }} </strong>
            </li>
            <li >
                <button><a href="/logout">Log out</a></button>
            </li>
          @endif
        </li>
      </ul>
    </div>
  </nav>
