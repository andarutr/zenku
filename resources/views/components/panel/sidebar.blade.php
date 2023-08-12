<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
      <div class="sidebar-brand-text mx-1">ZENKU APP</div>
    </a>
    <hr class="sidebar-divider my-0">
    <center>
      <img src="/img/profile/{{ Auth::user()->picture }}" width="100" class="img-fluid rounded-circle mt-3 mb-3">
      <h5>{{ Auth::user()->name }}</h5>
      <p>{{ Auth::user()->email }}</p>
    </center>
    @if(Auth::user()->role->role === 'User')
    <div class="sidebar-heading mt-3">
        Kategori Materi
    </div>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
        aria-expanded="true" aria-controls="collapseBootstrap">
        <i class="fas fa-fw fa-list"></i>
        <span>Kategori</span>
      </a>
      <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          @foreach($categories as $ctg)
          <a class="collapse-item" href="/user/kategori/{{ $ctg->id_category }}/{{ strtolower($ctg->name_category) }}">{{ $ctg->name_category }}</a>
          @endforeach
        </div>
      </div>
    </li>
    @endif
    <div class="sidebar-heading mt-3">
        Fitur
    </div>
    @foreach($menus as $menu)
    <li class="nav-item">
        <a class="nav-link" href="{{ $menu->url_menu }}">
            <i class="fas fa-fw {{ $menu->icon_menu }}"></i>
            <span>{{ $menu->name_menu }}</span></a>
    </li>
    @endforeach
    
    <hr class="sidebar-divider">
  
</ul>