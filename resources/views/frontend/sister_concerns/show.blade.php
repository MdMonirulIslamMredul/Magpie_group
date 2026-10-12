@extends('frontend.layouts.app')

@section('title', $sisterConcern->name . ' | Magpie Group')
@section('meta_description', 'Detailed factory profile, machinery inventory, production capacity, and specifications for ' . $sisterConcern->name . ' under Magpie Group.')

@section('content')
    {{-- Hero Section --}}
    <section class="py-5 text-white position-relative" style="background: linear-gradient(135deg, #09192b 0%, #0f2b48 60%, #1e3a8a 100%);">
        <div class="container py-3 position-relative" data-aos="fade-up">
            <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
                <a href="{{ route('sister-concerns.index') }}" class="text-white-50 text-decoration-none small">
                    <i class="bi bi-arrow-left"></i> Sister Concerns
                </a>
                <span class="text-white-50">/</span>
                <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-semibold">Production Started: {{ $sisterConcern->production_started_text }}</span>
                <span class="badge bg-white bg-opacity-20 text-white px-3 py-1 rounded-pill">Capacity: {{ $sisterConcern->monthly_capacity }}</span>
            </div>

            <h1 class="display-4 fw-bold mb-2">{{ $sisterConcern->name }}</h1>
            <p class="lead text-white-50 mb-4" style="max-width: 850px;">{{ $sisterConcern->tagline }}</p>

            <div class="d-flex flex-wrap gap-4 text-white-50 small border-top border-white border-opacity-10 pt-3">
                <div><i class="bi bi-geo-alt-fill text-danger me-1"></i> <strong class="text-white">Location:</strong> {{ $sisterConcern->address }}</div>
                <div><i class="bi bi-person-fill text-warning me-1"></i> <strong class="text-white">Contact:</strong> {{ $sisterConcern->contact_person }} ({{ $sisterConcern->contact_person_designation }})</div>
                @if ($sisterConcern->contact_email)
                    <div><i class="bi bi-envelope-fill text-info me-1"></i> <strong class="text-white">Email:</strong> <a href="mailto:{{ $sisterConcern->contact_email }}" class="text-white-50 text-decoration-underline">{{ $sisterConcern->contact_email }}</a></div>
                @endif
            </div>
        </div>
    </section>

    {{-- Main Factory Profile Section --}}
    <section class="py-5 bg-white">
        <div class="container py-2">
            <div class="row g-4">
                {{-- Left Column: Specifications, Machinery & Capacity --}}
                <div class="col-lg-8" data-aos="fade-up">
                    {{-- 1. Overview & Products --}}
                    <div class="card border-0 shadow-sm rounded-4 p-4 p-lg-5 mb-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="d-inline-flex align-items-center justify-content-center rounded-3 bg-primary-subtle text-primary" style="width: 44px; height: 44px;">
                                <i class="bi bi-tag-fill fs-5"></i>
                            </span>
                            <h3 class="h4 fw-bold mb-0">Main Products &amp; Offerings</h3>
                        </div>
                        <p class="fs-5 text-dark fw-medium mb-4">{{ $sisterConcern->main_products }}</p>

                        @if (!empty($sisterConcern->product_profile))
                            <h5 class="h6 fw-bold text-uppercase text-muted mb-3" style="letter-spacing: 0.5px;">Product Profiles &amp; Fabric Specializations:</h5>
                            <div class="row g-2">
                                @foreach ($sisterConcern->product_profile as $profile)
                                    <div class="col-md-6">
                                        <div class="p-3 rounded-3 bg-light d-flex align-items-center gap-2">
                                            <i class="bi bi-check-circle-fill text-success"></i>
                                            <span class="small fw-semibold text-secondary">{{ $profile }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    {{-- 2. Factory Infrastructure & Buildings --}}
                    @if (!empty($sisterConcern->building_specs))
                        <div class="card border-0 shadow-sm rounded-4 p-4 p-lg-5 mb-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <span class="d-inline-flex align-items-center justify-content-center rounded-3 bg-warning-subtle text-warning" style="width: 44px; height: 44px;">
                                    <i class="bi bi-building fs-5"></i>
                                </span>
                                <h3 class="h4 fw-bold mb-0">Factory Specifications &amp; Premises</h3>
                            </div>

                            <div class="row g-3">
                                @foreach ($sisterConcern->building_specs as $building)
                                    <div class="col-md-6">
                                        <div class="border rounded-4 p-3 h-100 bg-white shadow-xs">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h5 class="h6 fw-bold text-primary mb-0">{{ $building['name'] ?? 'Facility' }}</h5>
                                                <span class="badge bg-primary text-white rounded-pill">{{ $building['size'] ?? '' }}</span>
                                            </div>
                                            <p class="small text-secondary mb-0 leading-relaxed">{{ $building['floors'] ?? '' }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    {{-- 3. Detailed Machinery Matrix --}}
                    @if (!empty($sisterConcern->machinery_summary))
                        <div class="card border-0 shadow-sm rounded-4 p-4 p-lg-5 mb-4">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="d-flex align-items-center gap-3">
                                    <span class="d-inline-flex align-items-center justify-content-center rounded-3 bg-danger-subtle text-danger" style="width: 44px; height: 44px;">
                                        <i class="bi bi-gear-wide-connected fs-5"></i>
                                    </span>
                                    <h3 class="h4 fw-bold mb-0">Machinery &amp; Technology Breakdown</h3>
                                </div>
                                <span class="badge bg-secondary-subtle text-secondary rounded-pill small">Certified STOLL / Juki</span>
                            </div>

                            <p class="text-secondary small mb-4">
                                Our production facilities operate with authentic, high-efficiency machinery from Germany, Turkey, Taiwan, Japan, and Italy.
                            </p>

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover align-middle mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th style="width: 40%;">Department / Category</th>
                                            <th>Machine Specifications &amp; Sets</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sisterConcern->machinery_summary as $dept => $details)
                                            <tr>
                                                <td class="fw-bold text-dark small">
                                                    <i class="bi bi-check2 text-primary me-1"></i> {{ $dept }}
                                                </td>
                                                <td class="small text-secondary">{{ $details }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif

                    {{-- 4. Management Efficiencies & Compliance --}}
                    @if (!empty($sisterConcern->management_efficiencies))
                        <div class="card border-0 shadow-sm rounded-4 p-4 p-lg-5 mb-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <span class="d-inline-flex align-items-center justify-content-center rounded-3 bg-success-subtle text-success" style="width: 44px; height: 44px;">
                                    <i class="bi bi-shield-check fs-5"></i>
                                </span>
                                <h3 class="h4 fw-bold mb-0">Management Efficiencies &amp; Safety Standards</h3>
                            </div>

                            <div class="row g-2">
                                @foreach ($sisterConcern->management_efficiencies as $efficiency)
                                    <div class="col-12">
                                        <div class="d-flex align-items-start gap-2 p-2">
                                            <i class="bi bi-check-lg text-success mt-1 fs-5"></i>
                                            <span class="text-secondary small leading-relaxed">{{ $efficiency }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                {{-- Right Sidebar: Demographics, Target Market & Contact --}}
                <div class="col-lg-4" data-aos="fade-left">
                    {{-- Capacity & Market Profile --}}
                    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4" style="background: linear-gradient(180deg, #f8fafc 0%, #edf2f7 100%);">
                        <h4 class="h5 fw-bold mb-3 d-flex align-items-center gap-2">
                            <i class="bi bi-pie-chart-fill text-primary"></i> Target Output Profile
                        </h4>

                        @if ($sisterConcern->annual_target_output)
                            <div class="alert alert-primary border-0 rounded-3 p-3 mb-3 small">
                                <strong class="d-block text-primary">Total Annual Output:</strong>
                                {{ $sisterConcern->annual_target_output }}
                            </div>
                        @endif

                        @if (!empty($sisterConcern->target_market_profile))
                            <ul class="list-unstyled mb-0 small">
                                @foreach ($sisterConcern->target_market_profile as $label => $val)
                                    <li class="d-flex justify-content-between align-items-center py-2 border-bottom">
                                        <span class="text-secondary">{{ $label }}</span>
                                        <span class="fw-bold text-dark">{{ $val }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    {{-- Demographics Breakdown --}}
                    @if (!empty($sisterConcern->demographics))
                        <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
                            <h4 class="h5 fw-bold mb-3 d-flex align-items-center gap-2">
                                <i class="bi bi-people-fill text-warning"></i> Workforce Demographics
                            </h4>
                            <ul class="list-unstyled mb-0 small">
                                @foreach ($sisterConcern->demographics as $role => $count)
                                    <li class="d-flex justify-content-between align-items-center py-2 border-bottom">
                                        <span class="text-secondary">{{ $role }}</span>
                                        <span class="badge bg-light text-dark border px-2 py-1 rounded-pill">{{ $count }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Special Qualities & Welfare --}}
                    @if (!empty($sisterConcern->special_qualities))
                        <div class="card border-0 shadow-sm rounded-4 p-4 mb-4 bg-primary text-white">
                            <h4 class="h5 fw-bold mb-3 d-flex align-items-center gap-2 text-white">
                                <i class="bi bi-stars text-warning"></i> Special Qualities &amp; Welfare
                            </h4>
                            <ul class="list-unstyled mb-0 small text-white-50">
                                @foreach ($sisterConcern->special_qualities as $quality)
                                    <li class="mb-2 d-flex align-items-start gap-2">
                                        <i class="bi bi-check2-circle text-warning mt-1"></i>
                                        <span class="text-white">{{ $quality }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Direct Contact Card --}}
                    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4 border-top border-4 border-warning">
                        <h4 class="h5 fw-bold mb-3 d-flex align-items-center gap-2">
                            <i class="bi bi-person-lines-fill text-warning"></i> Facility Contact
                        </h4>
                        <div class="mb-2">
                            <strong class="d-block text-dark">{{ $sisterConcern->contact_person }}</strong>
                            <small class="text-muted">{{ $sisterConcern->contact_person_designation }}</small>
                        </div>
                        @if ($sisterConcern->contact_phone)
                            <div class="mb-2 small">
                                <i class="bi bi-telephone-fill text-success me-1"></i>
                                <a href="tel:{{ $sisterConcern->contact_phone }}" class="text-secondary text-decoration-none">{{ $sisterConcern->contact_phone }}</a>
                            </div>
                        @endif
                        @if ($sisterConcern->contact_email)
                            <div class="mb-3 small">
                                <i class="bi bi-envelope-fill text-primary me-1"></i>
                                <a href="mailto:{{ $sisterConcern->contact_email }}" class="text-secondary text-decoration-none">{{ $sisterConcern->contact_email }}</a>
                            </div>
                        @endif

                        <a href="{{ route('contact.index') }}" class="btn btn-primary w-100 rounded-pill btn-sm">
                            Submit Inquiry for this Unit <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                    {{-- Other Sister Concerns Switcher --}}
                    @if ($otherConcerns->isNotEmpty())
                        <div class="card border-0 shadow-sm rounded-4 p-4">
                            <h5 class="h6 fw-bold text-uppercase text-muted mb-3" style="letter-spacing: 0.5px;">Other Units of Magpie Group:</h5>
                            <div class="d-flex flex-column gap-2">
                                @foreach ($otherConcerns as $other)
                                    <a href="{{ route('sister-concerns.show', $other->slug) }}" class="p-2 rounded-3 bg-light text-decoration-none text-dark d-flex align-items-center justify-content-between">
                                        <span class="small fw-semibold">{{ $other->name }}</span>
                                        <i class="bi bi-chevron-right text-muted small"></i>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
