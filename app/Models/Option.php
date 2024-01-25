<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;
    protected $table = 'options';
    protected $guarded = ['id'];

    const OPTION_STOCK = 'stock';
    const OPTION_PRO = 'production';
    const OPTION_ACO = 'acopio';
    const OPTION_PC = 'priceclosing';
    const OPTION_HSS = 'hss';
    const OPTION_HIS = 'his';
    const OPTION_ACS = 'acs';
    const OPTION_ARS = 'ars';
    const OPTION_CS = 'cs';
    const OPTION_EXP = 'exp';

    protected $fillable = [
        'name',
        'route',
        'short_name',
    ];

    public function isStock()
    {
        return $this->attributes['short_name'] == self::OPTION_STOCK ? true : false;
    }

    public function isProduction()
    {
        return $this->attributes['short_name'] == self::OPTION_PRO ? true : false;
    }

    public function isAcopio()
    {
        return $this->attributes['short_name'] == self::OPTION_ACO ? true : false;
    }

    public function isPriceClosing()
    {
        return $this->attributes['short_name'] == self::OPTION_PC ? true : false;
    }

    public function isHss()
    {
        return $this->attributes['short_name'] == self::OPTION_HSS ? true : false;
    }

    public function isHis()
    {
        return $this->attributes['short_name'] == self::OPTION_HIS ? true : false;
    }

    public function isAcs()
    {
        return $this->attributes['short_name'] == self::OPTION_ACS ? true : false;
    }

    public function isArs()
    {
        return $this->attributes['short_name'] == self::OPTION_ARS ? true : false;
    }

    public function isCs()
    {
        return $this->attributes['short_name'] == self::OPTION_CS ? true : false;
    }

    public function isExpeller()
    {
        return $this->attributes['short_name'] == self::OPTION_EXP ? true : false;
    }
}
