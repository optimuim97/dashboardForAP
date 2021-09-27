<?php

namespace App\Repositories;

use App\Models\Entity;
use App\Repositories\BaseRepository;

/**
 * Class EntityRepository
 * @package App\Repositories
 * @version September 26, 2021, 11:25 pm UTC
*/

class EntityRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'entity_type_id',
        'logo_url'
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
        return Entity::class;
    }
}
