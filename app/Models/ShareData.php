<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShareData extends Model
{
    use HasFactory , HasUuids;

    protected $fillable = ['data'];

    protected $casts = [
        'data' => 'array',
    ];
}
