<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sesione
 *
 * @property $id
 * @property $sesiones
 * @property $claseTeo
 * @property $clasePr
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sesione extends Model
{
    
    static $rules = [
		'sesiones' => 'required',
		'claseTeo' => 'required',
		'clasePr' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sesiones','claseTeo','clasePr'];



}
