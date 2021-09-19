<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Employee;
use App\Models\Client;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'forename',
        'phone',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'phone_verified_at' => 'datetime',
    ];

    public function employee() {
        return $this->hasMany(Employee::class);
    }

    public function client() {
        return $this->hasMany(Client::class);
    }

}
