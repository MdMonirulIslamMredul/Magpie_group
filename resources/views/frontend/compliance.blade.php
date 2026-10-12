@extends('frontend.layouts.app')

@section('title', 'Compliance & Worker Welfare (CSR) | Magpie Group')
@section('meta_description', 'Learn about Magpie Group\'s Accord & Alliance compliance, fire and building safety standards, in-house child daycare, on-site doctors, and broken-needle policy.')

@section('content')
    {{-- Hero Section --}}
    <section class="py-5 text-white" style="position: relative; background: linear-gradient(135deg, #09192b 0%, #1e3a8a 50%, #0369a1 100%);">
        <div class="container py-4 position-relative" data-aos="fade-up">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-white bg-opacity-15 text-white small fw-semibold mb-3">
                <i class="bi bi-shield-fill-check text-warning"></i> Ethical Manufacturing &amp; Social Welfare
            </div>
            <h1 class="display-4 fw-bold mb-3">Compliance, Safety &amp; Worker Welfare</h1>
            <p class="lead text-white-50 mb-0" style="max-width: 820px;">
                Our 3,500+ professionals are the heart of Magpie Group. All our manufacturing plants meet strict Accord and Alliance guidelines, uphold international labor standards, and provide dedicated child daycare and medical facilities.
            </p>
        </div>
    </section>

    {{-- Core Pillars of Compliance --}}
    <section class="py-5 bg-white">
        <div class="container py-3">
            <div class="row g-4">
                {{-- 1. Accord & Alliance Approvals --}}
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 p-lg-5" style="border-top: 4px solid #2563eb !important;">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="d-inline-flex align-items-center justify-content-center rounded-3 bg-primary-subtle text-primary" style="width: 48px; height: 48px; font-size: 1.4rem;">
                                <i class="bi bi-shield-check"></i>
                            </span>
                            <h3 class="h4 fw-bold mb-0">Accord &amp; Alliance Certified</h3>
                        </div>
                        <p class="text-secondary leading-relaxed mb-3">
                            All Magpie Group facilities in Savar and Gazipur have achieved full structural, fire, and electrical safety compliance approved by <strong>Accord</strong> and <strong>Alliance</strong>. Our multi-storied buildings feature modern certified fire doors (78+ sets), automated water sprinklers, hose reels, fire hydrants, and regular emergency evacuation drills.
                        </p>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-light text-dark border p-2"><i class="bi bi-check-circle-fill text-success"></i> 78+ Certified Fire Doors</span>
                            <span class="badge bg-light text-dark border p-2"><i class="bi bi-check-circle-fill text-success"></i> Centralized Fire Alarms</span>
                            <span class="badge bg-light text-dark border p-2"><i class="bi bi-check-circle-fill text-success"></i> PA Broadcast System</span>
                        </div>
                    </div>
                </div>

                {{-- 2. Worker Welfare & In-House Daycare --}}
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 p-lg-5" style="border-top: 4px solid #10b981 !important;">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="d-inline-flex align-items-center justify-content-center rounded-3 bg-success-subtle text-success" style="width: 48px; height: 48px; font-size: 1.4rem;">
                                <i class="bi bi-heart-pulse-fill"></i>
                            </span>
                            <h3 class="h4 fw-bold mb-0">Child Daycare &amp; Medical Clinic</h3>
                        </div>
                        <p class="text-secondary leading-relaxed mb-3">
                            To empower female workers, each factory campus includes a colorful, safe **Child Daycare Center** with trained caregivers, nourishing nutrition, and play amenities. Furthermore, we maintain dedicated **on-site Medical Clinics** staffed with licensed physicians and registered nurses providing free healthcare and first aid.
                        </p>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-light text-dark border p-2"><i class="bi bi-check-circle-fill text-success"></i> Free In-House Child Daycare</span>
                            <span class="badge bg-light text-dark border p-2"><i class="bi bi-check-circle-fill text-success"></i> Registered On-Site Doctors</span>
                            <span class="badge bg-light text-dark border p-2"><i class="bi bi-check-circle-fill text-success"></i> Free Medicine &amp; Health Checks</span>
                        </div>
                    </div>
                </div>

                {{-- 3. Product Safety & Metal Detection --}}
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 p-lg-5" style="border-top: 4px solid #f59e0b !important;">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="d-inline-flex align-items-center justify-content-center rounded-3 bg-warning-subtle text-warning" style="width: 48px; height: 48px; font-size: 1.4rem;">
                                <i class="bi bi-shield-slash-fill"></i>
                            </span>
                            <h3 class="h4 fw-bold mb-0">Needle-Broken Policy &amp; Metal Scans</h3>
                        </div>
                        <p class="text-secondary leading-relaxed mb-3">
                            We enforce a strict 100% Broken Needle Management policy to safeguard consumer safety—particularly for infants and children's knitwear. Broken needle parts must be completely retrieved and documented before any replacement is issued. All finished products pass through 9-point conveyor metal detectors from Japan.
                        </p>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-light text-dark border p-2"><i class="bi bi-check-circle-fill text-warning"></i> 4 Metal Detectors per Facility</span>
                            <span class="badge bg-light text-dark border p-2"><i class="bi bi-check-circle-fill text-warning"></i> Pull-Test &amp; Snap Strength Tests</span>
                            <span class="badge bg-light text-dark border p-2"><i class="bi bi-check-circle-fill text-warning"></i> Zero Metal Contamination Guarantee</span>
                        </div>
                    </div>
                </div>

                {{-- 4. Ethical Labor & GSP European Standards --}}
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 p-lg-5" style="border-top: 4px solid #8b5cf6 !important;">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="d-inline-flex align-items-center justify-content-center rounded-3 bg-purple-subtle text-purple" style="width: 48px; height: 48px; font-size: 1.4rem;">
                                <i class="bi bi-award-fill"></i>
                            </span>
                            <h3 class="h4 fw-bold mb-0">Labor Law Compliance &amp; EU GSP</h3>
                        </div>
                        <p class="text-secondary leading-relaxed mb-3">
                            Magpie Group adheres strictly to Bangladesh Labor Act and ILO core labor conventions. We operate transparent attendance tracking, fair overtime compensation, structured double-shift schedules in jacquard sections, and zero tolerance for discrimination or child labor. Our facilities qualify for European Generalised Scheme of Preferences (GSP).
                        </p>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-light text-dark border p-2"><i class="bi bi-check-circle-fill text-success"></i> 100% ILO Labor Standards</span>
                            <span class="badge bg-light text-dark border p-2"><i class="bi bi-check-circle-fill text-success"></i> European GSP Duty-Free Export</span>
                            <span class="badge bg-light text-dark border p-2"><i class="bi bi-check-circle-fill text-success"></i> Safe Working Conditions</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Inspection Section --}}
    <section class="py-5 text-white" style="background: #09192b;">
        <div class="container text-center py-4" data-aos="fade-up">
            <h2 class="display-6 fw-bold mb-3">Third-Party &amp; Buyer Social Audits</h2>
            <p class="lead text-white-50 mx-auto mb-4" style="max-width: 700px;">
                Our factories are regularly audited and cleared by world-renowned third-party inspection agencies and buyer compliance teams including H&M, Inditex, C&A, and Walmart.
            </p>
            <a href="{{ route('contact.index') }}" class="btn btn-warning btn-lg px-4 rounded-pill fw-semibold">
                Request Audit Documentation <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </section>
@endsection
