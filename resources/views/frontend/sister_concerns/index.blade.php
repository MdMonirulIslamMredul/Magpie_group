@extends('frontend.layouts.app')

@section('title', 'Sister Concerns | Magpie Group - Export Garments & Textile')
@section('meta_description', 'Explore Magpie Group\'s three state-of-the-art sister concerns: Magpie Knit Wear Ltd., Magpie Composite Textile Ltd., and ABSS High-Tech Sweater Ltd.')

@section('content')
    {{-- Hero Section --}}
    <section class="py-5 text-white" style="position: relative; background: linear-gradient(135deg, #09192b 0%, #0f2b48 50%, #1e3a8a 100%);">
        <div class="container py-4 position-relative" data-aos="fade-up">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-white bg-opacity-10 text-warning small fw-semibold mb-3">
                <i class="bi bi-buildings-fill"></i> Industrial Manufacturing Footprint
            </div>
            <h1 class="display-4 fw-bold mb-3">Sister Concerns of Magpie Group</h1>
            <p class="lead text-white-50 mb-0" style="max-width: 820px;">
                Our three specialized manufacturing facilities encompass over 1,020 German STOLL computerized knitting machines, comprehensive circular knitting, 30-ton dyeing capacity, 46 sewing lines, and an Italian biological ETP.
            </p>
        </div>
    </section>

    {{-- Sister Concerns Grid --}}
    <section class="py-5 bg-light">
        <div class="container py-3">
            <div class="row g-4">
                @foreach ($sisterConcerns as $concern)
                    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="{{ $loop->index * 150 }}">
                        <div class="card h-100 w-100 border-0 shadow-sm rounded-4 overflow-hidden position-relative d-flex flex-column" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            {{-- Header Accent Bar --}}
                            <div class="p-4 text-white" style="background: linear-gradient(135deg, #0f2b48, #1e3a8a);">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-warning text-dark px-2 py-1 rounded-pill fw-semibold">Est. {{ $concern->established_year }}</span>
                                    <span class="badge bg-white bg-opacity-20 text-white rounded-pill">{{ $concern->monthly_capacity }}</span>
                                </div>
                                <h3 class="h4 fw-bold mb-1 text-white">{{ $concern->name }}</h3>
                                <p class="small text-white-50 mb-0">{{ $concern->tagline }}</p>
                            </div>

                            <div class="card-body p-4 d-flex flex-column">
                                <div class="mb-3">
                                    <strong class="d-block small text-muted text-uppercase mb-1" style="letter-spacing: 0.5px;">Main Products:</strong>
                                    <p class="mb-0 text-dark fw-medium small">{{ $concern->main_products }}</p>
                                </div>

                                <div class="mb-3">
                                    <strong class="d-block small text-muted text-uppercase mb-1" style="letter-spacing: 0.5px;">Factory Address:</strong>
                                    <p class="mb-0 text-secondary small"><i class="bi bi-geo-alt-fill text-danger me-1"></i> {{ $concern->address }}</p>
                                </div>

                                @if (!empty($concern->building_specs))
                                    <div class="mb-3">
                                        <strong class="d-block small text-muted text-uppercase mb-1" style="letter-spacing: 0.5px;">Infrastructure:</strong>
                                        <ul class="list-unstyled mb-0 small text-secondary">
                                            @foreach (array_slice($concern->building_specs, 0, 2) as $spec)
                                                <li class="mb-1"><i class="bi bi-building-check text-primary me-1"></i> <strong>{{ $spec['name'] ?? '' }}:</strong> {{ $spec['size'] ?? '' }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if (!empty($concern->special_qualities))
                                    <div class="mb-4">
                                        <strong class="d-block small text-muted text-uppercase mb-2" style="letter-spacing: 0.5px;">Key Highlights:</strong>
                                        <div class="d-flex flex-wrap gap-1">
                                            @foreach (array_slice($concern->special_qualities, 0, 3) as $quality)
                                                <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill small py-1 px-2" style="font-size: 0.72rem;">
                                                    <i class="bi bi-check2"></i> {{ Str::limit($quality, 36) }}
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif

                                <div class="mt-auto pt-3 border-top d-flex align-items-center justify-content-between">
                                    <div class="small text-secondary">
                                        <i class="bi bi-person-fill text-muted"></i> {{ $concern->contact_person }}
                                    </div>
                                    <a href="{{ route('sister-concerns.show', $concern->slug) }}" class="btn btn-outline-primary btn-sm rounded-pill px-3">
                                        Full Unit Profile <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Group Aggregate Metrics --}}
    <section class="py-5 text-white" style="background: #09192b;">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="text-warning fw-semibold text-uppercase small" style="letter-spacing: 1px;">Combined Capacity</span>
                <h2 class="display-6 fw-bold">Magpie Group Production Strengths</h2>
            </div>

            <div class="row g-4 text-center">
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="p-4 rounded-4" style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08);">
                        <i class="bi bi-boxes fs-1 text-warning mb-2 d-block"></i>
                        <h3 class="display-6 fw-bold mb-1">243,750+</h3>
                        <p class="text-white-50 small mb-0">Dozen Monthly Output</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="p-4 rounded-4" style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08);">
                        <i class="bi bi-cpu fs-1 text-info mb-2 d-block"></i>
                        <h3 class="display-6 fw-bold mb-1">1,020+</h3>
                        <p class="text-white-50 small mb-0">German STOLL Machines</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="p-4 rounded-4" style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08);">
                        <i class="bi bi-droplet-half fs-1 text-success mb-2 d-block"></i>
                        <h3 class="display-6 fw-bold mb-1">100 m³/hr</h3>
                        <p class="text-white-50 small mb-0">Biological ETP Treatment</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="p-4 rounded-4" style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08);">
                        <i class="bi bi-people-fill fs-1 text-danger mb-2 d-block"></i>
                        <h3 class="display-6 fw-bold mb-1">3,500+</h3>
                        <p class="text-white-50 small mb-0">Skilled RMG Professionals</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
