<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Counter;
use App\Models\Faq;
use App\Models\HomepageCarousel;
use App\Models\Partner;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductSubcategory;
use App\Models\Setting;
use App\Models\SisterConcern;
use App\Models\TeamMember;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class MagpieGroupSeeder extends Seeder
{
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        // 1. Settings
        Setting::updateOrCreate(['id' => 1], [
            'site_name' => 'Magpie Group',
            'meta_title' => 'Magpie Group | 100% Export-Oriented RMG & Composite Textile Manufacturer',
            'meta_description' => 'Magpie Group is a leading 100% export-oriented garments and composite textile conglomerate in Bangladesh with 3 state-of-the-art facilities: Magpie Knit Wear, Magpie Composite Textile, and ABSS High-Tech Sweater.',
            'seo_keywords' => 'magpie group, sweater manufacturer, composite textile, readymade garments, stoll computerized knitting, savar garments, gazipur textile, bangladesh apparel exporter',
            'hero_title' => 'World-Class Garments & Composite Textile Manufacturing',
            'hero_subtitle' => 'Delivering superior quality knitwear and composite apparel to global fashion brands since 2003 with German STOLL computerized machines, biological ETP, and international compliance.',
            'company_intro' => 'It is our privilege to introduce us as a 100% export-oriented quality readymade garments industry named "Magpie Group" situated in Savar and Gazipur, Dhaka. We have been exporting quality goods to renowned companies in European countries like France, Germany, Sweden, and the UK since 2003, as well as reputed brands in the USA and Canada. Our factories are Accord and Alliance approved with modern computerized technology.',
            'cta_title' => 'Explore Sourcing & Long-Term Manufacturing Opportunities',
            'cta_text' => 'We warmly welcome valued international buyers to visit Bangladesh and explore long-term business partnerships with Magpie Group.',
            'cta_button_text' => 'Submit Buyer Inquiry',
            'cta_button_link' => '/contact',
            'about_title' => 'About Magpie Group',
            'about_content' => '<p>Magpie Group, based in Dhaka, Bangladesh, is a fast-growing garments and textile conglomerate. Starting in 2003 with Magpie Knit Wear Ltd. with only 300 hand-driven sweater machines, the company has grown into one of the leading knitwear and composite manufacturers in Bangladesh.</p><p>Today, Magpie Group operates across three major industrial concerns—Magpie Knit Wear Ltd., Magpie Composite Textile Ltd., and ABSS High-Tech Sweater Ltd.—housing over 1,020 modern multi-gauge computerized knitting machines from STOLL Germany, comprehensive circular knitting, 30-ton dyeing facility, and a 100 m³/hr biological ETP plant with an aggregate monthly capacity exceeding 243,750 dozen garments.</p>',
            'mission' => "To deliver superior quality, eco-conscious garments through advanced European knitting technology, vertical integration, rapid lead times, and steadfast adherence to international safety and labor compliance.",
            'vision' => "To be Bangladesh's most innovative, trusted, and sustainable apparel manufacturing group, empowering our workforce and creating enduring value for global fashion brands.",
            'history' => "<p><strong>2003:</strong> Inception of <em>Magpie Knit Wear Ltd.</em> with 300 hand-driven sweater machines, pioneering multi-gauge sweater manufacturing in Savar.</p><p><strong>2007:</strong> Expansion into <em>Magpie Composite Textile Ltd.</em>, creating a vertically integrated circular knitting, 30-ton dyeing, and 46-line sewing facility with a biological ETP.</p><p><strong>2012:</strong> Inauguration of <em>ABSS High-Tech Sweater Ltd.</em>, establishing a 2,25,000 sft facility with 420 multi-gauge computerized knitting machines from STOLL Germany.</p><p><strong>Present:</strong> Operating over 1,020 computerized machines with an aggregate monthly capacity exceeding 243,750 dozen garments.</p>",
            'contact_email' => 'md@magpiegroupbd.com',
            'contact_phone' => '+88-02-8932047',
            'contact_address' => 'House # 25 (5th Floor), Rabindra Swarani Road, Sector #03, Uttara, Dhaka-1230, Bangladesh.',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.4239859595567!2d90.39572937536294!3d23.874591478586415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c41498b8162f%3A0xb30aa5bbd9a6c9d0!2sSector%203%2C%20Uttara%2C%20Dhaka%201230!5e0!3m2!1sen!2sbd!4v1710000000000!5m2!1sen!2sbd',
            'social_links' => [
                'facebook' => 'https://facebook.com/magpiegroup',
                'linkedin' => 'https://linkedin.com/company/magpiegroup',
            ],
            'primary_color' => '#0f2b48',
            'secondary_color' => '#1e3a8a',
            'accent_color' => '#c29b38',
            'text_color' => '#1e293b',
        ]);

        // 2. About
        About::updateOrCreate(['id' => 1], [
            'title' => 'About Magpie Group',
            'page_details' => '<p>“Magpie Group”, based in Dhaka, Bangladesh, is a fast-growing garments and textile company. “Magpie Knit Wear Ltd.”, established in 2003 with only 300 hand-driven sweater machines, has grown into one of the leading sweater manufacturers in Bangladesh. Currently, we operate 600 modern multi-gauge computerized knitting machines, mostly from STOLL, Germany, with a production capacity of around 45,000 dozen sweaters per month.</p><p>In 2007, we expanded by establishing “Magpie Composite Textile Ltd.”, a vertically integrated facility covering fabric circular knitting, 30 ton’s dyeing, and 46-line sewing. We are committed to environmental sustainability through our biological ETP plant and initiatives for recycled yarn development. Our monthly production capacity is approximately 1,72,500 dozen knitwear.</p><p>In 2012, we further expanded our operations by establishing “ABSS High-Tech Sweater Ltd.”. Currently, we operate 420 state-of-the-art multi-gauge computerized knitting machines, mostly from STOLL, Germany, ensuring high-quality production and efficiency with a capacity of approximately 26,250 dozen sweaters per month.</p><p>All our factories are Accord and Alliance approved, and we continuously improve our fire and safety standards to meet international requirements. As Managing Director of “Magpie Group”, I warmly welcome our valued buyers to visit Bangladesh and explore long-term business opportunities with us.</p>',
            'details1' => '<p>Equipped with over 1,020 computerized multi-gauge flat knitting machines exclusively from STOLL, Germany. We specialize in intricate Jacquard, Intarsia, structured cables, and multi-color patterns with supreme efficiency and flawless gauge consistency.</p>',
            'details2' => '<p>Magpie Composite Textile operates an Italian 100 m³/hr biological ETP, steam regeneration, co-gen energy saving inverters, 90% LED lighting, and natural 15ft ventilation architecture, setting high environmental standards.</p>',
            'details3' => '<p>Fully certified by Accord and Alliance on fire, electrical, and structural safety. Equipped with automatic fire doors, sprinkler systems, PA systems, and trained safety teams conducting weekly emergency drills.</p>',
            'details4' => '<p>We nurture our 3,500+ workforce with fully equipped in-house child daycare centers, licensed doctors and medical clinics on-site, rigorous broken needle procedures, and dual metal-detector security.</p>',
            'key_values' => [
                'German STOLL Computerized Knitting',
                'Biological ETP & Eco-Dyeing (100 m³/hr)',
                'Accord & Alliance Approved Safety',
                'In-House Childcare & Medical Facilities',
                'European GSP Duty-Free Export Status',
                'Minimum 45-Day Rapid Production Lead Time',
            ],
            'years_experience' => 21,
            'establishment_year' => 2003,
            'mission' => "To manufacture and deliver world-class apparel through state-of-the-art European technology, sustainable manufacturing practices, and steadfast commitment to buyer trust and worker welfare.",
            'vision' => "To be recognized globally as the most reliable, innovative, and environmentally responsible textile and knitwear group in South Asia.",
            'history' => "<p><strong>2003:</strong> Inception of <em>Magpie Knit Wear Ltd.</em> in Savar, starting with 300 hand flat machines and growing into a premier sweater exporter.</p><p><strong>2007:</strong> Launch of <em>Magpie Composite Textile Ltd.</em> in Savar, adding 30-ton circular knitting & dyeing, 46 sewing lines, and biological water treatment.</p><p><strong>2012:</strong> Expansion of <em>ABSS High-Tech Sweater Ltd.</em> in Mawna, Gazipur, deploying 420 multi-gauge STOLL machines across a 2,25,000 sft facility.</p><p><strong>Present:</strong> Aggregate monthly capacity of 243,750+ dozen garments, serving premier global retailers in Europe and North America.</p>",
        ]);

        // 3. Homepage Carousels
        HomepageCarousel::truncate();
        HomepageCarousel::create([
            'title' => 'World-Class Sweater Manufacturing with STOLL Germany',
            'subtitle' => 'Over 1,020 computerized multi-gauge machines across Savar and Gazipur delivering 71,250+ dozen high-fashion sweaters monthly.',
            'sort_order' => 1,
            'is_active' => true,
        ]);
        HomepageCarousel::create([
            'title' => 'Vertically Integrated Composite Textile & Eco-Dyeing',
            'subtitle' => 'Circular knitting, 30-ton daily dyeing, 46 sewing lines, and 100 m³/hr Italian Biological ETP for sustainable knitwear production.',
            'sort_order' => 2,
            'is_active' => true,
        ]);
        HomepageCarousel::create([
            'title' => 'Trusted by Premier Global Retail Brands Since 2003',
            'subtitle' => 'Accord & Alliance approved facilities exporting to France, Germany, Sweden, UK, USA, and Canada with a minimum lead time of 45 days.',
            'sort_order' => 3,
            'is_active' => true,
        ]);

        // 4. Counters
        Counter::truncate();
        Counter::create([
            'title' => 'Monthly Capacity (Dozens)',
            'value' => '243750',
            'icon' => 'bi-box-seam',
            'status' => true,
        ]);
        Counter::create([
            'title' => 'STOLL Computerized Machines',
            'value' => '1020',
            'icon' => 'bi-cpu',
            'status' => true,
        ]);
        Counter::create([
            'title' => 'Total Dedicated Workforce',
            'value' => '3500',
            'icon' => 'bi-people',
            'status' => true,
        ]);
        Counter::create([
            'title' => 'Global Retail Brand Partners',
            'value' => '15',
            'icon' => 'bi-globe-americas',
            'status' => true,
        ]);

        // 5. Sister Concerns
        SisterConcern::truncate();
        SisterConcern::create([
            'name' => 'Magpie Knit Wear Ltd.',
            'slug' => 'magpie-knit-wear-ltd',
            'tagline' => 'Premier Multi-Gauge Computerized Sweater & Jacquard Manufacturing',
            'established_year' => 2003,
            'production_started_text' => 'February 2003',
            'main_products' => 'Sweaters, Mufflers, Scarfs with Jacquard and Intarsia work.',
            'monthly_capacity' => '45,000 DZ/Month',
            'annual_target_output' => '540,000 dozen p.a. (Core Basics @ 46%, Fashion @ 32%, High Value @ 22%)',
            'contact_person' => 'Md. Afroz Al Mamun',
            'contact_person_designation' => 'Director',
            'contact_phone' => '+8801713193371',
            'contact_email' => 'director@magpiegroupbd.com',
            'address' => 'Plot-141, Yarpur, Zirabo, Savar, Dhaka, Bangladesh.',
            'google_map_embed' => 'https://maps.google.com/maps?q=Zirabo+Savar+Dhaka&t=&z=13&ie=UTF8&iwloc=&output=embed',
            'building_specs' => [
                [
                    'name' => 'Building 1',
                    'size' => '90,000 sft',
                    'floors' => '6 storied with modern architectural design, Ground to 6th floor each 15,000 sft. Ground floor air-conditioned computerized knitting section.',
                ],
                [
                    'name' => 'Building 2',
                    'size' => '54,600 sft',
                    'floors' => '7 storied building, Ground to 6th floor each 7,500 sft.',
                ],
            ],
            'management_efficiencies' => [
                'Able to produce all types of Jacquard and Intarsia garments.',
                'Strong sourcing and accessories of any kind of imported yarn.',
                'Short time delivery system with guaranteed schedule adherence.',
                'In-house technical facilities with national & international human resources.',
                'Fully compliant with Accord, Alliance, and international labor standards.',
            ],
            'product_profile' => [
                'Ladies, Men\'s & Children\'s knitwear in Wool Blended',
                'Classic 50/50 Merino Acrylic',
                'Cotton and cotton stretch',
                'Viscose and viscose stretch',
                '100% Acrylic (regular, high bulk and super soft)',
                'Fancy yarns (bouclé, tape, frisé, brushed and chenille)',
            ],
            'target_market_profile' => [
                'Core Basics' => '250,000 dozen p.a. @ 46%',
                'Fashion' => '170,000 dozen p.a. @ 32%',
                'High Value' => '120,000 dozen p.a. @ 22%',
                'Total Target Output' => '540,000 dozen p.a.',
            ],
            'demographics' => [
                'Total Workers' => '1,955 Persons',
                'Head Count' => '30 Persons',
                'Jacquard Section' => '450 Persons (Double Shift)',
                'Knitting Section' => '400 Persons',
                'Linking Section' => '600 Persons',
                'Processing' => '475 Persons',
            ],
            'machinery_summary' => [
                'STOLL Computerized Knitting' => '600 Sets (2.5-5GG: 90 sets, 3.5-7GG: 320 sets, 7.2-14GG: 190 sets)',
                'Hand Flat & Semi-Auto' => '850 Sets (3.5GG, 5GG, 7GG, 12GG)',
                'Electric Belt Auto Knitting' => '40 Sets (5GG, 7GG, 12GG, 14GG)',
                'Linking Machines' => '970 Sets (3GG, 5GG, 6GG, 8GG, 14GG, 16GG)',
                'Washing & Drying' => '8 Washing, 8 Hydro Extractors, 8 Drying Machines',
                'Finishing & Utility' => '80 Vacuum Iron Sets, 3 Fulton Boilers, 3 Generators, 4 Metal Detectors',
            ],
            'special_qualities' => [
                'Air-conditioned computerized knitting section with modern architecture',
                'Dedicated in-house Child Daycare Center for female workforce',
                'In-house Medical Clinic with registered physicians and nurses',
                'Rigorous needle-broken policy and multi-stage metal detector testing',
            ],
            'sort_order' => 1,
            'status' => true,
        ]);

        SisterConcern::create([
            'name' => 'Magpie Composite Textile Ltd.',
            'slug' => 'magpie-composite-textile-ltd',
            'tagline' => 'Vertically Integrated Circular Knitting, 30-Ton Dyeing & 46 Sewing Lines with Biological ETP',
            'established_year' => 2007,
            'production_started_text' => 'February 2007',
            'main_products' => 'All kinds of knit items (T-Shirts, Polo Shirts, Trousers, Leggings, Shorts, Romper Sets).',
            'monthly_capacity' => '1,72,500 DZ/Month',
            'annual_target_output' => '2,070,000 dozen p.a.',
            'contact_person' => 'Md. Shoaib Uddin Khondkar',
            'contact_person_designation' => 'Head of Marketing & Merchandising',
            'contact_phone' => '+8801670914910',
            'contact_email' => 'jipu@magpiegroupbd.com',
            'address' => '832/833, Dewan Edris Road, Amtala, Kathgara, Savar, Dhaka, Bangladesh.',
            'google_map_embed' => 'https://maps.google.com/maps?q=Kathgara+Savar+Dhaka&t=&z=13&ie=UTF8&iwloc=&output=embed',
            'building_specs' => [
                [
                    'name' => 'Building 1 (Main)',
                    'size' => '84,000 sft',
                    'floors' => '7th storied Main building, Ground to 7th floor each 12,000 sft.',
                ],
                [
                    'name' => 'Building 2 (Main)',
                    'size' => '100,000 sft',
                    'floors' => '4th storied Main building, Ground to 4th floor each 25,000 sft.',
                ],
                [
                    'name' => 'Dyeing Shed',
                    'size' => '15,600 sft',
                    'floors' => 'Dedicated industrial high-capacity dyeing facility.',
                ],
                [
                    'name' => 'ETP Building',
                    'size' => '31,500 sft',
                    'floors' => '3rd storied Main building, each floor 10,500 sft. Fully tiled with modern fire-detection, alarm & rescue system.',
                ],
            ],
            'management_efficiencies' => [
                'Skilled & sound administration with decades of RMG excellence.',
                'Efficient production by vertically integrated knitting-to-shipment system.',
                'International labor law implementation and zero-tolerance compliance.',
                'Comprehensive quality assurance system at each production stage.',
                'Short-term delivery system with minimum lead times of 45 days.',
                'GSP tariff benefits for European Union buyers.',
                'Fully compliant with Accord, Alliance, and global environmental mandates.',
            ],
            'product_profile' => [
                'Ladies, Men\'s & Children\'s Basic and Graphic T-Shirts',
                'Premium Pique and Jersey Polo Shirts',
                'Casual & Athletic Trousers and Joggers',
                'Women\'s Leggings and Stretch Knits',
                'Knit Shorts and Lounge Essentials',
                'Infant & Toddler Romper Sets',
            ],
            'target_market_profile' => [
                'Production Capacity' => '1,72,500 DZ/Month',
                'Dyeing Capacity' => '30 Tons / Day',
                'Sewing Lines' => '46 Complete Industrial Lines',
                'Minimum Lead Time' => '45 Days for Bulk Exports',
            ],
            'demographics' => [
                'Sewing Lines' => '46 Lines',
                'Dyeing Machine Units' => '27 Units',
                'Finishing Machine Units' => '16 Units',
                'Sewing Machines Total' => '677 Sets',
            ],
            'machinery_summary' => [
                'Circular Knitting' => '36 Sets (HENGYI Taiwan Single Jersey, Open Width, 3-Thread Fleece)',
                'Dyeing Machines' => '27 Units (DIL-DYE Jumbo Turkey, Atmospheric, D.H Euro High Tech Korea, GM-38 China)',
                'Dyeing Finishing' => '16 Units (Stenter Korea/Turkey, Open Compactor USA/Turkey, Tube Compacting, Trumble Dryers)',
                'Dyeing Lab' => '20 Units (Spectrophotometer Data Color USA, Light Box, Ahiba IR, Crock Meter, ICI Pilling)',
                'Sewing Machinery' => '677 Sets (Juki & Joyee Plain, Overlock 4-Thread, Flatbed Cylinder)',
                'Finishing & Cutting' => '89 Finishing Machines (Iron Tables, Heat Seal, Thread Suckers), 9 Cutting Machines',
                'Biological ETP' => '31 Sets Italian advanced biological treatment equipment (100 m³/hr)',
                'Utility & Support' => '147 Sets (Gas & Diesel generators, Fulton boilers, York VRF AC, Substations)',
            ],
            'special_qualities' => [
                'Biological Effluent Treatment Plant (100 m³/hr capacity Italian biological plant)',
                'Steam regeneration, co-generation generators & energy-saving inverters',
                'Tree plantation program, co-op sustainable farming & carpool initiatives',
                'Eco-friendly factory architectural design with 15ft natural ventilation & 90% LED',
                'In-house daylight box testing lab, registered physician medical clinic',
                '24-Hour continuous gas & diesel generator backup system',
            ],
            'sort_order' => 2,
            'status' => true,
        ]);

        SisterConcern::create([
            'name' => 'ABSS High-Tech Sweater Ltd.',
            'slug' => 'abss-high-tech-sweater-ltd',
            'tagline' => 'High-Tech Computerized Sweater Manufacturing Plant',
            'established_year' => 2012,
            'production_started_text' => 'January 2012',
            'main_products' => 'Sweaters, Mufflers, Scarfs with Jacquard and Intarsia work.',
            'monthly_capacity' => '26,250 DZ/Month',
            'annual_target_output' => '380,000 dozen p.a. (Core Basics @ 45%, Fashion @ 35%, High Value @ 20%)',
            'contact_person' => 'Md. Afroz Al Mamun',
            'contact_person_designation' => 'Director',
            'contact_phone' => '+8801713193371',
            'contact_email' => 'director@magpiegroupbd.com',
            'address' => 'MC Bazar, Mulaid, Sreepur, Mawna, Gazipur, Bangladesh.',
            'google_map_embed' => 'https://maps.google.com/maps?q=Mawna+Gazipur+Bangladesh&t=&z=13&ie=UTF8&iwloc=&output=embed',
            'building_specs' => [
                [
                    'name' => 'Total Campus Project Area',
                    'size' => '2,25,000 sft',
                    'floors' => 'State-of-the-art green industrial sweater campus with expansive open grounds.',
                ],
                [
                    'name' => 'Main Production Building',
                    'size' => '180,000 sft',
                    'floors' => '5 storied building with modern architectural design, Ground to 4th floor each 36,000 sft.',
                ],
                [
                    'name' => 'Office Building',
                    'size' => '22,500 sft',
                    'floors' => '3 storied building, Ground to 2nd floor each 7,500 sft.',
                ],
                [
                    'name' => 'Utility Building',
                    'size' => '6,800 sft',
                    'floors' => '2 storied building, Ground to 1st floor each 3,400 sft.',
                ],
                [
                    'name' => 'ETP Building',
                    'size' => '9,000 sft',
                    'floors' => '3 storied building, Ground to 2nd floor each 3,000 sft.',
                ],
                [
                    'name' => 'Boiler & Substation',
                    'size' => '3,100 sft',
                    'floors' => '1 storied boiler house (2,700 sft) plus Lady Checker & substation room (400 sft).',
                ],
            ],
            'management_efficiencies' => [
                'Specialized high-efficiency Jacquard and Intarsia sweater manufacturing.',
                'Established international sourcing network for novelty, fine, and imported yarns.',
                'Short time delivery system with real-time merchandising tracking.',
                'In-house technical experts and programmers trained in German STOLL pattern design.',
                'Full compliance with Accord, Alliance, and international ethical labor conventions.',
            ],
            'product_profile' => [
                'Ladies, Men\'s & Children\'s knitwear in Wool Blended',
                'Classic 50/50 Merino Acrylic',
                'Cotton and cotton stretch sweaters',
                'Viscose and viscose stretch fine knits',
                '100% Acrylic (regular, high bulk and super soft)',
                'Fancy yarns (bouclé, tape, frisé, brushed and chenille)',
            ],
            'target_market_profile' => [
                'Core Basics' => '175,000 dozen p.a. @ 45%',
                'Fashion' => '120,000 dozen p.a. @ 35%',
                'High Value' => '84,000 dozen p.a. @ 20%',
                'Total Target Output' => '380,000 dozen p.a.',
            ],
            'demographics' => [
                'Total Workers' => '1,300 Persons',
                'Head Count' => '20 Persons',
                'Jacquard Section' => '400 Persons (Double Shift)',
                'Linking Section' => '550 Persons',
                'Processing' => '330 Persons',
            ],
            'machinery_summary' => [
                'STOLL Computerized Knitting' => '420 Sets (2.5-5GG: 36 sets, 3.5-7GG: 144 sets, 7.2-14GG: 240 sets)',
                'Hand Flat & Semi-Auto' => '850 Sets (3.5GG, 5GG, 7GG, 12GG)',
                'Electric Belt Auto Knitting' => '40 Sets (5GG, 7GG, 12GG, 14GG)',
                'Linking Machines' => '970 Sets (3GG to 16GG)',
                'Washing & Drying' => '8 Washing, 8 Hydro Extractors, 8 Drying Machines',
                'Finishing & Testing' => '80 Vacuum Iron Sets, 3 Fulton Boilers, 3 Generators, 4 Metal Detectors',
            ],
            'special_qualities' => [
                '420 State-of-the-art multi-gauge STOLL computerized knitting machines',
                'Sprawling 2,25,000 sq ft modern manufacturing campus in Mawna, Gazipur',
                'Double-shift jacquard section for high-volume rapid export orders',
                'Accord and Alliance approved with integrated fire detection and PA broadcast',
            ],
            'sort_order' => 3,
            'status' => true,
        ]);

        // 6. Global Buyers / Partners
        Partner::truncate();
        $buyers = [
            ['name' => 'H&M', 'website' => 'https://www.hm.com', 'desc' => 'Leading global fashion retailer (Sweden)'],
            ['name' => 'Zara (Inditex)', 'website' => 'https://www.zara.com', 'desc' => 'Flagship brand of Inditex Group (Spain)'],
            ['name' => 'Inditex', 'website' => 'https://www.inditex.com', 'desc' => 'World leading fashion group (Spain)'],
            ['name' => 'C&A', 'website' => 'https://www.c-and-a.com', 'desc' => 'Major European retail chain (Germany / Netherlands)'],
            ['name' => 's.Oliver', 'website' => 'https://www.soliver.com', 'desc' => 'Renowned German fashion company'],
            ['name' => 'El Corte Inglés', 'website' => 'https://www.elcorteingles.es', 'desc' => 'Spain’s biggest department store group'],
            ['name' => 'The Children’s Place', 'website' => 'https://www.childrensplace.com', 'desc' => 'Premier North American children’s apparel retailer (USA)'],
            ['name' => 'Walmart', 'website' => 'https://www.walmart.com', 'desc' => 'World’s largest retail corporation (USA)'],
            ['name' => 'Sears', 'website' => 'https://www.sears.com', 'desc' => 'Leading department store retailer (USA)'],
            ['name' => 'Takko Fashion', 'website' => 'https://www.takko.com', 'desc' => 'Smart fashion retailer across Europe (Germany)'],
            ['name' => 'Peacock', 'website' => 'https://www.peacocks.co.uk', 'desc' => 'Fast-fashion clothing chain (UK)'],
            ['name' => 'Perry Ellis', 'website' => 'https://www.perryellis.com', 'desc' => 'Global designer apparel brand (USA)'],
            ['name' => 'Ernsting’s Family', 'website' => 'https://www.ernstings-family.de', 'desc' => 'Leading German family apparel chain'],
        ];

        foreach ($buyers as $index => $buyer) {
            Partner::create([
                'name' => $buyer['name'],
                'image' => '', // Clean corporate SVG logo fallback handled in view
                'website_url' => $buyer['website'],
                'description' => $buyer['desc'],
                'sort_order' => $index + 1,
                'status' => true,
            ]);
        }

        // 7. Team Members (Board of Directors)
        TeamMember::truncate();
        TeamMember::create([
            'name' => 'Al Haj Habibur Rahman',
            'designation' => 'Chairman',
            'bio' => 'Visionary founder and Chairman of Magpie Group, providing strategic guidance and values of honesty, quality, and community welfare.',
            'sort_order' => 1,
            'status' => true,
        ]);
        TeamMember::create([
            'name' => 'M. Arifur Rahman',
            'designation' => 'Managing Director',
            'bio' => 'Steering Magpie Group since 2003 from 300 hand machines into a multi-facility RMG powerhouse with over 1,020 German STOLL machines. Cell: +8801711 549042 | Email: md@magpiegroupbd.com',
            'sort_order' => 2,
            'status' => true,
        ]);
        TeamMember::create([
            'name' => 'Md. Afroz Al Mamun',
            'designation' => 'Director',
            'bio' => 'Overseeing sweater manufacturing, technical infrastructure, STOLL machine operations, and buyer compliance across Savar and Gazipur plants. Cell: +8801713193371 | Email: director@magpiegroupbd.com',
            'sort_order' => 3,
            'status' => true,
        ]);
        TeamMember::create([
            'name' => 'Md. Shoaib Uddin Khondkar',
            'designation' => 'Head of Marketing & Merchandising',
            'bio' => 'Directing global client partnerships, merchandising, sampling, and export logistics for Magpie Composite Textile Ltd. Cell: +8801670914910 | Email: jipu@magpiegroupbd.com',
            'sort_order' => 4,
            'status' => true,
        ]);

        // 8. Product Categories and Garment Products
        ProductCategory::truncate();
        ProductSubcategory::truncate();
        Product::truncate();

        $catSweaters = ProductCategory::create([
            'name' => 'Sweaters & Knitwear',
            'slug' => 'sweaters-knitwear',
            'description' => 'Precision computerized Jacquard and Intarsia sweaters made with STOLL Germany machines.',
            'sort_order' => 1,
            'status' => true,
        ]);

        $catComposite = ProductCategory::create([
            'name' => 'Composite Knit Items',
            'slug' => 'composite-knit-items',
            'description' => 'Single jersey, pique, and fleece knitwear produced by our 46-line composite facility.',
            'sort_order' => 2,
            'status' => true,
        ]);

        $catAccessories = ProductCategory::create([
            'name' => 'Knit Accessories',
            'slug' => 'knit-accessories',
            'description' => 'Jacquard mufflers, knitted scarves, and seasonal accessories.',
            'sort_order' => 3,
            'status' => true,
        ]);

        $subJacquard = ProductSubcategory::create([
            'product_category_id' => $catSweaters->id,
            'name' => 'Jacquard & Intarsia Sweaters',
            'slug' => 'jacquard-intarsia-sweaters',
            'sort_order' => 1,
            'status' => true,
        ]);

        $subCable = ProductSubcategory::create([
            'product_category_id' => $catSweaters->id,
            'name' => 'Cable Knit & Turtlenecks',
            'slug' => 'cable-knit-turtlenecks',
            'sort_order' => 2,
            'status' => true,
        ]);

        $subTees = ProductSubcategory::create([
            'product_category_id' => $catComposite->id,
            'name' => 'T-Shirts & Polos',
            'slug' => 't-shirts-polos',
            'sort_order' => 1,
            'status' => true,
        ]);

        $subKids = ProductSubcategory::create([
            'product_category_id' => $catComposite->id,
            'name' => 'Kids & Romper Sets',
            'slug' => 'kids-romper-sets',
            'sort_order' => 2,
            'status' => true,
        ]);

        $productsData = [
            [
                'title' => 'Women\'s Nordic Pattern Jacquard Sweater',
                'slug' => 'womens-nordic-jacquard-sweater',
                'cat_id' => $catSweaters->id,
                'sub_id' => $subJacquard->id,
                'short' => 'Fine multi-color Nordic pattern knitted on STOLL 7GG computerized machines with soft Merino-Acrylic blend.',
                'desc' => '<p>Crafted with premium 50/50 Merino Acrylic yarn, this sweater showcases intricate multi-colored Jacquard motifs across the yoke and chest. Manufactured under strict European compliance with automated linking and pre-shrunk finishing.</p><ul><li>Gauge: 7GG Multi-gauge Computerized STOLL</li><li>Yarn: 50% Merino Wool / 50% High-Bulk Acrylic</li><li>Features: Ribbed collar, cuffs, and hem</li><li>MOQ: 1,500 pcs per colorway</li><li>Lead Time: 45 Days</li></ul>',
                'featured' => true,
            ],
            [
                'title' => 'Men\'s Classic Cable Knit Pullover',
                'slug' => 'mens-classic-cable-knit-pullover',
                'cat_id' => $catSweaters->id,
                'sub_id' => $subCable->id,
                'short' => 'Traditional fisherman cable structure knitted in rich camel tone with 100% super soft acrylic.',
                'desc' => '<p>A staple wardrobe piece engineered for European winter collections. Features three-dimensional dimensional cables and honeycomb texture produced on German STOLL flatbed machines.</p><ul><li>Gauge: 5GG / 7GG Convertible</li><li>Yarn: 100% Super Soft Acrylic (low-pilling)</li><li>Features: Reinforced crew neckline and double rib trims</li><li>Lead Time: 45 Days</li></ul>',
                'featured' => true,
            ],
            [
                'title' => 'Children\'s Winter Intarsia Animal Sweater',
                'slug' => 'childrens-winter-intarsia-animal-sweater',
                'cat_id' => $catSweaters->id,
                'sub_id' => $subJacquard->id,
                'short' => 'Plush fluffy owl intarsia sweater for toddlers and children with certified baby-safe non-toxic dyes.',
                'desc' => '<p>Designed for warmth and comfort with ultra-soft boucle and chenille textured yarn on chest intarsia. OEKO-TEX compliant and 100% metal detector inspected.</p><ul><li>Gauge: 7.2GG / 12GG STOLL</li><li>Yarn: Chenille & High-Bulk Acrylic Blend</li><li>Safety: Dual needle-break scan & pull-test certified</li><li>Lead Time: 45 Days</li></ul>',
                'featured' => true,
            ],
            [
                'title' => 'Men\'s Cable Turtleneck Pullover',
                'slug' => 'mens-cable-turtleneck-pullover',
                'cat_id' => $catSweaters->id,
                'sub_id' => $subCable->id,
                'short' => 'Chunky warm ribbed turtleneck knitted with luxury wool blend yarn in off-white and charcoal.',
                'desc' => '<p>Sophisticated high-neck silhouette offering superior thermal insulation and soft hand-feel. Perfect for premium European department stores.</p><ul><li>Gauge: 5GG Heavy Knit</li><li>Yarn: Wool Blended with Stretch Nylon</li><li>Features: Folded roll-neck collar and raglan sleeve</li><li>Lead Time: 45 Days</li></ul>',
                'featured' => true,
            ],
            [
                'title' => 'Premium Men\'s Pique Polo Shirt',
                'slug' => 'premium-mens-pique-polo-shirt',
                'cat_id' => $catComposite->id,
                'sub_id' => $subTees->id,
                'short' => '100% Combed Cotton 220 GSM pique polo with reactive eco-dyeing and knit collar.',
                'desc' => '<p>Produced at Magpie Composite Textile with Taiwan HENGYI circular machines and dyed in biological ETP certified facility. Enzyme bio-washed for silky touch.</p><ul><li>Fabric: 100% Combed Compact Cotton Pique, 220 GSM</li><li>Finishing: Silicon softener, color fastness grade 4+</li><li>Placket: 3-button front with laser-engraved buttons</li><li>Lead Time: 45 Days</li></ul>',
                'featured' => true,
            ],
            [
                'title' => 'Organic Cotton Graphic T-Shirt',
                'slug' => 'organic-cotton-graphic-t-shirt',
                'cat_id' => $catComposite->id,
                'sub_id' => $subTees->id,
                'short' => '160 GSM single jersey crew neck t-shirt with eco-friendly water-based screen printing.',
                'desc' => '<p>High-volume essential basic t-shirt manufactured on 46 dedicated sewing lines. Outstanding shape retention and minimal shrinkage.</p><ul><li>Fabric: 100% BCI / Organic Cotton Single Jersey, 160 GSM</li><li>Print: High-density water-based rubber print</li><li>Lead Time: 40-45 Days</li></ul>',
                'featured' => true,
            ],
            [
                'title' => 'Infant Knit Romper & Pant Set',
                'slug' => 'infant-knit-romper-pant-set',
                'cat_id' => $catComposite->id,
                'sub_id' => $subKids->id,
                'short' => '100% Combed Interlock cotton baby romper set with nickel-free snap buttons.',
                'desc' => '<p>Safe, breathable infant apparel produced with strict clean-room protocols, metal detector scanning, and zero chemical residue.</p><ul><li>Fabric: 100% Combed Cotton Interlock 190 GSM</li><li>Trims: Certified nickel-free snap buttons</li><li>Lead Time: 45 Days</li></ul>',
                'featured' => false,
            ],
            [
                'title' => 'Jacquard Pattern Winter Muffler & Scarf',
                'slug' => 'jacquard-pattern-winter-muffler-scarf',
                'cat_id' => $catAccessories->id,
                'sub_id' => null,
                'short' => 'Double-faced Jacquard knitted winter scarf with fringed hem and custom buyer brand motifs.',
                'desc' => '<p>Luxury knitwear accessory produced on STOLL 12GG machines with soft acrylic and wool blend yarn.</p><ul><li>Gauge: 12GG Fine Knit</li><li>Dimensions: 180cm x 30cm with tassel trim</li><li>Lead Time: 40 Days</li></ul>',
                'featured' => false,
            ],
        ];

        foreach ($productsData as $p) {
            Product::create([
                'title' => $p['title'],
                'slug' => $p['slug'],
                'product_category_id' => $p['cat_id'],
                'product_subcategory_id' => $p['sub_id'],
                'short_description' => $p['short'],
                'description' => $p['desc'],
                'image' => null, // Blade view handles rich fallback garment visuals
                'is_featured' => $p['featured'],
                'status' => true,
            ]);
        }

        // 9. FAQs
        Faq::truncate();
        Faq::create([
            'question' => 'What is Magpie Group\'s total monthly manufacturing capacity?',
            'answer' => 'Our aggregate monthly capacity across all three sister concerns is 243,750 dozen garments. This includes 45,000 DZ/month at Magpie Knit Wear Ltd., 1,72,500 DZ/month at Magpie Composite Textile Ltd., and 26,250 DZ/month at ABSS High-Tech Sweater Ltd.',
            'order' => 1,
            'status' => true,
        ]);
        Faq::create([
            'question' => 'What international safety and ethical compliance certifications do you hold?',
            'answer' => 'All our factories are Accord and Alliance approved with modern fire doors, sprinkler systems, and structural safety certifications. We comply with international labor laws, hold European GSP status, maintain on-site daycare and medical clinics, and operate an Italian 100 m³/hr biological ETP plant.',
            'order' => 2,
            'status' => true,
        ]);
        Faq::create([
            'question' => 'What is the standard production lead time for export orders?',
            'answer' => 'Our standard minimum lead time is 45 days for bulk export production. Thanks to our in-house technical facilities, vertical circular knitting, 30-ton dyeing capacity, and automated computerized knitting sections, we guarantee swift turnaround without compromising quality.',
            'order' => 3,
            'status' => true,
        ]);
        Faq::create([
            'question' => 'What machine technologies do you use for sweater manufacturing?',
            'answer' => 'We operate over 1,020 computerized multi-gauge flat knitting machines exclusively from STOLL, Germany, spanning 2.5GG to 14GG gauges. This enables us to produce all types of intricate Jacquard and Intarsia garments.',
            'order' => 4,
            'status' => true,
        ]);
        Faq::create([
            'question' => 'Can we request customized samples and development?',
            'answer' => 'Yes. We have dedicated sample development sections equipped with CAD pattern design stations, sample dyeing units, and experienced technical pattern programmers. You can submit your tech packs via our Contact page or directly to our marketing team at jipu@magpiegroupbd.com.',
            'order' => 5,
            'status' => true,
        ]);

        // 10. Testimonials / Buyer Feedback
        Testimonial::truncate();
        Testimonial::create([
            'name' => 'European Sourcing Director',
            'designation' => 'Leading German Retail Brand',
            'message' => 'Magpie Group has been our trusted knitwear manufacturing partner in Bangladesh for over a decade. Their German STOLL computerized capability and flawless quality consistency make them stand out in South Asia.',
            'rating' => 5,
            'status' => true,
        ]);
        Testimonial::create([
            'name' => 'Senior Apparel Merchant',
            'designation' => 'Global Department Store Group (Spain)',
            'message' => 'The vertical integration at Magpie Composite Textile—from circular knitting to their 100 m³/hr biological ETP—gives us immense confidence in meeting our European sustainability and GSP standards.',
            'rating' => 5,
            'status' => true,
        ]);
        Testimonial::create([
            'name' => 'Head of Merchandising',
            'designation' => 'North American Children\'s Fashion Retailer',
            'message' => 'Their strict broken-needle protocol, in-house daycare welfare, and quick 45-day lead times have made Magpie Group our top choice for children\'s sweaters and romper sets season after season.',
            'rating' => 5,
            'status' => true,
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
