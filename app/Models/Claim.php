<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Claim extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        'user_id',
        'report_id',
        'deskripsi_klaim',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function report()
    {
        return $this->belongsTo(Report::class);
    }
}
