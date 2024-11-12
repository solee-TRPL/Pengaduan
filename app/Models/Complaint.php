<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Complaint extends Model
{
    // php artisan make:model Complaint
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'status',// pending, proses, selesai
        'image',
        'guest_name',
        'guest_telp',
        'guest_email',
        'user_id'
    ];

    # cara pertama untuk menampilkan badge dengan enum status (penggunaan cek di file semua-pengaduan.blade.php)
    function getStatusBadgeAttribute()  {
        return match ($this->status) {
             'pending' => '<span class="badge" style="background-color: #ff7976;">PENDING</span>',
             'selesai'=> '<span class="badge" style="background-color: #5ddab4;">SELESAI</span>',
             default =>  '<span class="badge" style="background-color: #57caeb;">'. strtoupper($this->status) .'</span>'
        };
    }

    public function complaint(){
        return $this->hasMany(ComplaintResponse::class);
    }

    function user() {
        return $this->belongsTo(User::class);
    }

    protected function imageUpload(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => url('storage/complaints_pengguna/' . $image),
        );
    } 

    
}