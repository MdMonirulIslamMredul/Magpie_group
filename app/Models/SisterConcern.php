<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SisterConcern extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'tagline',
        'established_year',
        'production_started_text',
        'main_products',
        'monthly_capacity',
        'annual_target_output',
        'contact_person',
        'contact_person_designation',
        'contact_phone',
        'contact_email',
        'address',
        'google_map_embed',
        'building_specs',
        'management_efficiencies',
        'product_profile',
        'target_market_profile',
        'machinery_summary',
        'demographics',
        'special_qualities',
        'banner_image',
        'featured_image',
        'gallery_images',
        'sort_order',
        'status',
    ];

    protected $casts = [
        'building_specs' => 'array',
        'management_efficiencies' => 'array',
        'product_profile' => 'array',
        'target_market_profile' => 'array',
        'machinery_summary' => 'array',
        'demographics' => 'array',
        'special_qualities' => 'array',
        'gallery_images' => 'array',
        'status' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->name);
            }
        });
    }

    public function scopeActive($query)
    {
        return $query->where('status', true)->orderBy('sort_order')->orderBy('id');
    }
}
