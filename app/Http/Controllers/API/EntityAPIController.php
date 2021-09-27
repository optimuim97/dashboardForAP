<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateEntityAPIRequest;
use App\Http\Requests\API\UpdateEntityAPIRequest;
use App\Models\Entity;
use App\Repositories\EntityRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class EntityController
 * @package App\Http\Controllers\API
 */

class EntityAPIController extends AppBaseController
{
    /** @var  EntityRepository */
    private $entityRepository;

    public function __construct(EntityRepository $entityRepo)
    {
        $this->entityRepository = $entityRepo;
    }

    /**
     * Display a listing of the Entity.
     * GET|HEAD /entities
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $entities = $this->entityRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($entities->toArray(), 'Entities retrieved successfully');
    }

    /**
     * Store a newly created Entity in storage.
     * POST /entities
     *
     * @param CreateEntityAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateEntityAPIRequest $request)
    {
        $input = $request->all();

        $entity = $this->entityRepository->create($input);

        return $this->sendResponse($entity->toArray(), 'Entity saved successfully');
    }

    /**
     * Display the specified Entity.
     * GET|HEAD /entities/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Entity $entity */
        $entity = $this->entityRepository->find($id);

        if (empty($entity)) {
            return $this->sendError('Entity not found');
        }

        return $this->sendResponse($entity->toArray(), 'Entity retrieved successfully');
    }

    /**
     * Update the specified Entity in storage.
     * PUT/PATCH /entities/{id}
     *
     * @param int $id
     * @param UpdateEntityAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEntityAPIRequest $request)
    {
        $input = $request->all();

        /** @var Entity $entity */
        $entity = $this->entityRepository->find($id);

        if (empty($entity)) {
            return $this->sendError('Entity not found');
        }

        $entity = $this->entityRepository->update($input, $id);

        return $this->sendResponse($entity->toArray(), 'Entity updated successfully');
    }

    /**
     * Remove the specified Entity from storage.
     * DELETE /entities/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Entity $entity */
        $entity = $this->entityRepository->find($id);

        if (empty($entity)) {
            return $this->sendError('Entity not found');
        }

        $entity->delete();

        return $this->sendSuccess('Entity deleted successfully');
    }
}
