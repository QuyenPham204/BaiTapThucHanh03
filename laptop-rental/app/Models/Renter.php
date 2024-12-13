<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Renter extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone_number', 'email'];

    // Một người thuê có thể thuê nhiều laptop
    public function laptops()
    {
        return $this->hasMany(Laptop::class);
    }
}