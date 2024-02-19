<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guild extends Model
{
    use HasFactory;

    protected $table = 'guilds';
    protected $guarded = ['id'];

    protected $fillable = [
        'name'
    ];

    protected $hidden = [
        'updated_at','created_at'
    ];
}
