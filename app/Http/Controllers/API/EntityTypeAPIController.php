<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateEntityTypeAPIRequest;
use App\Http\Requests\API\UpdateEntityTypeAPIRequest;
use App\Models\EntityType;
use App\Repositories\EntityTypeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class EntityTypeController
 * @package App\Http\Controllers\API
 */

class EntityTypeAPIController extends AppBaseController
{
    /** @var  EntityTypeRepository */
    private $entityTypeRepository;

    public function __construct(EntityTypeRepository $entityTypeRepo)
    {
        $this->entityTypeRepository = $entityTypeRepo;
    }

    /**
     * Display a listing of the EntityType.
     * GET|HEAD /entityTypes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $entityTypes = $this->entityTypeRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($entityTypes->toArray(), 'Entity Types retrieved successfully');
    }

    /**
     * Store a newly created EntityType in storage.
     * POST /entityTypes
     *
     * @param CreateEntityTypeAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateEntityTypeAPIRequest $request)
    {
        $input = $request->all();

        $entityType = $this->entityTypeRepository->create($input);

        return $this->sendResponse($entityType->toArray(), 'Entity Type saved successfully');
    }

    /**
     * Display the specified EntityType.
     * GET|HEAD /entityTypes/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var EntityType $entityType */
        $entityType = $this->entityTypeRepository->find($id);

        if (empty($entityType)) {
            return $this->sendError('Entity Type not found');
        }

        return $this->sendResponse($entityType->toArray(), 'Entity Type retrieved successfully');
    }

    /**
     * Update the specified EntityType in storage.
     * PUT/PATCH /entityTypes/{id}
     *
     * @param int $id
     * @param UpdateEntityTypeAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEntityTypeAPIRequest $request)
    {
        $input = $request->all();

        /** @var EntityType $entityType */
        $entityType = $this->entityTypeRepository->find($id);

        if (empty($entityType)) {
            return $this->sendError('Entity Type not found');
        }

        $entityType = $this->entityTypeRepository->update($input, $id);

        return $this->sendResponse($entityType->toArray(), 'EntityType updated successfully');
    }

    /**
     * Remove the specified EntityType from storage.
     * DELETE /entityTypes/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var EntityType $entityType */
        $entityType = $this->entityTypeRepository->find($id);

        if (empty($entityType)) {
            return $this->sendError('Entity Type not found');
        }

        $entityType->delete();

        return $this->sendSuccess('Entity Type deleted successfully');
    }
}
