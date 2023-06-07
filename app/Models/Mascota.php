<?php

namespace App\Models;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
/**
 * Class Mascota
 *
 * @property $id
 * @property $nombre
 * @property $raza
 * @property $edad
 * @property $cliente_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mascota extends Model
{
    use HasFactory;

    static $rules = [
		'nombre' => 'required',
		'raza' => 'required',
		'edad' => 'required',
		'cliente_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','raza','edad','cliente_id'];

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente', 'cliente_id', 'id');
    }

}
