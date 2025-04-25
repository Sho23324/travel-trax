<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\DestinationStoreRequest;
use App\Http\Requests\DestinationUpdateRequest;
use App\Http\Resources\DestinationResource;
use App\Repositories\Destination\DestinationRepositoryInterface;
use Exception;
use Illuminate\Http\Request;

class DestinationController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    private $destinationRepository;

    public function __construct(DestinationRepositoryInterface $destinationRepository)
    {
        $this->destinationRepository = $destinationRepository;
    }

    public function index()
    {
        $destinations = $this->destinationRepository->index();
        $data = DestinationResource::collection($destinations);
        return $this->success($data, "Destinations retrieved successfully", 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DestinationStoreRequest $request)
    {
        $validatedData = $request->validated();
        $imageName = time(). '.' . $request->image->extension();
        $request->image->move(public_path('destinationImage'), $imageName);
        $validatedData = array_merge($validatedData, ['image'=>$imageName]);
        $validatedData = $request->validated();
        $createdDestination = $this->destinationRepository->store($validatedData);

        return $this->success($createdDestination, "Destinations created successfully", 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $destination = $this->destinationRepository->show($id);
            $data = new DestinationResource($destination);
            return $this->success($data, "Destinations retrieved successfully", 200);
        }catch(Exception $e) {
            return $this->error($e->getMessage() ? $e->getMessage() : "Something Went Wrong", 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DestinationUpdateRequest $request, string $id)
    {
        $validatedData = $request->validated();
        $updatedDestination = $this->destinationRepository->update($validatedData, $id);
        return $this->success($updatedDestination, "Destinations updated successfully", 204);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->destinationRepository->delete($id);
        return $this->success(null, "Destinations retrieved successfully", 204);
    }
}
