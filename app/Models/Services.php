<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Services extends Model {
    use HasFactory;

    public $table = 'services';

    protected $fillable = [
        'name',
        'duration',
        'price'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
