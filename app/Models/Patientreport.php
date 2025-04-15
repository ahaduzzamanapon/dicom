<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Patientreport
 * @package App\Models
 * @version April 15, 2025, 5:36 am UTC
 *
 * @property string $patientId
 * @property string $patientName
 * @property string $patientAge
 * @property string $patientSex
 * @property string $imageCategory
 * @property string $refBy
 * @property string $patientHistory
 * @property string $image
 * @property string $dicomFile
 * @property string $doctor
 * @property string $startTime
 * @property string $endTime
 * @property string $type
 * @property string $typingStatus
 * @property string $status
 */
class Patientreport extends Model
{

    public $table = 'patientreports';
    



    public $fillable = [
        'patientId',
        'patientName',
        'patientAge',
        'patientSex',
        'imageCategory',
        'refBy',
        'patientHistory',
        'image',
        'dicomFile',
        'doctor',
        'startTime',
        'endTime',
        'type',
        'typingStatus',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'patientId' => 'string',
        'patientName' => 'string',
        'patientAge' => 'string',
        'patientSex' => 'string',
        'imageCategory' => 'string',
        'refBy' => 'string',
        'patientHistory' => 'string',
        'image' => 'string',
        'dicomFile' => 'string',
        'doctor' => 'string',
        'startTime' => 'datetime',
        'endTime' => 'datetime',
        'type' => 'string',
        'typingStatus' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patientId' => 'required',
        'patientName' => 'required',
        'patientAge' => 'required',
        'patientSex' => 'required',
        'imageCategory' => 'required',
        'refBy' => 'required',
        'doctor' => 'required'
    ];

    
}
