<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Notice
 * @package App\Models
 * @version April 15, 2025, 5:14 am UTC
 *
 * @property string $title
 * @property string $notice
 */
class Notice extends Model
{

    public $table = 'notices';
    



    public $fillable = [
        'title',
        'notice'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'notice' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'Required',
        'notice' => 'Required'
    ];

    
}
