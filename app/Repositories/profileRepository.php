<?php

namespace App\Repositories;

use App\Models\profile;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class profileRepository
 * @package App\Repositories
 * @version September 28, 2018, 4:13 pm UTC
 *
 * @method profile findWithoutFail($id, $columns = ['*'])
 * @method profile find($id, $columns = ['*'])
 * @method profile first($columns = ['*'])
*/
class profileRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'img',
        'email_verified_at',
        'password',
        'remember_token',
        'identity_no',
        'gender',
        'bank_name',
        'account_no',
        'mobile_no',
        'home_address',
        'work_address'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return profile::class;
    }
}
