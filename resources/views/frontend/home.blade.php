@extends('frontend.layouts.app')

@section('title', $setting->meta_title ?? 'Magpie Group | 100% Export-Oriented RMG & Composite Textile Manufacturer')

@push('styles')
    <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">
    <style>
        /* Hero Slider */
        .hero-slider {
            position: relative;
            overflow: hidden;
            background: #09192b;
            height: 85vh;
            min-height: 580px;
        }

        @media (min-width: 992px) {
            .hero-slider {
                height: 92vh;
                min-height: 640px;
            }
        }

        .hero-swiper {
            width: 100%;
            height: 100%;
            position: relative;
            user-select: none;
        }

        .hero-swiper .swiper-wrapper {
            height: 100%;
            display: flex;
        }

        .hero-swiper .swiper-slide {
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: stretch;
            background: #09192b;
            height: 100% !important;
            width: 100%;
            flex-shrink: 0;
        }

        .hero-swiper .hero-slide-bg {
            position: absolute;
            top: -4%;
            left: -4%;
            width: 108%;
            height: 108%;
            background-size: cover;
            background-position: center;
            transform: scale(1);
            will-change: transform;
            z-index: 1;
        }

        .hero-swiper .swiper-slide-active .hero-slide-bg {
            animation: heroContinuousZoom 8s ease-out forwards;
        }

        .hero-swiper .swiper-slide:not(.swiper-slide-active) .hero-slide-bg {
            animation: none;
            transform: scale(1);
        }

        @keyframes heroContinuousZoom {
            0% { transform: scale(1); }
            100% { transform: scale(1.12); }
        }

        .hero-swiper .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(120deg, rgba(9, 25, 43, 0.88) 0%, rgba(15, 43, 72, 0.75) 50%, rgba(30, 58, 138, 0.55) 100%);
            z-index: 2;
        }

        .hero-swiper .hero-slide-inner {
            padding-top: 6rem;
            padding-bottom: 3.5rem;
            position: relative;
            z-index: 3;
            width: 100%;
            height: 100%;
        }

        .hero-swiper .hero-content {
            color: #fff;
        }

        .hero-swiper-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 3.25rem;
            height: 3.25rem;
            border-radius: 50%;
            background-color: rgba(9, 25, 43, 0.6);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.25);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.35rem;
            cursor: pointer;
            z-index: 10;
            transition: all 0.25s ease;
        }

        .hero-swiper-btn:hover {
            background-color: #0f2b48;
            border-color: rgba(255, 255, 255, 0.7);
            color: #ffffff;
            transform: translateY(-50%) scale(1.1);
        }

        .hero-swiper-prev { left: 1.5rem; }
        .hero-swiper-next { right: 1.5rem; }

        @media (max-width: 768px) {
            .hero-swiper-btn { display: none; }
        }

        .hero-swiper-pagination {
            position: absolute;
            bottom: 2.2rem !important;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            z-index: 10;
        }

        .hero-swiper-pagination .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: transparent;
            border: 2px solid rgba(255, 255, 255, 0.75);
            opacity: 0.65;
            margin: 0 !important;
            transition: all 0.35s ease;
            cursor: pointer;
        }

        .hero-swiper-pagination .swiper-pagination-bullet-active {
            width: 34px;
            border-radius: 12px;
            background-color: #d97706;
            border-color: #d97706;
            opacity: 1;
        }

        .hero-autoplay-progress {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: rgba(255, 255, 255, 0.15);
            z-index: 10;
        }

        .hero-autoplay-progress-fill {
            width: 0%;
            height: 100%;
            background: linear-gradient(90deg, #d97706, #f59e0b);
        }

        /* Counter Cards */
        .counter-card {
            background: #ffffff;
            border-radius: 18px;
            padding: 2rem 1.5rem;
            text-align: center;
            box-shadow: 0 10px 30px rgba(9, 25, 43, 0.06);
            height: 100%;
            border-top: 4px solid #1e3a8a;
            transition: transform 0.3s ease;
        }
        .counter-card:hover {
            transform: translateY(-5px);
        }
        .counter-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: #0f2b48;
            line-height: 1.2;
            margin-top: 0.5rem;
        }
        .counter-title {
            color: #64748b;
            font-size: 0.95rem;
            font-weight: 500;
            margin-bottom: 0;
        }

        /* Partner Marquee */
        .partners-infinity-section {
            overflow: hidden;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            border-bottom: 1px solid #e2e8f0;
            padding: 2.5rem 0;
        }
        .partner-marquee-track {
            display: flex;
            width: max-content;
            animation: partnerScroll 35s linear infinite;
        }
        .partner-marquee-track:hover {
            animation-play-state: paused;
        }
        @keyframes partnerScroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .partner-marquee-card {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0.85rem 1.75rem;
            margin: 0 10px;
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 50px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            white-space: nowrap;
        }
    </style>
