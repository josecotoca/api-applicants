<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;
    protected $table = 'periods';
    protected $guarded = ['id'];

    const STATUS_ACTIVE = 'vigente';
    const STATUS_FINISHED = 'finalizado';
    const STATUS_PENDING = 'pendiente';

    //year --> 2023,2024 ,..
    //month -> (1,2,3,4,5,6,7,8,9,10,11,12)
    //biweekly --> (1,2)
    protected $fillable = [
        'name',
        'year',
        'month',
        'biweekly',
        'date_start',
        'date_end',//completado hasta aqui , todos verdes verde
        'date_limit',//retraso, una almenos retraso naranja
        'status_description',
        'status'
    ];
//completado verde, retraso naranja,observado azul,pendiente -->> rojo  blanco es por que todavia pueden subir
    protected $hidden = [
        'updated_at','created_at'
    ];

}
