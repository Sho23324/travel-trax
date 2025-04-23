<?php
namespace App\Repositories\TripDestination;

interface TripDestinationRepositoryInterface {
    public function index();
    public function store($validatedData);
    public function getDestinationsOfTrip($tripId);
}
