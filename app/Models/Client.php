<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model {
    use HasFactory;

    protected $fillable = [
        'forename',
        'name',
        'phone',
    ];
    public $table = 'clients';

    public $timestamps = false;
}
