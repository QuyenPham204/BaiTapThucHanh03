<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    
    class Movie extends Model
    {
        use HasFactory;
    
        protected $fillable = ['title', 'director', 'release_date', 'duration', 'cinema_id'];
    
        // Một phim thuộc về một rạp chiếu
        public function cinema()
        {
            return $this->belongsTo(Cinema::class, 'cinema_id');
        }
    }
    