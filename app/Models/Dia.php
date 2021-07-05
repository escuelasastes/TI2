<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dia
 *
 * @property $id
 * @property $dia
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dia extends Model
{
    
    static $rules = [
		'dia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['dia'];



}
