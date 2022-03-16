<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class work extends Model
{
    use HasFactory;

    protected $fillable = [
        'fk_type_of_work',
        'fk_mechanic',
        'fk_vehicle',
        'fk_client',
        'cost',
        'date_received',
        'date_sended',
        'issues'
    ];
}
