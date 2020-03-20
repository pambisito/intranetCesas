<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colegio_Curso extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'DNI';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'IDCurso', 'primerBimestre', 'segundoBimestre', 'tercerBimestre', 'cuartoBimestre', 
    ];
}
