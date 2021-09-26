<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Agent
 * @package App\Models
 * @version September 25, 2021, 3:54 pm UTC
 *
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $password
 * @property string $photo
 */
class Agent extends Model
{


    public $table = 'agents';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'photo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'password' => 'string',
        'photo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'nullable|string|max:255',
        'email' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:255',
        'password' => 'nullable|string|max:255',
        'photo' => 'nullable|string|max:255'
    ];

    
}
