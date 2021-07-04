<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materia
 *
 * @property $id
 * @property $nom
 * @property $claveMat
 * @property $semestres_id
 * @property $carreras_id
 * @property $grupos_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Carrera $carrera
 * @property Grupo $grupo
 * @property Semestre $semestre
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Materia extends Model
{
    
    static $rules = [
		'nom' => 'required',
		'claveMat' => 'required',
		'semestres_id' => 'required',
		'carreras_id' => 'required',
		'grupos_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom','claveMat','semestres_id','carreras_id','grupos_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function carrera()
    {
        return $this->hasOne('App\Models\Carrera', 'id', 'carreras_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grupo()
    {
        return $this->hasOne('App\Models\Grupo', 'id', 'grupos_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function semestre()
    {
        return $this->hasOne('App\Models\Semestre', 'id', 'semestres_id');
    }
    

}
