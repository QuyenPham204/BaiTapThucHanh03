<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'publication_year', 'genre', 'library_id'];

    // Một cuốn sách thuộc về một thư viện
    public function library()
    {
        return $this->belongsTo(Library::class, 'library_id');
    }
}