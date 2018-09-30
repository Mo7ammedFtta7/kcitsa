<?php

namespace App\Repositories;

use App\Models\myjobs;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class myjobsRepository
 * @package App\Repositories
 * @version September 30, 2018, 10:53 am UTC
 *
 * @method myjobs findWithoutFail($id, $columns = ['*'])
 * @method myjobs find($id, $columns = ['*'])
 * @method myjobs first($columns = ['*'])
*/
class myjobsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user',
        'job',
        'vehicle',
        'start_date',
        'end_date',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return myjobs::class;
    }
}
