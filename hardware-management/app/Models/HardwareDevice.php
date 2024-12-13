<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
class HardwareDevice extends Model
{
    use HasFactory;

    protected $fillable = ['device_name', 'type', 'status', 'center_id'];

    // Một thiết bị thuộc về một trung tâm
    public function itCenter()
    {
        return $this->belongsTo(ItCenter::class, 'center_id');
    }
}