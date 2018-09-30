<?php

namespace App\Repositories;

use App\Models\vehicles;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class vehiclesRepository
 * @package App\Repositories
 * @version September 29, 2018, 11:03 pm UTC
 *
 * @method vehicles findWithoutFail($id, $columns = ['*'])
 * @method vehicles find($id, $columns = ['*'])
 * @method vehicles first($columns = ['*'])
*/
class vehiclesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return vehicles::class;
    }
}
