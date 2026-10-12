<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sister_concerns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('tagline')->nullable();
            $table->unsignedSmallInteger('established_year')->nullable();
            $table->string('production_started_text')->nullable();
            $table->text('main_products')->nullable();
            $table->string('monthly_capacity')->nullable();
            $table->string('annual_target_output')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('contact_person_designation')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_email')->nullable();
            $table->text('address')->nullable();
            $table->text('google_map_embed')->nullable();
            $table->json('building_specs')->nullable();
            $table->json('management_efficiencies')->nullable();
            $table->json('product_profile')->nullable();
            $table->json('target_market_profile')->nullable();
            $table->json('machinery_summary')->nullable();
            $table->json('demographics')->nullable();
            $table->json('special_qualities')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('featured_image')->nullable();
            $table->json('gallery_images')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sister_concerns');
    }
};
