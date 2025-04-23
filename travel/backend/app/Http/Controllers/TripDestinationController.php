<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\BaseController;
use App\Http\Requests\TripDestinationRequest;
use App\Http\Resources\TripDestinationResource;
use App\Repositories\TripDestination\TripDestinationRepositoryInterface;
use Illuminate\Http\Request;

class TripDestinationController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    private $tripDestinationRepository;

    public function __construct(TripDestinationRepositoryInterface $tripDestinationRepository)
    {
        $this->tripDestinationRepository = $tripDestinationRepository;
    }

    public function index()
    {
        $destinations = $this->tripDestinationRepository->index();
        $data = TripDestinationResource::collection($destinations);
        return $this->success($data, "tripDestinations retrieved successfully", 200);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TripDestinationRequest $request)
    {
        $validatedData = $request->validated();
        $data = $this->tripDestinationRepository->store($validatedData);
        return $this->success($data, "tripDestinations created successfully", 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getTripDestinations(string $tripId) {
        $destinations = $this->tripDestinationRepository->getDestinationsOfTrip($tripId);
        return $this->success($destinations, "Destinations of a trip retrieved successfully", 200);
    }
}
