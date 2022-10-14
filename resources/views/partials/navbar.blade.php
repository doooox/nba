<nav>
    <div>
      <a href="/teams">
        NBA teams
      </a>
      <ul>
        <li>
            <a href="/news">
                News
            </a>
        </li>
        <li>
            <a href="/news/create">
                Create News
            </a>
        </li>
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
