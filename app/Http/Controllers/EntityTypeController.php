<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEntityTypeRequest;
use App\Http\Requests\UpdateEntityTypeRequest;
use App\Repositories\EntityTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EntityTypeController extends AppBaseController
{
    /** @var  EntityTypeRepository */
    private $entityTypeRepository;

    public function __construct(EntityTypeRepository $entityTypeRepo)
    {
        $this->entityTypeRepository = $entityTypeRepo;
    }

    /**
     * Display a listing of the EntityType.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $entityTypes = $this->entityTypeRepository->all();

        return view('entity_types.index')
            ->with('entityTypes', $entityTypes);
    }

    /**
     * Show the form for creating a new EntityType.
     *
     * @return Response
     */
    public function create()
    {
        return view('entity_types.create');
    }

    /**
     * Store a newly created EntityType in storage.
     *
     * @param CreateEntityTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateEntityTypeRequest $request)
    {
        $input = $request->all();

        $entityType = $this->entityTypeRepository->create($input);

        Flash::success('Entity Type saved successfully.');

        return redirect(route('entityTypes.index'));
    }

    /**
     * Display the specified EntityType.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $entityType = $this->entityTypeRepository->find($id);

        if (empty($entityType)) {
            Flash::error('Entity Type not found');

            return redirect(route('entityTypes.index'));
        }

        return view('entity_types.show')->with('entityType', $entityType);
    }

    /**
     * Show the form for editing the specified EntityType.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $entityType = $this->entityTypeRepository->find($id);

        if (empty($entityType)) {
            Flash::error('Entity Type not found');

            return redirect(route('entityTypes.index'));
        }

        return view('entity_types.edit')->with('entityType', $entityType);
    }

    /**
     * Update the specified EntityType in storage.
     *
     * @param int $id
     * @param UpdateEntityTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEntityTypeRequest $request)
    {
        $entityType = $this->entityTypeRepository->find($id);

        if (empty($entityType)) {
            Flash::error('Entity Type not found');

            return redirect(route('entityTypes.index'));
        }

        $entityType = $this->entityTypeRepository->update($request->all(), $id);

        Flash::success('Entity Type updated successfully.');

        return redirect(route('entityTypes.index'));
    }

    /**
     * Remove the specified EntityType from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $entityType = $this->entityTypeRepository->find($id);

        if (empty($entityType)) {
            Flash::error('Entity Type not found');

            return redirect(route('entityTypes.index'));
        }

        $this->entityTypeRepository->delete($id);

        Flash::success('Entity Type deleted successfully.');

        return redirect(route('entityTypes.index'));
    }
}
