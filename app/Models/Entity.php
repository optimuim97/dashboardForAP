<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Entity
 * @package App\Models
 * @version September 26, 2021, 11:25 pm UTC
 *
 * @property string $name
 * @property string $description
 * @property integer $entity_type_id
 * @property string $logo_url
 */
class Entity extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'entities';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'entity_type_id',
        'logo_url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'entity_type_id' => 'integer',
        'logo_url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
