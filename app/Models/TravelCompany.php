<?php

namespace App\Models;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TravelCompany extends Model
{
    use HasFactory;

    protected $table = 'travel_companies';
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

    public function trips()
    {
        return $this->hasMany(TravelTrip::class, 'travel_company_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
