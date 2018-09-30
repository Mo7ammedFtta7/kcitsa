<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class vehicles
 * @package App\Models
 * @version September 29, 2018, 11:03 pm UTC
 *
 * @property \App\Models\Status status
 * @property \App\Models\User user
 * @property integer user
 * @property string img
 * @property string license_no
 * @property string model
 * @property string color
 * @property string type
 * @property boolean rented
 * @property integer vehicle_make
 * @property integer status
 */
class vehicles extends Model
{
    use SoftDeletes;

    public $table = 'vehicles';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user',
        'img',
        'license_no',
        'model',
        'color',
        'type',
        'rented',
        'vehicle_make',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user' => 'integer',
        'img' => 'string',
        'license_no' => 'string',
        'model' => 'string',
        'color' => 'string',
        'type' => 'string',
        'rented' => 'boolean',
        'vehicle_make' => 'string',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'img'=>'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function statuses()
    {
        return $this->belongsTo(\App\Models\statuses::class,'status','id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\users::class,'user','id');
    }
}
