@extends('frontend.layouts.app')

@section('title', 'Sustainability & Biological ETP | Magpie Group')
@section('meta_description', 'Discover Magpie Group\'s commitment to sustainable textile manufacturing, 100 m³/hr Italian Biological ETP, energy recovery, and green factory operations in Bangladesh.')

@section('content')
    {{-- Hero Section --}}
    <section class="py-5 text-white" style="position: relative; background: linear-gradient(135deg, #064e3b 0%, #065f46 50%, #047857 100%);">
        <div class="container py-4 position-relative" data-aos="fade-up">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-white bg-opacity-15 text-white small fw-semibold mb-3 backdrop-blur">
                <i class="bi bi-droplet-half text-warning"></i> Environmental Sustainability &amp; Green RMG
            </div>
            <h1 class="display-4 fw-bold mb-3">Eco-Friendly &amp; Biological Manufacturing</h1>
            <p class="lead text-white-50 mb-0" style="max-width: 820px;">
                At Magpie Group, environmental stewardship is integrated directly into our industrial infrastructure through advanced biological water treatment, steam heat recovery, energy-efficient architecture, and sustainable farming partnerships.
            </p>
        </div>
    </section>

    {{-- Core Pillars of Sustainability --}}
    <section class="py-5 bg-white">
        <div class="container py-3">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="text-success fw-bold text-uppercase small" style="letter-spacing: 1px;">Green Engineering</span>
                <h2 class="display-6 fw-bold">Our Sustainable Manufacturing Ecosystem</h2>
                <p class="text-secondary mx-auto" style="max-width: 650px;">
                    Meeting the highest European and North American brand requirements with transparent environmental benchmarks.
                </p>
            </div>

            <div class="row g-4">
                {{-- 1. Biological ETP --}}
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 p-lg-5" style="border-top: 5px solid #10b981 !important;">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-3 bg-success-subtle text-success mb-3" style="width: 52px; height: 52px; font-size: 1.6rem;">
                            <i class="bi bi-water"></i>
                        </div>
                        <h3 class="h4 fw-bold mb-3">100 m³/hr Biological ETP Plant</h3>
                        <p class="text-secondary leading-relaxed mb-3">
                            Located at Magpie Composite Textile Ltd. in Savar, our biological Effluent Treatment Plant has an installed treatment capacity of <strong>100 cubic meters per hour</strong>. Utilizing 31 precision Italian machines—including automatic brush screens, dual lifting pumps, aeration blowers, and spectrophotometer lab monitors—we convert textile dyeing discharge into purified water compliant with international environmental standards.
                        </p>
                        <ul class="list-unstyled mb-0 small text-secondary">
                            <li class="mb-1"><i class="bi bi-check2-circle text-success me-2"></i> 100% biological microbial treatment with zero harmful residue</li>
                            <li class="mb-1"><i class="bi bi-check2-circle text-success me-2"></i> Automated acid and antifoam dosing with precision pH tracking</li>
                            <li><i class="bi bi-check2-circle text-success me-2"></i> Dedicated 31,500 sft 3-storied tiled ETP facility</li>
                        </ul>
                    </div>
                </div>

                {{-- 2. Energy Efficiency & Co-Gen --}}
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 p-lg-5" style="border-top: 5px solid #0284c7 !important;">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-3 bg-info-subtle text-info mb-3" style="width: 52px; height: 52px; font-size: 1.6rem;">
                            <i class="bi bi-lightning-charge"></i>
                        </div>
                        <h3 class="h4 fw-bold mb-3">Steam Regeneration &amp; Co-Gen Power</h3>
                        <p class="text-secondary leading-relaxed mb-3">
                            We capture and regenerate thermal energy from generator exhausts through advanced steam recovery boilers, drastically minimizing fuel consumption. Our facilities are equipped with state-of-the-art frequency inverters across all heavy motors and compressors to prevent electrical loss.
                        </p>
                        <ul class="list-unstyled mb-0 small text-secondary">
                            <li class="mb-1"><i class="bi bi-check2-circle text-info me-2"></i> Steam heat regeneration from industrial Fulton boilers</li>
                            <li class="mb-1"><i class="bi bi-check2-circle text-info me-2"></i> Co-generation dual gas/diesel power backup infrastructure</li>
                            <li><i class="bi bi-check2-circle text-info me-2"></i> Energy-saving electronic inverters across 1,020+ knitting machines</li>
                        </ul>
                    </div>
                </div>

                {{-- 3. Green Architecture --}}
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 p-lg-5" style="border-top: 5px solid #f59e0b !important;">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-3 bg-warning-subtle text-warning mb-3" style="width: 52px; height: 52px; font-size: 1.6rem;">
                            <i class="bi bi-wind"></i>
                        </div>
                        <h3 class="h4 fw-bold mb-3">15ft Natural Ventilation &amp; 90% LED</h3>
                        <p class="text-secondary leading-relaxed mb-3">
                            The architectural design of Magpie manufacturing plants incorporates high 15-foot ceilings with natural cross-ventilation, maximizing fresh airflow and reducing reliance on air conditioning. 90% of all facility lighting operates on high-efficiency LED fixtures to curtail carbon output.
                        </p>
                        <ul class="list-unstyled mb-0 small text-secondary">
                            <li class="mb-1"><i class="bi bi-check2-circle text-warning me-2"></i> 15ft natural ceiling clearance creating a healthy indoor microclimate</li>
                            <li class="mb-1"><i class="bi bi-check2-circle text-warning me-2"></i> Over 90% LED conversion across all production lines</li>
                            <li><i class="bi bi-check2-circle text-warning me-2"></i> Ambient daylight harvesting through extensive glass facades</li>
                        </ul>
                    </div>
                </div>

                {{-- 4. Social & Ecological Programs --}}
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 p-lg-5" style="border-top: 5px solid #8b5cf6 !important;">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-3 bg-purple-subtle text-purple mb-3" style="width: 52px; height: 52px; font-size: 1.6rem;">
                            <i class="bi bi-tree"></i>
                        </div>
                        <h3 class="h4 fw-bold mb-3">Tree Plantation &amp; Recycled Yarn</h3>
                        <p class="text-secondary leading-relaxed mb-3">
                            Beyond factory walls, Magpie Group actively leads greening programs on factory perimeters in Savar and Gazipur. We support sustainable co-operative farming programs, employee carpooling, and continuous R&amp;D into developing blends using recycled synthetic and cotton yarns.
                        </p>
                        <ul class="list-unstyled mb-0 small text-secondary">
                            <li class="mb-1"><i class="bi bi-check2-circle text-success me-2"></i> Perimeter tree plantation and rooftop greenery programs</li>
                            <li class="mb-1"><i class="bi bi-check2-circle text-success me-2"></i> Development of recycled polyester and regenerated cotton yarns</li>
                            <li><i class="bi bi-check2-circle text-success me-2"></i> Community organic farming and shared logistics initiatives</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Call to Action --}}
    <section class="py-5 text-white" style="background: #09192b;">
        <div class="container text-center py-4" data-aos="zoom-in">
            <h2 class="display-6 fw-bold mb-3">Audit Our Sustainability Standards</h2>
            <p class="lead text-white-50 mx-auto mb-4" style="max-width: 680px;">
                We welcome global brand audit teams to inspect our 100 m³/hr biological ETP plant, energy conservation logs, and chemical management protocols in Savar.
            </p>
            <a href="{{ route('contact.index') }}" class="btn btn-warning btn-lg px-4 rounded-pill fw-semibold">
                Schedule a Buyer Compliance Visit <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </section>
@endsection
