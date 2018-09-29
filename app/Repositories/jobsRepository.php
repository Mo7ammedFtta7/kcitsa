<?php

namespace App\Repositories;

use App\Models\jobs;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class jobsRepository
 * @package App\Repositories
 * @version September 25, 2018, 8:39 pm UTC
 *
 * @method jobs findWithoutFail($id, $columns = ['*'])
 * @method jobs find($id, $columns = ['*'])
 * @method jobs first($columns = ['*'])
*/
class jobsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jopname',
        'slots',
        'duration',
        'price',
        'client',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return jobs::class;
    }
}
