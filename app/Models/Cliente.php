<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
/**
 * Class Cliente
 *
 * @property $id
 * @property $fullname
 * @property $address
 * @property $phone
 * @property $phone_alternative
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    use HasFactory;

    static $rules = [
		'fullname' => 'required',
		'address' => 'required',
		'phone' => 'required',
		'phone_alternative' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fullname','address','phone','phone_alternative'];



}
