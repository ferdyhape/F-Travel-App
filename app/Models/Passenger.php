<?php

namespace App\Models;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Passenger extends Model
{
    use HasFactory;

    protected $table = 'passengers';
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

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id', 'id');
    }
}
