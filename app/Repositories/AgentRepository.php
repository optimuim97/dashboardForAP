<?php

namespace App\Repositories;

use App\Models\Agent;
use App\Repositories\BaseRepository;

/**
 * Class AgentRepository
 * @package App\Repositories
 * @version September 25, 2021, 3:54 pm UTC
*/

class AgentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'phone',
        'password',
        'photo'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Agent::class;
    }
}
