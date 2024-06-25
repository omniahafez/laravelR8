<!-- start nav bar-->

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">clients</a>
    </div>
    <ul class="nav navbar-nav">
      <li class= "active"> <a href="{{ route ('custom.addClient')}}">add</a></li>
          <li><a href="{{ route ('custom.clients')}}">clients</a></li>
          <li><a href="{{ route ('custom.trashClients')}}">trashed</a></li>
          @yeild('menu')
    @stack('submenu')
      <li><a href="#">page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a></li>
      <li><a href="{{ LaravelLocalization::getLocalizedURL('ar') }}">العربية</a></li>
    </ul>
  </div>
</nav>
  <!-- end nav bar-->