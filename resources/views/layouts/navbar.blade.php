            <nav
                class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                id="layout-navbar"
                style="display: flex;justify-content: space-between"
            >
                <div style="display: flex" class="layout-menu-toggle " >
                    
                    
                        <h5 id="dateTime" style="color: #00b10fe8 "></h5>
                    
                    <a class="nav-item nav-link px-0 me-xl-4 menu-toogleNavbar" href="javascript:void(0)" style="opacity: 0;">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>
                
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

                                        {{-- @foreach ($userData as $item)
                                            <span class="fw-semibold d-block">
                                                {{ $item->NM_WP }}
                                                    
                                            </span>
                                        @endforeach --}}

                                        @endif
                                        <small class="text-muted">{{ Auth::user()->role }}</small>
                                    </div>
                                    </div>
                                </a>
                                </li>
                                
                                <li>
                                <div class="dropdown-divider"></div>
                                </li>
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
                                    </form>
                                </a>
                                </li>
                        </ul>
                    </div>
            </nav>
