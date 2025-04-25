<?php

namespace App\Repositories\Trip;

use App\Models\Trip;
use App\Repositories\Trip\TripRepositoryInterface;

class TripRepository implements TripRepositoryInterface{
    public function index() {
        return Trip::all();
    }

    public function show($id) {
        return Trip::find($id);
    }

    public function store($validatedData) {
        return Trip::create($validatedData);
    }

    public function getTripByUserId($id) {
        return Trip::where("user_id", $id)->get();
    }
}
