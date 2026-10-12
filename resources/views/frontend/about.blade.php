@extends('frontend.layouts.app')

@section('title', 'About Magpie Group | 100% Export-Oriented RMG & Textile Manufacturer')
@section('meta_description', 'Learn about Magpie Group, established in 2003 in Bangladesh, operating 3 sister concerns with 1,020+ German STOLL computerized knitting machines and Biological ETP.')

@section('content')
    {{-- Hero Section --}}
    <section class="py-5 text-white position-relative" style="background: linear-gradient(135deg, #09192b 0%, #0f2b48 50%, #1e3a8a 100%);">
        <div class="container py-4 position-relative" data-aos="fade-up">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-white bg-opacity-10 text-warning small fw-semibold mb-3">
                <i class="bi bi-patch-check-fill"></i> Established 2003 &bull; Dhaka, Bangladesh
            </div>
            <h1 class="display-4 fw-bold mb-3">About Magpie Group</h1>
            <p class="lead text-white-50 mb-0" style="max-width: 820px;">
                A premier 100% export-oriented Readymade Garments &amp; Composite Textile conglomerate supplying world-renowned apparel brands across France, Germany, Sweden, UK, USA, and Canada.
            </p>
        </div>
    </section>

    {{-- Company Overview Section --}}
    <section class="py-5 bg-white">
        <div class="container py-3">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="p-4 p-lg-5 rounded-4 border-0 shadow-sm" style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);">
                        <span class="text-primary fw-bold text-uppercase small" style="letter-spacing: 1px;">Company Profile</span>
                        <h2 class="display-6 fw-bold text-dark mt-2 mb-4">Exporting Garments Excellence Since 2003</h2>
                        <div class="text-secondary leading-relaxed mb-4">
                            {!! $about?->page_details ?? $setting->about_content !!}
                        </div>

                        <div class="row g-3 pt-3 border-top">
                            <div class="col-6">
                                <div class="fw-bold fs-3 text-primary">243,750+</div>
                                <div class="small text-muted">Dozen Monthly Output</div>
                            </div>
                            <div class="col-6">
                                <div class="fw-bold fs-3 text-warning">1,020+</div>
                                <div class="small text-muted">STOLL German Machines</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left">
                    {{-- Mission & Vision Cards --}}
                    <div class="card p-4 border-0 shadow-sm rounded-4 mb-4" style="border-left: 5px solid #2563eb !important;">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <div class="d-inline-flex align-items-center justify-content-center rounded-3 bg-primary-subtle text-primary" style="width: 44px; height: 44px; font-size: 1.3rem;">
                                <i class="bi bi-bullseye"></i>
                            </div>
                            <h3 class="h5 fw-bold mb-0">Our Mission</h3>
                        </div>
                        <p class="text-secondary small mb-0 leading-relaxed">
                            {{ $about?->mission ?? $setting->mission }}
                        </p>
                    </div>

                    <div class="card p-4 border-0 shadow-sm rounded-4 mb-4" style="border-left: 5px solid #10b981 !important;">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <div class="d-inline-flex align-items-center justify-content-center rounded-3 bg-success-subtle text-success" style="width: 44px; height: 44px; font-size: 1.3rem;">
                                <i class="bi bi-eye-fill"></i>
                            </div>
                            <h3 class="h5 fw-bold mb-0">Our Vision</h3>
                        </div>
                        <p class="text-secondary small mb-0 leading-relaxed">
                            {{ $about?->vision ?? $setting->vision }}
                        </p>
                    </div>

                    {{-- Key Values List --}}
                    <div class="card p-4 border-0 shadow-sm rounded-4" style="border-left: 5px solid #f59e0b !important;">
                        <h4 class="h6 fw-bold text-uppercase text-muted mb-3" style="letter-spacing: 0.5px;">Core Strengths &amp; Compliance Values:</h4>
                        <div class="row g-2">
                            @foreach ($about?->key_values ?? [] as $val)
                                <div class="col-md-6">
                                    <div class="small fw-semibold text-secondary d-flex align-items-center gap-2">
                                        <i class="bi bi-check-circle-fill text-warning"></i> {{ $val }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Managing Director's Message (from Page 3 of PDF) --}}
    <section class="py-5" id="md-message" style="background: #f8fafc;">
        <div class="container py-3">
            <div class="card border-0 shadow-sm rounded-4 p-4 p-lg-5 position-relative overflow-hidden" data-aos="fade-up">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-4 text-center">
                        <div class="p-4 rounded-4 bg-white shadow-xs border d-inline-block w-100">
                            <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary text-white mb-3 shadow" style="width: 110px; height: 110px; font-size: 3rem; background: linear-gradient(135deg, #0f2b48, #1e3a8a) !important;">
                                <i class="bi bi-person-fill"></i>
                            </div>
                            <h4 class="h5 fw-bold mb-1">M. Arifur Rahman</h4>
                            <p class="text-primary fw-semibold small mb-2">Managing Director</p>
                            <span class="badge bg-light text-dark border px-3 py-1 rounded-pill mb-3">Magpie Group</span>
                            <div class="small text-secondary">
                                <div><i class="bi bi-telephone-fill text-success me-1"></i> +8801711 549042</div>
                                <div><i class="bi bi-envelope-fill text-primary me-1"></i> md@magpiegroupbd.com</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="d-inline-flex align-items-center gap-2 text-warning fw-bold small text-uppercase mb-2">
                            <i class="bi bi-chat-quote-fill fs-5"></i> Executive Leadership
                        </div>
                        <h2 class="display-6 fw-bold mb-4">Managing Director’s Message</h2>
                        <div class="text-secondary leading-relaxed" style="font-size: 1.05rem;">
                            <p>
                                “Magpie Group”, based in Dhaka, Bangladesh, is a fast-growing garments and textile company. “Magpie Knit Wear Ltd.”, Established in 2003 with only 300 hand-driven sweater machines, the company has grown into one of the leading sweater manufacturers in Bangladesh. Currently, we operate 600 modern multi-gauge computerized knitting machines, mostly from STOLL, Germany, with a production capacity of around 45,000 dozen sweaters per month.
                            </p>
                            <p>
                                In 2007, we expanded by establishing “Magpie Composite Textile Ltd.”, a vertically integrated facility covering fabric circular knitting, 30 ton’s dyeing, and 46-line sewing. We are committed to environmental sustainability through our ETP plant and initiatives for recycled yarn development. Our monthly production capacity is approximately 1,72,500 dozen sweaters.
                            </p>
                            <p>
                                In 2012, we further expanded our operations by establishing “ABSS High-Tech Sweater Ltd.”. Currently, we operate 420 state-of-the-art multi-gauge computerized knitting machines, mostly from STOLL, Germany, ensuring high-quality production and efficiency. Our monthly production capacity is approximately 26,250 dozen sweaters.
                            </p>
                            <p>
                                With modern technology, a skilled management team, and strong sourcing capabilities for fancy yarns and accessories, “Magpie Group” has become a modern, stable, and innovative company in Bangladesh’s garments sector. All our factories are Accord and Alliance approved, and we continuously improve our fire and safety standards to meet international requirements.
                            </p>
                            <p class="fw-semibold text-dark mb-0">
                                As Managing Director of “Magpie Group”, I warmly welcome our valued buyers to visit Bangladesh and explore long-term business opportunities with us.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Board of Directors Section (from Page 2 of PDF) --}}
    <section class="py-5 bg-white" id="board-of-directors">
        <div class="container py-3">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="text-primary fw-bold text-uppercase small" style="letter-spacing: 1px;">Corporate Governance</span>
                <h2 class="display-6 fw-bold">Board of Directors</h2>
                <p class="text-secondary mx-auto" style="max-width: 650px;">
                    Guiding Magpie Group with visionary leadership, manufacturing expertise, and ethical business principles.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                {{-- 1. Chairman --}}
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-light border text-dark mx-auto mb-3" style="width: 90px; height: 90px; font-size: 2.5rem;">
                            <i class="bi bi-person-badge"></i>
                        </div>
                        <h4 class="h5 fw-bold mb-1">Al Haj Habibur Rahman</h4>
                        <p class="text-warning fw-bold small text-uppercase mb-3">Chairman</p>
                        <p class="text-secondary small leading-relaxed mb-0">
                            Visionary founder and Chairman of Magpie Group, establishing core corporate values of integrity, employee well-being, and manufacturing reliability.
                        </p>
                    </div>
                </div>

                {{-- 2. Managing Director --}}
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center" style="border-top: 4px solid #0f2b48 !important;">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary text-white mx-auto mb-3" style="width: 90px; height: 90px; font-size: 2.5rem; background: #0f2b48 !important;">
                            <i class="bi bi-person-fill"></i>
                        </div>
                        <h4 class="h5 fw-bold mb-1">M. Arifur Rahman</h4>
                        <p class="text-primary fw-bold small text-uppercase mb-2">Managing Director</p>
                        <div class="small text-secondary mb-3">
                            <div><i class="bi bi-telephone-fill text-success me-1"></i> +8801711 549042</div>
                            <div><i class="bi bi-envelope-fill text-primary me-1"></i> md@magpiegroupbd.com</div>
                        </div>
                        <p class="text-secondary small leading-relaxed mb-0">
                            Directing the strategic expansion, STOLL computerized technology deployment, and global buyer relationships across Europe and the Americas.
                        </p>
                    </div>
                </div>

                {{-- 3. Director --}}
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center" style="border-top: 4px solid #1e3a8a !important;">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-info-subtle text-info mx-auto mb-3" style="width: 90px; height: 90px; font-size: 2.5rem;">
                            <i class="bi bi-person-gear"></i>
                        </div>
                        <h4 class="h5 fw-bold mb-1">Md. Afroz Al Mamun</h4>
                        <p class="text-primary fw-bold small text-uppercase mb-2">Director</p>
                        <div class="small text-secondary mb-3">
                            <div><i class="bi bi-telephone-fill text-success me-1"></i> +8801713193371</div>
                            <div><i class="bi bi-envelope-fill text-primary me-1"></i> director@magpiegroupbd.com</div>
                        </div>
                        <p class="text-secondary small leading-relaxed mb-0">
                            Leading technical manufacturing, STOLL knitting plant operations, quality assurance systems, and social compliance standards.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Corporate Milestones / Journey --}}
    <section class="py-5" id="milestones" style="background: #09192b; color: #fff;">
        <div class="container py-3">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="text-warning fw-bold text-uppercase small" style="letter-spacing: 1px;">Milestones</span>
                <h2 class="display-6 fw-bold">Our Growth Journey (2003 &ndash; Present)</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08);">
                        <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-bold mb-3">2003</span>
                        <h4 class="h5 fw-bold text-white mb-2">Magpie Knit Wear Ltd.</h4>
                        <p class="text-white-50 small mb-0">
                            Founded in Savar with 300 hand-driven machines. Rapidly expanded into 600 modern computerized STOLL machines delivering 45,000 DZ/month.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08);">
                        <span class="badge bg-info text-white px-3 py-1 rounded-pill fw-bold mb-3">2007</span>
                        <h4 class="h5 fw-bold text-white mb-2">Magpie Composite Textile Ltd.</h4>
                        <p class="text-white-50 small mb-0">
                            Vertically integrated circular knitting, 30-ton dyeing facility, 46 sewing lines, and 100 m³/hr biological ETP delivering 1,72,500 DZ/month.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-4 rounded-4 h-100" style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08);">
                        <span class="badge bg-success text-white px-3 py-1 rounded-pill fw-bold mb-3">2012</span>
                        <h4 class="h5 fw-bold text-white mb-2">ABSS High-Tech Sweater Ltd.</h4>
                        <p class="text-white-50 small mb-0">
                            Established 2,25,000 sft modern campus in Mawna, Gazipur with 420 STOLL computerized machines producing 26,250 DZ/month.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
