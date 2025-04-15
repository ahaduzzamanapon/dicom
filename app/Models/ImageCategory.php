<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ImageCategory
 * @package App\Models
 * @version April 15, 2025, 5:25 am UTC
 *
 * @property string $title
 * @property integer $amount
 * @property string $description
 */
class ImageCategory extends Model
{

    public $table = 'imagecategorys';
    



    public $fillable = [
        'title',
        'amount',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'amount' => 'integer',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'amount' => 'required'
    ];

    
}
