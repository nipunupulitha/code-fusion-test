<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href={{ route('home') }}>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href={{ route('user') }}>Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href={{ route('order') }}>Orders</a>
          </li>    <li class="nav-item">
            <a class="nav-link" href={{ route('property') }}>Properties</a>
          </li>    <li class="nav-item">
            <a class="nav-link" href={{ route('property_aminity') }}>Property Aminities</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>