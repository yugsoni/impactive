@php
    $configData = Helper::applClasses();
@endphp
<div class="main-menu menu-fixed {{($configData['theme'] === 'light') ? "menu-dark" : "menu-light"}} menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="dashboard-analytics">
                    <h5 class="brand-text mb-0">Impactive-Tech</h5>
                </a></li>
            
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            {{-- Foreach menu item starts --}}
            {{-- {{ dd(Auth::user()->name) }} --}}
            @foreach($menuData[0]->menu as $menu)
                @if(isset($menu->navheader))
                    <li class="navigation-header">
                        <span>{{ $menu->navheader }}</span>
                    </li>
                @else
                  {{-- Add Custom Class with nav-item --}}
                  @php
                    $custom_classes = "";
                    if(isset($menu->classlist)) {
                      $custom_classes = $menu->classlist;
                    }
                    $translation = "";
                    if(isset($menu->i18n)){
                        $translation = $menu->i18n;
                    }
                    $auth_name_auth = Auth::user()->type;
                    // if ($auth_name_auth == "User") {
                        
                    //     if ($menu->name == "All Users") {
                            
                

                    //     }

                    // }
                  @endphp
                  @if($menu->name == "All Users" or $menu->name == "View All Themes" or $menu->name == "Queued Themes")
                        @if($auth_name_auth=="Admin")
                         <li class="nav-item {{ (request()->is($menu->url)) ? 'active' : '' }} {{ $custom_classes }}">
                                <a href="{{ $menu->url }}">
                                    <i class="{{ $menu->icon }}"></i>
                                    <span class="menu-title" data-i18n="{{ $translation }}">{{ $menu->name }}</span>
                                    @if (isset($menu->badge))
                                        <?php $badgeClasses = "badge badge-pill badge-primary float-right" ?>
                                        <span class="{{ isset($menu->badgeClass) ? $menu->badgeClass.' test' : $badgeClasses.' notTest' }} ">{{$menu->badge}}</span>
                                    @endif
                                </a>
                                @if(isset($menu->submenu))
                                    @include('panels/submenu', ['menu' => $menu->submenu])
                                @endif
                            </li>
                        @endif
                  @else
                  <li class="nav-item {{ (request()->is($menu->url)) ? 'active' : '' }} {{ $custom_classes }}">
                        <a href="{{ $menu->url }}">
                            <i class="{{ $menu->icon }}"></i>
                            <span class="menu-title" data-i18n="{{ $translation }}">{{ $menu->name }}</span>
                            @if (isset($menu->badge))
                                <?php $badgeClasses = "badge badge-pill badge-primary float-right" ?>
                                <span class="{{ isset($menu->badgeClass) ? $menu->badgeClass.' test' : $badgeClasses.' notTest' }} ">{{$menu->badge}}</span>
                            @endif
                        </a>
                        @if(isset($menu->submenu))
                            @include('panels/submenu', ['menu' => $menu->submenu])
                        @endif
                    </li>
                @endif
                @endif
            @endforeach
            {{-- Foreach menu item ends --}}
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
