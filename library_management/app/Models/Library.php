<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
class Library extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'contact_number'];

    // Một thư viện có nhiều sách
    public function books()
    {
        return $this->hasMany(Book::class, 'library_id');
    }
}