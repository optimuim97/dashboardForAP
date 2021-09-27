<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEntityRequest;
use App\Http\Requests\UpdateEntityRequest;
use App\Repositories\EntityRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EntityController extends AppBaseController
{
    /** @var  EntityRepository */
    private $entityRepository;

    public function __construct(EntityRepository $entityRepo)
    {
        $this->entityRepository = $entityRepo;
    }

    /**
     * Display a listing of the Entity.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $entities = $this->entityRepository->all();

        return view('entities.index')
            ->with('entities', $entities);
    }

    /**
     * Show the form for creating a new Entity.
     *
     * @return Response
     */
    public function create()
    {
        return view('entities.create');
    }

    /**
     * Store a newly created Entity in storage.
     *
     * @param CreateEntityRequest $request
     *
     * @return Response
     */
    public function store(CreateEntityRequest $request)
    {
        $input = $request->all();

        $entity = $this->entityRepository->create($input);

        Flash::success('Entity saved successfully.');

        return redirect(route('entities.index'));
    }

    /**
     * Display the specified Entity.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $entity = $this->entityRepository->find($id);

        if (empty($entity)) {
            Flash::error('Entity not found');

            return redirect(route('entities.index'));
        }

        return view('entities.show')->with('entity', $entity);
    }

    /**
     * Show the form for editing the specified Entity.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $entity = $this->entityRepository->find($id);

        if (empty($entity)) {
            Flash::error('Entity not found');

            return redirect(route('entities.index'));
        }

        return view('entities.edit')->with('entity', $entity);
    }

    /**
     * Update the specified Entity in storage.
     *
     * @param int $id
     * @param UpdateEntityRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEntityRequest $request)
    {
        $entity = $this->entityRepository->find($id);

        if (empty($entity)) {
            Flash::error('Entity not found');

            return redirect(route('entities.index'));
        }

        $entity = $this->entityRepository->update($request->all(), $id);

        Flash::success('Entity updated successfully.');

        return redirect(route('entities.index'));
    }

    /**
     * Remove the specified Entity from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $entity = $this->entityRepository->find($id);

        if (empty($entity)) {
            Flash::error('Entity not found');

            return redirect(route('entities.index'));
        }

        $this->entityRepository->delete($id);

        Flash::success('Entity deleted successfully.');

        return redirect(route('entities.index'));
    }
}
