<?php

namespace App\Models;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TravelTrip extends Model
{
    use HasFactory;

    protected $table = 'travel_trips';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $incrementing = FALSE;
    protected $keyType = 'string';
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Uuid::uuid4();
            }
        });
    }

    public function travelCompany()
    {
        return $this->belongsTo(TravelCompany::class, 'travel_company_id', 'id');
    }

    public function booking()
    {
        return $this->hasMany(Booking::class, 'travel_trip_id', 'id');
    }
}
