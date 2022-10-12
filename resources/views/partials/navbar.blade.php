<nav>
    <div>
      <a href="/teams">
        NBA teams
      </a>
      <ul>
        @if (!auth()->check())
          <li>
            <a href="/login">Sign in</a>
          </li>
          <li>
            <a href="/register">Sign up</a>
          </li>
        @endif
        @if (auth()->check())
          <li>
            <strong> User: {{ auth()->user()->name }} </strong>
          </li>
          <li >
            <button><a href="/logout">Log out</a></button>
          </li>
        @endif
      </ul>
    </div>
  </nav>
