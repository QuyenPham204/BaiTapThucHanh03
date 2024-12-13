<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;

    protected $fillable = ['brand', 'model', 'specifications', 'rental_status', 'renter_id'];

    // Một laptop thuộc về một người thuê
    public function renter()
    {
        return $this->belongsTo(Renter::class);
    }
}