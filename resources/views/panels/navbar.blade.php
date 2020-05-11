@if($configData["mainLayoutType"] == 'horizontal')
  <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu {{ $configData['navbarColor'] }} navbar-fixed">
      <div class="navbar-header d-xl-block d-none">
          <ul class="nav navbar-nav flex-row">
              <li class="nav-item"><a class="navbar-brand" href="dashboard-analytics">
                  <div class="brand-logo"></div></a></li>
          </ul>
      </div>
  @else
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu {{ $configData['navbarClass'] }} navbar-light navbar-shadow {{ $configData['navbarColor'] }}">
  @endif
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav bookmark-icons">

                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ url('profile') }}" data-toggle="tooltip" data-placement="top" title="Profile"><i class="ficon feather icon-user"></i></a></li>

                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ url('profile-edit') }}" data-toggle="tooltip" data-placement="top" title="Profile Edit"><i class="ficon feather icon-settings"></i></a></li>

                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ url('app-chat') }}" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon feather icon-message-square"></i></a></li>

                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ url('category') }}" data-toggle="tooltip" data-placement="top" title="Add Category"><i class="ficon feather icon-edit"></i></a></li>

                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ url('theme-create') }}" data-toggle="tooltip" data-placement="top" title="Add Theme"><i class="ficon feather icon-plus"></i></a></li>

                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon feather icon-search"></i></a>
                        <div class="search-input">
                            <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                            <input class="input" type="text" placeholder="Explore Impactive Tech.." tabindex="-1" data-search="laravel-search-list" />
                            <div class="search-input-close"><i class="feather icon-x"></i></div>
                            <ul class="search-list search-list-main"></ul>
                        </div>
                    </li>
                     
                    {{-- <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">{{ Auth::user()->name }}</span><span class="user-status">Available</span></div><span><img class="round" src="{{asset('images/portrait/small/avatar-s-11.jpg') }}" alt="avatar" height="40" width="40" /></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="page-user-profile"><i class="feather icon-user"></i> Edit Profile</a><a class="dropdown-item" href="app-email"><i class="feather icon-mail"></i> My Inbox</a><a class="dropdown-item" href="app-todo"><i class="feather icon-check-square"></i> Task</a><a class="dropdown-item" href="app-chat"><i class="feather icon-message-square"></i> Chats</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="{{ route('register') }}"><i class="feather icon-power"></i> Logout</a>
                            <form id="logout-form" action="login" method="POST" style="display: none;">
                                        @csrf
                            </form>
                        </div>
                    </li> --}}
                    
                    @guest


                            @if (Route::has('register'))

                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><button style="padding: 10px;margin-top: -10px; border-radius: 5px; border: 0px solid;margin-right: 10px; background-color: #8c82f2; color: white;">Login</button></a>
                    </li>

                            @endif

                            @else
                            <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">{{ Auth::user()->name }}</span><span class="user-status">{{ Auth::user()->gender }}</span></div><span><img class="round" src="../avatars/{{ Auth::user()->avatar }}" alt="avatar" height="40" width="40" /></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="{{ route('edit.page') }}"><i class="feather icon-user"></i> Edit Profile</a><a class="dropdown-item" href="app-email"><i class="feather icon-mail"></i> My Inbox</a><a class="dropdown-item" href="app-todo"><i class="feather icon-check-square"></i> Task</a><a class="dropdown-item" href="app-chat"><i class="feather icon-message-square"></i> Chats</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </div>
                    </li>
                          {{--   <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false"></a>
                                  Welcome - {{ Auth::user()->name }} <span class="caret"></span>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('logout') }}
                                    </a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    
                                </ul>
                            </li> --}}
                        


                            @endguest
                </ul>
            </div>
        </div>
    </div>
</nav>

{{-- Search Start Here --}}
<ul class="main-search-list-defaultlist d-none">
    
</ul>
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer">
        <a class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
        </a>
    </li>
</ul>
{{-- Search Ends --}}
<!-- END: Header-->
