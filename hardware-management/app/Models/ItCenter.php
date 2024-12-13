<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
class ItCenter extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location', 'contact_email'];

    // Một trung tâm có nhiều thiết bị phần cứng
    public function hardwareDevices()
    {
        return $this->hasMany(HardwareDevice::class, 'center_id');
    }
}
