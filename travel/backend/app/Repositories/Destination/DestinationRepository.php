<?php
namespace App\Repositories\Destination;

use App\Models\Destination;

class DestinationRepository implements DestinationRepositoryInterface {
    public function index() {
        return Destination::all();
    }

    public function show($id) {
        return Destination::find($id);
    }

    public function store($validatedData) {
        return Destination::create($validatedData);
    }

    public function update($validatedData, $id) {
        $destination = Destination::find($id);
        return $destination->update($validatedData);
    }

    public function delete($id) {
        $destination = Destination::find($id);
        return $destination->delete($id);
    }
}
