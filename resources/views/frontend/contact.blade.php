@extends('frontend.layouts.app')

@section('title', 'Contact Magpie Group | Corporate Office & Factory Locations')
@section('meta_description', 'Get in touch with Magpie Group. Corporate Office in Uttara Dhaka and factories in Savar and Gazipur. Direct merchandising, sampling, and export inquiries.')

@php
    $locations = [
        [
            'title' => 'Corporate Headquarters',
            'badge' => 'Head Office',
            'address' => 'House # 25 (5th Floor), Rabindra Swarani Road, Sector #03, Uttara, Dhaka-1230, Bangladesh.',
            'phone' => '88-02-8932047, 88-02-8954194',
            'fax' => '+88-02-7914034',
            'email' => 'md@magpiegroupbd.com',
            'contact_person' => 'M. Arifur Rahman (Managing Director)',
            'map' => 'https://maps.google.com/maps?q=Sector+3+Uttara+Dhaka&t=&z=14&ie=UTF8&iwloc=&output=embed',
        ],
        [
            'title' => 'Magpie Knit Wear Ltd.',
            'badge' => 'Sweater Unit 1',
            'address' => 'Plot-141, Yarpur, Zirabo, Savar, Dhaka, Bangladesh.',
            'phone' => '+88-02-7708288, 7791207, 7791248',
            'email' => 'director@magpiegroupbd.com',
            'contact_person' => 'Md. Afroz Al Mamun (Director, +8801713193371)',
            'map' => 'https://maps.google.com/maps?q=Zirabo+Savar+Dhaka&t=&z=13&ie=UTF8&iwloc=&output=embed',
        ],
        [
            'title' => 'Magpie Composite Textile Ltd.',
            'badge' => 'Composite Unit 2',
            'address' => '832/833, Dewan Edris Road, Amtala, Kathgara, Savar, Dhaka, Bangladesh.',
            'phone' => '+88-02-7792265',
            'email' => 'jipu@magpiegroupbd.com',
            'contact_person' => 'Md. Shoaib Uddin Khondkar (Head of Marketing, +8801670914910)',
            'map' => 'https://maps.google.com/maps?q=Kathgara+Savar+Dhaka&t=&z=13&ie=UTF8&iwloc=&output=embed',
        ],
        [
            'title' => 'ABSS High-Tech Sweater Ltd.',
            'badge' => 'Sweater Unit 3',
            'address' => 'MC Bazar, Mulaid, Sreepur, Mawna, Gazipur, Bangladesh.',
            'phone' => '+8801713193371',
            'email' => 'director@magpiegroupbd.com',
            'contact_person' => 'Md. Afroz Al Mamun (Director)',
            'map' => 'https://maps.google.com/maps?q=Mawna+Gazipur+Bangladesh&t=&z=13&ie=UTF8&iwloc=&output=embed',
        ],
    ];
@endphp

