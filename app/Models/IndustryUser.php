<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndustryUser extends Model
{
    use HasFactory;
    protected $table = 'industry_users';
    protected $guarded = ['id'];

    protected $fillable = [
        'user_id',
        'industry_id'
    ];

    protected $hidden = [
        'updated_at','created_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function industry()
    {
        return $this->belongsTo(Industry::class, 'industry_id', 'id');
    }
}
