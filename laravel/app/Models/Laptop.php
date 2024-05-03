<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'title',
        'price',
        'discount',
        'type',
        'ram',
        'ssd',
        'processor_type',
        'processor_speed',
        'display_size_inch',
        'display_size_sm',
        'display_type',
        'display_resolution',
        'description',

    ];
}
