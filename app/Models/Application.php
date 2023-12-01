<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'departing','destination','connecting','airport_change',
        'flight_problem','airlines','flight_number','date',
        'flight_disruption','delayed_hours','caused','name',
        'surname','email','agree_terms','agree_promotions',
        'traveling_alone','other_person','address','cancellation_notification','pnr'
        ,'cancelled_explain','paid','passport_image'
    ];      
    
    const STATUS_OPTIONS = [
        'DELAY_UNDER_3_HOURS' => 'Delay under 3 hours',
        'ANOTHER_ENTITY_CLAIM' => 'Another entity has filed a claim',
        'EXTRAORDINARY_REASONS' => 'Extraordinary reasons',
    ];

    public function airport()
    {
        return $this->hasMany(Application::class);
    }
}


