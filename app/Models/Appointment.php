<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Appointment extends Model
{
    use HasFactory;

    public $fillable = [
        'client_id',
        'barber_id',
        'service_id',
        'scheduled_at',
    ];

    public function users() {
        $this->belongsToMany(User::class);
    }
}
