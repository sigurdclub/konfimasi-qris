<nav
                class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                id="layout-navbar"
            >
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                    <i class="bx bx-menu bx-sm"></i>
                </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                <!-- Search -->
                {{-- <div class="navbar-nav align-items-center">
                    <div class="nav-item d-flex align-items-center">
                    <i class="bx bx-search fs-4 lh-0"></i>
                    <input
                        type="text"
                        class="form-control border-0 shadow-none"
                        placeholder="Search..."
                        aria-label="Search..."
                    />
                    </div>
                </div> --}}
                <!-- /Search -->

                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <!-- Place this tag where you want the button to render. -->
                    {{-- <li class="nav-item lh-1 me-3">
                    <a
                        class="github-button"
                        href="https://github.com/themeselection/sneat-html-admin-template-free"
                        data-icon="octicon-star"
                        data-size="large"
                        data-show-count="true"
                        aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                        >Star</a>
                    </li> --}}

                    <div class="dropstart">
                        <a class="dropdown-togglehide-arrow" href="#" data-bs-toggle="dropdown">
                            <div class="avatar avatar-online">
                            <img src="{{ asset('assets/img/profile icon.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                        <img src="{{ asset('assets/img/profile icon.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        @if (Auth::user()->role == "admin")
                                            <span class="fw-semibold d-block">
                                                    {{ Auth::user()->name }}
                                            </span>
                                        @else
                                        @foreach ($userData as $item)
                                            <span class="fw-semibold d-block">
                                                {{ $item->NM_WP }}
                                                    
                                            </span>
                                        @endforeach

                                        @endif
                                        <small class="text-muted">{{ Auth::user()->role }}</small>
                                    </div>
                                    </div>
                                </a>
                                </li>
                                
                                <li>
                                <div class="dropdown-divider"></div>
                                </li>
                                {{-- <li>
                                <a class="dropdown-item" href="#">
                                    <i class="bx bx-user me-2"></i>
                                    <span class="align-middle">My Profile</span>
                                </a>
                                </li> --}}

                                {{-- <li>
                                <div class="dropdown-divider"></div>
                                </li> --}}

                                <li>
                                <a class="dropdown-item" href="#">

                                    <form action="{{ url('logout') }}" method="POST">

                                        {{ csrf_field() }}
                        
                                        
                                        <button style="background: unset;border:unset" type="submit" name="logout" class="align-middle">
                                            <i style="font-size: 20px" class="fa-solid fa-door-open"></i>
                                            
                                            <span style="margin: 12px;font-weight: bold">
                                                Log Out
                                            </span>
                                            </button>
                                            
                                        
                                            {{-- <i class="menu-icon tf-icons bx bxs-user-account"></i>
                                            <div data-i18n="Account Settings">Logout</div> --}}
                        
                                    </form>


                                </a>
                                </li>
                        </ul>
                      </div>

                   
                </div>
            </nav>
