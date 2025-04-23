<?php
namespace App\Repositories\TripDestination;

use App\Models\TripDestination;

class TripDestinationRepository implements TripDestinationRepositoryInterface {
    public function index() {
        return TripDestination::all();
    }

    public function store($validatedData) {
        return TripDestination::create($validatedData);
    }

    public function getDestinationsOfTrip($tripId) {
        return TripDestination::where('trip_id', $tripId)->get();
    }
}
