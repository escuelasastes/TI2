<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Carrera
 *
 * @property $id
 * @property $carrera
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Carrera extends Model
{
    
    static $rules = [
		'carrera' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['carrera'];



}
