@php
    $footerSetting = $settings ?? null;
    $social = $footerSetting?->social_links ?? [];
    $sisterConcerns = \App\Models\SisterConcern::active()->get();
@endphp

<footer class="pt-5 pb-4 mt-5 position-relative" style="background: #09192b; color: #cbd5e1; border-top: 1px solid rgba(255,255,255,0.08);">
    <div class="container">
        <div class="row g-4 justify-content-between mb-4">
            {{-- Col 1: Brand & Headquarters Info --}}
            <div class="col-lg-4 col-md-6">
                <div class="d-flex align-items-center gap-2 mb-3">
                    @if ($footerSetting?->logo_path)
                        <img src="{{ asset('storage/' . $footerSetting->logo_path) }}"
                            alt="{{ $footerSetting?->site_name ?? 'Magpie Group' }} logo"
                            style="max-height: 48px; width: auto; background: #fff; padding: 6px 10px; border-radius: 8px;">
                    @else
                        <span class="d-inline-flex align-items-center justify-content-center rounded-3 text-white shadow-sm" style="width: 42px; height: 42px; font-size: 1.3rem; background: linear-gradient(135deg, #1e3a8a, #0284c7);">
                            <i class="bi bi-feather"></i>
                        </span>
                    @endif
                    <div>
                        <h5 class="text-white mb-0 fw-bold tracking-tight text-uppercase">{{ $footerSetting?->site_name ?? 'Magpie Group' }}</h5>
                        <small class="text-secondary" style="font-size: 0.72rem; letter-spacing: 0.8px;">100% EXPORT-ORIENTED RMG &amp; TEXTILE</small>
                    </div>
                </div>
                <p class="small text-secondary mb-3 pe-lg-3 leading-relaxed">
                    100% export-oriented quality readymade garments and composite textile group in Bangladesh, serving global fashion leaders across Europe and North America since 2003 with German STOLL engineering.
                </p>
                <div class="d-flex flex-column gap-2 small text-secondary">
                    <div class="d-flex align-items-start gap-2">
                        <i class="bi bi-geo-alt-fill text-warning mt-1"></i>
                        <span><strong>Head Office:</strong> {{ $footerSetting?->contact_address ?? 'House # 25 (5th Floor), Rabindra Swarani Road, Sector #03, Uttara, Dhaka-1230.' }}</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-envelope-fill text-info"></i>
                        <a href="mailto:{{ $footerSetting?->contact_email ?? 'md@magpiegroupbd.com' }}" class="text-secondary text-decoration-none hover-white">
                            {{ $footerSetting?->contact_email ?? 'md@magpiegroupbd.com' }}
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-telephone-fill text-success"></i>
                        <a href="tel:{{ $footerSetting?->contact_phone ?? '+88028932047' }}" class="text-secondary text-decoration-none hover-white">
                            {{ $footerSetting?->contact_phone ?? '+88-02-8932047, 88-02-8954194' }}
                        </a>
                    </div>
                </div>
            </div>

            {{-- Col 2: Sister Concerns --}}
            <div class="col-lg-3 col-md-6">
                <h6 class="text-white fw-bold mb-3 d-flex align-items-center gap-2 text-uppercase" style="letter-spacing: 0.5px;">
                    <i class="bi bi-buildings text-warning"></i> Sister Concerns
                </h6>
                <div class="d-flex flex-column gap-2 small">
                    @forelse ($sisterConcerns as $concern)
                        <div class="p-2 rounded-2" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.06);">
                            <a href="{{ route('sister-concerns.show', $concern->slug) }}" class="text-white text-decoration-none fw-medium d-block">
                                {{ $concern->name }}
                            </a>
                            <span class="text-muted d-block" style="font-size: 0.72rem;">{{ $concern->monthly_capacity }}</span>
                        </div>
                    @empty
                        <a href="{{ route('sister-concerns.index') }}" class="text-secondary text-decoration-none">Magpie Knit Wear Ltd.</a>
                        <a href="{{ route('sister-concerns.index') }}" class="text-secondary text-decoration-none">Magpie Composite Textile Ltd.</a>
                        <a href="{{ route('sister-concerns.index') }}" class="text-secondary text-decoration-none">ABSS High-Tech Sweater Ltd.</a>
                    @endforelse
                </div>
            </div>

            {{-- Col 3: Quick Navigation --}}
            <div class="col-lg-2 col-md-6 col-6">
                <h6 class="text-white fw-bold mb-3 d-flex align-items-center gap-2 text-uppercase" style="letter-spacing: 0.5px;">
                    <i class="bi bi-link-45deg text-primary"></i> Quick Links
                </h6>
                <div class="d-flex flex-column gap-2 small">
                    <a href="{{ route('about') }}" class="text-secondary text-decoration-none hover-white"><i class="bi bi-chevron-right text-warning opacity-75"></i> About Group</a>
                    <a href="{{ route('products.index') }}" class="text-secondary text-decoration-none hover-white"><i class="bi bi-chevron-right text-warning opacity-75"></i> Products Catalog</a>
                    <a href="{{ route('sustainability.index') }}" class="text-secondary text-decoration-none hover-white"><i class="bi bi-chevron-right text-warning opacity-75"></i> Sustainability &amp; ETP</a>
                    <a href="{{ route('compliance.index') }}" class="text-secondary text-decoration-none hover-white"><i class="bi bi-chevron-right text-warning opacity-75"></i> Compliance &amp; CSR</a>
                    <a href="{{ route('partners.index') }}" class="text-secondary text-decoration-none hover-white"><i class="bi bi-chevron-right text-warning opacity-75"></i> Valued Buyers</a>
                    <a href="{{ route('gallery.photos') }}" class="text-secondary text-decoration-none hover-white"><i class="bi bi-chevron-right text-warning opacity-75"></i> Factory Tour</a>
                    <a href="{{ route('contact.index') }}" class="text-secondary text-decoration-none hover-white"><i class="bi bi-chevron-right text-warning opacity-75"></i> Contact &amp; Locations</a>
                </div>
            </div>

            {{-- Col 4: International Approvals & Factory Locations --}}
            <div class="col-lg-3 col-md-6 col-6">
                <h6 class="text-white fw-bold mb-3 d-flex align-items-center gap-2 text-uppercase" style="letter-spacing: 0.5px;">
                    <i class="bi bi-shield-check text-success"></i> Approvals &amp; Safety
                </h6>
                <div class="d-flex flex-column gap-2 mb-3">
                    <div class="d-flex align-items-center gap-2 py-1 px-2 rounded-2" style="background: rgba(34, 197, 94, 0.1); border: 1px solid rgba(34, 197, 94, 0.2);">
                        <i class="bi bi-check-circle-fill text-success"></i>
                        <span class="small text-white fw-semibold">Accord &amp; Alliance Approved</span>
                    </div>
                    <div class="d-flex align-items-center gap-2 py-1 px-2 rounded-2" style="background: rgba(59, 130, 246, 0.1); border: 1px solid rgba(59, 130, 246, 0.2);">
                        <i class="bi bi-droplet-fill text-info"></i>
                        <span class="small text-white fw-semibold">100 m³/hr Biological ETP</span>
                    </div>
                    <div class="d-flex align-items-center gap-2 py-1 px-2 rounded-2" style="background: rgba(245, 158, 11, 0.1); border: 1px solid rgba(245, 158, 11, 0.2);">
                        <i class="bi bi-globe-europe-africa text-warning"></i>
                        <span class="small text-white fw-semibold">EU GSP Duty-Free Status</span>
                    </div>
                </div>

                <div class="small text-secondary">
                    <strong class="text-white d-block mb-1">Export Destinations:</strong>
                    France, Germany, Sweden, UK, USA, Canada.
                </div>
            </div>
        </div>

        <hr style="border-color: rgba(255,255,255,0.1);" class="my-4">

        <div class="row align-items-center justify-content-between text-secondary small">
            <div class="col-md-6 mb-2 mb-md-0">
                &copy; {{ date('Y') }} <strong>Magpie Group</strong>. All rights reserved. 100% Export-Oriented RMG &amp; Composite Textile Industry.
            </div>
            <div class="col-md-6 text-md-end">
                <span>Designed for International Apparel Sourcing</span>
            </div>
        </div>
    </div>
</footer>
