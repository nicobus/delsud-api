<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class contact extends Model
{
    use HasFactory, Softdeletes;

    protected $fillable = [
        'name',
        'phone',
        'email',
    ];
}
