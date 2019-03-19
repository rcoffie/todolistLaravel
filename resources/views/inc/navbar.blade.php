<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="/">WebSiteName</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="{{Request::is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
        <li class="{{Request::is('todos/create') ? 'active' : ''}}"><a href="todos/create">Create Todo</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
    </div>
  </nav>