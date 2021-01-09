<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Postal extends Model
{
    use HasFactory;

    protected $collection = 'postals';

    protected $fillable = [
        'postal',
        'area',
        'district',
        'isDNR',
    ];
}
