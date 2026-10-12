@php
    $navSetting = $settings ?? null;
    $isHome = request()->routeIs('home');
    $navConcerns = \App\Models\SisterConcern::active()->get();
@endphp
<nav class="navbar navbar-expand-lg {{ $isHome ? 'navbar-home navbar-home-overlay fixed-top' : 'sticky-top' }} border-bottom shadow-sm"
    data-navbar-home="{{ $isHome ? 'true' : 'false' }}">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="{{ route('home') }}">
            @if ($navSetting?->logo_path)
                <img src="{{ asset('storage/' . $navSetting->logo_path) }}" alt="Magpie Group Logo" height="38" class="me-1">
            @else
                <span class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary text-white shadow-sm" style="width: 36px; height: 36px; font-size: 1.1rem; background: linear-gradient(135deg, #0f2b48, #1e3a8a) !important;">
                    <i class="bi bi-feather"></i>
                </span>
            @endif
            <div class="d-flex flex-column lh-1">
                <span class="fs-5 tracking-tight fw-bolder text-uppercase" style="letter-spacing: 0.5px;">{{ $navSetting->site_name ?? 'Magpie Group' }}</span>
                <span class="small text-muted" style="font-size: 0.68rem; font-weight: 500; letter-spacing: 1px;">RMG &amp; TEXTILE</span>
            </div>
        </a>

        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}" role="button" data-bs-toggle="dropdown">
                        About Us
                    </a>
                    <ul class="dropdown-menu shadow-sm border-0 rounded-3">
                        <li><a class="dropdown-item py-2" href="{{ route('about') }}"><i class="bi bi-buildings me-2 text-primary"></i> Group Overview</a></li>
                        <li><a class="dropdown-item py-2" href="{{ route('about') }}#md-message"><i class="bi bi-chat-square-quote me-2 text-primary"></i> MD's Message</a></li>
                        <li><a class="dropdown-item py-2" href="{{ route('about') }}#board-of-directors"><i class="bi bi-people me-2 text-primary"></i> Board of Directors</a></li>
                        <li><a class="dropdown-item py-2" href="{{ route('about') }}#milestones"><i class="bi bi-clock-history me-2 text-primary"></i> Corporate Journey</a></li>
                    </ul>
                </li>

                {{-- Sister Concerns Dropdown --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('sister-concerns*') ? 'active' : '' }}" href="{{ route('sister-concerns.index') }}" role="button" data-bs-toggle="dropdown">
                        Sister Concerns
                    </a>
                    <ul class="dropdown-menu shadow-sm border-0 rounded-3" style="min-width: 280px;">
                        <li><a class="dropdown-item py-2 fw-semibold" href="{{ route('sister-concerns.index') }}"><i class="bi bi-grid-fill me-2 text-primary"></i> All Manufacturing Units</a></li>
                        <li><hr class="dropdown-divider my-1"></li>
                        @forelse ($navConcerns as $concern)
                            <li>
                                <a class="dropdown-item py-2" href="{{ route('sister-concerns.show', $concern->slug) }}">
                                    <div class="fw-medium text-dark">{{ $concern->name }}</div>
                                    <small class="text-muted d-block" style="font-size: 0.75rem;">{{ $concern->monthly_capacity ?? 'Export Manufacturing' }}</small>
                                </a>
                            </li>
                        @empty
                            <li><a class="dropdown-item py-2" href="{{ route('sister-concerns.index') }}">Magpie Knit Wear Ltd.</a></li>
                            <li><a class="dropdown-item py-2" href="{{ route('sister-concerns.index') }}">Magpie Composite Textile Ltd.</a></li>
                            <li><a class="dropdown-item py-2" href="{{ route('sister-concerns.index') }}">ABSS High-Tech Sweater Ltd.</a></li>
                        @endforelse
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('products*') ? 'active' : '' }}" href="{{ route('products.index') }}">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('sustainability.index') ? 'active' : '' }}" href="{{ route('sustainability.index') }}">Sustainability &amp; ETP</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('compliance.index') ? 'active' : '' }}" href="{{ route('compliance.index') }}">Compliance &amp; CSR</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('partners.index') ? 'active' : '' }}" href="{{ route('partners.index') }}">Buyers</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('gallery*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown">
                        Gallery
                    </a>
                    <ul class="dropdown-menu shadow-sm border-0 rounded-3">
                        <li><a class="dropdown-item py-2" href="{{ route('gallery.photos') }}"><i class="bi bi-images me-2 text-primary"></i> Factory Photo Tour</a></li>
                        <li><a class="dropdown-item py-2" href="{{ route('gallery.videos') }}"><i class="bi bi-play-circle me-2 text-primary"></i> Video Gallery</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact*') ? 'active' : '' }}" href="{{ route('contact.index') }}">Contact</a>
                </li>

                @guest
                    <li class="nav-item ms-lg-2">
                        <a class="btn btn-sm btn-outline-primary px-3 rounded-pill" href="{{ route('login') }}">Staff Login</a>
                    </li>
                @endguest

                @auth
                    <li class="nav-item dropdown ms-lg-2">
                        <a class="nav-link dropdown-toggle d-flex align-items-center gap-1" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle"></i> {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 rounded-3">
                            @if (auth()->user()->is_admin)
                                <li><a class="dropdown-item py-2" href="{{ route('admin.dashboard') }}"><i class="bi bi-speedometer2 me-2"></i> Admin Panel</a></li>
                                <li><hr class="dropdown-divider my-1"></li>
                                <li>
                                    <form action="{{ route('admin.logout') }}" method="POST" class="m-0">
                                        @csrf
                                        <button type="submit" class="dropdown-item py-2 text-danger"><i class="bi bi-box-arrow-right me-2"></i> Logout</button>
                                    </form>
                                </li>
                            @else
                                <li><a class="dropdown-item py-2" href="{{ route('dashboard') }}"><i class="bi bi-person me-2"></i> Dashboard</a></li>
                                <li><hr class="dropdown-divider my-1"></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST" class="m-0">
                                        @csrf
                                        <button type="submit" class="dropdown-item py-2 text-danger"><i class="bi bi-box-arrow-right me-2"></i> Logout</button>
                                    </form>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
