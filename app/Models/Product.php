<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Product
 * @package App\Models
 * @version September 26, 2021, 11:37 pm UTC
 *
 * @property string $name
 * @property string $sku
 * @property string $image_url
 * @property string $price
 * @property string $display_price
 * @property string $pourcentage
 */
class Product extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'sku',
        'image_url',
        'price',
        'display_price',
        'pourcentage'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'sku' => 'string',
        'image_url' => 'string',
        'price' => 'string',
        'display_price' => 'string',
        'pourcentage' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'nullable|string|max:255',
        'sku' => 'nullable|string|max:255',
        'image_url' => 'nullable|string|max:255',
        'price' => 'nullable|string|max:255',
        'display_price' => 'nullable|string|max:255',
        'pourcentage' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
