<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'specie', 
        'tribeId',
        'rarityId',
        'regionId',
        'image',
        'idealPressure',
        'brawl',
        'agility',
        'cunning'
    ];
}
