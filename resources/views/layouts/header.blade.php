<div id="header">
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#"><img id="logo" src="{{asset('assets/img/meenumlogo.png')}}" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <form id="logout-form" action="{{ route('logout') }}" method="POST">
          {{ csrf_field() }}

        <button type="submit" class="logout">Logout</button>
      </form>
    </div>
  </nav>

  <div id="header2">
    <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link @yield('dashboard')" href="#">
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('data')" href="{{route('data.order.index')}}">
            <p>Data Order</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('contact')" href="#">
            <p>Contact</p>
          </a>
        </li>
    </ul>
  </div>
</div>