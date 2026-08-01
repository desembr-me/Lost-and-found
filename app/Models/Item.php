<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        'nama_barang',
        'warna',
        'ciri_khusus',
        'foto',
        'type',
    ];
    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)
                    ->withPivot('role')
                    ->withTimestamps();
    }
}
