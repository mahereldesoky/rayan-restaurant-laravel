
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">

    <div class="sidenav-header bg-dark">
      <i class="fas fa-times p-5 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="/" target="_blank">
        <img src="/admin/assets/img/Rayan Logo W.png"  width="150px" height="150px" class="navbar-brand-img ps-4 h-100 "  alt="main_logo">
        {{-- <span class="ms-2 pt-3 font-weight-bold text-white">Rayan Lounge</span> --}}
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link  {{Request::is('admin/dashboard') ? 'active':''}} " href="{{url('admin/dashboard')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
            @if(Auth::user()->role_as == '1')
        <li class="nav-item">
          <a class="nav-link {{Request::is('admin/users') ? 'active':''}}"  href="{{url('admin/users')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-user fs-6 mb-2 text-info"></i>
            </div>
            <span class="nav-link-text ms-1"> Users</span>
          </a>
        </li>
        @endif

        <li class="nav-item">
            <a class="nav-link {{Request::is('admin/offers') ? 'active':''}} " href="{{url('admin/offers')}}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-money-coins text-warning text-lg opacity-10" ></i>
              </div>
              <span class="nav-link-text ms-1">Offers</span>
            </a>
          </li>

          <li class="nav-item px-2">
            <a class="nav-link" data-bs-toggle="collapse" href="" aria-expanded="false" aria-controls="ui-basic">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
              <span class="nav-link-text ms-1 ">Menu</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{Request::is('admin/category') || Request::is('admin/products') ? 'show':''}}" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item {{Request::is('admin/category') ? 'active':''}}"> <a class="nav-link" href="{{url('admin/category')}}">Category</a></li>
                <li class="nav-item {{Request::is('admin/products') ? 'active':''}}"> <a class="nav-link" href="{{url('admin/products')}}">Products</a></li>
              </ul>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link {{Request::is('admin/reservation') ? 'active':''}} " href="{{url('admin/reservation')}}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-calendar-grid-58 text-danger text-lg opacity-10" ></i>
              </div>
              <span class="nav-link-text ms-1">Reservation</span>
            </a>
          </li>
    

        {{-- <li class="nav-item dropdown">
          <a class="nav-link " href="{{url('admin/category')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Menu</span>
          </a>
        </li> --}}

        <li class="nav-link">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-user fs-6 mb-2 text-dark"></i>
              </div>
              <span class="nav-link-text "><div > {{ Auth::user()->name }}</div></span>
          </li>

        

      </ul>
    </div>


</aside>