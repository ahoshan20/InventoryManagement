<div class="sidebar" data-background-color="dark">
  <div class="sidebar-logo">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark">
      <a href="index.html" class="logo">
        <img src="{{asset('admin/assets/img/kaiadmin/logo_light.svg')}}" alt="navbar brand" class="navbar-brand"
          height="20" />
      </a>
      <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar">
          <i class="gg-menu-right"></i>
        </button>
        <button class="btn btn-toggle sidenav-toggler">
          <i class="gg-menu-left"></i>
        </button>
      </div>
      <button class="topbar-toggler more">
        <i class="gg-more-vertical-alt"></i>
      </button>
    </div>
    <!-- End Logo Header -->
  </div>
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <ul class="nav nav-secondary">
        <li class="nav-item {{$page_slug == 'dashboard' ? 'active' : ''}}">
          <a href="{{route('admin.dashboard')}}">
          <i class="icon-home"></i>
            <p>{{__('Dashboard')}}</p>
          </a>
        </li>
        <li class="nav-item {{$page_slug == 'admin' ? 'active' : ''}}">
          <a href="{{route('admin.index')}}">
          <i class="fab fa-readme"></i>
            <p>{{__('Admin Management')}}</p>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a data-bs-toggle="collapse" href="#base">
            <i class="fas fa-layer-group"></i>
            <p>Base</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="base">
            <ul class="nav nav-collapse">
              <li>
                <a href="components/avatars.html">
                  <span class="sub-item">Avatars</span>
                </a>
              </li>
              <li>
                <a href="components/buttons.html">
                  <span class="sub-item">Buttons</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#submenu">
            <i class="fas fa-bars"></i>
            <p>Menu Levels</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="submenu">
            <ul class="nav nav-collapse">
              <li>
                <a data-bs-toggle="collapse" href="#subnav1">
                  <span class="sub-item">Level 1</span>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="subnav1">
                  <ul class="nav nav-collapse subnav">
                    <li>
                      <a href="#">
                        <span class="sub-item">Level 2</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="sub-item">Level 2</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <a data-bs-toggle="collapse" href="#subnav2">
                  <span class="sub-item">Level 1</span>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="subnav2">
                  <ul class="nav nav-collapse subnav">
                    <li>
                      <a href="#">
                        <span class="sub-item">Level 2</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <a href="#">
                  <span class="sub-item">Level 1</span>
                </a>
              </li>
            </ul>
          </div>
        </li> -->
      </ul>
    </div>
  </div>
</div>