@section('content')
    {{-- Hero Section --}}
    <section class="py-5 text-white position-relative" style="background: linear-gradient(135deg, #09192b 0%, #0f2b48 55%, #1e3a8a 100%);">
        <div class="container py-4 position-relative" data-aos="fade-up">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-white bg-opacity-10 text-warning small fw-semibold mb-3">
                <i class="bi bi-geo-alt-fill"></i> Dhaka &bull; Savar &bull; Gazipur
            </div>
            <h1 class="display-4 fw-bold mb-3">Contact &amp; Factory Locations</h1>
            <p class="lead text-white-50 mb-0" style="max-width: 820px;">
                Connect with Magpie Group for international buyer inquiries, tech-pack sampling, merchandising schedules, or to book a guided compliance tour of our manufacturing campuses.
            </p>
        </div>
    </section>

    {{-- Main Contact & Locations Grid --}}
    <section class="py-5 bg-white">
        <div class="container py-2">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show rounded-4 shadow-sm p-4 border-0 mb-4 d-flex align-items-center gap-3">
                    <i class="bi bi-check-circle-fill fs-3 text-success"></i>
                    <div>
                        <h5 class="fw-bold mb-1">Inquiry Submitted Successfully!</h5>
                        <p class="mb-0 small">{{ session('success') }}</p>
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="row g-5">
                {{-- Left: 4 Location Directory --}}
                <div class="col-lg-7" data-aos="fade-right">
                    <h2 class="h3 fw-bold mb-4">Our Facilities &amp; Offices</h2>

                    <div class="row g-4">
                        @foreach ($locations as $loc)
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-light" style="border-left: 4px solid #1e3a8a !important;">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge bg-primary text-white rounded-pill small">{{ $loc['badge'] }}</span>
                                    </div>
                                    <h4 class="h5 fw-bold text-dark mb-2">{{ $loc['title'] }}</h4>
                                    <p class="small text-secondary mb-3 leading-relaxed">
                                        <i class="bi bi-geo-alt-fill text-danger me-1"></i> {{ $loc['address'] }}
                                    </p>

                                    <div class="mt-auto small border-top pt-2">
                                        <div class="mb-1 text-secondary">
                                            <i class="bi bi-person-fill text-primary me-1"></i> {{ $loc['contact_person'] }}
                                        </div>
                                        <div class="mb-1">
                                            <i class="bi bi-telephone-fill text-success me-1"></i> <a href="tel:{{ explode(',', $loc['phone'])[0] }}" class="text-secondary text-decoration-none">{{ $loc['phone'] }}</a>
                                        </div>
                                        <div>
                                            <i class="bi bi-envelope-fill text-info me-1"></i> <a href="mailto:{{ $loc['email'] }}" class="text-secondary text-decoration-none">{{ $loc['email'] }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- Map View --}}
                    <div class="mt-4 rounded-4 overflow-hidden shadow-sm border" style="height: 320px;">
                        <iframe
                            src="{{ $locations[0]['map'] }}"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                {{-- Right: Buyer Inquiry Form --}}
                <div class="col-lg-5" data-aos="fade-left">
                    <div class="card border-0 shadow-sm rounded-4 p-4 p-lg-5" style="background: #f8fafc; border-top: 5px solid #d97706 !important;">
                        <span class="text-warning fw-bold text-uppercase small" style="letter-spacing: 0.5px;">B2B Sourcing</span>
                        <h3 class="h4 fw-bold mb-3">Send Buyer Inquiry</h3>
                        <p class="text-secondary small mb-4">
                            Submit your tech-pack specs, target order volume, or visit schedule. Our merchandising directorate will reply within 24 hours.
                        </p>

                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label small fw-semibold text-secondary">Your Name *</label>
                                <input type="text" name="name" class="form-control rounded-3" placeholder="e.g. John Smith" required value="{{ old('name') }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-semibold text-secondary">Corporate Email *</label>
                                <input type="email" name="email" class="form-control rounded-3" placeholder="e.g. buyer@brand.com" required value="{{ old('email') }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-semibold text-secondary">Company / Brand Name</label>
                                <input type="text" name="company" class="form-control rounded-3" placeholder="e.g. H&amp;M, Zara, Retail Brand" value="{{ old('company') }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-semibold text-secondary">Contact Phone / WhatsApp</label>
                                <input type="tel" name="phone" class="form-control rounded-3" placeholder="+1 ... or +44 ..." value="{{ old('phone') }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-semibold text-secondary">Inquiry Type</label>
                                <select name="subject" class="form-select rounded-3">
                                    <option value="Sweater Bulk Manufacturing Order">Sweater Bulk Manufacturing Order (STOLL Knitwear)</option>
                                    <option value="Composite Knitwear Inquiry">Composite Knitwear Inquiry (T-Shirts / Polos / Rompers)</option>
                                    <option value="Sample Development & Tech-Pack Request">Sample Development &amp; Tech-Pack Request</option>
                                    <option value="Factory Visit & Compliance Audit Request">Factory Visit &amp; Compliance Audit Request</option>
                                    <option value="General Corporate Inquiry">General Corporate Inquiry</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label small fw-semibold text-secondary">Inquiry Details / Message *</label>
                                <textarea name="message" rows="4" class="form-control rounded-3" placeholder="Please specify gauges, yarn blends, estimated quantity, and delivery timeline..." required>{{ old('message') }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 rounded-pill py-2 fw-semibold" style="background: #0f2b48; border-color: #0f2b48;">
                                Submit Buyer RFQ <i class="bi bi-send-fill ms-1"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
