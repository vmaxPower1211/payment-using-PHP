<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $primaryKey = 'iso';

    protected $fillable = [
        'iso',
    ];
}