@endpush

@section('content')
    @php
        $heroBackgrounds = [
            'https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=1600&q=80',
            'https://images.unsplash.com/photo-1574634534894-89d7576c8259?auto=format&fit=crop&w=1600&q=80',
            'https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?auto=format&fit=crop&w=1600&q=80',
        ];

        $heroSlidesCollection = collect($heroSlides ?? []);
        if ($heroSlidesCollection->isEmpty()) {
            $heroSlidesCollection = collect([
                (object)[
                    'title' => 'World-Class Sweater Manufacturing with STOLL Germany',
                    'subtitle' => 'Over 1,020 computerized multi-gauge machines across Savar and Gazipur delivering 71,250+ dozen high-fashion sweaters monthly.',
                    'image' => null,
                ],
                (object)[
                    'title' => 'Vertically Integrated Composite Textile & Eco-Dyeing',
                    'subtitle' => 'Circular knitting, 30-ton daily dyeing, 46 sewing lines, and 100 m³/hr Italian Biological ETP for sustainable knitwear production.',
                    'image' => null,
                ],
                (object)[
                    'title' => 'Trusted by Premier Global Retail Brands Since 2003',
                    'subtitle' => 'Accord & Alliance approved facilities exporting to France, Germany, Sweden, UK, USA, and Canada with a minimum lead time of 45 days.',
                    'image' => null,
                ],
            ]);
        }

        $activeCounters = collect($counters ?? []);
        $partnerItems = collect($partners ?? []);
        $faqItems = collect($faqs ?? []);
        $concernsList = collect($sisterConcerns ?? []);
    @endphp

    {{-- Hero Section --}}
    <section class="hero-slider">
        <div class="swiper hero-swiper">
            <div class="swiper-wrapper">
                @foreach ($heroSlidesCollection as $index => $slide)
                    @php
                        $bgImg = !empty($slide->image) ? asset('storage/' . $slide->image) : ($heroBackgrounds[$index % count($heroBackgrounds)]);
                    @endphp
                    <div class="swiper-slide">
                        <div class="hero-slide-bg" style="background-image: url('{{ $bgImg }}');"></div>
                        <div class="hero-overlay"></div>
                        <div class="container h-100 d-flex align-items-center hero-slide-inner">
                            <div class="hero-content col-lg-8">
                                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-white bg-opacity-15 text-warning small fw-bold mb-3">
                                    <i class="bi bi-patch-check-fill"></i> 100% Export-Oriented RMG &amp; Textile Group
                                </div>
                                <h1 class="display-4 fw-bold mb-3">{{ $slide->title }}</h1>
                                <p class="lead mb-4 text-white-50" style="max-width: 680px;">{{ $slide->subtitle }}</p>
                                <div class="d-flex flex-wrap gap-3">
                                    <a href="{{ route('sister-concerns.index') }}" class="btn btn-warning btn-lg px-4 rounded-pill fw-semibold">
                                        Explore Sister Concerns <i class="bi bi-arrow-right"></i>
                                    </a>
                                    <a href="{{ route('contact.index') }}" class="btn btn-outline-light btn-lg px-4 rounded-pill">
                                        Submit Buyer RFQ
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Controls --}}
            <button class="hero-swiper-btn hero-swiper-prev" type="button" aria-label="Previous Slide"><i class="bi bi-chevron-left"></i></button>
            <button class="hero-swiper-btn hero-swiper-next" type="button" aria-label="Next Slide"><i class="bi bi-chevron-right"></i></button>
            <div class="hero-swiper-pagination"></div>
            <div class="hero-autoplay-progress"><div class="hero-autoplay-progress-fill"></div></div>
        </div>
    </section>

    {{-- SISTER CONCERNS SHOWCASE (Core Magpie Units) --}}
    <section class="py-5 bg-light" id="sister-concerns">
        <div class="container py-3">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="text-primary fw-bold text-uppercase small" style="letter-spacing: 1px;">Our Manufacturing Units</span>
                <h2 class="display-6 fw-bold text-dark">Sister Concern of Magpie Group</h2>
                <p class="text-secondary mx-auto mb-0" style="max-width: 700px;">
                    Three specialized, high-capacity facilities engineered for European and North American retail apparel brands.
                </p>
            </div>

            <div class="row g-4">
                @foreach ($concernsList as $concern)
                    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="{{ $loop->index * 150 }}">
                        <div class="card h-100 w-100 border-0 shadow-sm rounded-4 overflow-hidden d-flex flex-column" style="transition: all 0.3s ease;">
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
                                    <strong class="d-block small text-muted text-uppercase mb-1">Main Products:</strong>
                                    <p class="mb-0 text-dark fw-medium small">{{ $concern->main_products }}</p>
                                </div>

                                <div class="mb-3">
                                    <strong class="d-block small text-muted text-uppercase mb-1">Factory Location:</strong>
                                    <p class="mb-0 text-secondary small"><i class="bi bi-geo-alt-fill text-danger me-1"></i> {{ $concern->address }}</p>
                                </div>

                                @if (!empty($concern->special_qualities))
                                    <div class="mb-4">
                                        <strong class="d-block small text-muted text-uppercase mb-2">Key Highlights:</strong>
                                        <div class="d-flex flex-wrap gap-1">
                                            @foreach (array_slice($concern->special_qualities, 0, 2) as $quality)
                                                <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill small py-1 px-2" style="font-size: 0.72rem;">
                                                    <i class="bi bi-check2"></i> {{ Str::limit($quality, 34) }}
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif

                                <div class="mt-auto pt-3 border-top d-flex align-items-center justify-content-between">
                                    <small class="text-secondary"><i class="bi bi-person text-muted"></i> {{ $concern->contact_person }}</small>
                                    <a href="{{ route('sister-concerns.show', $concern->slug) }}" class="btn btn-outline-primary btn-sm rounded-pill px-3">
                                        View Details <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- COUNTERS / PRODUCTION METRICS --}}
    @if ($activeCounters->isNotEmpty())
        <section class="py-5 counter-section" data-aos="fade-up" style="background: #ffffff;">
            <div class="container py-2">
                <div class="row g-4 justify-content-center">
                    @foreach ($activeCounters as $counter)
                        <div class="col-12 col-sm-6 col-lg-3" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">
                            <div class="counter-card">
                                <div class="d-inline-flex align-items-center justify-content-center rounded-3 bg-primary-subtle text-primary mb-2" style="width: 50px; height: 50px; font-size: 1.5rem;">
                                    <i class="bi {{ $counter->icon ?? 'bi-box-seam' }}"></i>
                                </div>
                                <div class="counter-number" data-counter-value="{{ $counter->value }}">0+</div>
                                <p class="counter-title">{{ $counter->title }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- CORPORATE MESSAGE & MD OVERVIEW --}}
    <section class="py-5" style="background: #f8fafc;">
        <div class="container py-3">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="text-primary fw-bold text-uppercase small" style="letter-spacing: 1px;">Company Massage</span>
                    <h2 class="display-6 fw-bold mt-2 mb-3">100% Export-Oriented Quality Garments Industry</h2>
                    <div class="text-secondary leading-relaxed mb-4">
                        <p>
                            It is our privilege to introduce us as a 100% export-oriented quality readymade garments industry named <strong>“magpie group”</strong> situated in Savar and Gazipur, Dhaka. We had been exporting quality goods to renowned companies in European countries like France, Germany, Sweden, UK since 2003. We also work with reputed brand in USA and Canada.
                        </p>
                        <p>
                            Our factory is well organized by efficient merchandisers, skilled quality controllers and high technical persons from home and abroad. Our quality assurance policies strengthen our bond with our valued buyers and made them work with us repeatedly.
                        </p>
                    </div>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{ route('about') }}" class="btn btn-primary rounded-pill px-4" style="background: #0f2b48; border-color: #0f2b48;">
                            Read Full Group Profile <i class="bi bi-arrow-right"></i>
                        </a>
                        <a href="{{ route('about') }}#md-message" class="btn btn-outline-secondary rounded-pill px-4">
                            Managing Director's Message
                        </a>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left">
                    <div class="card p-4 p-lg-5 border-0 shadow-sm rounded-4 text-white position-relative overflow-hidden" style="background: linear-gradient(135deg, #09192b 0%, #0f2b48 100%);">
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-warning text-dark fw-bold" style="width: 52px; height: 52px; font-size: 1.4rem;">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div>
                                <h4 class="h5 fw-bold mb-0 text-white">Accord &amp; Alliance Approved</h4>
                                <small class="text-white-50">Fire, Electrical &amp; Structural Safety Certified</small>
                            </div>
                        </div>

                        <ul class="list-unstyled mb-4 small text-white-50">
                            <li class="mb-2 d-flex align-items-center gap-2"><i class="bi bi-check2-circle text-warning fs-5"></i> <span class="text-white">600 + 420 STOLL Germany computerized knitting machines</span></li>
                            <li class="mb-2 d-flex align-items-center gap-2"><i class="bi bi-check2-circle text-warning fs-5"></i> <span class="text-white">100 m³/hr Italian biological effluent treatment plant (ETP)</span></li>
                            <li class="mb-2 d-flex align-items-center gap-2"><i class="bi bi-check2-circle text-warning fs-5"></i> <span class="text-white">In-house child daycare center and medical clinic</span></li>
                            <li class="d-flex align-items-center gap-2"><i class="bi bi-check2-circle text-warning fs-5"></i> <span class="text-white">Minimum lead time of 45 days for bulk export orders</span></li>
                        </ul>

                        <div class="p-3 rounded-3 bg-white bg-opacity-10 d-flex align-items-center justify-content-between">
                            <span class="small text-white-50">Have a custom tech-pack inquiry?</span>
                            <a href="{{ route('contact.index') }}" class="btn btn-warning btn-sm rounded-pill px-3 fw-semibold">Contact Merchandising</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FEATURED GARMENT PRODUCTS --}}
    @if ($products->isNotEmpty())
        <section class="py-5 bg-white">
            <div class="container py-3">
                <div class="d-flex flex-wrap justify-content-between align-items-end mb-4" data-aos="fade-up">
                    <div>
                        <span class="text-primary fw-bold text-uppercase small" style="letter-spacing: 1px;">Knitwear &amp; Apparel</span>
                        <h2 class="display-6 fw-bold mb-0">Featured Export Collections</h2>
                    </div>
                    <a href="{{ route('products.index') }}" class="btn btn-outline-primary btn-sm rounded-pill px-3 mt-2 mt-sm-0">
                        View Complete Catalog <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="row g-4">
                    @foreach ($products->take(6) as $product)
                        <div class="col-lg-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">
                            <div class="card h-100 w-100 border-0 shadow-sm rounded-4 overflow-hidden d-flex flex-column">
                                <div class="bg-light p-4 text-center position-relative d-flex align-items-center justify-content-center" style="height: 220px; background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);">
                                    <div class="text-center">
                                        <i class="bi bi-suit-heart-fill fs-1 text-secondary opacity-25 d-block mb-2"></i>
                                        <span class="badge bg-primary text-white rounded-pill px-3 py-1 small">{{ $product->category->name ?? 'Garments' }}</span>
                                    </div>
                                    @if ($product->is_featured)
                                        <span class="position-absolute top-0 end-0 m-3 badge bg-warning text-dark rounded-pill fw-semibold">Featured</span>
                                    @endif
                                </div>

                                <div class="card-body p-4 d-flex flex-column">
                                    <h5 class="h6 fw-bold mb-2">{{ $product->title }}</h5>
                                    <p class="small text-secondary mb-3 leading-relaxed">{{ Str::limit($product->short_description, 100) }}</p>

                                    <div class="mt-auto pt-3 border-top d-flex align-items-center justify-content-between">
                                        <span class="small text-muted"><i class="bi bi-clock-history me-1"></i> Lead: 45 Days</span>
                                        <a href="{{ route('products.show', $product->slug) }}" class="btn btn-sm btn-outline-dark rounded-pill px-3">
                                            Specs &amp; RFQ
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- SUSTAINABILITY & BIOLOGICAL ETP BANNER --}}
    <section class="py-5 text-white position-relative" style="background: linear-gradient(135deg, #064e3b 0%, #065f46 50%, #047857 100%);">
        <div class="container py-3">
            <div class="row g-4 align-items-center">
                <div class="col-lg-8" data-aos="fade-right">
                    <span class="badge bg-white bg-opacity-20 text-warning px-3 py-1 rounded-pill fw-semibold mb-2">Biological Treatment Plant</span>
                    <h2 class="display-6 fw-bold mb-3">Commitment to Green RMG &amp; 100 m³/hr Biological ETP</h2>
                    <p class="lead text-white-50 mb-0" style="max-width: 750px;">
                        Magpie Composite Textile operates an Italian 100 m³/hr biological ETP plant, steam heat recovery, co-gen energy saving inverters, 15ft natural ventilation factory architecture, and 90% LED lighting.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                    <a href="{{ route('sustainability.index') }}" class="btn btn-warning btn-lg px-4 rounded-pill fw-semibold">
                        Explore Sustainability <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- GLOBAL VALUED BUYERS MARQUEE (from Page 7, 29 of PDF) --}}
    @if ($partnerItems->isNotEmpty())
        <section class="partners-infinity-section">
            <div class="container mb-3 text-center" data-aos="fade-up">
                <span class="text-primary fw-bold text-uppercase small" style="letter-spacing: 1px;">Trusted Worldwide</span>
                <h3 class="h4 fw-bold mb-0">Valued Global Buyers &amp; Retail Partners</h3>
            </div>

            <div class="partner-marquee-track">
                {{-- Double loop for seamless infinite marquee scroll --}}
                @for ($i = 0; $i < 2; $i++)
                    @foreach ($partnerItems as $partner)
                        <div class="partner-marquee-card">
                            <i class="bi bi-bag-check-fill text-primary fs-5"></i>
                            <span class="fw-bold text-dark">{{ $partner->name }}</span>
                            <small class="text-muted">({{ $partner->description ?? 'Global Retailer' }})</small>
                        </div>
                    @endforeach
                @endfor
            </div>
        </section>
    @endif

    {{-- FAQ SECTION --}}
    @if ($faqItems->isNotEmpty())
        <section class="py-5 bg-white">
            <div class="container py-3">
                <div class="text-center mb-5" data-aos="fade-up">
                    <span class="text-primary fw-bold text-uppercase small" style="letter-spacing: 1px;">Sourcing FAQ</span>
                    <h2 class="display-6 fw-bold">Frequently Asked Buyer Questions</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="accordion accordion-flush shadow-sm rounded-4 p-3 bg-light" id="faqAccordion">
                            @foreach ($faqItems as $faq)
                                <div class="accordion-item bg-transparent border-bottom">
                                    <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                        <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }} bg-transparent fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}">
                                            {{ $faq->question }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body text-secondary small leading-relaxed">
                                            {{ $faq->answer }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- CALL TO ACTION --}}
    <section class="py-5 text-white" style="background: #09192b;">
        <div class="container text-center py-4" data-aos="zoom-in">
            <h2 class="display-5 fw-bold mb-3">Partner with Magpie Group Today</h2>
            <p class="lead text-white-50 mx-auto mb-4" style="max-width: 700px;">
                Experience state-of-the-art German STOLL computerized knitting, high-efficiency composite production, and verified ethical compliance for your upcoming collections.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="{{ route('contact.index') }}" class="btn btn-warning btn-lg px-4 rounded-pill fw-semibold">
                    Submit Buyer Inquiry <i class="bi bi-arrow-right"></i>
                </a>
                <a href="tel:+88028932047" class="btn btn-outline-light btn-lg px-4 rounded-pill">
                    <i class="bi bi-telephone-fill me-1"></i> Call Corporate Office
                </a>
            </div>
        </div>
    </section>

    @push('scripts')
        <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script>
            // Hero Swiper
            (function() {
                const initHeroSwiper = function() {
                    const swiperEl = document.querySelector('.hero-swiper');
                    if (!swiperEl) return;

                    const progressFill = document.querySelector('.hero-autoplay-progress-fill');
                    const AUTOPLAY_TIME = 5500;

                    new Swiper('.hero-swiper', {
                        loop: true,
                        speed: 850,
                        grabCursor: true,
                        autoplay: {
                            delay: AUTOPLAY_TIME,
                            disableOnInteraction: false,
                            pauseOnMouseEnter: true,
                        },
                        navigation: {
                            nextEl: '.hero-swiper-next',
                            prevEl: '.hero-swiper-prev',
                        },
                        pagination: {
                            el: '.hero-swiper-pagination',
                            clickable: true,
                        },
                        on: {
                            autoplayTimeLeft(s, time, progress) {
                                if (progressFill) {
                                    progressFill.style.width = Math.min(100, Math.max(0, (1 - progress) * 100)) + '%';
                                }
                            },
                            slideChange() {
                                if (progressFill) {
                                    progressFill.style.width = '0%';
                                }
                            }
                        }
                    });
                };

                if (typeof Swiper !== 'undefined') {
                    initHeroSwiper();
                } else {
                    window.addEventListener('load', initHeroSwiper);
                }
            })();

            // Counter animation
            (function() {
                const counterSection = document.querySelector('.counter-section');
                if (!counterSection) return;

                const counterElements = counterSection.querySelectorAll('[data-counter-value]');
                const animateCounter = (element) => {
                    if (element.dataset.counted === 'true') return;

                    const endValue = parseInt(element.dataset.counterValue || '0', 10);
                    const duration = 1500;
                    const startTime = performance.now();

                    const step = (now) => {
                        const progress = Math.min((now - startTime) / duration, 1);
                        const currentValue = Math.floor(progress * endValue);
                        element.textContent = `${currentValue.toLocaleString()}+`;

                        if (progress < 1) {
                            requestAnimationFrame(step);
                        } else {
                            element.textContent = `${endValue.toLocaleString()}+`;
                            element.dataset.counted = 'true';
                        }
                    };
                    requestAnimationFrame(step);
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            counterElements.forEach(animateCounter);
                            observer.disconnect();
                        }
                    });
                }, { threshold: 0.35 });

                observer.observe(counterSection);
            })();
        </script>
    @endpush
@endsection
