<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="#" style="text-transform: none;">SneaksAvenue</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="#">SA</a>
  </div>
  <ul class="sidebar-menu">
    <li class="menu-header">Starter</li>
    <li class="nav-item dropdown active">
      <a href="{{route('article.index')}}" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Article</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="{{route('article.index')}}">All Data</a></li>
        <li><a class="nav-link" href="{{route('article.create')}}">Create Data</a></li>
      </ul>
    </li>
  </ul>
</aside>