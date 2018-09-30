<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class myjobs
 * @package App\Models
 * @version September 30, 2018, 10:53 am UTC
 *
 * @property \App\Models\User user
 * @property \App\Models\Job job
 * @property \App\Models\Vehicle vehicle
 * @property \App\Models\Status status
 * @property \Illuminate\Database\Eloquent\Collection vehicles
 * @property integer user
 * @property integer job
 * @property integer vehicle
 * @property date start_date
 * @property date end_date
 * @property integer status
 */
class myjobs extends Model
{
    use SoftDeletes;

    public $table = 'myjobs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user',
        'job',
        'vehicle',
        'start_date',
        'end_date',
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
        'job' => 'integer',
        'vehicle' => 'integer',
        'start_date' => 'date',
        'end_date' => 'date',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\users::class,'user','id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function jobs()
    {
        return $this->belongsTo(\App\Models\jobs::class,'job','id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function vehicles()
    {
        return $this->belongsTo(\App\Models\vehicles::class,'vehicle','id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function statuses()
    {
        return $this->belongsTo(\App\Models\statuses::class,'status','id');
    }
}
