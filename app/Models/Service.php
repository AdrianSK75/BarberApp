<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Activity;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_name',
        'description',
        'time',
        'price',
    ];

    protected $guarded = [];

    public function activity() {
           return $this->belongsTo(Activity::class);
    }
}
